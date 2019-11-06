<?php 

echo "<html>";
echo "<head>";
echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'>
";
echo "</head>";

class Carro {

    public $marca;
    public $modelo;
    public $cor;
    public $ano;

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

}

$palio = new Carro('Fiat', 'Palio', 'branco', 2000);
$fusca = new Carro('WV', 'Fusca', 'Preto', 1970);
$gol = new Carro('WV', 'Gol', 'Vermelho', 2000);
$variante = new Carro('WV', 'Variante', 'branco', 1956);
$camaro = new Carro('GM', 'Camaro', 'Amarelo', 2019);

echo "<h1>Lista de Carros</h1>";

$gol->setMarca('GM');

#INTERPOLACAO
echo "<ul class='collection'>";
    echo "<li class='collection-item'>" . $palio->getMarca() . "</li>";
    echo "<li class='collection-item'>" . $gol->getMarca() . "</li>";
echo "</ul>";




echo "</html>";

?>