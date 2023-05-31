<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['path','batiment_id'];
    public function batiment(){
        return $this->belongsTo(Batiment::class);
    }
}
