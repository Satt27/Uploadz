<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;
    protected $table='photos';

    protected $fillable =['images', 'name', 'description', 'album_id'];


    public function albums(){
        return $this->belongsTo(Album::class);
    }
    public function album(){
        return $this->belongsTo(Album::class);
    }

}
