<?php
include_once 'Conexao.php';

class Post extends Conexao{
    public function criarPost($img, $descricao){
        $db = parent::criarConexao();

        $query = $db->prepare('insert into informacao_post (img, descricao) values(?, ?)');
        return $query->execute([$img, $descricao]);
    }

}


?>