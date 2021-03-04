<?php

    if(isset($_POST['nome'])){$nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_FULL_SPECIAL_CHARS);}else{$nome=null;}
    if(isset($_POST['email'])){$email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);}else{$email=null;}
    if(isset($_POST['dataNascimento'])){$dataNascimento=filter_input(INPUT_POST,'dataNascimento',FILTER_SANITIZE_FULL_SPECIAL_CHARS);}else{$dataNascimento="null";}
    if(isset($_POST['senha'])){$senha=$_POST['senha']; $hashSenha='';}else{$senha=null; $hashSenha=null;}    

    $dataCreate=date("Y-m-d H:i:s");
 $token=bin2hex(random_bytes(64));
$arrVar=[
    "nome"=>$nome,
    "email"=>$email,
    "dataNascimento"=>$dataNascimento,
    "senha"=>$senha,
    "hashSenha"=>$hashSenha,
    "data"=>$nome,
    "token"=>$token
   ];
