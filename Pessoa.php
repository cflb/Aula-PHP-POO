<?php

class Pessoa {
    public $nome;
    public $cpf;
    public $idade;
    public $sexo;

    public function __construct($nome, $cpf, $idade, $sexo){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    public function get_nome(){
        return $this->nome;
    }

    public function set_nome($nome){
        $this->nome = $nome;
    }

    public function get_cpf(){
        return $this->cpf;
    }

    public function set_cpf($cpf){
        $this->cpf = $cpf;
    }

    public function get_idade(){
        return $this->idade;
    }

    public function set_idade($idade){
        $this->idade = $idade;
    }

    public function get_sexo(){
        return $this->sexo;
    }

    public function set_sexo($sexo){
        $this->sexo = $sexo;
    }

    public function andar(){
        echo "andou...";
    }

    public function falar($alguma_coisa){
        echo $alguma_coisa;
    }

}

$pessoa1 = new Pessoa('Joao da Silva','123123123-23',22, 'M');


echo "Nome: " . $pessoa1->get_nome();
echo "<br>";
echo "CPF: " . $pessoa1->get_cpf();
echo "<br>";
echo "Idade: " . $pessoa1->get_idade();
echo "<br>";
echo "Sexo: " . $pessoa1->get_sexo();
echo "<br>";
echo $pessoa1->set_nome('Maria');
echo "<br>";
echo $pessoa1->set_sexo('M');
echo "<br>";

echo "Nome: " . $pessoa1->get_nome();
echo "<br>";
echo "Sexo: " . $pessoa1->get_sexo();
echo "<br>";



/*
$pessoa1->nome = 'Joao';
$pessoa1->cpf = '00924358087';
$pessoa1->sexo = 'h';
$pessoa1->idade = 61;
*/


