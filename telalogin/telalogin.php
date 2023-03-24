<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body{
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background-color: black;
        }
        div{
            background-color: rgba(207, 207, 207, 0.3);
            position: absolute;
            top: 50%;
            left:50%;
            transform: translate(-50%, -50%);
            padding: 70px;
            border-radius: 15px;
            color: white
        }
        input{
            padding: 13px;
            border: none;
            outline: none;
            font-size: 18px;
        }
        .inputSubmit{
            background-color: darkorchid;
            border: none;
            outline: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color:white;
            font-size: 20px;
        }
        .inputSubmit:hover{
            background-color: #88169e;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <a href="home.php">Página Anteriro</a>
    <div>
        <h1> Login </h1>
        <form action="testeLogin.php"method="POST">
        <input type="texte" name = "email" placeholder = "E-mail">
        <br><br>
        <input type="password" name = "senha" placeholder = "Senha"> 
        <br><br>
        <input class ="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>