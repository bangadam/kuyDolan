@extends('client.user.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Berbagi Wisata kuy <a href="{{route('wisata.create')}}" class="btn btn-primary btn-sm float-right">Tambah wisata baru</a></h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama wisata</td>
                                    <td>Kategori wisata</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($places as $key => $data)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->category->name}}</td>
                                        <td>
                                            <a href="{{route('wisata.edit', $data->id)}}" class="btn btn-sm btn-warning">Ubah</a>
                                            <form action="{{route('wisata.destroy', $data->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-xs">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            {{$places->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
