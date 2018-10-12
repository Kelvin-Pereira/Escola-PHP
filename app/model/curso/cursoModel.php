<?php

include_once '../../../database/conexao.php';

class Curso{

    public function ListarTudo(){

        $conexao = new Conexao();

        $sql = "SELECT * FROM curso ";
        return $conexao->recuperarDados($sql);
    
    }//end
    public function remove() {

       echo $id = $_GET['excluir'];

        $conexao = new Conexao();

        $sql = "DELETE FROM responsavel WHERE id_responsavel = '$id';";
        return $conexao->executar($sql);
    
    }//end
    public function salvar() {

        $curso = $_POST['nvcurso'];
     
        $conexao = new Conexao();

        $sql = "INSERT INTO curso (nome) VALUES ('$curso' );";
        return $conexao->executar($sql);
    
    }//end




}


?>