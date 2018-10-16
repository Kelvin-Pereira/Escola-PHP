<?php 
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
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
        <link rel="stylesheet" href="../../assets/css/navbarcolor.css">
    <title>Cadastro de aluno</title>
</head>
<body>
    <?php
    include_once '../navbar/navbar.php';
    ?><br>


<div class="container" align="center">      
    <form action="../../../app/controller/aluno/alunoController.php" method="post">
        <div class="row col-md-12">
        <div class="col-md-3">
        </div>
            <div class="col-md-6">
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
                </select>  <br>
            <div align="right">
                <button type="submit" class="btn btn-success text-white" value="Salvar" name="salvar">Salvar</button>     
            </div>
            </div>                             
        </div>                                   
    </form>            
</div>
   



</div>
</body>
</html>