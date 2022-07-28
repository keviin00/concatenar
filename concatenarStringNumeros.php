 <!doctype html>
 <html>
 <head>
 <meta charset="utf-8">
 <title>Documento sin titulo</title>
 </head>
 <body>

<?php

    $luchador="Mokuro";  //cada variable se puede guardar con $ y puede ser un entero o un string o un float (5.3 siempre va con punto el float )
    $luchador2="Chrome"; //se puede almacenar cualquier tipo de variable 
    $luchador3="Mammon";
    $luchador4="Fran";
    $luchador5="Daemon";
    $apellido ="Rokudo";   // todas las sentencias van con ; al final 
    $apellido2="Dokuro"; 
    $apellido3="Arcobaleno";
    $apellido4="Varia";
    $apellido5="Spade";
    $edad = 25; // los datos numericos no van entre comillas ""
    $edad2 = 23;
    $edad3 = 90;
    $edad4 = 26;
    $edad5= 120;



    //print "$nombre  $apellido y $nombre2  $apellido2 <br>" ; print no permine concatenar sin las " " o sin contatenar bien 
    print "$luchador   $apellido   <br>" ;
    print "$luchador2  $apellido2  <br>" ;
    print "$luchador3  $apellido3  <br>" ;
    print "$luchador4  $apellido4  <br>" ;
    print "$luchador5  $apellido5  <br>" ; 
    print"<br>";
    print"<br>";
    print"<br>";               
   // echo "el nombre es "  . $nombre . " tiene " . $edad .  " y " . $nombre2 . " tiene " . $edad2; // echo $nombre,$edad se escribe todo junto porque no estamos concatenando y no hay espacio
    echo "la edad de " . $luchador  . " es " . $edad  . "<br>";
    echo "la edad de " . $luchador2 . " es " . $edad2 . "<br>";
    echo "la edad de " . $luchador3 . " es " . $edad3 . "<br>";
    echo "la edad de " . $luchador4 . " es " . $edad4 . "<br>";
    echo "la edad de " . $luchador5 . " es " . $edad5 . "<br>";

   


?>
 </body>
 </html>