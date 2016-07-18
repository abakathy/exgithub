<?php

class Produto {
    //Atributos
    public $nome;
    public $codigo;
    public $quantidade;
    public $precoUnitario;
    
    //Construtor
    function __construct($nome, $codigo, $quantidade, $precoUnitario){
        $this->nome = $nome;
        $this->codigo = $codigo;
        $this->quantidade = $quantidade;
        $this->precoUnitario = $precoUnitario;
        
        echo 'Nome: ' . $this->nome . '<br>Código: ' . $this->codigo . '<br>Quantidade: ' 
            . $this->quantidade . '<br>Preço Unitário: ' . $this->precoUnitario . '<br>';
    }
    
    //Incrementa a quantidade pelo valor passado
    function Incrementa($valor){
        $this->quantidade += $valor;
        echo 'Novo valor de quantidade: ' . $this->quantidade . '<br>';
    }
    
    //Decrementa a quantidade pelo valor passado somente se o resultado for maior ou igual a zero
    function Decrementa($valor){
        if($valor - $this->quantidade > 0){
            echo 'Quantidade não pôde ser decrementada em ' . $valor . '<br>';
        } else {
            $this->quantidade -= $valor;
            echo 'Novo valor de quantidade: ' . $this->quantidade . '<br>';
        }
    }
    
    //Exibe o produto da quantidade pelo preço unitário
    function ExibeValorTotal(){
        echo 'Valor total: ' . $this->quantidade * $this->precoUnitario . '<br>';
    }

}
