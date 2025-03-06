
@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="card">
        <div class="card-header">
            <h2>Detail Foto:</h2>
        </div>
        <div class="card-body">
            <img src="{{asset('storage/'. $photos->images)}}" style="max-height: 50vh;" alt="">
            <h4>{{$photos->name}}</h4>
            <p><strong>Album:</strong> {{$photos->album->name}}</p>
            <p><strong>Deskripsi:</strong> {{$photos->description}}</p>
            <p></p>
        </div>
    </div>
    <div class="mt-3 mb-3">
        <a href="{{route('photos')}}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection

