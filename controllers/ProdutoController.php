<?php

namespace Controllers;

use Jenssegers\Blade\Blade;
use Models\ProdutoModel;

class ProdutoController extends ProdutoModel{

    private $blade;

    public function __construct()
    {
        $this->blade = new Blade(DIRREQ.'views', DIRREQ.'lib/cache');
    }

    public function index($url=null, $tipo=null, $marca=null)
    {
        //$data = $this->showAll();
        $data = json_decode(file_get_contents('http://localhost/4dev/'));
        return $this->blade->render('produto', compact('data'));
    }
}