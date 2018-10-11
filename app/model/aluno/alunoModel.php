<?php

include_once '../../../database/conexao.php';

class aluno{

    public function ListarTudo()
    // logica para listar todos os usúadio do banco
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM aluno ";
        return $conexao->recuperarDados($sql);
    
    }//end

    public function salvar()
    // logica para salvar os usúadio do banco
    {
        $nome = $_POST['nome'];
        $tel = $_POST['telefone'];
        $data = $_POST['data'];
        $endereco = $_POST['endereco'];
        $sexo = $_POST['sexo'];
        $curso = $_POST['curso'];
        $matricula = $_POST['matricula'];
        $nota = $_POST['nota'];
        $responsavel = $_POST['responsavel'];

        $conexao = new Conexao();

        $sql = ("INSERT INTO aluno (matricula, nome, telefone, endereco, data_nascimento, sexo, id_responsavel ,id_curso, nota)
        VALUES ('$matricula','$nome','$tel','$endereco','$data','$sexo','$responsavel','$curso','$nota');");
        var_dump($sql);
        return $conexao->executar($sql);
        
    }//end

    public function remove(){

        $id = $_GET['id'];
        echo $id;
        $conexao = new Conexao();

        $sql = ("DELETE FROM aluno WHERE id_aluno = '$id';");
        return $conexao->executar($sql);

    }
    public function removeresponsavel(){

        $id = $_GET['excluir'];
        echo $id;
        $conexao = new Conexao();

        $sql = ("DELETE FROM aluno WHERE id_responsavel = '$id';");
        return $conexao->executar($sql);

    }



}




?>