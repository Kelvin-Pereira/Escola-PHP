<?php

include_once '../../../app/model/curso/cursoModel.php';
$curso = new Curso;
$aCurso = $curso->ListarTudo();
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
    <title>Curso</title>
</head>
<body>
    <?php
    include_once '../navbar/navbar.php';
    ?>

    <div class="container">

  <h1>Curso</h1>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#NovoCurso">Inserir</button>
    <br><br>
    <table class="table  table-striped table-bordered table-hover">
        <tr>
        <th>ID</th>
        <th>Curso</th>
        </tr>
        <?php   foreach ($aCurso as $resposta):
                  echo '<tr>
                            <td>'.$resposta['id_curso'].'</td>
                            <td>'.$resposta['nome'].'</td> 
                           
                        </tr>';
                endforeach; ?>
    </table>



</div>


    <div class="modal fade" id="NovoCurso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Novo Curso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../../../app/controller/curso/cursoController.php" method="post">
        <input type="text" class="form-control" name="nvcurso" placeholder="Nome Do Curso" required>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary" >Salvar</button>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>