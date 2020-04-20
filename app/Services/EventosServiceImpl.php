<?php

namespace App\Services;

use Illuminate\Support\Facades\Config;
use App\Exceptions\Handler;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class EventosServiceImpl implements EventosService
{

    public function listarEventos(){

        try{
            $array_eventos = [];
            //'44a665f32c6aaaef20bc624d132904498528c8d1580b4e9ea1f6436afbd60e0c', 
            $tokens = ['0f25e2dd87307bf4759c910f25acf53e205d5955ad23ac31db8db53bc0371907', 'ee6c4e0bdfd0c9d63a89239e5ac606a0e9818de2d619c83e4548e15cba9fb3e9'];

            foreach($tokens as $token){

                $client = new Client();
                $response  = $client->get('https://api.sympla.com.br/public/v3/events', ['headers' => ['Accept' => 'application/json', 'Content-Type' => 'application/json', 's_token' => $token]]);
                $response->getStatusCode();
                $body = $response->getBody();
                $body = json_decode($body);

                array_push($array_eventos, $body->data);
            }

            foreach($array_eventos as $eventos){


                foreach($eventos as $evento){

                    $data = substr($evento->start_date, 0, 10);
                    $data = explode("-", $data);
                    $data = $data[2] . "/" . $data[1] . "/" . $data[0];
                    $evento->start_date = $data;
                }
            }


            return $array_eventos;
        }

        catch(Exception $e){
            return $e->getMessage();
        }
    }
}
