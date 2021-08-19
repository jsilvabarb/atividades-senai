<?PHP
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<!-- Página de login -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Autenticação</title>

   <style>

        body {
            background-color:whitesmoke;
            text-align: center;
        }
        #logo {
            float: center; 
            color: turquoise;
            background-color: black; 
            padding: 15px;
            border-radius: 30px; 
            border: 1px solid turquoise;
            width: 100px; 
            margin-left: 43%;
        }
        #form {
           text-align: center; 
           margin-top: 15%;
           margin-left:40%;
           background-color: turquoise;
           padding: 25px;
           width: 200px;
           border-radius: 10px;
          
        }
        #input {
            padding: 5px;
            background-color: whitesmoke;
            border-radius: 5px;
            border: 1px solid black;
        }
        #button {
            padding: 5px;
            background-color: whitesmoke;
            border-radius: 5px;
            border: 1px solid black;
            color: color;           
        }
        #button:hover {
            background-color: #00FF00;
            color: whitesmoke;           
        }

        #erro {
            color: whitesmoke;
            background-color: red;
            border-radius: 5px;
        }
   </style>
</head>
<body>
    <p id="logo">APPAGENDA</p>
<div id="form">
   <p style="font-size: 22px;">LOGIN</p>
    <form action="php/GerenciaLogin.php" method="post">
        <div>
            <input id="input" type="user" name="user" placeholder="Usuário">
        </div> 
        <br>      
        <div >
            <input id="input" type="password" name="password"placeholder="Senha">
        </div>
        <br>

        <?if(isset($_GET['login']) && $_GET['login'] == 'erro') {?>
            <div id="erro">
                Usuário ou senha inválido(s)!!!
            </div>
            <br>
        <?}?>    

        <button id="button" type="submit">
        <strong>Entrar</strong>
        </button>
    </form>
</div>
</body>
</html>