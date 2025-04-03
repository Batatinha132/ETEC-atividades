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

// Carro.modelo 
$meuCarro->modelo = "UNO";
$meuCarro->fabricante = "fiat";
$meuCarro->anoModelo = 2014;

echo("Modelo do carro " . $meuCarro->modelo . "<br/>");
echo("Fabricante" . $meuCarro->fabricante . "<br/>");
echo("Ano de Modelo" . $meuCarro->anoModelo . "<br/>");
?>