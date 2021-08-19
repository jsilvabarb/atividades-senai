<?php

    session_start();

    $arquivo = "../../../saa_files/usuarios.txt";

    $_SESSION['autenticado'] = false;
    $_SESSION['encontrou'] = false;

    //$perfis = array(1 => 'adm', 2 => 'cod', 3 => 'prf');

    // $usuarios = array (
    //     array ( 'matricula'=>'123', 'senha'=>'123456','nome' => 'adm', 'perfil'=> 0)     

    // );

    // $qtd_us = count($usuarios);

    

    // // --------------------->>> Usuário UM <<<----------------------------

    // foreach($usuarios as $usuario) {

    //     if($_POST['matricula'] == $usuario['matricula']) {

    //         $_SESSION['encontrou'] = true; //usuario foi encontrado

    //         if ($_POST['senha'] == $usuario['senha']) {

    //             $_SESSION['matricula'] = $usuario['matricula'];
    //             $_SESSION['senha'] = $usuario['senha'];
    //             $_SESSION['nome'] = $usuario['nome'];
    //             $_SESSION['perfil'] = $usuario['perfil'];

    //             $_SESSION['autenticado'] = true;               

    //         }
    //     }
    // }

    // if($_SESSION['autenticado']) {

    //     header("Location: home.php");
    // } else {

    //     if($_SESSION['encontrou']) {

    //         header("Location: ../index.php?erro=1"); //senha incorreta
    //     } else {
    //         header("Location: ../index.php?erro=0");//usuário não encontrado
    //     }
    // }
//-------------------->>> Autenticar Usuários registrados no arquivo txt
    

// fopen -- Abre o arquivo pra que possa ser manipulado 
// fgets -- Pega uma linha do arquivo até o máximo de 1024bytes
// feof -- Durante a leitura de um arquivo avisa se chegou ao final

//PASSOS

/*
1 - Abrir arquivo
2 - ler arquivo enquanto n chegar no final
3 - guardar info em um array
*/ 

$users = array();

$arquivo = fopen( "../../../saa_files/usuarios.txt", "r");

//if(file_exists($arquivo)) {

    
    while(!feof($arquivo)) {
        $registro = fgets($arquivo);
        $user[] = $registro;
    }
    fclose($arquivo);

    $user = implode(" ", $user);
    $dados = explode('#', $user);

    

    $cont = 0;
    $len = count($user);

    while($_POST['matricula'] != $user[$dados]) {
        $cont++;
    }

    if($cont <= $len) {

        $_SESSION['encontrou'] = true;

    }

    $cont = 0;

    if($_SESSION['encontrou']) {
        while($_POST['senha'] != $user[$dados]) {
            $cont++;
        }

        if($cont <= $len) {
            $_SESSION['autenticado']= true;

            header("Location: home.php");
        } else {
            header("Location: ../index.php?erro=1");
        }
    } else {
        
        header("Location: ../index.php?erro=0");
    }
//}


?>