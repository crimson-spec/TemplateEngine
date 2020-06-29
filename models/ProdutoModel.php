<?php

namespace Models;

use Models\ConexaoModel;

class ProdutoModel extends ConexaoModel{

    #Método para retornar todos os produtos
    public function showAll()
    {
        $query = $this->conectDB()->prepare("SELECT * FROM products");
        $query->execute();
        return $data = $query->fetchAll(\PDO::FETCH_OBJ);
    }

    #Método para retornar um produto específico
    public function find($id)
    {
        $query = $this->conectDB()->prepare("SELECT * FROM products WHERE id = :id");
        $query->bindParam(":id", $id, \PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_OBJ);
    }

    #Método para cadastrar um produto no banco
    public function store($cat, $name, $price)
    {
        $query = $this->conectDB()->prepare("INSERT INTO products VALUES(null, :cat, :name, :price)");
        $query->bindParam(":cat", $cat, \PDO::PARAM_INT);
        $query->bindParam(":name", $name, \PDO::PARAM_STR);
        $query->bindParam(":price", $price, \PDO::PARAM_STR);
        return $query->execute();
    }

    #Método para editar um produto no banco
    public function edit($id, $cat, $name, $price)
    {
        $query = $this->conectDB()->prepare("UPDATE products SET idCategory=:cat, name=:name, price=:price WHERE id = :id");
        $query->bindParam(":id", $id, \PDO::PARAM_INT);
        $query->bindParam(":cat", $cat, \PDO::PARAM_INT);
        $query->bindParam(":name", $name, \PDO::PARAM_STR);
        $query->bindParam(":price", $price, \PDO::PARAM_STR);
        return $query->execute();
    }

    #Método para deletar um produto no banco
    public function delete($id)
    {
        $query = $this->conectDB()->prepare("DELETE FROM products WHERE id = :id");
        $query->bindParam(":id", $id, \PDO::PARAM_INT);
        return $query->execute();
    }
}