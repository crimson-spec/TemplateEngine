<?php

namespace Controllers;

use Jenssegers\Blade\Blade;

class HomeController{

    private $blade;

    public function __construct()
    {
        $this->blade = new Blade(DIRREQ.'views', DIRREQ.'lib/cache');
    }

    public function index()
    {
        $name = 'Matheus';
        return $this->blade->render('home', compact('name'));
    }

    public function home($url=null, $tamanho, $cor)
    {
        echo "essa é minha casa, ela tem o tamanho $tamanho e possui a cor $cor";
    }
}