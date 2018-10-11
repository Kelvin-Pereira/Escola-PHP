<?php

include_once '../../model/aluno/alunoModel.php';

$alunoModel = new aluno();

if(!empty($_POST['salvar']))
{
    //var_dump($_POST);

    $alunoModel->salvar($_POST);
    header('Location: ../../../resource/views/aluno/listarAlunos.php');
    
    
}elseif (!empty($_GET['id'])) {

        
    $alunoModel->remove($_GET);
    header('Location: ../../../resource/views/aluno/listarAlunos.php');
}
else{
    echo "Se chegou aqui é porque deu Erro: ";
}

?>