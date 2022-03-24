<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $table = 'course';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'capacity',
    ];

    protected $guarded = [];
}
