<?php

    $emailAcesso = 'rafaelteixeira@gmail.com';
    $senhaAcesso = '123';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($email == $emailAcesso && $senha == $senhaAcesso){
        header('Location: telaPrincipal.php');
    }else{
        header('Location: index.php?erroLogin');
    }

?>
    
