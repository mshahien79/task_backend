<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registration extends Model
{
    use HasFactory;
    protected $table = 'registration';
    public $timestamps = true;

    protected $fillable = [
        'student_id',
        'course_id',
        'registered_on',
    ];

    protected $guarded = [];
}
