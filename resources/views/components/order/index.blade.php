@extends('layout.welcome')

@section('title', 'Orders')
@section('content')
    @if (session('status'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: "{{ session('status') }}"
            });
        </script>
    @endif
    <div class="col-md-12 mt-5">
        <div class="white_shd full {{-- margin_bottom_30 --}}">
            <div class="full graph_head">
                <div class="heading1 margin_0">
                    <h2>Order</h2>
                    <a class="btn btn-outline-primary rd-2" href="{{ route('order-create') }}">Tambah Order</a>
                </div>
            </div>
            <div class="table_section padding_infor_info">
                <div class="table-responsive-sm">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Product</th>
                                <th>QTY</th>
                                <th>Total Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        @foreach ($order as $key => $item)
                            <tbody>
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->product->name }}</td>
                                    <td>{{ $item->qty }}</td>
                                    <td>Rp. {{ number_format($item->total_price) }}</td>
                                    <td>
                                        <form action="{{ route('order-delete', $item->id) }}" method="POST"
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
