<?php

namespace App\Services;

use Illuminate\Support\Facades\Config;
use App\Exceptions\Handler;
use App\Repositories\UfRepository;
use App\Repositories\CidadesRepository;

class UfServiceImpl implements UfService
{

    public function __construct(UfRepository $ufRepository, CidadesRepository $cidadesRepository){

        $this->ufRepository = $ufRepository;
        $this->cidadesRepository = $cidadesRepository;
    }

    public function buscarUf($uf){

        try{
            $uf = $this->ufRepository->findWhere(['sigla' => $uf]);
            $uf = json_decode($uf);

            return $uf[0];
        }

        catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function listarEstados(){

        try{
            $uf = $this->ufRepository->all();
            $uf = json_decode($uf);

            return $uf;
        }

        catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function buscarUfSigla($idEstado){

        try{
            $uf = $this->ufRepository->findWhere(['id' => $idEstado]);
            $uf = json_decode($uf);

            return $uf[0];
        }

        catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function buscarCidade($idEstado){

        try{
            $cidade = $this->cidadesRepository->findWhere(['id_estado' => $idEstado]);
            $cidade = json_decode($cidade);
            
            return $cidade;
        }

        catch(Exception $e){
            return $e->getMessage();
        }
    }
}
