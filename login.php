<?php

session_start();

include("banco/conexao.php");

if(isset($_POST['entrar'])){

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios
            WHERE email='$email'";

    $resultado = $conexao->query($sql);

    if($resultado->num_rows > 0){

        $usuario = $resultado->fetch_assoc();

        if(password_verify($senha, $usuario['senha'])){

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['email'] = $usuario['email'];

            header("Location: dashboard.php");

        }else{

            echo "<script>
                    alert('Senha incorreta!');
                  </script>";

        }

    }else{

        echo "<script>
                alert('Usuário não encontrado!');
              </script>";

    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Login - VIVA A COPA</title>

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

<h1>Login</h1>

<form method="POST">

<input type="email"
name="email"
placeholder="Seu e-mail"
required>

<input type="password"
name="senha"
placeholder="Sua senha"
required>

<button name="entrar">
Entrar
</button>

</form>

<br>

<p>
Não possui conta?
<a href="cadastro.php">Cadastrar</a>
</p>

</div>

</body>
</html>



