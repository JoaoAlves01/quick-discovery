<?php

namespace App\Services;

use Illuminate\Support\Facades\Config;
use App\Exceptions\Handler;

class AuxiliaresServiceImpl implements AuxiliaresService
{

    public function removerMascaraContabil($valor){

        try{

            $valor = str_replace('.', '', $valor);
            $valor = str_replace(',', '.', $valor);
            return $valor;
        }

        catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function removerMascaraCep($cep){

        try{

            $cep = str_replace('-', '', $cep);
            return $cep;
        }

        catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function gerarAnos($inicio, $fim){

        try{

            $anos = [];
            for($i = $fim; $i >= $inicio; $i--){

                array_push($anos, $i);
            }

            return $anos;
        }   

        catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function removerMascaraCpf($cpf){

        try{

            $cpf = str_replace('-', '', $cpf);
            $cpf = str_replace('.', '', $cpf);
            return $cpf;
        }

        catch(Exception $e){
            return $e->getMessage();
        }
    }
}
