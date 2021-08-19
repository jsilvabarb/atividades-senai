<?php

//session_start();

interface GerenciaContato {
    public function contatoNoArquivo();
}

class ExcluiContato implements GerenciaContato {
    protected $nome = null;
    protected $numero = null;
    protected $email = null;

    public function __construct($nome, $numero, $email) {
        $this->nome = $nome;
        $this->numero = $numero;
        $this->email = $email;
    }

    public function contatoNoArquivo() {

        $arquivo = fopen('contatos.txt', 'a');

        $contents = file_get_contents($arquivo);
        $contents = str_replace

        fclose($arquivo);

        header('Location: addContato.php?adicionar=ok'); 

    }
    
}
$contato = new AddContato($_POST['nome'], $_POST['numero'], $_POST['email']);
$contato->contatoNoArquivo();
    
   
?> 