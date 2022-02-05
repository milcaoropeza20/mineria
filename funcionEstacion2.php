<?php
    include('db\db.php');
    include('registrar.php');
    $totalP=0;
    $totalV=0;
    $totalO=0;
    $totalI=0;
    $totalP2=0;
    $totalV2=0;
    $totalO2=0;
    $totalI2=0;
    $totalP3=0;
    $totalV3=0;
    $totalO3=0;
    $totalI3=0;

    $queryArt1="SELECT * from  notas where articulo='Articulo1'";
    $resultado_P = mysqli_query($conex,$queryArt1);
    for($i=0;$i<450; $i++)
    {
        for($j=0; $j<10;$j++)
        {
            if($fecha >= '2022-03-21' && $fecha <= '2022-06-20' && $resultado_P)
            {
                $totalP = $totalP+1;
            }
        }
    }

?>