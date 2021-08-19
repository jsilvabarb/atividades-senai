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
                        REGISTRO DE ATIVIDADES
                    </div>
                    <div class="card-body">
                        <form action="registra_atividade.php" method="POST" class="form-group">
                            <label>Data</label>
                            <input type="date" name="data" placeholder="Data" class="form-control"
                            required="required"/>
                            <br>                 
                            <label>Tipo</label>
                            <select name="tipo" class="form-control">
                                <option>ASSESORIA ÁREA FIM</option>
                                <option>ASSESORIA DN</option>
                                <option>CONVÊNIO</option>
                                <option>COORDENADOR DE ESTAGIO / VIVÊNCIA PROFISSIONAL</option>
                                <option>INTÉRPRETE</option> 
                                <option>MANUTENÇÃO</option>
                                <option>MESTRADO / DOUTORADO</option>
                                <option>OLIMPIADA ESTADUAL</option>
                                <option>OLIMPIADA INTERNACIONAL</option>
                                <option>OLIMPIADA NACIONAL</option>
                                <option>ORIENTAÇÃO AO TCC - PÓS</option>
                                <option>RECESSO ESCOLAR -CURSOS REGULARES</option>
                                <option>SERVIÇOS EDUCACIONAIS</option>
                                <option>SERVIÇOS TECNOLÓGICOS</option>
                                <option>TREINAMENTO</option>
                                <option>TUTORIA</option>

                            </select>
                            <br>
                            <label>Início da Atividade</label>
                            <input type="time" min="00:00" max="23:59" name="hora_inicio" placeholder="Início(Horas)"
                             class="form-control" required="required"/> 
                            <br>
                            <label>Fim da Atividade</label>
                            <input type="time" min="00:00" max="23:59" name="hora_fim" placeholder="Fim(Horas)" class="form-control"
                            required="required"/> 
                            <br>
                            <label>Descrição</label>
                            <textarea name="descricao" class="form-control" rows="3"></textarea>
                            <br>

                            <?if(isset($_GET['erro']) && $_GET['erro'] == 3) {?>
                                <div class="alert alert-danger">
                                  Horário Inválido!
                                </div>
                            <?} else if(isset($_GET['erro']) && $_GET['erro'] == 2) {?>
                                <div class="alert alert-danger">
                                   Preencha todos os campos!
                                </div>
                            <?} else if(isset($_GET['erro']) && $_GET['erro'] == 1) {?>
                                <div class="alert alert-danger">
                                    Erro ao registrar atividade(arquivo não encontrado)
                                </div>
                            <?} else if(isset($_GET['erro']) && $_GET['erro'] == 0){?>
                                <div class="alert alert-success">
                                    Atividade registrada com sucesso!
                                </div>
                            <?}?>

                            <!-- <button type="submit" class="btn btn-lg btn-danger btn-block col-12">Enviar</button> -->
                            <div class="row mt-5">
                                        <div class="col-6">
                                            <a href="home.php" class="btn btn-lg btn-warning btn-block">Voltar</a>
                                        </div>

                                        <div class="col-6">
                                            <button type="submit" class="btn btn-lg bg-vermelho btn-block col-12" style="color: black;">Enviar</button>
                                        </div>
                                    </div>
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