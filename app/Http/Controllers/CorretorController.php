<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exceptions\Handler;
use App\Services\CorretorService;
use App\Services\AuxiliaresService;
use App\Services\UfService;
use App\Services\CoberturasService;
use App\Services\EventosService;

class CorretorController extends Controller
{

    public function __construct(CorretorService $corretorService, AuxiliaresService $auxiliaresService, UfService $ufService, CoberturasService $coberturasService, EventosService $eventoService){
        
        $this->corretorService = $corretorService;
        $this->auxiliaresService = $auxiliaresService;
        $this->ufService = $ufService;
        $this->coberturasService = $coberturasService;
        $this->eventoService = $eventoService;
    }

    public function listarEventos(){

        try{
            $eventos = $this->eventoService->listarEventos();
            $estados = $this->ufService->listarEstados();

            return view('eventos')->with(compact('eventos', 'estados'));
        }

        catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function realizarCotacaoPage(){
        try{
            return view('cotacao');
        }

        catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function calculo(Request $request){
        try{
            $calculos = $this->corretorService->calculo($request);
            return view('calculo')->with(compact('calculos'));
        }

        catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function buscarLocalidade(){

        try{
            $estados = $this->ufService->listarEstados();
            $coberturas = $this->coberturasService->listarCoberturas();

            return view('localidade')->with(compact('estados', 'coberturas'));
        }

        catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function buscarCidade($idEstado){

        try{
            $cidades = $this->ufService->buscarCidade($idEstado);

            return $cidades;
        }

        catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function filtroLocalidade($idCobertura){

        try{
            $filtro = $this->coberturasService->filtroLocalidade($idCobertura);
            return $filtro;
        }

        catch(Exception $e){
            return $e->getMessage();
        }
    }
}
