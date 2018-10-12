<?php

include_once '../../model/curso/cursoModel.php';

$curso = new Curso();

if(!empty($_POST['nvcurso']))
{
    //var_dump($_POST);
    $curso->salvar($_POST);
    header('Location: ../../../resource/views/curso/curso.php');
    
}elseif (!empty($_GET['excluir'])) {

    //$aluno->...($_GET);
    $curso->remove($_GET);
    header('Location: ../../../resource/views/curso/curso.php');
}
else{
    echo "Se chegou aqui é porque deu Erro: ";
}

?>