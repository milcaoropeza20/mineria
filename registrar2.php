<?php
include('db\db.php');
    $vendidosprimavera1 = 0;
	$vendidosverano1 = 0;
	$vendidosotono1 =0;
	$vendidosinvierno1 = 0;

	$vendidosprimavera2 = 0;
	$vendidosverano2 = 0;
	$vendidosotono2 =0;
	$vendidosinvierno2 = 0;

	$vendidosprimavera3 = 0;
	$vendidosverano3 = 0;
	$vendidosotono3 =0;
	$vendidosinvierno3 = 0;

	$temporada[0] = "Primavera";
	$temporada[1] = "Verano";
	$temporada[2] = "Otoño";
	$temporada[3] = "Invierno";

	$tiposproducto[0] = "producto uno";
	$tiposproducto[1] = "producto dos";
	$tiposproducto[2] = "producto tres";
    $tiposproducto[3] = "producto cinco";

	$fecha = date("y-m-d");

	for($i =0; $i<20; $i++){
		$fecha = date('Y-m-d', strtotime($fecha . '+ 1 days'));
        for($j=0; $j<2; $j++){
			$fechad = date("b");
			$vendidos = random_int(40,150);
            $vendido=strval($vendidos);
            $clavearticulo=0;
			$producto = 0;
			$ttemporada = 0;

			if($fecha >= '2022-03-21' && $fecha <= '2022-06-20'){
				$ttemporada = 0;

				if($vendidos>=1 && $vendidos<=40){
					$producto = 0;
					$vendidosprimavera1 = $vendidosprimavera1 + $vendidos;
				}
	
				if($vendidos>=41 && $vendidos<=90){
					$producto = 1;
					$vendidosprimavera2 = $vendidosprimavera2 + $vendidos;
				}
	
				if($vendidos>=91 && $vendidos<=100){
					$producto = 2;
					$vendidosprimavera3 = $vendidosprimavera3 + $vendidos;
				}
                if($vendidos>=101 && $vendidos<=150){
					$producto = 3;

                    $vendido="ABC";
				}
			}

			if($fecha >= '2022-06-21' && $fecha <= '2022-09-20'){
				$ttemporada = 1;

				if($vendidos>=1 && $vendidos<=40){
					$producto = 0;
					$vendidosverano1 = $vendidosverano1 + $vendidos;
				}
	
				if($vendidos>=41 && $vendidos<=90){
					$producto = 1;
					$vendidosverano2 = $vendidosverano2 + $vendidos;
				}
	
				if($vendidos>=91 && $vendidos<=100){
					$producto = 2;
					$vendidosverano3 = $vendidosverano3 + $vendidos;
				}
                if($vendidos>=101 && $vendidos<=150){
					$producto = 3;
                    $vendido="ABC";
				}
			}

			if($fecha >= '2022-09-23' && $fecha <= '2022-12-21'){
				$ttemporada = 2;
				if($vendidos>=1 && $vendidos<=40){
					$producto = 0;
					$vendidosotono1 = $vendidosotono1 + $vendidos;
				}
	
				if($vendidos>=41 && $vendidos<=90){
					$producto = 1;
					$vendidosotono2 = $vendidosotono2 + $vendidos;
				}
	
				if($vendidos>=91 && $vendidos<=100){
					$producto = 2;
					$vendidosotono3 = $vendidosotono3 + $vendidos;
				}
                if($vendidos>=101 && $vendidos<=150){
					$producto = 3;
                    $vendido="ABC";
				}
			}

			if($fecha >= '2021-12-21' && $fecha <= '2021-12-31' || $fecha >= '2022-01-01' && $fecha <= '2022-03-20'){
				$ttemporada = 3;
				if($vendidos>=1 && $vendidos<=40){
					$producto = 0;
                    $clavearticulo=101;
					$vendidosinvierno1 = $vendidosinvierno1 + $vendidos;
				}
	
				if($vendidos>=41 && $vendidos<=90){
					$producto = 1;
                    $clavearticulo=102;
					$vendidosinvierno2 = $vendidosinvierno2 + $vendidos;
				}
	
				if($vendidos>=91 && $vendidos<=100){
					$producto = 2;
                    $clavearticulo=101;
					$vendidosinvierno3 = $vendidosinvierno3 + $vendidos;
				}
                if($vendidos>=101 && $vendidos<=150){
					$producto = 3;
                    $vendido="ABC";
				}
			}
			
				$query = "INSERT INTO `notas` (clave,fecha,num_ventas,articulo,temporada) VALUES ('$clavearticulo','$fecha','$vendido','$tiposproducto[$producto]','$temporada[$ttemporada]')";
				
				$resultado = mysqli_query($conex,$query);
           if($resultado)
            {
                $alert='Registro exitoso';
            }
			
		}
	}

?>
