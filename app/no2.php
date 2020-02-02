<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class no2 extends Model
{
    protected $table = "no3";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 'link', 'tags', 'conteudo',
    ];
}
