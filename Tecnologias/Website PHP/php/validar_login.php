<?php

session_start();

require_once 'bd.php';

#LoginFeito("1");

$utilizador = $_POST['username'];
$password = $_POST['password'];


if (validaLogin($utilizador,$password))
    {
        $_SESSION["login"]=true;
        $_SESSION['loginnomeutilizador'] = $utilizador;
        header('location: ../index.php?lsucesso');
    } 
    else 
    {
        $_SESSION["login"]=false;
        header('location: ../index.php?lerro');
    }

function validaLogin($user,$pw)
{
    global $db;
    $pw=md5($pw);
    $sql = 'SELECT * FROM login where username = "' . $user . '" and password = "' . $pw . '"';

    if ($result = $db->query($sql)) 
    {
        if ($result->num_rows != 0) 
        {
            return true;
        } 
        else 
        {
            return false;
        }
    } 
    else 
    {
        return false;
        echo "Falha a ler os registos.";
    }
}

?>