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
                    <div class="card-header center">
                        TÍTULO
                    </div>
                    <div class="card-body">
                        <form action="registra_usuario.php" method="POST" class="form-group">
                            <input type="text" name="nome" placeholder="Nome" class="form-control">
                            <br>
                            <input type="text" name="matricula" placeholder="Matrícula" class="form-control">
                            <br>
                            <?if($_SESSION['perfil'] == 0) {?>
                                <select class="form-control" placeholder="Cargo">
                                        <option>Coordenador</option>
                                        <option>Professor</option>
                                </select>
                            <?}?>
                            <br>
                            <input type="text" name="senha" placeholder="Senha" class="form-control">
                            <br>
                            <input type="text" name="senha-c" placeholder="Confirmar senha" class="form-control">
                            <br>
                            
                            <?if(isset($_GET['erro']) && $_GET['erro'] == 2) {?>
                                <div class="alert alert-danger">
                                    Preencha todos os campos!
                                </div>
                            <?} else if(isset($_GET['erro']) && $_GET['erro'] == 1) {?>
                                <div class="alert alert-danger">
                                    As senhas não correspondem.
                                </div>
                            <?} else if(isset($_GET['erro']) && $_GET['erro'] == 0) {?>
                                <div class="alert alert-success">
                                    Cadastro realizado com sucesso!
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