<?php
//exercice1
$nombre = 0;

while ($nombre <= 10) {
    echo 'Je suis un poisson'. "<br>";

    $nombre++; 
}

//exercice2
$variable=0;
$var= 56;

while ($variable <= 20){
    $result= $variable * $var;
    echo $result. "</br>";
    $variable++;
}

//exercice3
$varia=100;
$variable=96;

while ($varia > 10){
    $result= $varia * $variable;
    echo $result. "<br>";
    $varia--;
}

//exercice4
$vari=1;

while ($vari <= 10){
    echo $vari;
    $vari = $vari + ($vari/2);
}

//exercice5
$pas=1;
while ($pas < 15){
    echo "On y arrive presque";
    $pas++;
}

//exercice6
$pas=1;
while ($pas > 0){
    echo "C'est presque bon";
    $pas--;
}

//exercice7
$pas=1;
while ($pas < 100){
    echo "On tient le bon bout";
    $pas += 15;
}

//exercice8
$pas=12;
while ($pas > 0){
    echo "Enfin!!!";
    $pas--;
}
?>