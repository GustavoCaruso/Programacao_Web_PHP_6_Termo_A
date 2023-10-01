<?php
    session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
if(($usuario == 'admin')&& ($senha == "123")){
    $_SESSION['acesso'] = true;
    $_SESSION['nome_usuario'] = "Administrador";
    header('Location: principal.php');
    exit;

}else{
    header('Location: index.php?acesso=negado');
    exit;
}