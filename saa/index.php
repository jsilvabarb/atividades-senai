<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>SAA - Login</title>
</head>
<body>
    <nav class="navbar bg-vermelho">
        <div class="navbar-brand">
            <img src="img/logo_senai.png" alt="Logo do SENAI" height="32px">
            Sistema de Acompanhamento de Atividades
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="container-login">
                <div class="card">    
                    <div class="card-header center">
                        TÍTULO
                    </div>
                    <div class="card-body">
                        <form action="php/autentica_usuario.php" method="POST" class="form-group">
                            <input type="text" name="matricula" placeholder="Matrícula" class="form-control">
                            <br>
                            <input type="text" name="senha" placeholder="Senha" class="form-control">
                            <br> 
                            
                            <?if(isset($_GET['erro']) && $_GET['erro'] == 1){?>
                                <div class= "alert alert-danger">
                                    Senha incorreta!
                                </div>
                            <?} else if(isset($_GET['erro']) && $_GET['erro'] == 0){?>
                                <div class="alert alert-danger">
                                    Matrícula incorreta!
                                </div>
                            <?}?>
                            <button type="submit" class="btn btn-lg btn-danger btn-block col-12">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-escuro center">
        <br>
        <p>Copyright 2020 &copy; Todos os direitos reservados</p>
        <p>Anderson Victor - Julia Barbosa - Katherine Lima - Lara Nicole - Márcio Luís</p>
        <br>
    </footer>
</body>
</html>