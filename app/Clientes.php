<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Clientes extends Authenticatable
{

    use Notifiable;

    protected $table = "clientes";
    protected $fillable = [
        'name','status','razao','cnpj','cep','uf','cidade','complemento','email','password','picture',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
