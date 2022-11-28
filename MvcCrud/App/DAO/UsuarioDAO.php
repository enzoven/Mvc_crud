<?php
//As classes DAO são responsáveis por executar o SQL em conjunto com o banco de dados.
namespace App\DAO;
use App\Model\UsuarioModel;
use \PDO;
class UsuarioDAO extends DAO
{
    // Propriedade da classe que  armazenará o link de conexão com o banco de dados.

    

    public function __construct()
    {    
        parent::__construct();   
     
    }

   // Metódo que irá inserir as informações da Model no Banco de dados
    public function insert(UsuarioModel $model)
    {
           $sql = "INSERT INTO usuario (nome, email, senha) VALUES (?, ?, ?, sha1(?)) ";

            
        //Declaração da variável stmt que conterá a montagem da consulta. Observe que
        // estamos acessando o método prepare dentro da propriedade que guarda a conexão
        // com o MySQL, via operador seta "->". Isso significa que o prepare "está dentro"
        // da propriedade $conexao e recebe nossa string sql com os devidor marcadores.

  $stmt = $this->conexao->prepare($sql);


        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->senha);
      
        $stmt->execute();
    }


  
    public function update(UsuarioModel $model)
    {
        $sql = "UPDATE produto SET nome=?, email=?, senha=sha1(?) WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->senha);
        $stmt->bindValue(4, $model->id);
        $stmt->execute();
    }


    public function select()
    {
        $sql = "SELECT * FROM usuario ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }


   
    public function selectById(int $id)
    {
        

        $sql = "SELECT * FROM usuario WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    
        return $stmt->fetchObject("App\Model\UsuarioModel"); 
    }


   
    public function delete(int $id)
    {
        $sql = "DELETE FROM usuario WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}