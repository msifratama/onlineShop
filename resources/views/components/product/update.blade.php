@extends('layout.welcome')
@section('title', 'Update Produk')
@section('content')
    <div class="inner-page-login">
        <div class="login_form">
            <form action="{{ route('product-update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <fieldset>
                    <div class="field">
                        <label for="product_code" class="label_field">Kode Produk</label>
                        <input type="text" name="product_code" value="{{ $product->product_code }}" />
                    </div>
                    <div class="field">
                        <label for="name" class="label_field">Nama Produk</label>
                        <input type="text" name="name" id="name" value="{{ $product->name }}" />
                    </div>
                    <div class="field">
                        <label for="description" class="label_field">Deskripsi</label>
                        <input type="text" name="description" id="description" value="{{ $product->description }}" />
                    </div>
                    <div class="field">
                        <label for="price" class="label_field">Harga</label>
                        <input type="number" name="price" id="price" value="{{ $product->price }}" />
                    </div>
                    <div class="field">
                        <label for="qty" class="label_field">QTY</label>
                        <input type="number" name="qty" id="qty" value="{{ $product->qty }}" />
                    </div>
                    <div class="field margin_0">
                        <button class="main_bt">Update Data</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
