<?php
class ArCondicionado {
    private $marca;
    private $potencia;

    
    public function __construct($marca, $potencia) {
        $this->marca = $marca;
        $this->potencia = $potencia;
    }

   
    public function getMarca() {
        return $this->marca;
    }

    
    public function getPotencia() {
        return $this->potencia;
    }
}


$arCondicionado1 = new ArCondicionado("LG", 18000);
$arCondicionado2 = new ArCondicionado("Samsung", 20000);
$arCondicionado3 = new ArCondicionado("Daikin", 15000);


echo "Marca: " . $arCondicionado1->getMarca() . ", Potência: " . $arCondicionado1->getPotencia() . " BTU  "  ;
echo "Marca: " . $arCondicionado2->getMarca() . ", Potência: " . $arCondicionado2->getPotencia() . " BTU  " ;
echo "Marca: " . $arCondicionado3->getMarca() . ", Potência: " . $arCondicionado3->getPotencia() . " BTU  ";
?>