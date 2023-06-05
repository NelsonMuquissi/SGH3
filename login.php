<?php
session_start();

if(isset($_POST['submite'])){
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    if($usuario == "Administrador" & $password == "1234"){
        $_SESSION['usuario'] = $usuario;
        header("Location: Admin.php");
    }else{
        header("Location: ErroTela3/ini.php");
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
    
    <style>
        *{
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
}
body{
    justify-content: center;
    align-items: center;
    background-size: cover;
    display: flex;
    min-height: 100vh;
    background-color: #eee;
}

header {
    width: 100vw;
    height: 100vh;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.4)), url("imagem/Relogio.jpg") no-repeat;
    background-position: bottom;
    background-size: cover;
    align-items: center;
    justify-content: center;
    color: #333;
    display: flex;
}


.principal{
    justify-content: center;
    align-items: center;
}


main{
    text-align: center;
    background-color: #fff7;
    width: 400px;
    height: 400px;
    justify-content: center;
    align-items: center;
    border-radius: 14px;
    box-shadow: 0 .4rem .8rem #0005;
    
}

.texto{
    margin-top: 13px;
    margin-bottom: 80px;
    display:flex;
    margin-left: 70px;
}

.texto .novo{
    margin-left: 60px;
    margin-top: 0px;
    cursor: pointer;
}

.texto .novo a{
   text-decoration: none;
   color: #333;
}

.nome{
    border-radius: 12px;
    text-align: center;
}

select{
    width: 290px;
    height: 30px;
    border-radius: 6px;
    margin-top: 20px;

}
input{
    width: 290px;
    height: 30px;
    border-radius: 6px;
    margin-top: 20px;
    text-align: center;
}
form{
    margin-left: 10px;
   
    margin-top: 20px;
    margin-bottom: 30px;
}
label{
    margin-left: 22px;
    
}

    </style>
</head>
<body>
<header>
    <main>
        <div class="texto">
            <h2>Tela de Login</h2>
            <h2 class="novo"><a href="index.php">&times;</a></h2>
        </div>
        <div class="principal">
            <form method="post">
                <label for="text">Usuario a Logar:</label>
                <select style="width:300px;" name="usuario" class="nome" id="">
                <option value="Administrador">Administrador</option>
                </select><br>
                <input style="width:300px;" class="nome" type="password" placeholder="Informe a password" name="password" id=""><br>

                <input style=" border-radius: 12px; width: 300px; cursor:pointer; background-color:green; color:aliceblue; margin-top:40px;" type="submit" name="submite" value="Login"><br>
                
            </form>
        </div>
    </main>
    </header>


</body>
</html>