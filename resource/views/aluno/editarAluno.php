<?php 
session_start();
include_once '../../../app/model/responsavel/responsavelModel.php';
$responsavel = new Responsavel;
$aresponsavel = $responsavel->ListarTudo();

$Aretorno = $_SESSION['retornoAluno'];
unset($_SESSION['retornoAluno']);
foreach ($Aretorno as $aux) {
    $matricula = $aux['matricula'];
    $nome = $aux['nome'];
    $telefone = $aux['telefone'];
    $endereco = $aux['endereco'];
    $dataNasc = $aux['data_nascimento'];
    $sexo = $aux['sexo'];
    $nota = $aux['nota'];
    $id = $aux['id_aluno'];
}
if(!$Aretorno){
    header('Location: ../../../resource/views/aluno/listarAlunos.php');
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
                <input type="text" name="nome" value="<?php echo $nome; ?>" class="form-control"  placeholder="Nome Aluno" required><br>
                <input type="number" name="matricula" value="<?php echo $matricula; ?>" class="form-control"  placeholder="Matricula" required><br>
                <input type="text" name="nota" value="<?php echo $nota; ?>" class="form-control"  placeholder="Nota" ><br>
                <input type="text" name="telefone" value="<?php echo $telefone; ?>" class="form-control"  placeholder="Telefone" ><br>
                <input type="date" name="data" value="<?php echo $dataNasc; ?>"  class="form-control"  placeholder="Data Nascimento" required> <br>
                <input type="text" name="endereco" value="<?php echo $endereco; ?>" class="form-control"  placeholder="Endereço" > <br>
                <select class="form-control"  name="sexo" required>
                <option value="<?php echo $sexo; ?>">Sexo</option>
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
                <input type="hidden" value="<?php echo"$id";  ?>" name="Aluno_id">
                <a href="listarAlunos.php" class="btn btn-primary">Volvar</a>
                <button type="submit" class="btn btn-success text-white" value="Salvar" name="upAluno">Salvar</button>     
            </div><br><br>
            </div>                             
        </div>                                   
    </form>            
</div>
   



</div>
</body>
</html>