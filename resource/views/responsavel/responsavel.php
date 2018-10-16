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

         <!--tem que ficar em cima-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../assets/css/navbarcolor.css">
    <title>Responsavel</title>
</head>
<body>
    <?php
    include_once '../navbar/navbar.php';
    ?>

    <div class="container">
    <br><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#responsavel">Novo Responsavel</button>
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

<!-- Modal -->
<div class="modal fade" id="responsavel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Novo Responsavel</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
        <form action="../../../app/controller/responsavel/responsavelController.php" method="post">
            <div class="row col-md-12">
            <div class="col-md-1">
            </div>
                <div class="col-md-11">
                    <input type="text" name="nome" class="form-control"  placeholder="Nome Responsavel" required><br>
                    <input type="number" name="telefone" class="form-control"  placeholder="Telefone" ><br>
                    <input type="date" name="data" class="form-control"  placeholder="Data Nascimento" required> <br>
                    <input type="text" name="endereco" class="form-control"  placeholder="Endereço" > <br>
                    <select class="form-control"  name="sexo" required>
                    <option value="">Sexo</option>
                    <option value="F">Feminino</option>
                    <option value="M">Masculino</option>
                    </select>  <br>
                        
                </div>                             
            </div>                                   
    </div>
    <div class="modal-footer">
    <div align="right">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-success text-white" value="Salvar" name="salvar">Salvar</button>    
    </div>
        </form>  
    </div>
  </div>
</div>
</div>


</div>
</body>
</html>