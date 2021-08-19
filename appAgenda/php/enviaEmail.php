<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>appAgenda-E-mail</title>
    
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
            height: 400px;

            padding: 15px;
            margin-top: 10%;
            margin-left: 20%;

            width: 800px;

            border-radius: 10px;

            text-align: center;
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
            <img src="../img/emails.PNG" alt="Adicionar" width="100px" height="100px">
            <form action="" method="post" id="forms">
                <div >
                    <input id="input" type="para" name="para" placeholder="appAgenda@gmail.com">
                </div> 
                <br>      
                <div >
                    <input id="input" type="assunto" name="assunto"placeholder="Assunto">
                </div>
                <br>
                <div >
                    <textarea name="mensagem" id="input" cols="30" rows="3"placeholder="Digite..."></textarea>
                </div>
                <br>
                <button id="button" type="submit">
                <strong>Enviar</strong>
                </button>
            </form>
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