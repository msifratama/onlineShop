@extends('layout.welcome')

@section('title', 'Costumers')
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
                    <h2>Costumer</h2>
                    <a class="btn btn-outline-primary rd-2" href="{{ route('costumer-create') }}">Tambah Costumer</a>
                </div>
            </div>
            <div class="table_section padding_infor_info">
                <div class="table-responsive-sm">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Telepon</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        @foreach ($costumer as $key => $item)
                            <tbody>
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        <a href="{{ route('costumer-edit', $item->id) }}" class="btn btn-info">Update</a>
                                        <form action="{{ route('costumer-delete', $item->id) }}" method="POST"
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
