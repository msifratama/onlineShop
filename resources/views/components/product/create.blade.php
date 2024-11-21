@extends('layout.welcome')
@section('title', 'Tambah Produk')
@section('content')
    <div class="inner-page-login">
        <div class="login_form">
            <form action="{{ route('product-store') }}" method="POST">
                @csrf
                @method('POST')
                <fieldset>
                    <div class="field">
                        <label for="product_code" class="label_field">Kode Produk</label>
                        <input type="text" name="product_code" />
                    </div>
                    <div class="field">
                        <label for="name" class="label_field">Nama Produk</label>
                        <input type="text" name="name" id="name" />
                    </div>
                    <div class="field">
                        <label for="description" class="label_field">Deskripsi</label>
                        <input type="text" name="description" id="description" />
                    </div>
                    <div class="field">
                        <label for="price" class="label_field">Harga</label>
                        <input type="number" name="price" id="price" />
                    </div>
                    <div class="field">
                        <label for="qty" class="label_field">QTY</label>
                        <input type="number" name="qty" id="qty" />
                    </div>
                    <div class="field margin_0">
                        <button class="main_bt">Tambah Produk</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
