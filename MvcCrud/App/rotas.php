<?php

use App\Controller\PessoaController;
use App\Controller\ProdutoController;
use App\Controller\ProdutoCategoriaController;
use App\Controller\LoginController;
use App\Controller\UsuarioController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


switch ($url) {
    case '/login':
        LoginController::index();
    break;

    case '/login/auth':
        LoginController::auth();
    break;

    case '/logout':
        LoginController::logout();
    break;

    case '/':
        echo "página inicial";
        break;

    case '/pessoa':

        PessoaController::index();
        break;

    case '/pessoa/form':
        PessoaController::form();
        break;

    case '/pessoa/form/save':
        PessoaController::save();
        break;

    case '/pessoa/delete':
        PessoaController::delete();
        break;

        case '/usuario':

            UsuarioController::index();
            break;
    
        case '/usuario/form':
            UsuarioController::form();
            break;
    
        case '/usuario/form/save':
            UsuarioController::save();
            break;
    
        case '/usuario/delete':
            UsuarioController::delete();
            break;


    case '/produto':
        ProdutoController::index();
        break;

    case '/produto/form':
        ProdutoController::form();
        break;

    case '/produto/form/save':
        ProdutoController::save();
        break;

    case '/produto/delete':
        ProdutoController::delete();
        break;


    case '/produtocategoria':
        ProdutoCategoriaController::index();
        break;

    case '/produtocategoria/form':
        ProdutoCategoriaController::form();
        break;

    case '/produtocategoria/form/save':
        ProdutoCategoriaController::save();
        break;

    case '/produtocategoria/delete':
        ProdutoCategoriaController::delete();
        break;

    default:
        echo "Erro 404";
        break;
}
