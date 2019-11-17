<?php 
    session_start();

    require "includes/autoload.php";
    // capturando os dados da url
    // Ex.: http://localhost/lojavirtual/admin/departamento/cadastrar/listar
    // model = departamento & action=listar
    // começa a contar do adin, pois o htaccess está na raiz

    $router = $_GET['model'].$_GET['action'];
    // router = departamento/cadastrar/listar

    $view = "";

    // config
    $url = "http://localhost/senac/modelo-de-negocio";

    switch($router){

        case 'categoriacadastrar':            
            $obj = new \LOJA\API\CategoriaCadastrar;
            $msg = $obj->msg;
            $view = "form-categoria.php";
        break;

        case 'categorialistar':
            \LOJA\includes\Seguranca::restritoAdm();
            $obj = new \LOJA\API\CategoriaListar;            
            $lista = $obj->lista;
            $view = "lista-categoria.php";
        break;

        case 'categoriavisualizar':
            $obj = new \LOJA\API\CategoriaVisualizar; 
            $categoria = $obj->dados;
            $view = "visualiza-categoria.php";
        break;
        
        case 'clientecadastrar':        
            $obj = new \LOJA\API\ClienteCadastrar;
            $msg = $obj->msg;
            $view = "form-cliente.php";
        break;
            // admin/cliente/listar
        case 'clientelistar':
            $obj = new \LOJA\API\ClienteListar;            
            $lista = $obj->lista;
            $view = "lista-cliente.php";
        break;
           
        case 'clientevisualizar':
            $obj = new \LOJA\API\ClienteVisualizar; 
            $cliente = $obj->cliente;
            $view = "visualiza-cliente.php";
        break;
        case 'produtocadastrar':
        
            $obj = new \LOJA\API\ProdutoCadastrar;
            $msg = $obj->msg;

            $obj2 = new \LOJA\API\CategoriaListar;                ;
            $lista = $obj2->lista;

            $view = "form-produto.php";
        break;
        case 'produtolistar':
            $obj = new \LOJA\API\ProdutoListar;            
            $lista = $obj->lista;
            $view = "lista-produto.php";
        break;
        case 'usuariocadastrar':
            $obj = new \LOJA\API\UsuarioCadastrar;
            $msg = $obj->msg;
            $view = "form-usuario.php";
        break;
        case 'usuariolistar':
            $obj = new \LOJA\API\UsuarioListar;
            $lista = $obj->lista;
            $view = "lista-usuario.php";
        break;

        case 'usuariovisualizar':
            $obj = new LOJA\API\UsuarioVisualizar;
            $usuario = $obj->dados;
            $view = "visualiza-usuario.php";
        break;

        case 'fornecedorcadastrar':
            $obj = new LOJA\API\FornecedorCadastrar;
            $msg = $obj->msg;
            $view = "form-fornecedor.php";
        break;
        
        case 'fornecedorlistar':
            $obj = new LOJA\API\FornecedorListar;
            $lista = $obj->lista;
            $view = "lista-fornecedor.php";
        break;

        case 'fornecedorvisualizar':
            $obj = new LOJA\API\FornecedorVisualizar;
            $fornecedor = $obj->dado;            
            $view = "visualiza-fornecedor.php";
        break;

        case 'loginadm':
            $obj = new \LOJA\API\UsuarioLogar;
            $msg = $obj->msg;
            $view = 'form-login-adm.php';
        break;
        case 'painellogoff':
            $obj = new \LOJA\API\UsuarioLogoff;
            $view = 'form-login-adm.php';
        break;
        case 'paineladm':
            $view = 'painel-adm.php';
        break;

        default:
        $view = "home.php";
        break; 
    }

  
    include "view/{$view}";
  
?>