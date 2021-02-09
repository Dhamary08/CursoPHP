<?php
#arreglos simples
$semana = array('Lunes', 'Martes', 'Miercoloes', 'Jueves', 'Viernes', 'Sabado', 'Domingo');
$arreglo = array('cadenas de texto', 1, array('asd', 123), true);
#arreglos asociativos
$persona= array('telefono' => '123456789', 'edad' => 30, 'apellido' => 'peres', 'mexico');
#arreglos multidimensionales






echo $semana[0] . '<br />';
echo $semana[1] . '<br />';
echo $semana[2] . '<br />';
echo $semana[3] . '<br />';
echo $semana[4] . '<br />';
echo $semana[5] . '<br />';
echo $semana[6] . '<br />';

echo $arreglo[0] . '<br />';
echo $arreglo[1] . '<br />';
#echo $arreglo[2] . '<br />';
#echo $arreglo[3] . '<br />';

#echo $persona ['telefono' .'<br />' ];
echo 'El telefono de Alex es:  ' . $persona ['telefono' . '<br />'] = '987654321';
?>