<?php

class DAOCategoria{
    public function cadastrarCategoria(Categoria $categoria){
        $sql = "INSERT INTO categoria VALUES (default, :nome)"; 
        $con = conexao::getInstance()->prepare($sql);
        $con->bindValue(':nome', $categoria->getNome());
        $con->execute();
        return "Cadastrado com Sucesso!";
    }
    public function listaCategoria(){
        $sql = "SELECT * FROM categoria";
        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();

        $lista = array();

        while($categoria = $con->fetch(PDO::FETCH_ASSOC)){
            $lista[] = $categoria;
        }
        return $lista;
    }  
}