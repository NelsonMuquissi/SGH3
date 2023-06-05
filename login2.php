<?php

if(isset($_POST['submite'])){
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    if($usuario == "Administrador" & $password == "1234"){
        header("Location: intro.php");
    }else{
        header("Location: index.php");
    }
    
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <main>
        <div class="texto">
        <h1 style="margin-left: 90%; margin-bottom:0%; cursor:pointer; text-decoration:none;"><a style="text-decoration: none; color: #333;" href="index.html">&times;</a></h1>
            <h2 style="margin-bottom: 7px;">Tela de Login</h2>

        </div>
        <div class="principal">
            <form action="" method="post">
            <label for="text">Usuario:</label>
            <select style="height: 40px; text-align: center; margin-left:18px;" name="usuario" id="">
                    <option value="Administrador">Administrador</option>
                    <option value="Administrador">Public</option>
                </select><br><br><br><br><br>
                <label for="text">Password:</label>
                <input style="width:300px; height:40px; text-align:center; margin-left:18px;" class="nome" type="password" name="password" id=""><br>
               
                <input style=" margin-left:20px; margin-top:10%; width: 300px; height:40px; cursor:pointer; background-color:green; color:aliceblue;" type="submit" name="submite" value="Logar">
               
            </form>
        </div>
    </main>

</body>
</html>