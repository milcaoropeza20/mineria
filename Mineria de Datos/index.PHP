<?php

$conex = mysqli_connect("localhost","root","","factura");

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Mineria de datos - Factura</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-DataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" crossorigin="anonymous">
    <script src="amcharts/amcharts.js" type="text/javascript"></script>
    <script src="amcharts/serial.js" type="text/javascript"></script>
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-md fixed-top" id="mainNav">
        <div class="container"><button data-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul><a href="#"></a><span class="text-center text-light navbar-text">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; GENERADOR DE FACTURAS</span>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item nav-link js-scroll-trigger"></li>
                    <li class="nav-item nav-link js-scroll-trigger"></li>
                    <li class="nav-item nav-link js-scroll-trigger"><a class="nav-link js-scroll-trigger" href="#contact"></a></li>
                </ul>
            </div>
        </div>
    </nav>
            <br>
            <br>
            <br>
    <header class="masthead" style="background-image:url('assets/img/intro-bg.jpg');">

        <div class="intro-body">
            <div class="table-responsive table-bordered text-monospace text-center shadow d-table float-right" style="margin: 80px;height: 80px;width: 575px;color: var(--dark);padding: 0px;">
                <table class="table table-bordered table-dark">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>fecha</th>
                            <th>Num_factura</th>
                            <th>Clave_Articulo</th>
                            <th>Ventas_totales</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php

                    $sql = "SELECT * from factura";
                    $result = mysqli_query($conex,$sql);


                    while ($mostrar = mysqli_fetch_array($result))
                    {

                    ?>
                        <tr>
                            <td><?php echo $mostrar['ID'] ?></td>
                            
                            <td><?php echo $mostrar['Fecha'] ?></td>
                            
                            <td><?php echo $mostrar['Num_Factura'] ?></td>
                            
                            <td><?php echo $mostrar['Clave_Articulo'] ?></td>
                            
                            <td><?php echo $mostrar['Ventas_Totales'] ?></td>

                        </tr>
                    <?php

                    }

                    ?>
                    </tbody>
                </table>
            </div>
            <div style="width: 1185px;height: 174px;margin: -1px;padding: 1px;margin-top: -66px;">
                <div class="table-responsive text-monospace border-secondary shadow" style="width: 256px;height: 51px;margin: 144px;padding: 0px;margin-top: 39px;margin-right: 147px;margin-bottom: 159px;">
                </div><button class="btn btn-light" type="button" style="width: 133.5938px;height: 41px;margin: -2px;padding: -1px 12px;margin-top: -127px;margin-right: 642px;margin-bottom: 118px;">Generar</button>
                <div class="table-responsive table-bordered text-monospace shadow d-table" style="width: 545px;height: 213.5px;margin: 18px;margin-top: -56px;">
                    <table class="table table-bordered table-dark">
                        <thead>
                            <tr class="bg-secondary">
                                <th>N° Articulo</th>
                                <th>Primavera</th>
                                <th>Verano</th>
                                <th>Otoño</th>
                                <th>Invierno</th>
                                <th>Total</th>
                                <th>Porcentaje %</th>
                            </tr>
                        </thead>
                        <tbody>
                         <?php

                            $sql = "SELECT * from estaciones ORDER BY Num_Articulo DESC";
                            $result = mysqli_query($conex,$sql);
                            $mostrar = mysqli_fetch_array($result);
                            ?>
                            <tr class="bg-danger">
                                <td>Articulo 1</td>
                                <td><?php echo $mostrar['Primavera1'] ?></td>
                                <td><?php echo $mostrar['Verano1'] ?></td>
                                <td><?php echo $mostrar['Otoño1'] ?></td>
                                <td><?php echo $mostrar['Invierno1'] ?></td>
                                <td><?php echo $mostrar['Total1'] ?></td>
                                <td><?php echo $mostrar['Probabilidad1'] ?></td>
                            </tr>
                                <tr class="bg-danger">
                                <td>Articulo 2</td>
                                <td><?php echo $mostrar['Primavera2'] ?></td>
                                <td><?php echo $mostrar['Verano2'] ?></td>
                                <td><?php echo $mostrar['Otoño2'] ?></td>
                                <td><?php echo $mostrar['Invierno2'] ?></td>
                                <td><?php echo $mostrar['Total2'] ?></td>
                                <td><?php echo $mostrar['Probabilidad2'] ?></td>
                            </tr>
                                <tr class="bg-danger">
                                <td>Articulo 3</td>
                                <td><?php echo $mostrar['Primavera3'] ?></td>
                                <td><?php echo $mostrar['Verano3'] ?></td>
                                <td><?php echo $mostrar['Otoño3'] ?></td>
                                <td><?php echo $mostrar['Invierno3'] ?></td>
                                <td><?php echo $mostrar['Total3'] ?></td>
                                <td><?php echo $mostrar['Probabilidad3'] ?></td>
                            </tr>
                                <tr class="bg-danger">
                                <td>Articulo 4</td>
                                <td><?php echo $mostrar['Primavera4'] ?></td>
                                <td><?php echo $mostrar['Verano4'] ?></td>
                                <td><?php echo $mostrar['Otoño4'] ?></td>
                                <td><?php echo $mostrar['Invierno4'] ?></td>
                                <td><?php echo $mostrar['TotalCombinado'] ?></td>
                                <td><?php echo $mostrar['Probabilidad4'] ?></td>
                            </tr>
                            <?php
                        ?>
                        </tbody>
                    </table>
                </div>
                <br>
                <br>
                <br>
                <br>
                    <div id="chartdiv" style="width: 80%; height: 400px;"></div>

            </div>
        </div>
    </header>

    <script src="plotly-2.8.3.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/Bootstrap-DataTables.js"></script>
    <script src="assets/js/grayscale.js"></script>
    
        <?php
        include ("registros.php");   
    ?>

