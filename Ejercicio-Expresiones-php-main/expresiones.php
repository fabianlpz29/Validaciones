<?php
$abecedario = "abcdefghijklmnñopqrstuvwz";
echo preg_match("/abc/", $abecedario);

//extremos d un string
$direccion = "Calle Cuéllar";
if(preg_match("/^Calle/", $direccion))
{
 echo "Es una calle";
} else {
    echo "No es una calle";
}

//extremos sencibles
$direccion = "Calle Cuéllar";
if(preg_match("/^calle/i", $direccion))
{
 echo "Es una calle";
} else {
    echo "No es una calle";
}

//encontrar un patron al final de la cadena

    $cadena = "Esto es un saludo: hola";
    echo preg_match("/hola$/", $cadena);

// indicar inicio y final de string
$direccion = "Calle Cuéllar\nCalle Augusta";
// preg_match_all devuelve el número de matches
// Hemos incluido dos modificadores de patrón, i y m:
echo preg_match_all("/^calle/im", $direccion); // Devuelve: 2


//Sin importat lineas.
$texto = "esto\nes\ntexto\nmultilinea\nlinea";
// Da igual que se incluya el modificador multilínea con \A y \Z:
echo preg_match_all('/linea\Z/im', $texto); // Devuelve: 1
echo preg_match_all('/linea$/im', $texto); // Devuelve: 2
echo preg_match_all('/\Aes/im', $texto); // Devuelve: 1
echo preg_match_all('/^es/im', $texto); // Devuelve: 2

//corchetes
$string = "hola";
echo preg_match("/h[aeiou]la/", $string); // Devuelve 1
// También coincidiría con hala, hela, hila y hula


//caracteres incluidos 

$string = '123456789';
// Si se añade un tercer elemento a preg_match_all devuelve un array con lo encontrado
preg_match_all("/[^2468]/", $string, $matches);
var_dump($matches); // Devuelve array con 1, 3, 5, 7 y 9

?>