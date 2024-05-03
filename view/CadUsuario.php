<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <form name="cadUsuario" id="cadUsuario" action="" method="post">
        Login: <input type="text" name="login" id="login"><br>
        Senha: <input type="password" name="senha1" id="senha1"><br>
        Confirmação de Senha: <input type="password" name="senha2" id="senha2"><br>
        Selecione: <select name="permissao" id="permissao">
            <option value="0"></option>
            <option value="A">Administrador</option>
            <option value="B">Comum</option>
        </select><br>
        <input type="submit" value="btnSalvar" id="btnSalvar" name="btnSalvar">
    </form>
</body>
</html>

<?php

    if(isset($_POST['btnSalvar'])){
        require_once '../controller/UsuarioController.php';
        call_user_func(array('UsuarioController','salvar'));
    }

?>