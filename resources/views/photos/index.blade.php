
@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card-body">
            <h2>Foto yang telah diunggah:</h2>
            <div class="mt-3 mb-3">
                <a class="btn btn-info" href="{{route('photos.create')}}">
                    Tambah Foto
                </a>
            </div>
            <div class="card">
               
                            <div class="row">
                                @foreach($photos as $photo)
                                    <div class="col-md-3">
                                        <div class="card card-body-border-1">
                                            <img src="{{ asset('storage/' . $photo->images) }}" style="height: 30vh;" alt="" class="img-fluid">
                                            <p></p>
                                    <h5 style="text-align:center">  {{ $photo->name }}
                                      <p></p>
                                        <form action="{{ route('photos.destroy', $photo->id)}}" method="POST">
                                            <a href="{{ route('photos.edit', $photo->id)}}" class="btn btn-warning">Edit</a>
                                            <a href="{{ route('photos.show', $photo->id)}}" class="btn btn-primary">Show</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </h5>
                                        
                                        </div>
                                       
                                    </div>
                                @endforeach
                            </div>
            </div>

        </div>
    </div>
</div>
@endsection
