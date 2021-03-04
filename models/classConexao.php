<?php

namespace Models;

 abstract class classConexao{

    protected function conectaDB()
    {
        try{
            $con = new \PDO("mysql:host=".HOST."; dbname=".DB ,USER ,PASS);          
               return $con;
        }catch (\PDOException $erro){
            return $erro->getMessage();
        }
    }
}