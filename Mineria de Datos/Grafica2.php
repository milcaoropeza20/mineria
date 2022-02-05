<?php
  require_once "Conexion.php";
  $conex = mysqli_connect("localhost","root","","factura");

  $datos2 ="SELECT Primavera2, Verano2,Otoño2,Invierno2,Total2 FROM estaciones ORDER BY Num_Articulo DESC";
  $result=mysqli_query($conex,$datos2);

  $valoresY=array();//Ventas
  $valoresX=array();//Estaciones

  while($ver=mysqli_fetch_row($result))
  {
    $valoresY[] = $ver[1];
    $valoresX[] = $ver[0];
  }

  $datosX = json_encode($valoresX);
  $datosY = json_encode($valoresY);

?>

<div id="grafica2"> </div>

<script type="text/javascript">
  function crearCadenaLineal(json)
  {
    var parsed = JSON.parse(json);
    var arr = [];
    for(var x in parsed)
    {
      arr.push(parsed[x]);
    }
    return arr;
  }
</script>

<script type="text/javascript">

  datosX =crearCadenaLineal('<?php echo $datosX ?>');
  datosY =crearCadenaLineal('<?php echo $datosY ?>');


  var trace1 = {
  x: datosX,
  y: datosY,
  type: 'scatter'
};


var data = [trace1];

Plotly.newPlot('grafica2', data);
</script>
