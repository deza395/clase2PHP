<?php
$numeroMagico=18;
function sumar($num1, $num2) {
return $num1 + $num2;
}
echo sumar(15, 28);
echo "<br>";
echo "<br>";
//definir una función ​ mayor()​ que reciba 3 números y devuelva el mayor. Imprimir el resultado//

function mayor($num1, $num2,$num3) {
  if($num1>$num2 && $num1>$num3){
return $num1;
}
if($num2>$num1 && $num2>$num3){
return $num2;
}
else {
return $num3;
}
}
echo mayor(15,30,25);
echo "<br>";
echo "<br>";

//Definir una función ​ tabla() ​ que reciba un parámetro base, un parámetro límite, y devuelve un array con la secuencia de números desde el numero base hasta el numero limite, imprimir el resultado//
function tabla($base,$limite){

  for ($i=$base; $i <=$limite ; $i++) {
    $MiArray[]=$i;
  }
    return $MiArray;
  
}
    var_dump (tabla(2,13));


?>
