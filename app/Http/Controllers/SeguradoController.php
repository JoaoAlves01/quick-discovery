<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exceptions\Handler;
use App\Services\UserService;

class SeguradoController extends Controller
{
    public function __construct(UserService $userService){

        $this->userService = $userService;
    }

    public function buscarSegurado($cpf){

        try{
            $segurado = $this->userService->buscarSegurado($cpf);

            if(!empty($segurado)){

                return $segurado;
            }

            return $segurado;
        }

        catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function buscarCep($cep){

        try{
           
            $endereco = $this->userService->buscarCep($cep);
            if(!empty($endereco)){

                return $endereco;
            }

            return $endereco;
        }

        catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function menuSegurado(){

        try{
           
            return view('menuCliente');
        }

        catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function visualizarApolice(){

        try{
           
            return view('visualizarApolice');
        }

        catch(Exception $e){
            return $e->getMessage();
        }
    }
}
