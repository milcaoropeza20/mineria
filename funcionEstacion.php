<?php
    include('db\db.php');
    /* Seleccionamos todos los datos de la tabla producto a traves de la consulta select para el articulo 1*/
    $queryP="SELECT articulo from  notas where articulo='Articulo1' and ((fecha>='2022-03-23' and fecha<'2022-06-21') or (fecha>='2023-03-23' and fecha<'2023-06-21') or ( fecha>='2024-03-23' and fecha<'2024-06-21' ))";   
    $resultado_P = mysqli_query($conex,$queryP);
    $totalP=0;
    while($row1=mysqli_fetch_assoc($resultado_P)){
        $totalP =$totalP+1;
    }
    $queryV="SELECT articulo from  notas where articulo='Articulo1' and ((fecha>='2022-06-21' and fecha<'2022-09-20') or (fecha>='2023-06-21' and fecha<'2023-09-20') or  (fecha>='2024-06-21' and fecha<'2024-09-20' ))";   
    $resultado_V = mysqli_query($conex,$queryV);
    $totalV=0;
    while($row1=mysqli_fetch_assoc($resultado_V)){
        $totalV =$totalV+1;
    }
    $queryO="SELECT articulo from  notas where articulo='Articulo1' and( (fecha>='2022-09-20' and fecha<'2022-12-21') or (fecha>='2023-09-20' and fecha<'2023-12-21') or  (fecha>='2024-09-20' and fecha<'2024-12-21' ))";   
    $resultado_O = mysqli_query($conex,$queryO);
    $totalO=0;
    while($row1=mysqli_fetch_assoc($resultado_O)){
        $totalO =$totalO+1;
    }
    
    $queryI="SELECT num_ventas from  notas where articulo='Articulo1' and ((fecha>='2022-12-21' and fecha<='2022-12-31') or (fecha>='2022-01-01' and fecha<'2022-03-23') or (fecha>='2023-09-20' and fecha<'2023-12-21' ) or (fecha>='2023-01-01' and fecha<'2023-03-23') or  (fecha>='2024-09-20' and fecha<'2024-12-21' ) or (fecha>='2024-01-01' and fecha<'2024-03-23' ))";   
    $resultado_I = mysqli_query($conex,$queryI);
    $totalI=0;
    while($row1=mysqli_fetch_assoc($resultado_I)){
        $ventasI=$row['num_ventas'];
        $totalI =$totalI+$ventasI;
    }

    /* Seleccionamos todos los datos de la tabla producto a traves de la consulta select para articulo 2*/
    $queryP2="SELECT articulo from  notas where articulo='Articulo2' and( (fecha>='2022-03-23' and fecha<'2022-06-21') or( fecha>='2023-03-23' and fecha<'2023-06-21') or  (fecha>='2024-03-23' and fecha<'2024-06-21' ))";   
    $resultado_P2 = mysqli_query($conex,$queryP2);
    $totalP2=0;
    while($row1=mysqli_fetch_assoc($resultado_P2)){
        $totalP2 =$totalP2+1;
    }
    $queryV2="SELECT articulo from  notas where articulo='Articulo2' and ( (fecha>='2022-06-21' and fecha<'2022-09-20') or (fecha>='2023-06-21' and fecha<'2023-09-20') or  (fecha>='2024-06-21' and fecha<'2024-09-20' ))";   
    $resultado_V2 = mysqli_query($conex,$queryV2);
    $totalV2=0;
    while($row1=mysqli_fetch_assoc($resultado_V2)){
        $totalV2 =$totalV2+1;
    }
    $queryO2="SELECT articulo from  notas where articulo='Articulo2' and ((fecha>='2022-09-20' and fecha<'2022-12-21') or (fecha>='2023-09-20' and fecha<'2023-12-21') or  (fecha>='2024-09-20' and fecha<'2024-12-21' ))";   
    $resultado_O2 = mysqli_query($conex,$queryO2);
    $totalO2=0;
    while($row1=mysqli_fetch_assoc($resultado_O2)){
        $totalO2 =$totalO2+1;
    }
    
    $queryI2="SELECT articulo from  notas where articulo='Articulo2' and ((fecha>='2022-12-21' and fecha<='2022-12-31' )or (fecha>='2022-01-01' and fecha<'2022-03-23') or (fecha>='2023-09-20' and fecha<'2023-12-21' ) or (fecha>='2023-01-01' and fecha<'2023-03-23') or ( fecha>='2024-09-20' and fecha<'2024-12-21') or (fecha>='2024-01-01' and fecha<'2024-03-23'))";   
    $resultado_I2 = mysqli_query($conex,$queryI2);
    $totalI2=0;
    while($row1=mysqli_fetch_assoc($resultado_I2)){
        $totalI2 =$totalI2+1;
    }

    /* Seleccionamos todos los datos de la tabla producto a traves de la consulta select para articulo 3*/
    $queryP3="SELECT articulo from  notas where articulo='Articulo3' and ( (fecha>='2022-03-23' and fecha<'2022-06-21') or (fecha>='2023-03-23' and fecha<'2023-06-21') or ( fecha>='2024-03-23' and fecha<'2024-06-21'))";   
    $resultado_P3 = mysqli_query($conex,$queryP3);
    $totalP3=0;
    while($row1=mysqli_fetch_assoc($resultado_P3)){
        $totalP3 =$totalP3+1;
    }
    $queryV3="SELECT articulo from  notas where articulo='Articulo3' and ((fecha>='2022-06-21' and fecha<'2022-09-20' )or (fecha>='2023-06-21' and fecha<'2023-09-20' )or  (fecha>='2024-06-21' and fecha<'2024-09-20') )";   
    $resultado_V3 = mysqli_query($conex,$queryV3);
    $totalV3=0;
    while($row1=mysqli_fetch_assoc($resultado_V3)){
        $totalV3 =$totalV3+1;
    }
    $queryO3="SELECT articulo from  notas where articulo='Articulo2' and ( (fecha>='2022-09-20' and fecha<'2022-12-21') or (fecha>='2023-09-20' and fecha<'2023-12-21') or  (fecha>='2024-09-20' and fecha<'2024-12-21') )";   
    $resultado_O3 = mysqli_query($conex,$queryO3);
    $totalO3=0;
    while($row1=mysqli_fetch_assoc($resultado_O3)){
        $totalO3 =$totalO3+1;
    }
    
    $queryI3="SELECT articulo from  notas where articulo='Articulo2' and ((fecha>='2022-12-21' and fecha<='2022-12-31') or (fecha>='2022-01-01' and fecha<'2022-03-23') or (fecha>='2023-09-20' and fecha<'2023-12-21')  or (fecha>='2023-01-01' and fecha<'2023-03-23') or ( fecha>='2024-09-20' and fecha<'2024-12-21') or (fecha>='2024-01-01' and fecha<'2024-03-23'))";   
    $resultado_I3 = mysqli_query($conex,$queryI3);
    $totalI3=0;
    while($row1=mysqli_fetch_assoc($resultado_I3)){
        $totalI3 =$totalI3+1;
    }

?>