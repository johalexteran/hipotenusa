<?php

 $lado_a = $_POST['lado_a'];
 $lado_b = $_POST['lado_b'];

 $resultado = "La hipotenusa del triágunlo es : ";
 $raiz = null;
 $cuadrado = null;
if (!empty($lado_a) && !empty($lado_b) ){
    $cuadrado = pow($lado_a, 2) + pow($lado_b, 2);
 $raiz = sqrt($cuadrado);
 echo 'El lado A es: '.$lado_a,'<br>';
 echo 'El lado B es: '.$lado_b,'<br>';
 echo "$resultado $raiz";
}else{
   echo 'No puede dejar los campos vacios';
}

?>