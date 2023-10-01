<?php
class Funcionario {
    private $pessoa;
    private $salarioBase;

    public function __construct($nome, $endereco, $idade, $salarioBase) {
        $this->pessoa = new Pessoa($nome, $endereco, $idade);
        $this->setSalarioBase($salarioBase);
    }

    public function setSalarioBase($salarioBase) {
        $this->salarioBase = $salarioBase;
    }

    public function getSalarioBase() {
        return $this->salarioBase;
    }

    public function getSalarioLiquido() {
        $inss = $this->salarioBase * 0.1;
        $ir = 0;

        if ($this->salarioBase > 2000) {
            $ir = $this->salarioBase * 0.2;
        }

        return $this->salarioBase - $inss - $ir;
    }

    public function __toString() {
        return get_class($this) . " - Código: " . $this->getCodigo() . " - Nome: " . $this->getNome() .
            "\nSalário Base: " . $this->getSalarioBase() . "\nSalário Líquido: " . $this->getSalarioLiquido();
    }

    public function getCodigo() {
        
        return ""; 
    }

    public function getNome() {
        return $this->pessoa->getNome();
    }
}

class Servente extends Funcionario {
    public function __construct($nome, $endereco, $idade, $salarioBase) {
        parent::__construct($nome, $endereco, $idade, $salarioBase);
    }

    public function getSalarioLiquido() {
        $salarioLiquidoFuncionario = parent::getSalarioLiquido();
        $insalubridade = $salarioLiquidoFuncionario * 0.05;
        return $salarioLiquidoFuncionario + $insalubridade;
    }
}

class Motorista extends Funcionario {
    private $numeroCarteiraMotorista;

    public function __construct($nome, $endereco, $idade, $salarioBase, $numeroCarteiraMotorista) {
        parent::__construct($nome, $endereco, $idade, $salarioBase);
        $this->setNumeroCarteiraMotorista($numeroCarteiraMotorista);
    }

    public function setNumeroCarteiraMotorista($numeroCarteiraMotorista) {
        $this->numeroCarteiraMotorista = $numeroCarteiraMotorista;
    }

    public function getNumeroCarteiraMotorista() {
        return $this->numeroCarteiraMotorista;
    }
}

class MestreDeObras extends Servente {
    private $quantidadeFuncionariosSupervisionados;

    public function __construct($nome, $endereco, $idade, $salarioBase, $quantidadeFuncionariosSupervisionados) {
        parent::__construct($nome, $endereco, $idade, $salarioBase);
        $this->setQuantidadeFuncionariosSupervisionados($quantidadeFuncionariosSupervisionados);
    }

    public function setQuantidadeFuncionariosSupervisionados($quantidadeFuncionariosSupervisionados) {
        $this->quantidadeFuncionariosSupervisionados = $quantidadeFuncionariosSupervisionados;
    }

    public function getQuantidadeFuncionariosSupervisionados() {
        return $this->quantidadeFuncionariosSupervisionados;
    }

    public function getSalarioLiquido() {
        $salarioLiquidoFuncionario = parent::getSalarioLiquido();
        $adicional = ($this->quantidadeFuncionariosSupervisionados / 10) * ($salarioLiquidoFuncionario * 0.1);
        return $salarioLiquidoFuncionario + $adicional;
    }
}
