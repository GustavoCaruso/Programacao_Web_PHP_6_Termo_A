<?php

abstract class Telefone {
    protected $ddd;
    protected $numero;

    public function __construct($ddd, $numero) {
        $this->ddd = $ddd;
        $this->numero = $numero;
    }

    abstract public function calculaCusto($tempoLigacao);

    public function getDdd() {
        return $this->ddd;
    }

    public function getNumero() {
        return $this->numero;
    }
}

class Fixo extends Telefone {
    private $custoPorMinuto;

    public function __construct($ddd, $numero, $custoPorMinuto) {
        parent::__construct($ddd, $numero);
        $this->custoPorMinuto = $custoPorMinuto;
    }

    public function calculaCusto($tempoLigacao) {
        return $tempoLigacao * $this->custoPorMinuto;
    }
}

abstract class Celular extends Telefone {
    private $custoMinutoBase;
    private $operadora;

    public function __construct($ddd, $numero, $custoMinutoBase, $operadora) {
        parent::__construct($ddd, $numero);
        $this->custoMinutoBase = $custoMinutoBase;
        $this->operadora = $operadora;
    }

    public function getCustoMinutoBase() {
        return $this->custoMinutoBase;
    }

    public function getOperadora() {
        return $this->operadora;
    }

    abstract public function calculaCusto($tempoLigacao);
}

class PrePago extends Celular {
    public function __construct($ddd, $numero, $custoMinutoBase, $operadora) {
        parent::__construct($ddd, $numero, $custoMinutoBase, $operadora);
    }

    public function calculaCusto($tempoLigacao) {
        $acrescimo = 0.4;
        return $tempoLigacao * ($this->getCustoMinutoBase() * (1 + $acrescimo));
    }
}

class PosPago extends Celular {
    public function __construct($ddd, $numero, $custoMinutoBase, $operadora) {
        parent::__construct($ddd, $numero, $custoMinutoBase, $operadora);
    }

    public function calculaCusto($tempoLigacao) {
        $desconto = 0.1;
        return $tempoLigacao * ($this->getCustoMinutoBase() * (1 - $desconto));
    }
}

// Exemplo de uso
$telefoneFixo = new Fixo("11", "123456789", 0.2);
$custoLigacaoFixo = $telefoneFixo->calculaCusto(10);
echo "Custo da ligação fixo: R$ " . number_format($custoLigacaoFixo, 2) . "\n";

$telefonePrePago = new PrePago("21", "987654321", 0.5, "Operadora A");
$custoLigacaoPrePago = $telefonePrePago->calculaCusto(5);
echo "Custo da ligação pré-pago: R$ " . number_format($custoLigacaoPrePago, 2) . "\n";

$telefonePosPago = new PosPago("31", "555555555", 0.3, "Operadora B");
$custoLigacaoPosPago = $telefonePosPago->calculaCusto(15);
echo "Custo da ligação pós-pago: R$ " . number_format($custoLigacaoPosPago, 2) . "\n";
?>
