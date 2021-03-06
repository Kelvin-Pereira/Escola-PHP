<?php
include_once '../../../app/model/aluno/alunoModel.php';
$resposta = new aluno();
$aResposta = $resposta->ListarTudo();

include_once '../../../app/model/responsavel/responsavelModel.php';
$responsavel = new Responsavel;
$aresponsavel = $responsavel->ListarTudo();

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
     <!--tem que ficar em cima-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="../../assets/css/navbarcolor.css">
    

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
                <th>Matricula</th>
                <th>sexo</th>
                <th>ID Curso</th>
                <th >açao</th>
                
            </tr>


            <?php   foreach ($aResposta as $resposta):
                  echo '<tr>
                            <td>'.$resposta['id_aluno'].'</td>
                            <td>'.$resposta['nome'].'</td> 
                            <td>'.$resposta['matricula'].'</td> 
                            <td>'.$resposta['sexo'].'</td> 
                            <td align="center">'.$resposta['id_curso'].'</td> 
                            <td align="center">  
                                <a  class="btn btn-warning" href="../../../app/controller/aluno/alunoController.php?acao=editar&id='.$resposta['id_aluno'].'" data-edite=""><img src="../../assets/image/icons/edit.svg" height="25" width="25" /></a>
                                <a  class="btn btn-danger" href="../../../app/controller/aluno/alunoController.php?acao=excluir&id='.$resposta['id_aluno'].'" data-confirm=""><img src="../../assets/image/icons/delete.svg" height="25" width="25"  /></a>
                                
                            </td>
                        </tr>
                        
                        ';
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
      <form action="../../../app/controller/aluno/alunoController.php" method="POST">
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
                <option value="">Selecione um Curso</option>
                <?php 
                foreach($aCurso as $aux):
                    echo'<option value='.$aux['id_curso'].'>'.$aux['nome'].'</option>';
                endforeach;
                ?>
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
<!-- end -->



<script src="../../assets/js/confimacaoExcuir.js"></script>


        
</div>
</body>
</html>