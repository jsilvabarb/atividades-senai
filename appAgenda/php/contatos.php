<?php
     $contatos = array();

     $arquivo = fopen('contatos.txt', 'r');

     while(!feof($arquivo)) {
         $registro = fgets($arquivo);
         $contatos  [] = $registro;
     }

     fclose($arquivo);
?>

<!DOCTYPE html>
<!-- Nesta página será realizada a pesquisa de contatos -->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>appAgenda - Contatos</title>
        <style>
        body {
            background-color: whitesmoke;
            margin: 0;
            padding: 0;
        }

        ul.menu {
            list-style-type: none;   
            
            padding: 25px; 
            width: 100%;
            height: 10px;

            background-color:black;
            color: black;
            position: fixed;   
            margin-top: -138px;
            overflow: auto;

            font-family: 'Open Sans Condensed', sans-serif;
        }

        ul li.link {
            float: right;
            padding-right: 30px;
            padding-left: 5px;
        }

        a {
            text-decoration: none;
            color: whitesmoke;
        }
        a:hover {
            color: turquoise;
        }
        #container {
            background-color: turquoise;

            padding: 15px;
            margin-top: 10%;
            margin-left: 20%;

            width: 800px;

            border-radius: 10px;

            text-align: center;
        }
        #contatos {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 10px;
            
        }
        #rodape {
            height: 400px;
            width: 100%;

            margin-top: 200px;
            background-color: black;
            color: whitesmoke;

            text-align: center;
        }
        #forms {
            text-align: center;
            margin-top: 10px;
        }
        #input {
            padding: 15px;
            width: 400px;

            border-radius: 10px;
            border: 1px solid turquoise;

            background-color: whitesmoke;
        }
        #button {
            padding: 15px;
            background-color: whitesmoke;
            border: 1px solid turquoise;
            border-radius: 10px;

            color: turquoise;
        }
        #button:hover {
            background-color: #00FF00;
            color: whitesmoke;
        } 
    </style>
    </head>
    <body>
        <header>
            <nav id="menu">
                    <!-- Conteúdo do Menu -->
                    <div id="contentMenu">
                        <ul class="menu">
                            <li style="float: left; color: black;
                            background-color: turquoise; padding: 10px;
                            margin-top: -15px; border-radius: 30px; border: 1px solid whitesmoke;" >appAGENDA</li>
                            <li class="link"><a href="#">SAIR</a></li>
                            <li class="link"><a href="enviaEmail.php#contato">CONTATO</a></li>
                            <li class="link"><a href="home.php">HOME</a></li>
                        </ul>
                    </div>
                </nav>
        </header>
        <main>
            <div id="container">
                <img src="../img/contatos.PNG" alt="Contatos" width="100px" height="100px">
                <p>________________________________________________________________________________</p>
                <div id="contatos">
                <?foreach($contatos as $contato) {?>
                    
                    <? 
                        $contato_dados = explode('#', $contato);
    
                        if(count($contato_dados) < 3) {
                            continue;
                        }
                    ?>
                    
                    <div>
                        <h5 class="card-title"><?= $contato_dados[1]?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $contato_dados[2]?></h6>
                        <p class="card-text"><?= $contato_dados[3]?></p>
                        <p>___________________________</p>
                    </div>
    
                    <?}?>
                </div>
                </div>
        </main>
        <footer id="rodape">
            <br><br><br><br><br><br><br><br><br><br>
            <div id="contato">

                E-mail: juliaadrielesilva13@gmail.com <br>           
            </div>
            <br><br><br><br><br><br>
            <div id="creditos">
                Ícones retirados do site <a href="flaticon.com">FlatIcon</a> <br>
                CopyRight &copy; Todos os direitos reservados <br>
                Julia Barbosa
            
            </div>
        </footer>
    </body>
</html>