<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exceptions\Handler;
use App\Repositories\UserRepository;
use Auth;

class AuthJwtController extends Controller
{
    public function __construct(UserRepository $userRepository){

        $this->userRepositoriy = $userRepository;
    }

    public function login(Request $request){

        try{
            $credentials = $request->only('email', 'password');

            if ($token = auth()->guard()->attempt($credentials)) {

                $this->dadosUsuario($credentials);
                setcookie("jwt_token", $token);
                
                //Levar para view do corretor
                if(session('usuario')->perfil == "corretor"){
                    return redirect()->route('listarEventos');
                }

                //Levar para view do cliente
                else{
                    return redirect()->route('menuSegurado');
                }
            }
        }

        catch(Exception $e){
            return $e->getMessage();
        }
    }

    //Apos usuario logar bloquear token usado
    public function logout(){

    	auth('api')->logout();

    	return response()->json(['message' => 'Logout successfully']);
    }

    //Atualizar novo token
    public function refresh(){

    	auth('api')->refrest();

    	return response()->json([
    		'token' => $token
    	]);
    }

    //Sessao com dados do usuario
    public function dadosUsuario($dados){

        try{
            $usuario = $this->userRepositoriy->findWhere(['email' => $dados['email']]);
            $usuario = json_decode($usuario);
            session(['usuario' => $usuario[0]]);
        }

        catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function loginPage(){

        return view('usuario.login');
    }
}
