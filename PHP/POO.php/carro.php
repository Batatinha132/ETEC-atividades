<?php
class Carro{
    // Declaração de variavel
    public $carro;
    public $fabricante;
    public $anoModelo;

    // Declaração de ações ( METODOS )
    public function acelerar(){
        echo("Veiculo acelerado! ");
    }
}
// Instanciando um OBJETO ($meuCarro) aos moldes da CLASSE Carro
// Sintaxe php: $NomeObjeto = new MetodoConstrutor
// MetodoConstrutor --> POSSUI O MESMO NOME DA CLASSE
// . concatena 
$meuCarro = new Carro();

// Gravando valores dentro dos atributos do meu objeto
$meuCarro->modelo = "UNO";
$meuCarro->fabricante = "fiat";
$meuCarro->anoModelo = 2014;

// Recuperando valores internos dos atributos
echo("Modelo do carro " . $meuCarro->modelo . "<br/>");
echo("Fabricante" . $meuCarro->fabricante . "<br/>");
echo("Ano de Modelo" . $meuCarro->anoModelo . "<br/>");

// Invocar um METODO (Ação do objeto)
$meuCarro->acelerar();

?>