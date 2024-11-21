@extends('layout.welcome')

@section('title', 'Reports')
@section('content')
    <div class="col-md-12 mt-5">
        <div class="white_shd full {{-- margin_bottom_30 --}}">
            <div class="full graph_head">
                <div class="heading1 margin_0">
                    <h2>Reports</h2>
                </div>
            </div>
            <div class="table_section padding_infor_info">
                <div class="table-responsive-sm">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        @foreach ($report as $key => $item)
                            <tbody>
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        <a href="{{-- {{ route('update') }} --}}">Update</a>
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
