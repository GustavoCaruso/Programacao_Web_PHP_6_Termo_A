<?php

namespace Php\Biblioteca\Controller;

use Php\Biblioteca\Model\Entity\Categoria;
use Php\Biblioteca\Model\DAO\CategoriaDAO;

class CategoriaController
{

    //http get

    public function inserir()
    {
        require '../src/View/Categoria/inserir.php';
    }
    public function alterar()
    {
        require '../src/View/Categoria/alterar.php';
    }
    public function excluir()
    {
        require '../src/View/Categoria/excluir.php';
    }

    public function gravar()
    {
        $categoria = new Categoria('', $_POST['descricao']);
        $categoriaDAO = new CategoriaDAO();
        session_start();
        if ($categoriaDAO->inserir($categoria)) {
            $_SESSION['gravar'] = true;
        } else {
            $_SESSION['gravar'] = false;
        }
        $this->index();
    }
    public function index(){
        $categoriaDAO = new CategoriaDAO();
        $resultado = $categoriaDAO->consultar();
        require '../src/View/Categoria/index.php';
    }
}
