<?php
include('db\db.php');

//include('funcionEstacion.php');
//date_default_timezone_set("America/Monterrey");
$articulo[0]="Articulo1";
$articulo[1]="Articulo2";
$articulo[2]="Articulo3";
$fecha=date("Y-m-d");

$alert='';
    for($i=0;$i<450; $i++)
    {
        $fecha =date("Y-m-d",strtotime($fecha."+ 1 day"));
        for($j=0; $j<10;$j++)
        {
            $ventas=rand(1,1000);
            $artR = rand(1,100);
            $art=0;
            if($artR>=1 && $artR<=40)
            {
                $art=0;
                $clave =101;
            }
            if($artR>40 && $artR<=90)
            {
                $art=1;
                $clave =102;
            }
            if($artR>90 && $artR<=100)
            {
                $art=2;
                $clave=103;
            }
            $query ="INSERT INTO notas(clave,fecha,num_ventas,articulo) VALUES('$clave','$fecha','$ventas','$articulo[$art]')";

            $resultado = mysqli_query($conex,$query);
           if($resultado)
            {
                $alert='Registro exitoso';
            }

        }
    }


?>
