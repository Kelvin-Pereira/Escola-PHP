<?php
session_start();

$Aresponsavel =  $_SESSION['responsavel'];
unset($_SESSION['responsavel']);
foreach ($Aresponsavel as $aux) {
    $id_responsavel = $aux['id_responsavel'];
    $nome = $aux['nome'];
    $telefone = $aux['telefone'];
    $data_nascimento = $aux['data_nascimento'];
    $endereco = $aux['endereco'];
    $sexo = $aux['sexo'];
}
if(!$Aresponsavel){
    header('Location: ../../../resource/views/responsavel/responsavel.php');
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
    <form action="../../../app/controller/responsavel/responsavelController.php?acao=salvarUp" method="post">
       <center>
       <h1>Responsavel</h1>
       </center>
        <br><div class="row col-md-12">
                <div class="row col-md-3"></div>
                <div class="col-md-7">
                    <input type="text" value="<?php echo $nome ; ?>" name="nome" class="form-control"  placeholder="Nome Responsavel" required><br>
                    <input type="text" value="<?php echo $telefone ; ?>" name="telefone" class="form-control"  placeholder="Telefone" ><br>
                    <input type="date" value="<?php echo $data_nascimento ; ?>" name="data_nascimento" class="form-control"  placeholder="Data Nascimento" required> <br>
                    <input type="text" value="<?php echo $endereco ; ?>" name="endereco" class="form-control"  placeholder="Endereço" > <br>
                    <select class="form-control"  name="sexo" required>
                    <option value="">Sexo</option>
                    <option value="F">Feminino</option>
                    <option value="M">Masculino</option>
                    </select>  <br>

                    <div align="right">
                        <input type="hidden" value="<?php echo $id_responsavel ; ?>" name="id_responsavel">
                        <a href="responsavel.php" class="btn btn-primary">Volvar</a>
                        <button type="submit" class="btn btn-success text-white">Salvar</button>    
                    
                    </div>
                </div>
            </div>
    </form>  
</div>

</body>
</html>