<?php
// As classes Controller são responsáveis por responder os comandos do usuário mostando a View
namespace App\Controller;
use App\Model\UsuarioModel;

class UsuarioController extends Controller
{
    
  
    
    public static function index()
    {
        

        $model = new UsuarioModel(); 
        $model->getAllRows(); 

        parent::render('Usuario/ListaUsuarios', $model);
     }

// Devolverá o formulário ao usuário
  
    public static function form()
    {
       

        $model = new UsuarioModel();

        if(isset($_GET['id'])) 
            $model = $model->getById( (int) $_GET['id']);
            
      parent::render('Usuario/FormUsuario', $model);
     }
  //Preencherá uma Model para que as informações sejam enviadas para o banco de dados para serem salvas.

    public static function save()
    {
       

        // incluirá as informações do arquivo Model.

        // Abaixo cada propriedade do objeto será postada com os dados informados pelo usuário no formulário 
       $model = new UsuarioModel();

       $model->id =  $_POST['id'];
       $model->nome = $_POST['nome'];
       $model->email = $_POST['email'];
       $model->senha = $_POST['senha'];
    
       $model->save(); // Chamará o método save da Model.


       header("Location: /usuario"); // Redirecionará o usuário para outra rota.
    }


    public static function delete()
    {
     
        

        $model = new UsuarioModel();

        $model->delete( (int) $_GET['id'] ); 
        header("Location: /usuario"); 
      }
}