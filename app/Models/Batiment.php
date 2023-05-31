<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batiment extends Model
{
    use HasFactory;
    protected $fillable = ['prix','metrage','ville','status','best','lieu','description'];

    public function images(){
        return $this->hasMany(Image::class);
    }
}
