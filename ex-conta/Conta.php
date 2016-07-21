<?php

abstract class Conta {
    //Atributos
    public $agencia;
    public $codigo;
    public $dataDeCriacao;
    public $titular;
    public $senha;
    public $saldo;
    public $cancelada;
    
    /**
     * Construtor de Conta
     * @param $agencia Agência da conta
     * @param $codigo Código da conta
     * @param $dataDeCriacao Data de criação da conta
     * @param $titular Nome do titular da conta
     * @param $senha Senha da conta
     * @param $saldo Saldo da conta
     * @param $cancelada Estado da conta (cancelada ou ativa)
     */
    function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $cancelada){
        $this->agencia = $agencia;
        $this->codigo = $codigo;
        $this->dataDeCriacao = $dataDeCriacao;
        $this->titular = $titular;
        $this->senha = $senha;
        $this->saldo = $saldo;
        $this->cancelada = $cancelada;
    }
    
    /**
     * Imprime todos os atributos
     */
    function __toString() {
        echo 'Agencia: ' . $this->agencia . '<br>' .
            'Código: ' . $this->codigo . '<br>' . 
            'Data de criação: ' . $this->dataDeCriacao . '<br>' .
            'Titular: ' . $this->titular . '<br>' .
            'Senha: ' . $this->senha . '<br>' .
            'Saldo: ' . $this->saldo . '<br>' .
            'Cancelada: ' . $this->cancelada . '<br>';
    }

    
    /**
     * Retira o valor passado do saldo
     * @param $valor Valor passado
     */
    abstract function Retirar($valor);
    
    /**
     * Deposita o valor passado no saldo
     * @param $valor Valor passado
     */
    function Depositar($valor){
        if($valor > 0){
            $this->saldo += $valor;
        } else {
            echo 'Valor a ser depositado deve ser maior que zero!<br>';
        }
    }

    /**
     * Retorna o saldo da conta
     * @return float|int Saldo da conta
     */
    function ObterSaldo(){
        return $this->saldo;
    }
}
