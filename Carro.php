<?php 

echo "<html>";
echo "<head>";
echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'>
";
echo "</head>";

class Veiculo {

    private $marca;
    private $modelo;
    private $cor;
    private $ano;

    public function __construct($marca, $modelo, $cor, $ano){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($novaMarca){
        $this->marca = $novaMarca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($novoModelo){
        $this->modelo = $novoModelo;
    }

    public function getCor() {
        return $this->cor;
    }

    public function setCor($novaCor) {
        $this->cor = $novoModelo;
    }

    public function ignicao() {
        return 'ligar veiculo - partida eletrica';
    }

}

class Carro extends Veiculo {

    
    public function ignicao() {
        return 'ligar carro';
    }


}

class Motocicleta extends Veiculo {

    public function ignicao() {
        return 'ligar moto - partida no pedal';
    }


}
	
	
$palio = new Carro('Fiat', 'Palio', 'branco', 2000);
$fusca = new Carro('WV', 'Fusca', 'Preto', 1970);
$gol = new Carro('WV', 'Gol', 'Vermelho', 2000);
$variante = new Carro('WV', 'Variante', 'branco', 1956);
$camaro = new Carro('GM', 'Camaro', 'Amarelo', 2019);
$cg125 = new Motocicleta('Honda', 'CG125', 'Amarelo', 2019);

echo "<h1>Lista de Carros</h1>";

#$gol->setMarca('GM');

#INTERPOLACAO
echo "<ul class='collection'>";
    echo "<li class='collection-item'>" . $palio->getMarca() . " - " . $palio->getModelo() . " - " . $palio->ignicao() . "</li>";
    echo "<li class='collection-item'>" . $gol->getMarca() . " - " . $gol->getModelo() . " - " . $gol->ignicao() . "</li>";
    echo "<li class='collection-item'>" . $cg125->getMarca() . " - " . $cg125->getModelo() . " - " . $cg125->ignicao() . "</li>";
echo "</ul>";


echo "</html>";

?>