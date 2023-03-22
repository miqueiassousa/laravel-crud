<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    /* So passar os dados para construtor */
    protected $fillable = [
        'title','content','author'
    ];
    use HasFactory;
}
