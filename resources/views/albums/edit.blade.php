@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card-body">
            <h2>Edit Nama Album:</h2>
        </div>
        <form action="{{route('albums.update', $albums->id)}}" method="post">
@csrf
@method('PUT')

<div class="card">
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="form-group">
            <p></p>
            <input type="text" name="name" value="{{$albums->name}}" class="form-control" placeholder="Masukan Nama Album">
            <p></p>
           
            <a href="{{route('albums')}}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-warning">Edit</button>
            <p></p>
        </div>
    </div>
</div>
</div>

        </form>
    </div>
</div>
@endsection


