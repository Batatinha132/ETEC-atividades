<?php 
.
    // Criando uma classe
    class Carro{
    
        // Declaração de variaveis, atributos 
        public $modelo;

        public $fabricantes;

        public $anoModelo;

        // Declaração de ações, métodos
        public function acelerar(){

            echo("Veículo acelerado!");

        }

    } // Fechamento de classe

    // Instanciando o objeto aos 'moldes' da classe carro
    // Sintaxe: $nomeObjeto = new MetodoConstrutor(); --> mesmo nome da classe
    $meuCarro = new Carro();

    // Gravando os valores dentro dos atributos do meu objeto
    $meuCarro->modelo           = "UNO";

    $meuCarro->fabricante       = "FIAT";

    $meuCarro->anoModelo        =  2014;

    // Recuperando valores internos do atributo
    echo("Modelo do carro: "  . $meuCarro->modelo     . "<br/>");

    echo("Fabricante: "       . $meuCarro->fabricante . "<br/>");

    echo("Ano do modelo: "    . $meuCarro->anoModelo  . "<br/>");

    // Invocar um método (ação do objeto)
    $meuCarro->acelerar();

    

?>