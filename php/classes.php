<?php

class Pessoa{
    //Atributos 
    var $nome


    //Métodos
    function setNome($nome_definiodo){
        $this->nome = $nome_definiodo;
    }

    function getNome(){
        return $this->nome;
    }

    //getters e stters

}

$pessoa = new Pessoa();

$pessoa->setNome('Jamilton');
echo $pessoa->getNome();

?>
