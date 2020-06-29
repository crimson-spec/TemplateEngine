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

    public function index($url=null, $id=null)
    {
        if($id==null){
            //$data = $this->showAll();
            $data = json_decode(file_get_contents('http://localhost/4dev/'));
        }else{
            $data = $this->find($id);
        }        
        return $this->blade->render('produto', compact('data'));
    }

    #Método para adicionar novos produtos
    public function create()
    {
        if(count($_POST)>0){
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
            $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_SPECIAL_CHARS);
            $cat = filter_input(INPUT_POST, 'cat', FILTER_SANITIZE_NUMBER_INT);
            if($this->store($cat, $name, $price)){
                $success = 'Dados inseridos com sucesso!';
                return $this->blade->render('produto_create', compact('success'));
            }
        }else{
            return $this->blade->render('produto_create');
        }
    }

    #Método para adicionar novos produtos
    public function update($url=null, $id=null)
    {
        if(count($_POST)>0){
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
            $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_SPECIAL_CHARS);
            $cat = filter_input(INPUT_POST, 'cat', FILTER_SANITIZE_NUMBER_INT);
            $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
            if($this->edit($id, $cat, $name, $price)){
                $success = 'Dados atualizados com sucesso!';
                return $this->blade->render('produto_create', compact('success'));
            }else{
                $success = 'Error!';
                return $this->blade->render('produto_create', compact('success'));
            }
        }else{
            $data = $this->find($id);
            return $this->blade->render('produto_create', compact('data'));
        }
    }

    #Método para remover novos produtos
    public function remove($url=null, $id=null)
    {
        if($this->delete($id)){
            header('Location: '.DIRPAGE.'produto');
        }
    }
}