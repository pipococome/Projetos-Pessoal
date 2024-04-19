<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login de Usuário</title>
    </head>
    <body>
        
    <?php

    if(!isset($_SESSION['login'])){


        if(isset($_POST['acao'])){
            $login = 'gabriel';
            $senha = '1234';

            $loginForm = $_POST['login'];
            $senhaForm = $_POST['senha'];

            if($login == $loginForm && $senha == $senhaForm){
                //Logado com sucesso
                $_SESSION['login'] = $login;
                header('Location: index.php');
            }else{
                //Algum erro ocorreu
                echo 'Dados inválidos.';
            }
        }






        include('login.php');
    }else{
        if(isset($_GET['logout'])){
            unset($_SESSION['login']);
            session_destroy();
            header('Location: index.php');

        }
        include('home.php');
    }

    ?>

    </body>
</html>