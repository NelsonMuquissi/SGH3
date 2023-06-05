<?php 

    $severname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'prof';

    $conn = mysqli_connect($severname, $username, $password, $dbname);

    if(!$conn){
        die("Erro ao conectar com a base de dados");
    }

   //echo"Conectado com Sucesso";

?>