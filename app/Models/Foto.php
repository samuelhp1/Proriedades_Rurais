<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $fillable =['estabelecimento_id','nome_arquivo','disk','path','tipo'];

    protected $dates = [
        'created_at', 'updated_at'
    ];

    public function estabelecimento(){
        $this->belongsTo(Estabelecimento::class);
    }

}
