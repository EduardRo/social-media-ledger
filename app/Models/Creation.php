<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creation extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'src',
        'time_of_the_event',
        'media_platform',
        'type_of_event',
        // Add other fields that you want to allow for mass assignment
    ];
}
