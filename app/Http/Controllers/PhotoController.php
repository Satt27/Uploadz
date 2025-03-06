<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Album;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
public function index(){
    $photos = Photo::all();
    return view('photos.index', compact ('photos'));
}
public function create(){
$albums = Album::all();
    return view('photos.create', compact('albums'));
}

public function store(Request $request){
// dd($request->all());
    $request->validate([
        'images'=>'required|image|mimes:jpg,jpeg,png|max:2048',
        'name'=>'required',
        'description'=>'required',
        'album_id'=>'required|exists:albums,id',
  
    ]);
    if($request->hasFile('images')){
        $path=$request->file('images')->store('photo', 'public');

        Photo::create([
            'images'=>$path,
            'name'=>$request->name,
            'description'=>$request->description,
            'album_id'=>$request->input('album_id'),
         
        ]);
    }
    return redirect()->route('photos');
}
public function edit($id){
    $photos = Photo::findOrFail($id);
    $albums = Album::all();
    return view('photos.edit', compact('photos','albums'));
}
public function update(Request $request, $id){
    // dd($request->all());
    $photos = Photo::findOrFail($id);
    $request->validate([
        'name'=>'required',
        'description'=>'required',
        'album_id'=>'required|exists:albums,id',
    ]);
    $photos->name = $request->input('name');
    $photos->description = $request->input('description');
    $photos->album_id = $request->input('album_id');
    $photos->save();
    
    return redirect('photos');
}

public function destroy($id){
    $photos = Photo::all();
    $photos = Photo::findOrFail($id);
    $photos->delete();

    return redirect()->route('photos');

}
public function show($id){
    $photos = Photo::with('albums')->findOrFail($id);
    return view('photos.show', compact('photos'));
}
































 }




