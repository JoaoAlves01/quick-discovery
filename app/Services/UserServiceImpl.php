<?php

namespace App\Services;

use Illuminate\Support\Facades\Config;
use App\Repositories\UserRepository;
use App\Services\AuxiliaresService;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class UserServiceImpl implements UserService
{
    public function __construct(UserRepository $userRepository, AuxiliaresService $auxiliaresService){

        $this->userRepository = $userRepository;
        $this->auxiliaresService = $auxiliaresService;
    }

    public function cadastrarUsuario($objeto){
        
        try{
            //Verificando se já esta cadastrado
            $buscaUsuario = $this->userRepository->findWhere(['email' => $objeto['email']]);
            $buscaUsuario = json_decode($buscaUsuario);
            
            if(empty($buscaUsuario)){

                $objeto['password'] = bcrypt($objeto['password']);
                $this->userRepository->create($objeto);
                $resultado = "Cadastro com sucesso!";
            }

            else{

                $resultado = "Usuário já cadastrado!";
            }

        }

        catch(\Exception $e){
            return $e->getmessage();
        }
    }

    public function buscarSegurado($cpf){
        
        try{
            $cpf = $this->auxiliaresService->removerMascaraCpf($cpf);
            $buscarSegurado = $this->userRepository->findWhere(['cpf' => $cpf]);
            $buscarSegurado = json_decode($buscarSegurado);

            $formatar_nascimento = explode("-", $buscarSegurado[0]->nascimento);
            $formatar_nascimento = $formatar_nascimento[2] . "/" . $formatar_nascimento[1] . "/" . $formatar_nascimento[0];
            $buscarSegurado[0]->nascimento = $formatar_nascimento;

            if(!empty($buscarSegurado)){

                return $buscarSegurado;
            }

            return '';

        }

        catch(\Exception $e){
            return $e->getmessage();
        }
    }

    public function buscarCep($cep){

        try{
            $cep = $this->auxiliaresService->removerMascaraCep($cep);
            $client = new Client();
            $response  = $client->get('https://viacep.com.br/ws/' . $cep . '/json');
            $response->getStatusCode();
            $body = $response->getBody();
            //$body = json_decode($body);

            return $body;
        }

        catch(Exception $e){
            return $e->getMessage();
        }
    }
}
