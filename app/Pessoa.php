<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = ['nome', 'cpf', 'data_nasc', 'rg', 'local_nasc', 'telefone'];
    protected $guarded = ['id', 'created_at', 'update_at', 'usuario_cadastro'];
    protected $table = 'pessoas';
}