</body>

<script>
            var chart;

            var chartData = [

            <?php $mostrar = mysqli_fetch_array($result)
                    ?>

                    {
                        "country": "Primavera",
                        "year2004": <?php echo $mostrar['Primavera1'] ?>,
                        "year2005": <?php echo $mostrar['Primavera2'] ?>,
                        "year2006": <?php echo $mostrar['Primavera3'] ?>,
                        "year2007": <?php echo $mostrar['Primavera4'] ?>,
                    },
                    {
                        "country": "Verano",
                        "year2004": <?php echo $mostrar['Verano1'] ?>,
                        "year2005": <?php echo $mostrar['Verano2'] ?>,
                        "year2006": <?php echo $mostrar['Verano3'] ?>,
                        "year2007": <?php echo $mostrar['Verano4'] ?>,
                    },
                    {
                        "country": "Otoño",
                        "year2004": <?php echo $mostrar['Otoño1'] ?>,
                        "year2005": <?php echo $mostrar['Otoño2'] ?>,
                        "year2006": <?php echo $mostrar['Otoño3'] ?>,
                        "year2007": <?php echo $mostrar['Otoño4'] ?>,
                    },
                    {
                        "country": "Invierno",
                        "year2004": <?php echo $mostrar['Invierno1'] ?>,
                        "year2005": <?php echo $mostrar['Invierno2'] ?>,
                        "year2006": <?php echo $mostrar['Invierno3'] ?>,
                        "year2007": <?php echo $mostrar['Invierno4'] ?>,
                    },

<?php   ?>
            ];


            AmCharts.ready(function () {
                // SERIAL CHART
                chart = new AmCharts.AmSerialChart();
                chart.dataProvider = chartData;
                chart.categoryField = "country";
                chart.color = "#FFFFFF";
                chart.fontSize = 14;
                chart.startDuration = 1;
                chart.plotAreaFillAlphas = 0.2;
                // the following two lines makes chart 3D
                chart.angle = 30;
                chart.depth3D = 70;

                // AXES
                // category
                var categoryAxis = chart.categoryAxis;
                categoryAxis.gridAlpha = 2;
                categoryAxis.gridPosition = "start";
                categoryAxis.gridColor = "#FFFFFF";
                categoryAxis.axisColor = "#FFFFFF";
                categoryAxis.axisAlpha = 0.5;
                categoryAxis.dashLength = 2;

                // value
                var valueAxis = new AmCharts.ValueAxis();
                valueAxis.stackType = "3d"; // This line makes chart 3D stacked (columns are placed one behind another)
                valueAxis.gridAlpha = 1;
                valueAxis.gridColor = "#FFFFFF";
                valueAxis.axisColor = "#FFFFFF";
                valueAxis.axisAlpha = 1;
                valueAxis.dashLength = 5;
                valueAxis.title = "Numero de Articulos";
                valueAxis.titleColor = "#FFFFFF";
                valueAxis.unit = "";
                chart.addValueAxis(valueAxis);

                // GRAPHS
                // first graph
                var graph1 = new AmCharts.AmGraph();
                graph1.title = "2022";
                graph1.valueField = "year2004";
                graph1.type = "column";
                graph1.lineAlpha = 0;
                graph1.lineColor = "#0D69FF";
                graph1.fillAlphas = 1;
                graph1.balloonText = "Numero de Ventas de [[category]] (2022) Articulo 1: <b>[[value]]</b>";
                chart.addGraph(graph1);

                // second graph
                var graph2 = new AmCharts.AmGraph();
                graph2.title = "2022";
                graph2.valueField = "year2005";
                graph2.type = "column";
                graph2.lineAlpha = 0;
                graph2.lineColor = "#FF0000";
                graph2.fillAlphas = 1;
                graph2.balloonText = "Numero de Ventas de [[category]] (2022) Articulo 2: <b>[[value]]</b>";
                chart.addGraph(graph2);

                //Third Graph
                var graph3 = new AmCharts.AmGraph();
                graph3.title = "2022";
                graph3.valueField = "year2006";
                graph3.type = "column";
                graph3.lineAlpha = 0;
                graph3.lineColor = "#F700FF";
                graph3.fillAlphas = 1;
                graph3.balloonText = "Numero de Ventas de [[category]] (2022) Articulo 3: <b>[[value]]</b>";
                chart.addGraph(graph3);

                //Fourth Graph
                var graph4 = new AmCharts.AmGraph();
                graph4.title = "2022";
                graph4.valueField = "year2007";
                graph4.type = "column";
                graph4.lineAlpha = 0;
                graph4.lineColor = "#9EFF00";
                graph4.fillAlphas = 1;
                graph4.balloonText = "Numero de Ventas de [[category]] (2022) Articulo 4: <b>[[value]]</b>";
                chart.addGraph(graph4);

                chart.write("chartdiv");
            });
        </script>

</html>