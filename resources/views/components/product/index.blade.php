@extends('layout.welcome')

@section('title', 'Product')
@section('content')
    <div class="col-md-12 mt-5">
        <div class="white_shd full {{-- margin_bottom_30 --}}">
            <div class="full graph_head">
                <div class="heading1 margin_0">
                    <h2>Produk</h2>
                    <a class="btn btn-outline-primary rd-2" href="{{ route('product-create') }}">Tambah Produk</a>
                </div>
            </div>
            <div class="table_section padding_infor_info">
                <div class="table-responsive-sm">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Produk</th>
                                <th>Nama Produk</th>
                                <th>Deskripsi</th>
                                <th>Harga Satuan</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        @foreach ($product as $key => $item)
                            <tbody>
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->product_code }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>Rp. {{ number_format($item->price) }}</td>
                                    <td>{{ $item->qty }}</td>
                                    <td>
                                        <a href="{{ route('product-edit', $item->id) }}" class="btn btn-info">Update</a>
                                        <form action="{{ route('product-delete', $item->id) }}" method="POST"
                                            style="display: inline-block" onsubmit="return confirm('Yakin?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
