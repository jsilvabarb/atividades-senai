<?php
    session_start();

    $caminho = "../../../saa_files/atividades.txt"; 
    
    $hora_inicio = str_replace("#", "-", $_POST['hora_inicio']);
    $hora_fim = str_replace("#", "-", $_POST['hora_fim']);

    //cálculo de período da atividade

    $horaUm = explode(":", $hora_inicio);
    $horaDois = explode(":", $hora_fim);
    $minutos_inicio = ($horaUm[0] * 60) + $horaUm[1];
    $minutos_fim = ($horaDois[0] * 60) + $horaDois[1];
    $periodo = $minutos_fim - $minutos_inicio;

    


    if($_POST['hora_fim'] >  $_POST['hora_inicio'] && $periodo > 60) { 

        if($_POST['descricao'] != '') {

            if(file_exists($caminho)) {
                $linha = $_SESSION['matricula']."#".$_SESSION['nome']."#". $_POST['data']."#".$_POST['tipo']."#".$_POST['inicio']."#".$_POST['fim']."#".$_POST['descricao'].PHP_EOL;
        
                $arquivo = fopen($caminho, "a");
        
                fwrite($arquivo, $linha);
        
                fclose($arquivo);
        
                header("Location: atividades.php?erro=0"); //sucesso
            } else {
                header("Location: atividades.php?erro=1"); // não encontrou o arquivo
        
            }    
        } else {
            header("Location:atividades.php?erro=2"); // campos vazios
        }
    } else {

        header("Location:atividades.php?erro=3"); // Horários não correspondem 
    }

   
   
?>