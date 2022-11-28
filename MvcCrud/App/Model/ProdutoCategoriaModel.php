<?php
namespace App\Model;
use App\DAO\ProdutoCategoriaDAO;

class ProdutoCategoriaModel extends Model
{
    public $id, $descricao;
    

    public function save()
    {
      
        $dao = new ProdutoCategoriaDAO(); 

        if(empty($this->id))
        {
           
            $dao->insert($this);

        } else {

            $dao->update($this);  }        
    }


   
    public function getAllRows()
    {
         
          $dao = new ProdutoCategoriaDAO();

        $this->rows = $dao->select();
    }


   
    public function getById(int $id)
    {
  

        $dao = new ProdutoCategoriaDAO();

        $obj = $dao->selectById($id);

         return ($obj) ? $obj : new ProdutoCategoriaModel(); 

    }


   
    public function delete(int $id)
    {
     

        $dao = new ProdutoCategoriaDAO();

        $dao->delete($id);
    }
}