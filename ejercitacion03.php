<?php
//ejercicio 1//
for ($i=1; $i <=100; $i++) {
   echo "$i <br>";
 }
 echo "<br>";
 echo "<br>";
 //ejercicio 2//
  $aleatorio= rand(1,100);
  for ($i=1; $i<= $aleatorio; $i++) {
     echo "$i <br>";
   }
   echo "<br>";
   echo "<br>";
   //ejercicio 3//
   for ($i=1; $i<=10 ; $i++) {
     echo "2 x $i= " . 2*$i . "<br>";
   }
   echo "<br>";
   echo "<br>";
   //ejercicio 4//
    $a=100;
    while($a>=85){
      echo $a . "<br>";
      $a--;
    }// le estoy duciendo 100 es mayor que 85? piola imprimilo y decrementame un valor de a es decir que a ahora  valga 99 entinces ahora pregunta che 99 es >= que 85? si piola imprimimelo y decrementame un valor de a para que valga 98 y asi hasta que no se cunpla la condicion//
    echo "<br>";
    echo "<br>";
     //ejercicio 5  Un bucle ​ while​ que a partir de una variable $contador que comience en 1 vaya aumentando hasta llegar a 5, y que muestre por pantalla el doble del valor de $contador, es decir, que muestre 2, 4, 6, 8, 10. //
     $contador=1;
     while ($contador < 5) {
       echo $contador*2 . "<br>";
       $contador++;
     }
     echo "<br>";
     echo "<br>";
     //Utilizando un ​ while​ haremos un script que tire una moneda (seleccionará un número al azar que puede ser 0 o 1) hasta que saque 5 veces cara (el número 1). Al terminar, debe imprimir cuántos tiros de monedas llevó obtener 5 veces cara//
     $cara=0;
     $CantidadDeLanzamientos=0;
     while ($cara< 5) {
          $CantidadDeLanzamientos++;
          $monedas= rand(0,1);
          if( $monedas==0){
            $cara++;}
          }
            echo "llevo $CantidadDeLanzamientos lanzamientos llegar a $cara";
// le  digo que cara vale 0 en un principio es decirtengo cero caras y cero lanzaminetos, mientras la cantidad de caras sea menor o igual a 5, se van sumando los lanzamientos. ahora como le digo cuando cara llega a 0? le digo buebo monedas puede valer 0 o 1  si monedas que es una funcion random da 0 entonces incrementame el valor de cara,una vez que la funcion random me tire 5 veces el valor 0 entonces cara se va a increemtnar 5 veces y corta el while. una vez que corte el while yo quiero los valores  finales asique pongo el echo afuera con los valores que me genero el while al terminar.
echo "<br>";
echo "<br>";

//ejercicio 7. Utilizando un ​ do/while​ realizar un script que tire la moneda hasta que se obtenga ​ cara​ (el número 1). Al final del programa imprimir cuántos tiros de moneda llevó//

$cara=0;
$lanzamientos= 0;
do {
  $monedas= rand (0,1);
  if( $monedas==1){
    $cara++;
  }
  $lanzamientos++;
} while ($cara != 1);

  echo "llevo $lanzamientos lanzamientos llegar a  $cara cara ";

 ?>
