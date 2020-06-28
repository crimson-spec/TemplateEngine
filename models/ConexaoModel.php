<?php

namespace Models;

abstract class ConexaoModel{

    private $instance;

    protected function conectDB()
    {
        try{
            return $this->instance = new \PDO(
                "mysql:host=".DBHOST.";dbname=".DBNAME,
                DBUSER,
                DBPASS
            );
        }catch(\PDOException $exception){
            return $exception->getMessage();
        }
    }
}