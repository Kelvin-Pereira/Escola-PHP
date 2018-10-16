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
    <form action="../../../app/controller/responsavel/responsavelController.php" method="post">
        <div class="row col-md-12">
        <div class="col-md-3">
        </div>
            <div class="col-md-6">
                <input type="text" name="nome" class="form-control"  placeholder="Nome Responsavel" required><br>
                <input type="number" name="telefone" class="form-control"  placeholder="Telefone" ><br>
                <input type="date" name="data" class="form-control"  placeholder="Data Nascimento" required> <br>
                <input type="text" name="endereco" class="form-control"  placeholder="Endereço" > <br>
                <select class="form-control"  name="sexo" required>
                <option value="">Sexo</option>
                <option value="F">Feminino</option>
                <option value="M">Masculino</option>
                </select>  <br>
                    <div align="right">
                        <button type="submit" class="btn btn-success text-white" value="Salvar" name="salvar">Salvar</button>    
                    </div>
            </div>                             
        </div>                                   
    </form>            
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