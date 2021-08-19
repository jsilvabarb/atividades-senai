<?PHP

    session_start();

    if(!$_SESSION['autenticado']) {
        header("Location: ../index.php?erro=2");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-3.4.1.slim.min.js"></script>
    <script src="../js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/estilos.css">
    <title>SAA - Login</title>
</head>
<body>
    <nav class="navbar bg-vermelho">
        <div class="navbar-brand">
            <img src="../img/logo_senai.png" alt="Logo do SENAI" height="32px">
            Sistema de Acompanhamento de Atividades
        </div>
        <div class="nav-item">
            <a href="#" class="bg-vermelho">SAIR</a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="container-c">
                <div class="card">
                    <div class="card-header">
                        Menu
                    </div>
                    <div class="card-body">
                        <div class="row">

                           <?if($_SESSION['perfil'] != 2){?>
                                <div class="col-6 d-flex justify-content-center">
                                    <a href="usuarios.php">
                                            <img src="../img/cadastrar_usuario.png" alt="Icone para abrir chamados" width="70" heigth ="70">
                                    </a>
                                    <br>
                                </div>
                            <?}?>

                            <div class="col-6 d-flex justify-content-center">
                                <a href="atividades.php">
                                    <img src="../img/registrar_atividade.png" alt="Icone para consultar chamados" width="70" heigth ="70">
                                </a>
                               
                            </div>
                            
                            <div class="col-6 d-flex justify-content-center" style="margin-top: 30px;">
                                <a href="relatorio.php">
                                    <img src="../img/relatorio_atividades.png" alt="Icone para consultar chamados" width="70" heigth ="70">
                                </a>
                            </div>
                        </div>
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