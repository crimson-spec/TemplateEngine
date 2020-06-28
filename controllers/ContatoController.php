<?php

namespace Controllers;

use Jenssegers\Blade\Blade;

class ContatoController{

    private $blade;

    public function __construct()
    {
        $this->blade = new Blade(DIRREQ.'views', DIRREQ.'lib/cache');
    }

    public function showContacts()
    {
        return $this->blade->render('contato');
    }
}