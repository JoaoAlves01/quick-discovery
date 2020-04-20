<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Requests\CadastrarUsuarioRequest;


class UserController extends Controller
{   
    public function __construct(UserService $userService){
        
        $this->userService = $userService;
    }

    public function cadastrarUsuario(CadastrarUsuarioRequest $request){

        try{
            $dados = $request->all();
            $resultado = $this->userService->cadastrarUsuario($dados);

            return $resultado;
        }

        catch(\Exception $e){
            return $e->getmessage();
        }
    }

    public function cadastrarPage(){
        return view('usuario.cadastroUsuario');
    }
}
