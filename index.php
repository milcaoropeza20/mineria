<?php
include('db\db.php');
include('includes\header.php');
include('registrar2.php');
include('funcionEstacion.php');
?>
<body>
    <!--Barra de navegación-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container-fluid">
                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav d-flex align-items-right">
                        <li class="nav-item">
                            <a href="#" class="nav-link active" aria-current="page">MINERIA DE DATOS</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link" aria-current="page">PRIMAVERA 2022</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link" aria-current="page">GESTIÓN DE PRODUCTOS</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- contenido--->
    <div class="container p-4">
    <br><br>
    <h1>Registrar artículo</h1><br>
    <div class ="row">
        <div class ="col-md-4">
            <div class="card card-body">
            <table class ="table table-bordered">
                <thead class= "bg-azulf" style="color:white;">
                <tr>
                    <th> Articulo </th>
                    <th> Primavera </th>     
                    <th> Verano </th>
                    <th> Otoño </th>
                    <th> Invierno </th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                       <td>Articulo 1</td> 
                       <td><?php  
                            echo $vendidosprimavera1;
                        ?></td>
                        <td><?php
                            echo $vendidosverano1;
                        ?></td>
                        <td><?php
                            echo $vendidosotono1;
                        ?></td>
                        <td><?php
                            echo $vendidosinvierno1;
                        ?></td>
                    </tr> 
                    <tr>
                       <td>Articulo 2</td> 
                       <td><?php  
                            echo $vendidosprimavera2;
                        ?></td>
                        <td><?php
                            echo $vendidosverano2;
                        ?></td>
                        <td><?php
                            echo $vendidosotono2;
                        ?></td>
                        <td><?php
                            echo $vendidosinvierno2; ?>
                    </tr> 
                    <tr>
                       <td>Articulo 3</td> 
                       <td><?php  
                            echo $vendidosprimavera3;
                        ?></td>
                        <td><?php
                            echo $vendidosverano3;
                        ?></td>
                        <td><?php
                            echo $vendidosotono2;
                        ?></td>
                        <td><?php
                            echo $vendidosinvierno3;
                        ?></td>
                    </tr> 
                </tbody>
            </table>

            </div>
            <br><br>
            <div class="card card-body">
            <table class ="table table-bordered">
                <thead class= "bg-azulf" style="color:white;">
                <tr>
                    <th> Articulo </th>
                    <th> Total </th>                 
                </tr>
                </thead>
                <tbody>
                    <tr>
                       <td>Articulo 1</td> 
                       <td><?php
                        /* Seleccionamos todos los datos de la tabla producto a traves de la consulta select*/
                            $totalA1=$vendidosprimavera1+$vendidosverano1 + $vendidosotono1 + $vendidosinvierno1;
                            echo $totalA1;
                        ?></td>
                    </tr> 
                    <tr>
                       <td>Articulo 2</td> 
                       <td><?php
                        /* Seleccionamos todos los datos de la tabla producto a traves de la consulta select*/
                        $totalA2=$vendidosprimavera2+$vendidosverano2 + $vendidosotono2 + $vendidosinvierno2;
                        echo $totalA2;             
                        ?></td>
                    </tr> 
                    <tr>
                       <td>Articulo 3</td> 
                       <td><?php
                        /* Seleccionamos todos los datos de la tabla producto a traves de la consulta select*/
                        $totalA3=$vendidosprimavera3+$vendidosverano3 + $vendidosotono3 + $vendidosinvierno3;
                        echo $totalA3;                   
                        ?></td>
                    </tr> 
                </tbody>
            </table>
                    <div class="d-grid">
                        <div class ="alert" style="color:black"><?php echo isset($alert) ? $alert:''; ?></div>
                        <button onclick="window.location.href='index.php'" class="btn btn-danger rounded-3 my-4" name="guardar">Generar</button>

                    </div>
            </div>

        </div>
        <td> 
                              
    <div class ="col-md-8">

            <table class ="table table-bordered">
                <thead class= "bg-azulf" style="color:white;">
                <tr>
                    <th> ID </th>
                    <th> Clave </th>
                    <th> Fecha </th>
                    <th> Cantidad vendida </th>  
                    <th> Articulo </th>    
                    <th> Temporada </th>               
                </tr>
                </thead>
                <tbody>
                    <?php
                    /* Seleccionamos todos los datos de la tabla producto a traves de la consulta select*/
                        $query ="SELECT *FROM notas;";
                    /*Generamos una variable donde le mandamos la conecion extablecida y la consulta devolviendo todas los productos guardados*/
                        $resultado_productos = mysqli_query($conex,$query);
                    /* Para poder mostrar los datos nos apoyamos de while para ir recorriendo estos datos y poderlos mostrar */
                        while($row = mysqli_fetch_assoc($resultado_productos)){ ?>
                            <tr>
                                <td> <?php echo $row['folio'] ?> </td>
                                <td> <?php echo $row['clave'] ?> </td>
                                <td> <?php echo $row['fecha'] ?> </td>
                                <td> <?php echo $row['num_ventas'] ?> </td>
                                <td> <?php echo $row['articulo'] ?> </td>
                                <td> <?php echo $row['temporada'] ?> </td>
                            </tr>
                                
                        <?php } ?>
                </tbody>
            </table>
        
        </div>
        </div>
        </div>
</body>
<?php include('includes\footer.php'); ?>