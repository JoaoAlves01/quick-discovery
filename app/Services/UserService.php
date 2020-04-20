<?php

namespace App\Services;

interface UserService{

    public function cadastrarUsuario($objeto);

    public function buscarSegurado($cpf);

    public function buscarCep($cep);
}
