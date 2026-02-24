<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
class Carro {
    //ATRIBUTOS 
public $marca;
public $modelo;
public $ano;
public $cor;
public $velocidade= 0;
 // FUNÇÃO - ACELERAR 
public function acelerar (){
$this->velocidade +=10;
 echo "O carro acelerou. Velocidade: " . $this->velocidade. "Km/h <br>";
}
//FUNÇÃO - FREAR 
public function frear(){
if ($this ->velocidade >=10){
    $this -> velocidade -=10;
}
echo "O carro freou. Velocidade: " . $this ->velocidade. "Km/h <br>";
}
//FUNÇÃO -  MARCA 
public function marca (){
$this->marca ="FERRARI ";
 echo "A marca do carro é :  " . $this->marca;
}

}
//OBJETO 
$meuCarro=New Carro();

//METODOS 
$meuCarro -> acelerar();
$meuCarro -> acelerar();
$meuCarro -> frear();
$meuCarro -> marca();



?>
</body>
</html>