<?php
namespace Classes;

use Models\ClassCadastro;

class ClassValidate{

    private $erro=[];
    private $cadastro;

public function __construct()
{
    $this->cadastro=new ClassCadastro();
}

    public function getErro()
    {
        return $this->erro;
    }

    public function setErro($erro)
    {
        array_push($this->erro,$erro);
    }

#validar se os campos foram preenchidos 
    public function validateFields($par)
    {

        $i=0;
        foreach($par as $key => $value)
        {
            if(empty($value)){

                $i++;
            }
        }
            if ($i==0)
            {
                return true;
            }else
            {
                $this->setErro("Prencha todos os dados");
                return false;
            }
    }

    public function validateData($par)
    {

        $data=\DateTime::createFromFormat("d/m/Y",$par);
        if(($data) && ($data->format("d/m/Y") == $par)){
            return true;
        }else{
            $this->setErro("Data inválida!");
            return false;
        }

    }

    public function validateEmail($par)
    {
        if(filter_var($par, FILTER_VALIDATE_EMAIL))
        {
return true;
        }else
        {
            $this->setErro("Email invalido!");
            return false;
        }
    }


    public function validateFinalCad($arrVar)
    {

        $this->cadastro->insertCad($arrVar);

    }
}