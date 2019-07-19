<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="../assets/img/favicon.ico" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>SAMBUEES</title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />
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

        <div class="col-md-4">
          <div class="card ">
            <div class="card-header ">
              <h4 class="card-title">Noticia 1</h4>
              <p class="card-category">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae soluta voluptates tempora, nisi inventore iste maiores doloremque cumque in voluptatem perspiciatis praesentium obcaecati reiciendis eveniet accusamus eius ad perferendis. Eligendi?</p>
            </div>
            <div class="card-body ">
              <hr />
              <div class="stats">
                <i class="fa fa-clock-o"></i> Noticia hace 2 dias
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card ">
            <div class="card-header ">
              <h4 class="card-title">Noticia 2</h4>
              <p class="card-category">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae soluta voluptates tempora, nisi inventore iste maiores doloremque cumque in voluptatem perspiciatis praesentium obcaecati reiciendis eveniet accusamus eius ad perferendis. Eligendi?</p>
            </div>
            <div class="card-body ">
              <hr />
              <div class="stats">
                <i class="fa fa-clock-o"></i> Noticia hace 3 dias
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card ">
            <div class="card-header ">
              <h4 class="card-title">Noticia 3</h4>
              <p class="card-category">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae soluta voluptates tempora, nisi inventore iste maiores doloremque cumque in voluptatem perspiciatis praesentium obcaecati reiciendis eveniet accusamus eius ad perferendis. Eligendi?</p>
            </div>
            <div class="card-body ">
              <hr />
              <div class="stats">
                <i class="fa fa-clock-o"></i> Noticia hace 5 dias
              </div>
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
<script type="text/javascript">
  $(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    demo.initDashboardPageCharts();
  });
</script>

</html>