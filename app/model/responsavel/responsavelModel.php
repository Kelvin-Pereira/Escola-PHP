<?php

include_once '../../../database/conexao.php';

class Responsavel{

    public function ListarTudo(){

        $conexao = new Conexao();

        $sql = "SELECT * FROM responsavel ";
        return $conexao->recuperarDados($sql);
    
    }//end
    public function remove() {

       echo $id = $_GET['excluir'];

        $conexao = new Conexao();

        $sql = "DELETE FROM responsavel WHERE id_responsavel = '$id';";
        return $conexao->executar($sql);
    
    }//end
    public function salvar() {

        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $data = $_POST['data'];
        $endereco = $_POST['endereco'];
        $sexo = $_POST['sexo'];
        
        $conexao = new Conexao();

        $sql = "INSERT INTO responsavel (nome,telefone, endereco, data_nascimento, sexo) VALUES ('$nome', '$telefone ', '$endereco','$data', '$sexo');";
        return $conexao->executar($sql);
    
    }//end




}




?>