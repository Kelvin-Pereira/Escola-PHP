<?php

include_once '../../../database/conexao.php';

class Curso{

    public function ListarTudo(){

        $conexao = new Conexao();

        $sql = "SELECT * FROM curso; ";
        return $conexao->recuperarDados($sql);
    
    }//end
    public function remove() {

        $id = $_GET['id'];

        $conexao = new Conexao();

        $sql = "DELETE FROM curso WHERE id_curso = '$id';";
        return $conexao->executar($sql);
    
    }//end
    //pesquisa no banco e retora para quem chamou
    public function editar() {

        $id = $_GET['id'];

        $conexao = new Conexao();

        $sql = "SELECT * FROM curso WHERE id_curso = '$id';";
        $_SESSION['curso'] = $resposta = $conexao->recuperarDados($sql);
        
    
    }//end
    public function salvar() {

        $curso = $_POST['nvcurso'];
     
        $conexao = new Conexao();

        $sql = "INSERT INTO curso (nome) VALUES ('$curso' );";
        return $conexao->executar($sql);
    
    }//end
    public function salvarUp() {

        $idCurso = $_POST['idCurso'];
        $nameCurso = $_POST['nameCurso'];
     
        $conexao = new Conexao();

        $sql = "UPDATE curso SET nome = '$nameCurso' WHERE (id_curso = '$idCurso');";
        return $conexao->executar($sql);
    
    }//end


}


?>