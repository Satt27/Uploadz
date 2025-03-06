@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card-body">
            <h2>Buat Foto:</h2>
        </div>
        <form action="{{route('photos.store')}}" method="post" enctype="multipart/form-data">
@csrf
<div class="card">
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="form-group">
            <p></p>
            <input type="file" name="images" class="form-control">
            <p></p>
            <input type="text" name="name" class="form-control" placeholder="Masukan Nama Foto">
            <p></p>
            <input type="text" name="description" class="form-control" placeholder="Masukan Deskripsi Foto">
            <p></p>
            <select name="album_id" id="album_id" class="form-control">
                @foreach($albums as $album)
                <option value="{{$album->id}}" class="form-control">{{$album->name}}</option>
                @endforeach
            </select>
            <p></p>
            <a href="{{route('photos')}}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-info">Tambah</button>
            <p></p>
        </div>
    </div>
</div>
</div>

        </form>
    </div>
</div>
@endsection


