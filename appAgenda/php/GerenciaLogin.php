<?php
session_start();

interface ValidacaoInterface {
    public function checkUser();    
}

class Usuario {
    //atributos    
    public $nick = null;
    protected $password = null;

    function __construct($nick, $password){
        $this->nick = $nick;       
        $this->password = $password;       
    }
    function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }   
}

class GerenciaLogin extends Usuario implements ValidacaoInterface {
    protected $autenticado = false;

    function __construct($nick, $password) {
        $this->nick = $nick;       
        $this->password = $password;                       
    }

    function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }


    public function checkUser() {
        $users = array (
            array ( 'user' =>  '@jsilvabarb', 'password' => '123456')
            ,
            array ('user' =>  '@milyKyuang', 'password' => '123456')
            ,
            array('user' =>  '@vinilds', 'password' => '123456')    
        );
    
        foreach ($users as $user) {
            if($user['user'] == $this->nick && $user['password'] == $this->password) {    
               $autenticado = true; 
            }       
        }

        if($autenticado) {
            header('Location: home.php');
        } else {         
            
            header('Location: ../index.php?login=erro');
        }
    }

}

$user = new GerenciaLogin($_POST['user'], $_POST['password']);
$user->checkUser();


?>