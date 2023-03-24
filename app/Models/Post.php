<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    /* So passar os dados para construtor */
    protected $fillable = [
        'title','content','author'
    ];

    // Desativar o dado do banco de dados
    use SoftDeletes;
    use HasFactory;
}
