<?php

namespace App\Services;

interface CoberturasService{

    public function listarCoberturas();

    public function filtroLocalidade($idCobertura);
}
