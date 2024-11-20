@extends('layout.welcome')

@section('title', 'Orders')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Orders</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <a href="{{-- {{ route('',) }} --}}" type="button" class="btn btn-sm btn-outline-secondary">Tambah Data</a>
                </div>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Costumer</th>
                    <th scope="col">Action</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order as $key => $data)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->status }}</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary btn-sm">Edit</button>
                            <a href="{{ url('delete/costumer', $data->id) }}"
                                class="btn btn-outline-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </main>
@endsection
