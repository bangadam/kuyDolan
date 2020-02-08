@extends('client.user.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Berbagi artikel dan tips kuy <a href="{{route('artikel.create')}}" class="btn btn-primary btn-sm float-right">Tambah artikel dan tips baru</a></h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Judul</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($artikel as $key => $data)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$data->title}}</td>
                                        <td>
                                            <a href="{{route('artikel.edit', $data->id)}}" class="btn btn-sm btn-warning">Ubah</a>
                                            <form action="{{route('artikel.destroy', $data->id)}}" method="POST">
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
                            {{$artikel->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
