<?php
// As classes Controller são responsáveis por responder os comandos do usuário mostando a View
namespace App\Controller;
use App\Model\ProdutoModel;

class ProdutoController extends Controller
{
    
  
    
    public static function index()
    {
        parent::isAuthenticated();

        $model = new ProdutoModel(); 
        $model->getAllRows(); 

        parent::render('Produto/ListaProdutos', $model);
     }

// Devolverá o formulário ao usuário
  
    public static function form()
    {
        parent::isAuthenticated();

        $model = new ProdutoModel();

        if(isset($_GET['id'])) 
            $model = $model->getById( (int) $_GET['id']);
            
      parent::render('Produto/FormProduto', $model);
     }
  //Preencherá uma Model para que as informações sejam enviadas para o banco de dados para serem salvas.

    public static function save()
    {
        parent::isAuthenticated();

        // incluirá as informações do arquivo Model.

        // Abaixo cada propriedade do objeto será postada com os dados informados pelo usuário no formulário 
       $model = new ProdutoModel();

       $model->id =  $_POST['id'];
       $model->nome = $_POST['nome'];
       $model->descricao = $_POST['descricao'];
       $model->marca = $_POST['marca'];
       $model->valor = $_POST['valor'];
       $model->save(); // Chamará o método save da Model.


       header("Location: /produto"); // Redirecionará o usuário para outra rota.
    }


    public static function delete()
    {
     
        parent::isAuthenticated();

        $model = new ProdutoModel();

        $model->delete( (int) $_GET['id'] ); 
        header("Location: /produto"); 
      }
}