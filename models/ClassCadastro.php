<?php
namespace Models;
date_default_timezone_set('America/Sao_Paulo');
class ClassCadastro extends ClassCrud{


#insere no BD
public function insertCad($arrVar)
{

$this->insertDB(

   "users",
    "?,?,?,?,?,?,?,?",
    array(
        "",
        $arrVar['nome'],
        $arrVar['email'],
        $arrVar['hashSenha'],
        $arrVar['dataNascimento'],
        date('Y/m/d H:i:s'),
        'user',
        'confirmation'

    )
);

}



}