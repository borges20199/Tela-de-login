<?php

if(isset($_POST['submit']))
{

    /*print_r($_POST['nome']);
    print_r('<br>');
    print_r($_POST['email']);
    print_r('<br>');
    print_r($_POST['tel']);
    print_r('<br>');
    print_r($_POST['genero']);
    print_r('<br>');
    print_r($_POST['data_nascimento']);
    print_r('<br>');
    print_r($_POST['cidade']);
    print_r('<br>');
    print_r($_POST['estado']);
    print_r('<br>');
    print_r($_POST['endereco']);*/

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $genero = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco,senha) 
    VALUES('$nome','$email','$tel','$genero','$data_nasc','$cidade','$estado','$endereco','$senha')");
    
}
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario | MB </title>
    <style>
        body{
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;            
            background-color: black;
        }
        .box{
            position: absolute; 
            top: 50%;
            left:50%;
            transform:translate(-50%,-50%);
            background-color: rgba(207, 207, 207, 0.3);
            padding: 15px;
            border-radius: 15px;
            width:20%;
            color: rgb(0, 0, 0);
        }
        fieldset{
            border: 3px solid darkorchid;

        }
        legend{
            border: 1px solid darkorchid;
            padding: 10px;
            text-align: center;
            background-color: darkorchid;
            border-radius: 5px;
            color:white;
            
            
        }
        .inputbox{
            position: relative;

        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            /*letter-spacing: 1px;*/
        }
        .labelInput{
            position: absolute;
            top:0px;
            left:0px;
            pointer-events:none;
            transition: .5s;
            color:white;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top:-20px;
            font-size:12px;
            color: darkorchid;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 5px;
            outline: none;
            font-size:15px

        }
        #submit{
            background-image: linear-gradient(to right,rgb(90,20,220), rgb(0,92,197),rgb(90,20,220));
            width:100%;
            border-radius: 15px;
            border: none;
            outline: none;
            padding:15px;
            color: white;
            font-size: 15px;
            cursor: pointer;

    
}

    </style>
</head>
<body>
<a href="home.php">Página Anteriro</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br>
                <div class="inputbox">
                    <input type = "text" name = "nome" id = "nome" class ="inputUser" required>
                    <label for="name" class="labelInput">Nome completo</label>
                </div>
                <br>
                <div class="inputbox">
                    <input type = "text" name = "email" id = "email" class ="inputUser" required>
                    <label for="email"class="labelInput">E-mail</label>
                </div>
                <br>
                <div class="inputbox">
                    <input type = "password" name = "senha" id = "senha" class ="inputUser" required>
                    <label for="senha"class="labelInput">Senha</label>
                </div>
                <br>
                <div class="inputbox">
                    <input type = "tel" name = "tel" id = "tel" class ="inputUser" required>
                    <label for="tel"class="labelInput">Telefone</label>
                </div>
    
                <p> Sexo:</p>
                <input type="radio" id = "feminino" name = "genero" value ="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id = "masculino" name = "genero" value ="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id = "outros" name = "genero" value ="outros" required>
                <label for="outros">Outro</label>
                <br>
                <br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type = "date" name = "data_nascimento" id = "data_nascimento" required>
                <br><br><br>
                <div class="inputbox">
                    <input type = "text" name = "cidade" id = "cidade" class ="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br>
                <div class="inputbox">
                <input type = "text" name = "estado" id = "estado" class ="inputUser" required>
                <label for="estado" class="labelInput">Estado</label>
                </div>
                <br>
                
                <div class="inputbox">
                <input type = "text" name = "endereco" id = "endereco" class ="inputUser" required>
                <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br>
                <input type="submit" name = "submit" id="submit">
            </fieldset>
        </form>
    </div>
    
</body>
</html> 