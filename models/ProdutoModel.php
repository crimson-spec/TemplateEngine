<?php

namespace Models;

use Models\ConexaoModel;

class ProdutoModel extends ConexaoModel{

    public function showAll()
    {
        $query = $this->conectDB()->prepare("SELECT * FROM products");
        $query->execute();
        return $data = $query->fetchAll(\PDO::FETCH_OBJ);
    }
}