<?php

include_once '../../model/responsavel/responsavelModel.php';
include_once '../../model/aluno/alunoModel.php';

$resposavel = new Responsavel();
$aluno = new aluno();

if(!empty($_POST['salvar']))
{
    $resposavel->salvar($_POST);
    header('Location: ../../../resource/views/responsavel/responsavel.php');
    
}elseif (!empty($_GET['excluir'])) {

    $aluno->removeresponsavel($_GET);
    $resposavel->remove($_GET);
    header('Location: ../../../resource/views/responsavel/responsavel.php');
}
else{
    echo "Se chegou aqui é porque deu Erro: ";
}

?>