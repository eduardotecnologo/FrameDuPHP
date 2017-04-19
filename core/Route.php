<?php

namespace Core;

class Route{
    private $routes;//Atributo routes

    public function __construct(array $routes){//Construtor
        $this->routes = $routes;//routes recebe $routes passado por parametro
    }

    public function getUrl(){
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}