<?php

namespace App\Services;

interface UfService{

    public function buscarUf($uf);

    public function buscarUfSigla($idEstado);

    public function listarEstados();
}
