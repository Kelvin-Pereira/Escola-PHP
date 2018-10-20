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
       
        $conexao = new Conexao();

        $sql = ("DELETE FROM aluno WHERE id_aluno = '$id';");
        return $conexao->executar($sql);

    }
    public function EditarAluno(){
        echo $id = $_GET['id'];
       // $id = $_GET['id'];
       
        $conexao = new Conexao();

        $sql = ("SELECT * FROM aluno WHERE id_aluno = '$id';");
        return $conexao->EditarAluno($sql);

    }
    public function ExcluirAluno_Responsavel(){

        $id = $_GET['id'];
       
       
        $conexao = new Conexao();
        
        $sql = ("DELETE FROM aluno WHERE id_curso = '$id';");
        return $conexao->executar($sql);

    }
    //está sendo usado pela controller do responsavel
    public function removeresponsavel(){

        $id = $_GET['id'];
        
        $conexao = new Conexao();

        $sql = ("DELETE FROM aluno WHERE id_responsavel = '$id';");
        return $conexao->executar($sql);

    }
    public function SalvarUpAluno(){

        $nome = $_POST['nome'];
        $tel = $_POST['telefone'];
        $data = $_POST['data'];
        $endereco = $_POST['endereco'];
        $sexo = $_POST['sexo'];
        $curso = $_POST['curso'];
        $matricula = $_POST['matricula'];
        $nota = $_POST['nota'];
        $responsavel = $_POST['responsavel'];
        $id = $_POST['Aluno_id'];
  
        $conexao = new Conexao();

        $sql = ("UPDATE aluno SET matricula = '$matricula', nome = '$nome', telefone = '$tel', endereco = '$endereco', data_nascimento = '$data', sexo = '$sexo', id_responsavel = '$responsavel', id_curso = '$curso', nota = '$nota' WHERE (id_aluno = '$id');");
        return $conexao->executar($sql);

    }



}




?>