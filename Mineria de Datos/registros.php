<?php

include("Conexion.php");
set_time_limit(600);
$articulo[1]="Articulo1";
$articulo[2]="Articulo2";
$articulo[3]="Articulo3";

    $ArtP1 = 0;
    $ArtV1 = 0;
    $ArtO1 =0;
    $ArtI1 = 0;

    $ArtP2 = 0;
    $ArtV2 = 0;
    $ArtO2 =0;
    $ArtI2 = 0;

    $ArtP3 = 0;
    $ArtV3 = 0;
    $ArtO3 =0;
    $ArtI3 = 0;

    $ArtP4 = 0;
    $ArtV4 = 0;
    $ArtO4 =0;
    $ArtI4 = 0;

    $ArtP5 = 0;
    $ArtV5 = 0;
    $ArtO5 =0;
    $ArtI5 = 0;


    $ArtP1P = 0;
    $ArtV1P = 0;
    $ArtO1P =0;
    $ArtI1P = 0;

    $ArtP2P = 0;
    $ArtV2P = 0;
    $ArtO2P =0;
    $ArtI2P = 0;

    $ArtP3P = 0;
    $ArtV3P = 0;
    $ArtO3P =0;
    $ArtI3P = 0;

    $ArtP4P = 0;
    $ArtV4P = 0;
    $ArtO4P =0;
    $ArtI4P = 0;

    $ArtP5P = -10000;
    $ArtV5P = -10000;
    $ArtO5P = -10000;
    $ArtI5P = -10000;

    $temporada[0] = "Primavera";
    $temporada[1] = "Verano";
    $temporada[2] = "Otoño";
    $temporada[3] = "Invierno";


    $fecha=date("y-m-d");

