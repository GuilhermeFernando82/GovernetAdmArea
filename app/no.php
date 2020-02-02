<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class no extends Model
{
    protected $table = "cat";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 'link', 'tags', 'conteudo', 'categoria',
    ];
}
