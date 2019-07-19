<!DOCTYPE html>
<html lang="en">

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
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
</head>

<body>
    <?php include('header.php'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title">Lista de BUEES</h4>
                            <p class="card-category">Esta es la lista de BUEES</p>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>ID Buees</th>
                                    <th>Ruta de bus</th>
                                    <th>Costo</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>BASE CENTRO COMERCIAL ALBAN BORJA</td>
                                        <td>$1.50</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>BASE CENTRO CÏVICO</td>
                                        <td>$1.50</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>BASE FARMACIA FYBECA (ALBORADA)</td>
                                        <td>$1.50</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>BASE SAMANES 2</td>
                                        <td>$1.50</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>BASE AVENIDA DOMINGO COMÍN</td>
                                        <td>$1.50</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>BASE CIUDADELA PUERTO AZÚL</td>
                                        <td>$1.50</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>BASE CENTRO COMERCIAL LA ROTONDA (ALBORADA)</td>
                                        <td>$1.50</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>BASE CIUDADELA LAS JOYAS</td>
                                        <td>$1.50</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>
    </div>
    </div>

</body>
<?php include("CoreJS.php"); ?>

</html>