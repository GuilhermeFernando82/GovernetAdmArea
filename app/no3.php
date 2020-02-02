<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class no3 extends Model
{
    protected $table = "no4";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 'link', 'tags', 'conteudo',
    ];
}
