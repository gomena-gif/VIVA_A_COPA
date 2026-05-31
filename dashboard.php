<?php

session_start();

if(!isset($_SESSION['id'])){

    header("Location: login.php");

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Painel - VIVA A COPA</title>

<style>

body{
    margin:0;
    font-family:Arial;
    background:#f5f5f5;
}

.topo{
    background:#021126;
    color:white;
    padding:20px 50px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.topo a{
    background:#16a34a;
    color:white;
    padding:10px 20px;
    border-radius:10px;
    text-decoration:none;
}

.conteudo{
    padding:50px;
}

.card{
    background:white;
    padding:30px;
    border-radius:20px;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

</style>

</head>
<body>

<div class="topo">

<h2>
VIVA A COPA
</h2>

<div>

Olá,
<?php echo $_SESSION['nome']; ?>

<a href="logout.php">
Sair
</a>

</div>

</div>

<div class="conteudo">

<div class="card">

<h1>
Bem-vindo ao painel!
</h1>

<p>
Seu sistema de login PHP + MySQL está funcionando.
</p>

</div>

</div>

</body>
</html>

