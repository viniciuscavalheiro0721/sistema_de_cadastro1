<?php
 #caminhos absolutos
 $pastaInterna="Cadastro_login/";
 define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");

 if(substr($_SERVER['DOCUMENT_ROOT'], -1) == '/'){
     $barra="";
 }else{
     $barra="/";
 }
 
 define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$barra}{$pastaInterna}");

 #Atalhos

// define('DIRIMG', DIRPAGE.'img/');
 define('DIRCSS', DIRPAGE.'lib/css/');
 define('DIRJS', DIRPAGE.'lib/js/');


#Acesso ao db
define('HOST',"localhost");
define('DB',"sistema_cadastro");
define('USER',"root");
define('PASS',"");
