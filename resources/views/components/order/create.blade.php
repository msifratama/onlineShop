@extends('layout.welcome')
@section('title', 'Tambah Order')
@section('content')
    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: "{{ session('error') }}"
            });
        </script>
    @endif
    <div class="inner-page-login">
        <div class="login_form">
            <form action="{{ route('order-store') }}" method="POST">
                @csrf
                @method('POST')
                <fieldset>
                    <div class="field">
                        <label for="product_id" class="label_field">Kode Produk</label>
                        <select name="product_id" id="product">
                            @foreach ($product as $item)
                                <option value="{{ $item->id }}">{{ $item->name }} (Stok: {{ $item->qty }})</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="field">
                        <label for="qty" class="label_field">Qty</label>
                        <input type="text" name="qty" id="qty" />
                    </div>
                    <div class="field margin_0">
                        <button class="main_bt">Tambah Order</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
