@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card-body">
            <h2>Edit Foto:</h2>
            <form action="{{route('photos.update', $photos->id)}}" method="post">
    @csrf
    @method('PUT')
 <p></p>
 <div class="card">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form-group">
                <p></p>
                <input type="text" name="name" id="name" value="{{$photos->name}}" class="form-control" placeholder="Update Nama Foto">
             <p></p>
                <input type="text" name="description" id="description" value="{{$photos->description}}" class="form-control" placeholder="Update Deskripsi Foto">
             <p></p>
             <select name="album_id" id="album_id"  class="form-control">
                @foreach($albums as $album)
                <option value="{{$album->id}}" class="form-control">{{$album->name}}</option>
                @endforeach
            </select>
            <p></p>
            <a href="{{route('photos')}}" class="btn btn-secondary">Kembali</a>
                <button class="btn btn-warning" type="submit">Edit</button>
                <p></p>
            </div>
        </div>
    </div>
 </div>
    
</form>
            
       
    </div>
</div>
@endsection


