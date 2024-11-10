<?php
echo "Tabla del 2: <br> Con Estructura for";
for ($f = 2; $f <= 20; $f = $f + 2){
   echo $f , "<br>"; 
}

echo "<br>";
echo "Tabla del 2: <br> Con Estructura do/while <br>";
$f=2;
$tabla2=1;
do{
    echo "$f x $tabla2= ". ($f*$tabla2). "<br>"; //Hacemos la multiplicacion
    $tabla2++; //Incrementamos contador hasta 10
}while($tabla2 <= 10);

$f2=2;
$tablax2=1;
echo "<br>";
echo "Tabla del 2: <br> Con Estructura while <br>";
while($tablax2<=10){
    echo "$f2 x $tablax2 = " . ($f2 * $tablax2). "<br>"; //Hacemos la multiplicacion
    $tablax2++; //Incrementamos contador hasta 10
}
?>