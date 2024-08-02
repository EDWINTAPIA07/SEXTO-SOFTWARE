<?php
/*
 a. Declaración de Variables:

  - Define al menos cinco variables de diferentes tipos de datos (integer, float, string, boolean, array).

  - Asigna valores a estas variables.

*/
$entero  = 1;
$entero1  = 3;
$entero2  = 5;
$entero3  = 3;
$decimal = 5.90;
$cadena  = "EDWIN TAPIA";
$boleano = true;
$array   = array(1,2,3,4,5);

/*
  b. Operaciones Aritméticas:

  - Realiza al menos dos operaciones aritméticas con las variables numéricas que has creado. Muestra el resultado usando la función `echo`.
  */

  $resultado = $entero1 * $decimal;

  echo "resultado primera operacion: ".$resultado. "<br><br>";

  $resultado2 = $decimal / $entero2;

  echo "resultado de la segunda operacion: ".$resultado2;

    /*
    c. Manipulación de Cadenas:
  - Crea una variable de tipo cadena y realiza las siguientes acciones:
   - Concatenación de dos cadenas.
   - Obtén la longitud de la cadena.
   */

   $cadena2 = "dice hola mundo";
   $cadena3 = $cadena." ".$cadena2;
   echo "<br><br>cadena concatenada: ".$cadena3;


   /*
    d. Uso de Condicionales:
  - Crea una estructura de control condicional que verifique el valor de una variable booleana y muestre un mensaje diferente según sea `true` o `false`.
   */
  if ($boleano) {
    echo "<br><br>el valor de la variable boleana es: V";
  } else {
    echo "<br><br>el valor de la variable boleana es: F";
  }

  /*
   e. Creación de un Array:
  - Define un arreglo con al menos cinco elementos.
  - Muestra un elemento específico del arreglo utilizando su índice.
  */

  $clave = 2;
  $array2 = array("narnaja", "manzana", "banana", "uva", "pera");

  echo "<br><br>elemento del array con clave ".$clave." es. : " .$array2[$clave];
  
?>
