<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Responsavel extends Model
{
    protected $fillable = ['estabelecimento_id', 'nome', 'rg', 'cpf'];

    protected $dates = ['created_at', 'updated_at'];

    public function estabelecimento(){
        $this->belongsTo(Estabelecimento::class);
    }
}
