<?php

namespace Controllers;

class RoutesController{

    # Função estática que retorna o url em array ou em variavel
    public static function parseUrl($par=null)
    {
        $url = explode('/', $_GET['url'], FILTER_SANITIZE_URL);
        if(!is_null($par)){
            if(array_key_exists($par, $url)){
                return $url[$par];
            }else{
                return false;
            }
        }else{
            return $url;
        }
    }

    # Função que busca a classe controle e o método requisitado pela url
    public function getRoute($request, $action)
    {
        $url = self::parseUrl(0);
        if($url==$request){
            $actionFinal = explode('@', $action);
            $controller = "\\Controllers\\{$actionFinal[0]}";
            $method = $actionFinal[1];
            $instance = new $controller;
            echo call_user_func_array([$instance, $method], self::parseUrl());
        }
    }
}