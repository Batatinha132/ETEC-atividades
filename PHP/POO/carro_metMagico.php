<?php 

    // Criando uma classe
    class Carro{
    
        //Método construtor é executado sempre que o obj é instanciado na class (obrigatório)
        // public function __construct(){

        //     echo("<br> Objeto carro instanciado<br>");

        //     $this->modelo        = "Não informado";
        //     $this->fabricante    = "Não informado";
        //     $this->anoModelo     = 0;

        // }


          public function __construct($pFabricante = null, $pModelo = null, $pAnoModelo = null){

            echo("<br> Objeto carro instanciado<br>");

            $this->modelo        = $pModelo;
            $this->fabricante    = $pFabricante;
            $this->anoModelo     = $pAnoModelo;

        }

        // Declaração de variaveis, atributos 
        private $modelo;

        private $fabricantes;

        private $anoModelo;


        // Método mágico 
        public function __get($propriedade){

            return $this->$propriedade;

        }

        public function __set($propriedade, $valor){

            $this->$propriedade = $valor;

        }
        
    
        // Declaração de ações, métodos
        public function acelerar(){

            echo("Veículo acelerado!");

        }

         public function retornarDados(){

           $dados = "Veículo acelerado: <br>";

           $dados = "Dados do veículo <br>";
           $dados = $dados . "Modelo do carro: "  . $this->modelo      . "<br/>";

           $dados = $dados . "Fabricante: "       . $this->fabricante  . "<br/>";

           $dados = $dados . "Ano do modelo: "    . $this->anoModelo   . "<br/>";
 
           return $dados;

        }

    } // Fechamento de classe

    // Instanciando o objeto aos 'moldes' da classe carro
    // Sintaxe: $nomeObjeto = new MetodoConstrutor(); --> mesmo nome da classe
    $meuCarro = new Carro();

    // Gravando os valores dentro dos atributos do meu objeto
    $meuCarro->modelo       = "UNO";

    $meuCarro->fabricante   = "FIAT";

    $meuCarro->anoModelo    = 2014;

    // Recuperando valores internos do atributo
    echo("Modelo do carro: "  . $meuCarro->modelo      . "<br/>");

    echo("Fabricante: "       . $meuCarro->fabricante  . "<br/>");

    echo("Ano do modelo: "    . $meuCarro->anoModelo   . "<br/>");

    // Invocar um método (ação do objeto):
    $meuCarro->acelerar();

    echo ("<hr>");

    $meuOutroCarro = new Carro();

    $meuOutroCarro->fabricante = "BMW";

    echo($meuOutroCarro->retornarDados());

    echo ("<hr>");
    $meuUltimoCarro = new Carro("Nissan", "March", 2012);
    
    echo($meuUltimoCarro->retornarDados());

    


?>