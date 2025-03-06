<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\hasFactory;

class Album extends Model
{
    use hasFactory;
    protected $fillable=['name'];

    public function photos(){
        return $this->hasMany(Photo::class);
    }
}
