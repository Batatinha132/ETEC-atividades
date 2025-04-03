<?php 

    // Criando uma classe
    class Carro{
    
        // Declaração de variaveis, atributos 
        private $modelo;

        // Métodos de acesso

        // lê o modelo
        public function setModelo($valor){

            $this->modelo = $valor;

        }

        // Retorna o modelo
        public function getModelo(){

            return $this->modelo;
        }

        // Lê o fabricante
        public function setFabricante($valor){

            $this->fabricante = $valor;

        }

        // Retorna o fabricante
        public function getFabricante(){
            
            return $this->fabricante;

        }

         // Lê o ano do modelo
        public function setAnoModelo($valor){

            $this->anoModelo = $valor;

        }

        // Retorna o ano do modelo
        public function getAnoModelo(){

            return $this->anoModelo;

        }

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
    $meuCarro->setModelo("UNO");

    $meuCarro->setFabricante("FIAT");

    $meuCarro->setAnoModelo(2014);

    // Recuperando valores internos do atributo
    echo("Modelo do carro: "  . $meuCarro->getModelo()      . "<br/>");

    echo("Fabricante: "       . $meuCarro->getFabricante()  . "<br/>");

    echo("Ano do modelo: "    . $meuCarro->getAnoModelo()   . "<br/>");

    // Invocar um método (ação do objeto)
    $meuCarro->acelerar();

    

?>