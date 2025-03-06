<?php

namespace App\Http\Controllers;
use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index(){
        $albums = Album::all();
        return view('albums.index', compact('albums'));
    }
    public function create(){
        return view('albums.create');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
        ]);
        Album::create([
            'name'=>$request->name,
        ]);
        return redirect()->route('albums');
    }
    public function edit($id){
        $albums = Album::findOrFail($id);
        return view('albums.edit', compact('albums'));
    }
    public function update(Request $request, $id){
        $albums = Album::findOrFail($id);
        $request->validate([
            'name'=>'required',
        ]);
        $albums->name = $request->input('name');
        $albums->save();
        
        return redirect('albums');
    }
    public function destroy($id){
        $albums = Album::all();
        $albums = Album::findOrFail($id);
        $albums->delete();
    
        return redirect()->route('albums');
    
    }

    public function show($id){
        $albums = Album::with('photos')->findOrFail($id);
        return view('albums.show', compact('albums'));
    }
}
