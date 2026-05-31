<?php

include("banco/conexao.php");

if(isset($_POST['cadastrar'])){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios(nome, email, senha)
            VALUES('$nome', '$email', '$senha')";

    if($conexao->query($sql)){
        echo "<script>
                alert('Cadastro realizado com sucesso!');
                window.location='login.php';
              </script>";
    }else{
        echo "Erro ao cadastrar.";
    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastro - VIVA A COPA</title>

<style>

body{
    font-family:Arial;
    background:#021126;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.box{
    background:white;
    padding:40px;
    border-radius:20px;
    width:400px;
}

h1{
    text-align:center;
    margin-bottom:30px;
}

input{
    width:100%;
    height:50px;
    margin-bottom:20px;
    border:1px solid #ccc;
    border-radius:10px;
    padding:0 15px;
}

button{
    width:100%;
    height:50px;
    border:none;
    background:#16a34a;
    color:white;
    border-radius:10px;
    font-size:18px;
    cursor:pointer;
}

a{
    text-decoration:none;
    color:#16a34a;
}

</style>

</head>
<body>

<div class="box">

<h1>Cadastro</h1>

<form method="POST">

<input type="text"
name="nome"
placeholder="Seu nome"
required>

<input type="email"
name="email"
placeholder="Seu e-mail"
required>

<input type="password"
name="senha"
placeholder="Sua senha"
required>

<button name="cadastrar">
Cadastrar
</button>

</form>

<br>

<p>
Já possui conta?
<a href="login.php">Entrar</a>
</p>

</div>

</body>
</html>