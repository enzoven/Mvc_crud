<?php
namespace App\Model;
use App\DAO\UsuarioDAO;

class UsuarioModel extends Model
{
    // Irá declarar as propriedades de acordo com a tabela do banco de dados
    public $id, $nome, $email;
    public $senha;

  
    // Irá chamar a DAO para salvar as informações no banco de dados da model preenchida
    public function save()
    {
       

        $dao = new UsuarioDAO(); 

        if(empty($this->id))
        {
           
            $dao->insert($this);

        } else {

            $dao->update($this);  }        
    }


  
    public function getAllRows()
    {
     
        // Instanciará a classe ProdutoDAO 
          $dao = new UsuarioDAO();
// Selecionará  os registros obtidos da getAllRows e guardará na propriedade  $rows
        $this->rows = $dao->select();
    }


// Selecionará as informações pelo id obtidos da DAO   
    public function getById(int $id)
    {
      
        $dao = new UsuarioDAO();

        $obj = $dao->selectById($id);

         return ($obj) ? $obj : new UsuarioModel(); 

    }


   
    public function delete(int $id) // Irá deletar uma DAO que será direcionado para o banco de dados para deletar as informações
    {
        $dao = new UsuarioDAO();

        $dao->delete($id);
    }
}