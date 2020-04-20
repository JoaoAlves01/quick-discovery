<?php

namespace App\Services;

interface AuxiliaresService{

    public function removerMascaraContabil($valor);

    public function removerMascaraCep($cep);

    public function gerarAnos($inicio, $fim);

    public function removerMascaraCpf($cpf);
}
