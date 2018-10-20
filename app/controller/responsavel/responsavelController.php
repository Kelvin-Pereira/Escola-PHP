<?php
session_start();
/**
 * by: kelvin pereira bisera
 * date: 20/10/2018
 * time 00:31
 */

include_once '../../model/responsavel/responsavelModel.php';
include_once '../../model/aluno/alunoModel.php';

$resposavel = new Responsavel();
$aluno = new aluno();

if(!empty($_POST['salvar'])){

    $resposavel->salvar($_POST);
    header('Location: ../../../resource/views/responsavel/responsavel.php');
    
}elseif (!empty($_GET['acao'] == "excluir")) {

    
    $aluno->removeresponsavel($_GET);
    $resposavel->remove($_GET);
    header('Location: ../../../resource/views/responsavel/responsavel.php');
    
}elseif (!empty($_GET['acao'] == "salvarUp")) {

    
    $resposavel->responsavelUp($_POST);
    header('Location: ../../../resource/views/responsavel/responsavel.php');
    
}elseif (!empty($_GET['acao'] == "editar")) {
     
    $resposavel->editarResponsavel($_GET);
    header('Location: ../../../resource/views/responsavel/editarResponsavel.php');

}else{
    echo "Se chegou aqui é porque deu Erro: ";
}

?>