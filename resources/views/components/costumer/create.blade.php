@extends('layout.welcome')
@section('title', 'Tambah Produk')
@section('content')
    <div class="inner-page-login">
        <div class="login_form">
            <form action="{{ route('costumer-store') }}" method="POST">
                @csrf
                @method('POST')
                <fieldset>
                    <div class="field">
                        <label for="name" class="label_field">Nama</label>
                        <input type="text" name="name" id="name" />
                    </div>
                    <div class="field">
                        <label for="phone" class="label_field">Telepon</label>
                        <input type="number" name="phone" id="phone" />
                    </div>
                    <div class="field">
                        <label for="email" class="label_field">Email</label>
                        <input type="email" name="email" id="email" />
                    </div>
                    <div class="field margin_0">
                        <button class="main_bt">Tambah Costumer</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