$alert='';

    for($i=0;$i<50; $i++)
    {
        $fecha =date("Y-m-d",strtotime($fecha . "+ 1 days"));

        for($j=0; $j<1;$j++)
        {

            $fechad = date("b");
            $Num_Factura = rand(1,1000);
            $Ventas_Totales=rand(1,100);
            $Ventas_Totales5=strval($Ventas_Totales);
            $artR = rand(1,100);
            $Probabilidad = rand(1,100);
            $Clave_Articulo = 0;
            $Error = rand(0,20000);
            if($fecha >= '2022-03-21' && $fecha <= '2022-06-20')
            {

                    if($Probabilidad >=1 && $Probabilidad <=50 || $Ventas_Totales>=1 && $Ventas_Totales<=40)
                    {
                        $Clave_Articulo = 1;
                        $ArtP1 = $ArtP1 + $Ventas_Totales;
                        $ArtP1P = $ArtP1P + $Probabilidad;
                    }


                    if($Probabilidad >=51 && $Probabilidad <=71 || $Ventas_Totales>40 && $Ventas_Totales<=90)
                    {
                        $Clave_Articulo = 2;
                        $ArtP2 = $ArtP2 + $Ventas_Totales;
                        $ArtP2P = $ArtP2P + $Probabilidad;
                    }


                    if($Probabilidad >= 72 & $Probabilidad <= 94 || $Ventas_Totales> 90 && $Ventas_Totales<=100)
                    {
                        $Clave_Articulo = 3;
                        $ArtP3 = $ArtP3 + $Ventas_Totales;
                        $ArtP3P = $ArtP3P + $Probabilidad;
                    }

                    if($Probabilidad > 94 & $Probabilidad <= 98 || $Ventas_Totales > 90 && $Ventas_Totales<=100)
                    {
                        $Clave_Articulo = 4;
                        $ArtP4 = $ArtP4 + $Ventas_Totales;
                        $ArtP4P = $ArtP4P + $Probabilidad;
                    }


                    if($Probabilidad > 98 & $Probabilidad <= 100 || $Ventas_Totales >= 0 && $Ventas_Totales<=0)
                    {
                        $Clave_Articulo = 5;
                        $Ventas_Totales5 = "ABC";
                    }

            }

            if($fecha >= '2022-06-21' && $fecha <= '2022-09-20')
            {
                    if($Probabilidad >=0 && $Probabilidad <=50 || $Ventas_Totales>=1 && $Ventas_Totales<=40)
                    {
                        $Clave_Articulo =1;
                        $ArtV1 = $ArtV1 + $Ventas_Totales;
                        $ArtV1P = $ArtV1P + $Probabilidad;
                    }


                    if($Probabilidad >=51 && $Probabilidad <=71 || $Ventas_Totales>40 && $Ventas_Totales<=90)
                    {
                        $Clave_Articulo =2;
                        $ArtV2 = $ArtV2 + $Ventas_Totales;
                        $ArtV2P = $ArtV2P + $Probabilidad;
                    }


                    if($Probabilidad >= 72 & $Probabilidad <= 94 || $Ventas_Totales>90 && $Ventas_Totales<=100)
                    {
                        $Clave_Articulo = 3;
                        $ArtV3 = $ArtV3 + $Ventas_Totales;
                        $ArtV3P = $ArtV3P + $Probabilidad;
                    }

                    if($Probabilidad > 94 & $Probabilidad <= 98 || $Ventas_Totales> 90 && $Ventas_Totales <= 100)
                    {
                        $Clave_Articulo = 4;
                        $ArtV4 = $ArtV4 + $Ventas_Totales;
                        $ArtV4P = $ArtV4P + $Probabilidad;
                    }

                    if($Probabilidad > 98 & $Probabilidad <= 100 || $Ventas_Totales >=0 && $Ventas_Totales<=0)
                    {
                        $Clave_Articulo = 5;
                        $Ventas_Totales5 = "ABC";
                        $ArtV5P = $ArtV5P + $Probabilidad;
                    }

            }


                if($fecha >= '2022-09-23' && $fecha <= '2022-12-21')
                {
                    if($Probabilidad >=0 && $Probabilidad <=50 || $Ventas_Totales>=1 && $Ventas_Totales<=40)
                    {
                        $Clave_Articulo =1;
                        $ArtO1 = $ArtO1 + $Ventas_Totales;
                        $ArtO1P = $ArtO1P + $Probabilidad;
                    }



                    if($Probabilidad >=51 && $Probabilidad <=71 || $Ventas_Totales>40 && $Ventas_Totales<=90)
                    {
                        $Clave_Articulo =2;
                        $ArtO2 = $ArtO2 + $Ventas_Totales;
                        $ArtO1P = $ArtO1P + $Probabilidad;
                    }


                    if($Probabilidad >=72 && $Probabilidad <=94 || $Ventas_Totales>90 && $Ventas_Totales<=100)
                    {
                        $Clave_Articulo = 3;
                        $ArtO3 = $ArtO3 + $Ventas_Totales;
                        $ArtO1P = $ArtO1P + $Probabilidad;
                    }
                    

                if($Probabilidad > 94 && $Probabilidad <=98 || $Ventas_Totales>90 && $Ventas_Totales<=100)
                    {
                        $Clave_Articulo = 4;
                        $ArtO4 = $ArtO4 + $Ventas_Totales;
                        $ArtO4P = $ArtO4P + $Probabilidad;
                    }
                    

                if($Probabilidad > 98 & $Probabilidad <= 100 || $Ventas_Totales >=0 && $Ventas_Totales<=0)
                    {
                        $Clave_Articulo = 5;
                        $Ventas_Totales5 = "ABC";
                        $ArtO5P = $ArtO5P + $Probabilidad;
                    }


            }

            if($fecha >= '2022-12-21' && $fecha <= '2022-12-31' || $fecha >= '2022-01-01' && $fecha <= '2022-03-20')
            {


                    if($Probabilidad >=0 && $Probabilidad <=50 || $Ventas_Totales >= 1 && $Ventas_Totales <= 40)
                    {
                        $Clave_Articulo = 1;
                        $ArtI1 = $ArtI1 + $Ventas_Totales;
                        $ArtI1P = $ArtI1P + $Probabilidad;
                    }


                    if($Probabilidad >=51 && $Probabilidad <=71 || $Ventas_Totales > 40 && $Ventas_Totales <= 90)
                    {
                        $Clave_Articulo = 2;
                        $ArtI2 = $ArtI2 + $Ventas_Totales;
                        $ArtI2P = $ArtI2P + $Probabilidad;
                    }


                    if($Probabilidad >=72 && $Probabilidad <=94 || $Ventas_Totales > 90 && $Ventas_Totales <= 100)
                    {
                        $Clave_Articulo = 3;
                        $ArtI3 = $ArtI3 + $Ventas_Totales;
                        $ArtI3P = $ArtI3P + $Probabilidad;

                    }


                    if($Probabilidad > 94 && $Probabilidad <=98 || $Ventas_Totales > 90 && $Ventas_Totales<=100)
                    {
                        $Clave_Articulo = 4;
                        $ArtI4 = $ArtI4 + $Ventas_Totales;
                        $ArtI4P = $ArtI4P + $Probabilidad;
                    }

                    if($Probabilidad > 98 & $Probabilidad <= 100 || $Ventas_Totales >=0 && $Ventas_Totales<=0)
                    {
                        $Clave_Articulo = 5;
                        $Ventas_Totales5 = "ABC";
                        $ArtI5P = $ArtI5P + $Probabilidad;
                    }

            }



                $Total_Articulo1 = $ArtP1 + $ArtV1 + $ArtO1 + $ArtI1 ;
                $Total_Articulo2 = $ArtP2 + $ArtV2 + $ArtO2 + $ArtI2 ;
                $Total_Articulo3 = $ArtP3 + $ArtV3 + $ArtO3 + $ArtI3 ;
                $Total_Articulo4 = $ArtP4 + $ArtV4 + $ArtO4 + $ArtI4 ;
                $Total_Articulo34P = $ArtP3 + $ArtP4;
                $Total_Articulo34V = $ArtV3 + $ArtV4;
                $Total_Articulo34O = $ArtO3 + $ArtO4;
                $Total_Articulo34I = $ArtI3 + $ArtI4;
                $Total_ArticuloCombinado = $Total_Articulo3 + $Total_Articulo4;


                $Probabilidad_Articulo1 = $ArtP1P + $ArtV1P + $ArtO1P + $ArtI1P;
                $Probabilidad_Art1Div = $Probabilidad_Articulo1 / 365;

                $Probabilidad_Articulo2 = $ArtP2P + $ArtV2P + $ArtO2P + $ArtI2P;
                $Probabilidad_Art2Div = $Probabilidad_Articulo2 / 365;

                $Probabilidad_Articulo3 = $ArtP3P + $ArtV3P + $ArtO3P + $ArtI3P ;
                $Probabilidad_Art3Div = $Probabilidad_Articulo3 / 365;

                $Probabilidad_Art4Div = $Total_ArticuloCombinado / 365;


                $format_number1 = number_format($Probabilidad_Art1Div,4);
                $format_number2 = number_format($Probabilidad_Art2Div,4);
                $format_number3 = number_format($Probabilidad_Art3Div,4);
                $format_number4 = number_format($Probabilidad_Art4Div,4);

            $query ="INSERT INTO factura(fecha,Num_Factura,Clave_Articulo,Ventas_Totales) VALUES('$fecha','$Num_Factura','$Clave_Articulo','$Ventas_Totales')";

            $query2 ="INSERT INTO estaciones(Primavera1,Verano1,Otoño1,Invierno1,Total1,Probabilidad1, Primavera2,Verano2,Otoño2,Invierno2,Total2, Probabilidad2, Primavera3,Verano3,Otoño3,Invierno3,Total3,Probabilidad3,TotalCombinado, Primavera4,Verano4,Otoño4,Invierno4,Total4,Probabilidad4) VALUES('$ArtP1','$ArtV1','$ArtO1','$ArtI1','$Total_Articulo1','$format_number1','$ArtP2','$ArtV2','$ArtO2','$ArtI2','$Total_Articulo2', '$format_number2', '$ArtP3','$ArtV3','$ArtO3','$ArtI3','$Total_Articulo3', '$format_number3','$Total_ArticuloCombinado', '$Total_Articulo34P', '$Total_Articulo34V', '$Total_Articulo34O', '$Total_Articulo34I', '$Total_ArticuloCombinado','$Probabilidad_Art4Div')";

            $resultado = mysqli_query($conex,$query);
            $resultado2 = mysqli_query($conex,$query2);

        }
    }

?>