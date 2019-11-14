<?php
namespace LOJA\includes;

class Seguranca{
  
    public static function restritoAdm(){
        if(!isset($_SESSION['usuarioid'])){
            header("location: http://localhost/loja2/login/adm");
        }
    }
}