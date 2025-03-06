@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card-body">
            <h2>Album Yang Sudah Di Buat:</h2>
        </div>
        <div class="mt-3 mb-3">
                <a class="btn btn-info" href="{{route('albums.create')}}">Tambah Album</a>
            </div>
            <div class="card">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Album:</th>
                        <th>Action:</th>
                    </tr>
                </thead>
                @foreach($albums as $album)
                <tbody>
                    <tr>
                        <td>{{$album->name}}</td>
                        <td>
                        <form action="{{ route('albums.destroy', $album->id)}}" method="POST">
                                            <a href="{{ route('albums.edit', $album->id)}}" class="btn btn-warning">Edit</a>
                                            <a href="{{ route('albums.show', $album->id)}}" class="btn btn-primary">Show</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
                
            </table>
            </div>
            
    </div>
</div>
@endsection


