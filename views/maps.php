<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>SAMBUEES</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />

    <link href="../assets/css/demo.css" rel="stylesheet" />
    <!--MapBox-->
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="../assets/map/leaflet.css" />
    <style>
        #boton:hover {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php include('header.php'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-6">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title text-center">Seleccion de Ruta</h4>
                            <p class="card-category text-center">Esta es la lista de BUEES</p>
                            <hr>
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Origen</label>
                                            <input type="text" class="form-control" placeholder="Ingrese su origen" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Destino</label>
                                            <input type="text" class="form-control" placeholder="Ingrese su destino" value="">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-danger btn-fill" id="boton">Realizar la busqueda</button>
                            </form>
                            <br>
                            <a class="btn btn-danger btn-fill btn-wd" href="http://localhost/DijkstraUEES/views/nodosInsert.php" target="_blank" onclick="cargar();">
                                Mostrar el Grafo UEES
                            </a>
                            <br>
                            <br>
                        </div>
                    </div>
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title text-center">Resultado de la Ruta</h4>
                            <hr>
                            <p class="card-description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem corporis vitae
                                quibusdam amet ab nihil nobis ipsum provident porro accusantium laudantium unde
                                inventore, veritatis explicabo deleniti modi aut enim officia.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="map-container" style="height:74vh !important;">
                        <div id="map" style=" height:100%"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <?php include("footer.php"); ?>
    </div>
    </div>

</body>
<!--Se incluyen las librerias iniciales-->
<?php include("CoreJS.php"); ?>

<!--Mapbox-->
<script src='https://api.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.js'></script>
<script src="../assets/map/leaflet.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var map = L.map('map').setView([-2.133422, -79.865856], 13);

        L.tileLayer(
            'https://api.mapbox.com/styles/v1/mapbox/streets-v8/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiZGFuaWVsZ2QyMCIsImEiOiJjankyaXE3NzEwbWV3M2dtcGVnamd0YWRpIn0.t2WtMBtBtlpjMWMMPsY3yA', {
                tileSize: 512,
                zoomOffset: -1,
            }).addTo(map);

        L.marker([-2.133422, -79.865856]).addTo(map)
            .bindPopup('Universidad Espiritu <br> Santo.')
            .openPopup();

    });
</script>

<!--Dijkstra-->
<script src="../assets/js/dijkstra.js"></script>

</html>