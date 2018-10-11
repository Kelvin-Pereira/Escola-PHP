<?php
include_once '../../../app/model/responsavel/responsavelModel.php';
$resposta = new Responsavel();
$aResposta = $resposta->ListarTudo();

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
    <title>Responsavel</title>
</head>
<body>
    <?php
    include_once '../navbar/navbar.php';
    ?>

    <div class="container">
    <br><br><br><a class="btn btn-primary" href="../formulario/cadastroResponsavel.php" role="button">Novo Responsavel</a>
  <h1>Responsaveis</h1>
  <table class="table  table-striped table-bordered table-hover">
            <tr>
                <th>ID</th>
                <th>Nome Responsavel</th>
                <th>açao</th>
                
            </tr>


            <?php   foreach ($aResposta as $resposta):
                  echo '<tr>
                            <td>'.$resposta['id_responsavel'].'</td>
                            <td>'.$resposta['nome'].'</td>
                                <td align="center" >
                                        <form action="../../../app/controller/responsavel/responsavelController.php" >
                                            <button type="submit" class="btn btn-warning text-white" value="'.$resposta['id_responsavel'].'" name="editar">Editar</button>                                               
                                            <button type="submit" class="btn btn-danger" value="'.$resposta['id_responsavel'].'" name="excluir" >Excluir</button>
                                        </form>                 
                                </td>
                        
                        </tr>';
            endforeach; ?>

    </table>


</div>
</body>
</html>