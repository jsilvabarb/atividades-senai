<?php

//session_start();

interface GerenciaContato {
    public function contatoNoArquivo();
}

class AddContato implements GerenciaContato {
    protected $nome = null;
    protected $numero = null;
    protected $email = null;

    public function __construct($nome, $numero, $email) {
        $this->nome = $nome;
        $this->numero = $numero;
        $this->email = $email;
    }

    public function contatoNoArquivo() {
        $texto = '#'.$this->nome.'#'.$this->numero.'#'.$this->email.PHP_EOL;

        $arquivo = fopen('contatos.txt', 'a');

        fwrite($arquivo, $texto);

        fclose($arquivo);

        header('Location: addContato.php?adicionar=ok'); 

    }
    
}
$contato = new AddContato($_POST['nome'], $_POST['numero'], $_POST['email']);
$contato->contatoNoArquivo();
    
   
?> 

<!--  -->