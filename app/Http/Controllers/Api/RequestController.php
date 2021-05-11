<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RequestController extends Controller
{
        public function index(Request $request)

        {
            //pega o cep fornecido através de um GET
            $cep = $request -> input('cep');

            //prepara a URL para o request

            $takeUrl = Http::get("https://viacep.com.br/ws/$cep/json/");
                
            
            
                 //transforma o request em jon
                $response = $takeUrl ->json();

                    if(!isset($response['erro']))
                    {
                        $zip = $response['cep'] ;
                        $logradouro = $response['logradouro'] ;
                        $complemento = $response['complemento'] ;
                        $bairro = $response['bairro'] ;
                        $localidade = $response['localidade'] ;
                        $gia = $response['gia'] ;
                        $ddd = $response['ddd'] ;
        
        
                    //retorna a próxima view e passa os valores pra ela
                    return view('home.sucesso',['cep' => $cep,
                                                'logradouro'=> $logradouro,
                                                'complemento'=> $complemento,
                                                'bairro'     => $bairro,
                                                'localidade' => $localidade,
                                                'gia'        => $gia,
                                                'ddd'        => $ddd]);
                    }
                        else
                        {
                            return view('error.404');
                        }
                
            
            


           
                

        }
}
