<?php
session_start();
include_once '../../model/curso/cursoModel.php';
$curso = new Curso();

include_once '../../model/aluno/alunoModel.php';
$alunoModel = new aluno();

if(!empty($_POST['nvcurso'])){

    //var_dump($_POST);
    $curso->salvar($_POST);
    header('Location: ../../../resource/views/curso/curso.php');
    
}elseif (!empty($_GET['acao'] == "salvarUp")) {

    
    $curso->salvarUp($_POST);
    header('Location: ../../../resource/views/curso/curso.php');

}elseif (!empty($_GET['acao'] == "excluir")) {
    
    $alunoModel->ExcluirAluno_Responsavel($_GET);
    $curso->remove($_GET);
    header('Location: ../../../resource/views/curso/curso.php');
    
}elseif (!empty($_GET['acao'] == "editar")) {
    
    $curso->editar($_GET);
    header('Location: ../../../resource/views/curso/editarCurso.php');
    
}
else{
    echo "Se chegou aqui é porque deu Erro: ";
}

?>