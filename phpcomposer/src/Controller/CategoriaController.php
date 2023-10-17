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
    public function alterar($params)
    {
        $categoriaDAO = new CategoriaDAO();
        $id = $params[1];
        $resultado = $categoriaDAO->consultarPorId($id);
        require '../src/View/Categoria/alterar.php';
    }
    public function excluir($params)
    {
        $categoriaDAO = new CategoriaDAO();
        $id = $params[1];
        $resultado = $categoriaDAO->consultarPorId($id);
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

    public function editar($params)
    {
        $categoria = new Categoria($params[1], $_POST['descricao']);
        $categoriaDAO = new CategoriaDAO();
        session_start();
        if ($categoriaDAO->alterar($categoria)) {
            $_SESSION['editar'] = true;
        } else {
            $_SESSION['editar'] = false;
        }
        $this->index();
    }

    public function deletar($params)
    {
        $categoria = new Categoria($params[1],"");
        $categoriaDAO = new CategoriaDAO();
        session_start();
        if ($categoriaDAO->excluir($categoria)) {
            $_SESSION['deletar'] = true;
        } else {
            $_SESSION['deletar'] = false;
        }
        $this->index();
    }


    public function index(){
        $categoriaDAO = new CategoriaDAO();
        $resultado = $categoriaDAO->consultar();
        require '../src/View/Categoria/index.php';
    }
}
