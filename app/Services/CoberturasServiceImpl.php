<?php

namespace App\Services;

use Illuminate\Support\Facades\Config;
use App\Exceptions\Handler;
use App\Repositories\CoberturasRepository;
use App\Repositories\CoberturasUserRepository;

class CoberturasServiceImpl implements CoberturasService
{
    public function __construct(CoberturasRepository $coberturasRepository, CoberturasUserRepository $coberturasUserRepository){

        $this->coberturasRepository = $coberturasRepository;
        $this->coberturasUserRepository = $coberturasUserRepository;
    }

    public function listarCoberturas(){

        try{
            $coberturas = $this->coberturasRepository->all();
            $coberturas = json_decode($coberturas);

            return $coberturas;
        }

        catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function filtroLocalidade($idCobertura){
        
        try{
            $filtro = $this->coberturasUserRepository->with(['coberturas'])->with(['users'])->with(['enderecos'])->findWhere(['id_cobertura' => $idCobertura]);
            $filtro = json_decode($filtro);

            $arrayIdade = [];
            $arrayPremio = [];

            foreach($filtro as $info){

                array_push($arrayIdade, $info->users[0]->idade);
                array_push($arrayPremio, $info->premio);
            }

            $resultado = [
                "mediaIdade" => round((array_sum($arrayIdade)) / count($arrayIdade)),
                "mediaPremio" => number_format(round((array_sum($arrayPremio)) / count($arrayPremio)), 2, ',', '.'),
                "numeroSegurado" => mt_rand(100, 300),
                "renovacao" => mt_rand(100, 300)
            ];

            return $resultado;
        }

        catch(Exception $e){
            return $e->getMessage();
        }
    }

}
