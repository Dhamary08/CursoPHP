<?php

$name='Valeria';
$num=7;
$double= 8.5;
$boolean= false;

#Array: arreglo
#Object: Objeto
#Class: Clase
#Null: Cuando a una variable aun no se le ha asignado ningun valor

$edad; #queda de tipo null porque no se a asignado valor


##Diferencia entre comillas simples y sencillas


echo $name;
echo "    "; 
echo $num;

echo '  Hola, '. $name;
echo "   Hola, $name"; #puede traer problemas con seguridad

gettype($nombre);
