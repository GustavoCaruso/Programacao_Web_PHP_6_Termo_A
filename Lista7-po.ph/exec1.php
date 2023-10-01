<?php
class Ponto {
    private $x;
    private $y;
    private static $contador = 0;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
        self::$contador++;
    }

    public static function getContador() {
        return self::$contador;
    }

    public function calcularDistanciaOutroPonto(Ponto $outroPonto) {
        $dx = $this->x - $outroPonto->x;
        $dy = $this->y - $outroPonto->y;
        return sqrt(pow($dx, 2) + pow($dy, 2));
    }

    public function calcularDistanciaCoordenadas($x2, $y2) {
        $dx = $this->x - $x2;
        $dy = $this->y - $y2;
        return sqrt(pow($dx, 2) + pow($dy, 2));
    }

    public static function calcularDistanciaEntrePontos($x1, $y1, $x2, $y2) {
        $dx = $x2 - $x1;
        $dy = $y2 - $y1;
        return sqrt(pow($dx, 2) + pow($dy, 2));
    }
}

// Exemplo de uso
$pontoA = new Ponto(1, 2);
$pontoB = new Ponto(4, 6);

$distanciaAB = $pontoA->calcularDistanciaOutroPonto($pontoB);
echo "Distância entre ponto A e ponto B: " . $distanciaAB . "\n";

$distanciaXY = $pontoA->calcularDistanciaCoordenadas(3, 5);
echo "Distância entre ponto A e coordenadas (3, 5): " . $distanciaXY . "\n";

$distanciaXY2 = Ponto::calcularDistanciaEntrePontos(1, 2, 3, 5);
echo "Distância entre pontos (1, 2) e (3, 5): " . $distanciaXY2 . "\n";

echo "Número de objetos Ponto criados: " . Ponto::getContador() . "\n";
