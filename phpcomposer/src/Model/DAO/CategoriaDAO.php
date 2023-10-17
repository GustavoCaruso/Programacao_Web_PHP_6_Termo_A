<?php

namespace Php\Biblioteca\Model\DAO;

use Exception;
use Php\Biblioteca\Model\Entity\Categoria;


class CategoriaDAO{

    private DAO $dao;

    public function __construct()
    {
        $this->dao = new DAO();
    }

    public function inserir(Categoria $categoria){
        try{
            $sql = "INSERT INTO categoria (descricao) VALUES (:descricao)";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":descricao", $categoria->getDescricao());
            return $ps->execute();

        }catch(Exception  $e){
            return 0;
        }
    }

    public function alterar(Categoria $categoria){
        try{
            $sql = "UPDATE categoria SET descricao = :descricao WHERE id = :id";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":descricao", $categoria->getDescricao());
            $ps->bindValue(":id", $categoria->getId());
            return $ps->execute();

        }catch(Exception  $e){
            return 0;
        }
    }

    public function excluir(Categoria $categoria){
        try{
            $sql = "DELETE FROM categoria  WHERE id = :id";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":id", $categoria->getId());
            return $ps->execute();

        }catch(Exception  $e){
            return 0;
        }
    }

    public function consultar(){
        try{
            $sql = "SELECT * FROM categoria";
            return $this->dao->getConexao()->query($sql);
        }catch(Exception $e){
            return 0;
        }
    }

    public function consultarPorId($id){
        try{
            $sql = "SELECT * from categoria WHERE id = :id";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":id", $id);
            $ps->execute();
            return $ps->fetch();
        }catch (Exception $e){
            return 0;
        }
    }
}