<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::all();

        return view('components.order.index', compact('order'));
    }

    public function create()
    {
        $product = Product::all();
        return view('components.order.create', compact('product'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required',
            'qty' => 'required|integer|min:1',
        ]);

        $product = Product::find($validated['product_id']);

        if ($product->qty < $validated['qty']) {
            return back()->with('error', 'Stok produk tidak mencukupi!');
        }

        $product->qty -= $validated['qty'];
        $product->save();

        $totalPrice = $product->price * $validated['qty'];

        Order::create([
            'product_id' => $product->id,
            'qty' => $validated['qty'],
            'total_price' => $totalPrice,
        ]);

        return redirect()->route('order-index')->with('status', 'Order berhasil');
    }

    public function delete($id)
    {
        $delete = Order::find($id);

        $delete->delete();

        return redirect()->route('order-index')->with('status', 'Data berhasil dihapus');
    }
}
