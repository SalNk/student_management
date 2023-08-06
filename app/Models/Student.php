<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_id',
        'section_id',
        'name',
        'first_name',
        'class',
        'birth',
        'phone_number',
    ];

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }
}