<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{

    protected $fillable = ['nome', 'cnpj', 'endereco', 'telefone', 'celular', 'whatsapp', 'servicos', 'data_inauguracao', 'diferencial', 'proposta_trabalho', 'publico_alvo'];

    protected $dates = [
        'data_inauguracao', 'created_at', 'updated_at'
    ];

    public function responsaveis(){
        $this->hasMany(Responsavel::class);
    }

    public function responsavel(){
        $this->hasOne(Responsavel::class)->oldest();
    }

}
