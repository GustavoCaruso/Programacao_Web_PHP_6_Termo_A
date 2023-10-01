<?php

    include("pessoa.php");
    $obj = new Pessoa($_POST['nome'], $_POST['endereco'], $_POST["idade"]);
    // $obj->setNome($_POST['nome']);
    // $obj->setEndereco($_POST['endereco']);
    // $obj->setIdade($_POST['idade']);

    echo "Nome: {$obj->getNome()} <br/>";
    echo "Nome: {$obj->getEndereco()} <br/>";
    echo "Nome: {$obj->getIdade()} <br/>";