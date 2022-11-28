<?php
namespace App\DAO;
use App\Model\ProdutoCategoriaModel;
use \PDO;

class ProdutoCategoriaDAO extends DAO
{


    public function __construct()
    {
        parent::__construct();   
     }

    public function insert(ProdutoCategoriaModel $model)
    {
           $sql = "INSERT INTO produto_categoria (descricao) VALUES (?) ";

  $stmt = $this->conexao->prepare($sql);


        $stmt->bindValue(1, $model->descricao);
        $stmt->execute();
    }


  
    public function update(ProdutoCategoriaModel $model)
    {
        $sql = "UPDATE produto_categoria SET  descricao=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }


    public function select()
    {
        $sql = "SELECT * FROM produto_categoria ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }


   
    public function selectById(int $id)
    {


        $sql = "SELECT * FROM produto_categoria WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\ProdutoCategoriaModel"); 
    }


   
    public function delete(int $id)
    {
        $sql = "DELETE FROM produto_categoria WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}