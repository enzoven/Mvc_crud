<?php

namespace App\Controller;
use App\Model\ProdutoCategoriaModel;

class ProdutoCategoriaController extends Controller
{
    
    public static function index()
    {
        parent::isAuthenticated();

        $model = new ProdutoCategoriaModel(); 
        $model->getAllRows(); 

        parent::render('ProdutoCategoria/ListaProdutoCategoria', $model);
     }


  
    public static function form()
    {
        parent::isAuthenticated();

        $model = new ProdutoCategoriaModel();

        if(isset($_GET['id'])) 
            $model = $model->getById( (int) $_GET['id']); 
            
                
            parent::render('ProdutoCategoria/FormProdutoCategoria', $model);
     }


    public static function save()
    {
        parent::isAuthenticated();

       $model = new ProdutoCategoriaModel();

       $model->id =  $_POST['id'];
       $model->descricao = $_POST['descricao'];
       $model->save(); 

       header("Location: /produtocategoria"); 
    }


    public static function delete()
    {

        parent::isAuthenticated();

        $model = new ProdutoCategoriaModel();

        $model->delete( (int) $_GET['id'] ); 
        header("Location: /produtocategoria"); 
      }
}