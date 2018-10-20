<?php
session_start();
include_once '../../model/aluno/alunoModel.php';
$alunoModel = new aluno();

if(!empty($_POST['salvar']))
{
    //var_dump($_POST);

    $alunoModel->salvar($_POST);
    header('Location: ../../../resource/views/aluno/listarAlunos.php');
    
    
}elseif (!empty($_POST['upAluno'])) {

       
    $alunoModel->SalvarUpAluno($_POST);
    header('Location: ../../../resource/views/aluno/listarAlunos.php');

}elseif (!empty($_GET['acao'] == "excluir")) {

        
    $alunoModel->remove($_GET);
    header('Location: ../../../resource/views/aluno/listarAlunos.php');

}elseif (!empty($_GET['acao'] == "editar")) {

       
    $alunoModel->EditarAluno($_GET);
    header('Location: ../../../resource/views/aluno/editarAluno.php');

}else{
    echo "Se chegou aqui é porque deu Erro: ";
}

?>