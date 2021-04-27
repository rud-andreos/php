<?php

class ContaBancaria {
    // public - private - protected
    private $banco;
    private $nomeTitular;
    private $numeroAgencia;
    private $numeroConta;
    private $saldo;
    
    public function __construct(
        $banco, 
        $nomeTitular, 
        $numeroAgencia, 
        $numeroConta, 
        $saldo){

        //echo $nomeTitular, $banco;
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }// fecha a public function __construct

    public function obterSaldo() {
        return 'Seu saldo atual é: R$ ' . $this->saldo;
    }// fecha a public function obterSaldo

    public function depositar($valor) {
        $this->saldo += $valor;
        return 'Depósito de R$ ' . $valor . ' realizado!';
    }// fecha a public function depositar

    public function sacar($valor) {
        $this->saldo -= $valor;
        return 'Saque de R$ ' . $valor . ' realizado!';
    }// fecha a public function sacar

}// fecha a class ContaBancaria

$conta1 = new ContaBancaria(
    'Banco do Brasil', // banco
    'Rudge Andreos', // nomeTitular
    '8244', // numeroAgencia
    '57354-10', // numeroConta
    '0', // saldo
);

var_dump($conta1);
//var_dump($conta1->nomeTitular); Opcionalmente, usa-se "->" para especificar um atributo da $conta1


$conta2 = new ContaBancaria(
    'Banco do Brasil', // banco
    'Cibele Andreos', // nomeTitular
    '8244', // numeroAgencia
    '57501-15', // numeroConta
    '300', // saldo
);

var_dump($conta2);
//var_dump($conta2->nomeTitular); Opcionalmente, usa-se "->" para especificar um atributo da $conta2

/*
echo $conta1->obterSaldo(); // 0

echo "<br>"; //PHP_EOL para uso no terminal linux

echo $conta1->depositar(300.00);

echo "<br>"; 

echo $conta1->obterSaldo(); //300

echo "<br>";

echo $conta1->sacar(150.00);

echo "<br>";

echo $conta1->obterSaldo(); //150 
*/