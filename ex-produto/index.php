<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /* Criar classe produto com os seguintes atributos públicos: nome, código, quantidade 
         * e preço unitário. O método construtor deve receber todos os atributos da classe, alocá-los
         * e printá-los. A classe deve ter três outros métodos: 1- Recebe um valor e incrementa a quantidade;
         * 2- Recebe um valor e decrementa da quantidade somente se o valor resultante for maior que zero 
         * (quantidade não pode ser negativa); 3- Exibe o valor total daquele produto (quantidade * preço).
         * Os nomes dos atributos e métodos ficam a cargo de vocês. Criem vários objetos desta classe para 
         * fixarem bem como funcionam as instâncias. */
        include_once 'Produto.php';
        
        $caneta = new Produto('Caneta Bic', 2590, 7500, 0.50);
        
        $caneta->ExibeValorTotal();
        $caneta->Incrementa(2000);
        $caneta->ExibeValorTotal();
        $caneta->Decrementa(100);
        $caneta->ExibeValorTotal();
        $caneta->Decrementa(10000);
        ?>
    </body>
</html>
