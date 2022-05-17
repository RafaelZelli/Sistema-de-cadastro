<?php

    $host = "localhost";
    $dbname = "sistema_cadastro_de_contatos";
    $user = "root";
    $pass = "";

try{
    $conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
    
    //Ativar o modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    //erro de conexã com o banco de dados
    $error = $e->getMessage();
    echo "Erro: $error";
}