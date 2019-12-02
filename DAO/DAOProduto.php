<?php

namespace LOJA\DAO;
use LOJA\Model\Conexao;
use LOJA\Model\Produto;

class DAOProduto{

    public function cadastrar(Produto $produto){
        $sql = "INSERT INTO produto VALUES (default, :nome, :preco, :imagem, :categoria)";
        
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":nome", $produto->getNome());
        $con->bindValue(":preco", $produto->getPreco());
        $con->bindValue(":imagem", $produto->getImagem());        
        $con->bindValue(":categoria", $produto->getCategoria()->getPk_categoria());
        $con->execute();

        return "PRODUTO SALVO COM SUCESSO";
}

    public function listaProduto(){
        $sql = "SELECT
            produto.nome, 
            produto.preco, 
            produto.imagem, 
            produto.pk_produto AS 'id', 
            categoria.nome AS 'categoria' 
            FROM produto 
            INNER JOIN categoria 
            ON produto.categoria = categoria.pk_categoria";

        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();

        $lista = array();

        while($produto = $con->fetch(\PDO::FETCH_ASSOC)){
            $lista[] = $produto;
        }
        return $lista;
    }
}
?>