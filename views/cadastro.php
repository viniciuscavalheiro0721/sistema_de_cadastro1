<?php \Classes\ClassLayout::setHead('Cadastro','Essa é o cadastro do site') ?>


<div class="topFaixa float h40 w100 center">

Cadastro de Usuarios

</div>
<form name="formCadastro" id="formCadastro" action="<?php echo DIRPAGE.'controllers/controllerCadastro';?>" method="post">
    <div class="cadastro">
        <input type="text" id="nome" name="nome" placeholder="Nome:" required>
        <input type="email" id="email" name="email" placeholder="Email:" required>
        <input type="text" id="dataNascimento" name="dataNascimento" placeholder="Data de Nascimento:" required>
        <input type="password" id="senha" name="senha" placeholder="Senha:" required>
        <input type="password" id="senhaconf" name="senhaconf" placeholder="Confirmação da Senha:" required>
        <div class="loginTextos">
           <a class="fazerLogin" href="<?php echo DIRPAGE.'login'; ?>">Faça login em vez disso</a> 
       </div>
        <input class="h40 floatRigth" type="submit" value="Cadastrar">
    </div>
</form>

<?php \Classes\ClassLayout::setFooter() ?>

