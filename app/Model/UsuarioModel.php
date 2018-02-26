<?php

namespace App\Model;

class UsuarioModel extends AbstractModel {
    protected $tableName = 'usuario';
    protected $atributos = [
        'idusu' => null,
        'nome' => null,
        'senha' => null,
        'status' => '1'
    ];
    protected $campoChave = 'idusu';
}