<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class no4 extends Model
{
    protected $table = "no5";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 'link', 'tags', 'conteudo',
    ];
}
