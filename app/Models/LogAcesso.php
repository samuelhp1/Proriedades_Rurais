<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogAcesso extends Model
{
    protected $fillable = ['log'];

    protected $dates = ['created_at', 'updated_at'];
}
