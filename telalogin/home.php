<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE | MB </title>
    <style>
        body{
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background: black;
            text-align: center;
            color: white;
            font-size:22px;
        }
        .box{
            position:absolute;
            top: 50%;
            left:50%;
            transform: translate(-50%,-50%);
            background-color: rgba(207, 207, 207, 0.3);
            padding: 35px;
            border-radius:15px; 
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid darkorchid; 
            padding:18px;
            border-radius:13px;
        }
        a:hover{
            background-color: darkorchid;


        }
    </style>
</head>
<body>
    <h1>BEM VINDO A ÁREA DE ACESSO</h1>
    <h2>Faça o login ou cadastres-se para acessar</h2>
    <div class="box">
        <a href="telalogin.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
        
    </div>
    
</body>
</html>