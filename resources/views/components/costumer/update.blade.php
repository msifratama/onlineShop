@extends('layout.welcome')
@section('title', 'Update Costumer')
@section('content')
    <div class="inner-page-login">
        <div class="login_form">
            <form action="{{ route('costumer-update', $costumer->id) }}" method="POST">
                @csrf
                @method('PUT')
                <fieldset>
                    <div class="field">
                        <label for="name" class="label_field">Nama</label>
                        <input type="text" name="name" id="name" value="{{ $costumer->name }}" />
                    </div>
                    <div class="field">
                        <label for="phone" class="label_field">Telepon</label>
                        <input type="number" name="phone" id="phone" value="{{ $costumer->phone }}" />
                    </div>
                    <div class="field">
                        <label for="email" class="label_field">Email</label>
                        <input type="email" name="email" id="email" value="{{ $costumer->email }}" />
                    </div>
                    <div class="field margin_0">
                        <button class="main_bt">Update Data</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
