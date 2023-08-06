<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_name',
        'class_id',
    ];

    public function classe ()
    {
        return $this->belongsTo(Classe::class, 'class_id');
    }

    public function student ()
    {
        return $this->hasMany(Student::class, 'section_id');
    }
}