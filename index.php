<?php


//Se crean tres objetos Empleade con diferentes sueldos y teléfonos.
$empleado1 = new Empleado("Alex", "Garcia", 30000 );
$empleado1 -> anadirTelefono("123456789");
$empleado1 -> anadirTelefono("987654321");

$empleado2 = new Empleado("Jordan", "Lopez", 50000 );
$empleade2->anadirTelefono("555555555");
$empleado3 = new Empleado("Taylor", "Martinez");

//Se muestra el resultado HTML de cada empleade usando el método toHtml.
echo $empleado1->toHtml();
echo $empleado2->toHtml();
echo $empleado3->toHtml();

