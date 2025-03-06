@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card-body">
            <h2>Album: {{$albums->name}}</h2>
        </div>
        <div class="card">
        <table class="table table-striped">
    <thead>
        <tr>
            <th>Image:</th>
            <th>Nama:</th>
            <th>Action:</th>
        </tr>
    </thead>
    @foreach($albums->photos as $photo)
    <tbody>
        <tr>
            <td><img src="{{asset('storage/'. $photo->images)}}" width="100px" height="100px" alt=""></td>
            <td>{{$photo->name}}</td>
            <td>
                <form action="{{ route('photos.destroy', $photo->id)}}" method="POST">
                    <a href="{{ route('photos.edit', $photo->id)}}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('photos.show', $photo->id)}}" class="btn btn-primary">Show</a>
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
        <div class="mt-3 mb-3">
            <a href="{{route('albums')}}" class="btn btn-secondary">back</a>
        </div>
    </div>
</div>
@endsection


