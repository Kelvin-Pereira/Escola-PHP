<?php
session_start();
$retorno = $_SESSION['curso'];
unset($_SESSION['curso']);
foreach ($retorno as $aux) {
    $id = $aux['id_curso'];
    $nome = $aux['nome'];
}
if(!$retorno){
    header('Location: ../../../resource/views/curso/curso.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!--style-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../../assets/css/navbarcolor.css">
        <title>Editar Curso</title>
</head>
<body>
    <?php
    include_once '../navbar/navbar.php';
    ?>
<div class="container">
<h1>Nome do curso</h1>
    <form action="../../../app/controller/curso/cursoController.php?acao=salvarUp" method="post">
    <br>
     <input type="text" class="form-control" name="nameCurso" placeholder="Nome Curso" value="<?php echo"$nome";  ?>" require>
     

    <input type="hidden" value="<?php echo"$id";  ?>" name="idCurso">
    <br>
    <div align="right">
    <a href="curso.php" class="btn btn-primary">Volvar</a>
    <button type="submit" class="btn btn-success">Salvar</button>
    </div>
    </form>



</div>


</div>
</body>
</html>