<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class no1 extends Model
{
    protected $table = "no2";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 'link', 'tags', 'conteudo',
    ];
}
