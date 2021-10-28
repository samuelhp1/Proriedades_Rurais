<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    protected $fillable = ['login', 'senha'];

    protected $dates = ['created_at', 'updated_at'];

    //caso nome do model não esteja no plural e não tenha chave primaria
    protected $table = 'login';
    public $incrementing = false;

}
