<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_name',
    ];

    public function sections(){
        return $this->hasMany(Section::class, 'class_id');
    }
}