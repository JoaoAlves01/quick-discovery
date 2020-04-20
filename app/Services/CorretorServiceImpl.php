<?php

namespace App\Services;

use Illuminate\Support\Facades\Config;
use App\Exceptions\Handler;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Repositories\CoberturasRepository;

class CorretorServiceImpl implements CorretorService
{
    
    public function __construct(CoberturasRepository $coberturasRepository){

        $this->coberturasRepository = $coberturasRepository;
    }

    public function calculo($simulacao){

        try{
            $jsonMongeral = ["cnpj" => "11321351000110", "modeloProposta" => "YZ"];
            $url = env('SIMULACAO') . '?cnpj=' . $jsonMongeral['cnpj'] . '&codigoModeloProposta=' . $jsonMongeral['modeloProposta'];
            $header = array('Content-Type' => 'application/json', 'Accept' => 'application/json', 'X-Api-Key: 1e0d86b2-d0b2-4ddb-96b4-cdc907f7e5a8');

            $objeto = '{"simulacoes":[{"proponente":{"tipoRelacaoSeguradoId":1,"nome":"Gabriel de Oliveira Ribeiro","cpf":"11855727676","dataNascimento":"1980-10-20T00:00:00","profissaoCbo":"2410-05","renda":5000,"sexoId":1,"uf":"MG","declaracaoIRId":1},"periodicidadeCobrancaId":30,"prazoCerto":30}]}';
            $objeto = json_decode($objeto);
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($objeto));
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header );
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            $resultado = curl_exec( $ch);
            curl_close( $ch );

            $coberturasCalculo = $this->coberturas($resultado);

            return $coberturasCalculo;
        }

        catch(Exception $e){
            return $e->getMessage();
        }
    }

    private function coberturas($objeto){

        try{
            $coberturas = json_decode($objeto);
            $coberturas = $coberturas->Valor->simulacoes[0]->produtos;
            $coberutrasArray = [];

            //Pegando cobertura e indenizacao
            foreach($coberturas as $cobertura){

                foreach($cobertura->coberturas as $indenizacoes){

                    //Devido aos valores mockudos na API serem muito alto, passei a altera-los para ficar melhor visualmente
                    if($indenizacoes->limite > 10000){

                        $indenizacoes->limite = mt_rand(1000, 10000);

                        //Parcela
                        $indenizacoes->custoFixo = round($indenizacoes->limite / 12);

                        //Mascara real
                        $indenizacoes->limite = number_format($indenizacoes->limite, 2, ',', '.');
                    }
                    
                    else{
                        
                        $indenizacoes->custoFixo = round($indenizacoes->limite / 12);
                        $indenizacoes->limite = number_format($indenizacoes->limite, 2, ',', '.');
                    }
                }

                array_push($coberutrasArray, ["cobertura" => $cobertura->descricao, "indenizacao" => $cobertura->coberturas]);
            }

            // $valor = $coberutrasArray[0]['indenizacao'][0]->limite;
            // $valor = number_format($valor, 2, ',', '.');
            
            return $coberutrasArray;
        }

        catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function iniciarCurlPost(){

        $url = env('SIMULACAO') . '?cnpj=' . $jsonMongeral['cnpj'] . '&codigoModeloProposta=' . $jsonMongeral['modeloProposta'];
        $header = array('accept' => 'application/json', 'X-Api-Key' => 'd6395df3-35a7-49e9-921f-d8b14a38c940');
        $objeto = '{"simulacoes":[{"proponente":{"tipoRelacaoSeguradoId":1,"nome":"Gabriel de Oliveira Ribeiro","cpf":"11855727676","dataNascimento":"1980-10-20T00:00:00","profissaoCbo":"2410-05","renda":5000,"sexoId":1,"uf":"MG","declaracaoIRId":1},"periodicidadeCobrancaId":30,"prazoCerto":30}]}';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $objeto);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header );
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        $resultado = curl_exec( $ch);
        curl_close( $ch );

        return $resultado;
    }
}
