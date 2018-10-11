<?php
include_once '../../../app/model/aluno/alunoModel.php';
$resposta = new aluno();
$aResposta = $resposta->ListarTudo();

include_once '../../../app/model/responsavel/responsavelModel.php';
$responsavel = new Responsavel;
$aresponsavel = $responsavel->ListarTudo();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!--style-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
     

    <title>Alunos</title>
</head>
<body>
    <?php
    include_once '../navbar/navbar.php';
    ?><br>

    <div class="container">
    
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#demoModal">Novo Aluno</button>

        <h1>Alunos</h1>
        <table class="table  table-striped table-bordered table-hover">
            <tr >
                <th>ID</th>
                <th>Nome aluno</th>
                <th >açao</th>
                
            </tr>


            <?php   foreach ($aResposta as $resposta):
                  echo '  <tr>
                            <td>'.$resposta['id_aluno'].'</td>
                            <td>'.$resposta['nome'].'</td> 
                            <td align="center" >
                                <form action="../../../app/controller/aluno/alunoController.php" >  
                                                                            
                                    <button type="submit" class="btn btn-warning text-white" value="'.$resposta['id_aluno'].'" name="editar"><img src="../../assets/image/icons/edit.svg" height="25" width="25" /></button>                                               
                                    <button type="submit" class="btn btn-danger" value="'.$resposta['id_aluno'].'" name="Excluir" >Excluir</button>
                                </form>
                            </td>
                            </tr>';
            endforeach; ?>

    </table>

    <!-- Modal -->
    <div class="modal fade" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cadastro de aluno</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../../../app/controller/aluno/alunoController.php" method="post">
        <div class="row col-md-12">
        <div class="col-md-1">
        </div>
            <div class="col-md-11">
                <input type="text" name="nome" class="form-control"  placeholder="Nome Aluno" required><br>
                <input type="number" name="matricula" class="form-control"  placeholder="Matricula" required><br>
                <input type="text" name="nota" class="form-control"  placeholder="Nota" ><br>
                <input type="number" name="telefone" class="form-control"  placeholder="Telefone" ><br>
                <input type="date" name="data" class="form-control"  placeholder="Data Nascimento" required> <br>
                <input type="text" name="endereco" class="form-control"  placeholder="Endereço" > <br>
                <select class="form-control"  name="sexo" required>
                <option value="">Sexo</option>
                <option value="F">Feminino</option>
                <option value="M">Masculino</option>
                </select> <br> 
                <select class="form-control"  name="curso" required>
                <option value="">Curso</option>
                <option value="1">PHP</option>
                <option value="2">Banco de Dados</option>
                <option value="3">Redes</option>
                <option value="4">Administraçâo</option>
                <option value="6">Redes de computadores</option>
                <option value="10">Siste de Informação</option>
                <option value="11">Test</option>
                </select>  <br>
                <select class="form-control"  name="responsavel" >
                <option value="">responsavel</option>
                <?php 
                foreach($aresponsavel as $aux):
                    echo'<option value='.$aux['id_responsavel'].'>'.$aux['nome'].'</option>';
                endforeach;
                ?>
                </select>  
          
            </div>                             
        </div>                                   
      </div>
      <div class="modal-footer">
        <div align="right">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-success text-white" value="Salvar" name="salvar">Salvar</button>     
          </div>
      </div>
    </form>            
    </div>
  </div>
</div>


 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</div>
</body>
</html>