<?php
    session_start();

    $caminho = "../../../saa_files/usuarios.txt";
   
    if($_POST['senha'] == $_POST['senha-c']) {

        if($_POST['nome'] != '' && $_POST['matricula'] != '') {
            
            if(file_exists($caminho)) {

                if($_SESSION['perfil'] == 1){
                    $perfil_user = 2;
                } 

                if($_POST['perfil'] == 'Coordenador') {

                    $perfil_user = 1;
                } else {
                    
                    $perfil_user =2;
                }


                $linha = $_POST['matricula']."#".$_POST['nome']."#".$_POST['senha']."#".$perfil_user.PHP_EOL;
        
                $arquivo = fopen($caminho, "a");
        
                fwrite($arquivo, $linha);
        
                fclose($arquivo);
        
                header("Location: usuarios.php?erro=0"); //sucesso
        
            }
        }  else {
            header("Location: usuarios.php?erro=2");    //campos vazios
        }
        
    } else {

        header("Location: usuarios.php?erro=1"); //campos vazios
    }

?>