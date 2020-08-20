<?php 

class db{
    private $host       = 'localhost';
    private $usuario    = 'root';
    private $senha      = '';
    private $database   = 'cadastro';

    public function conecta_mysql(){
        $rede = mysqli_connect($this->host,$this->usuario,$this->senha,$this->database);
    
        return $rede;
    }
}

?>  