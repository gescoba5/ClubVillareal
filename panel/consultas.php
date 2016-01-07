<?php include("../control/seguridad.php");?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Panel de administración del Club Villareal Medellín">
    <meta name="author" content="Giovanny Escobar Uribe">
    
    <title>Club Villareal Medellín</title>

    <link rel="shortcut icon" type="image/png" href="../favicon.png" />
    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="../css/freelancer.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  </head>

  <body class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="admin.php">
            <img alt="logo" src="../img/logo_brand.png" class="img-brand" style="margin-top: -20px">
          </a>
          <a class="navbar-brand logo-brand" href="admin.php">Panel Villareal</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="page-scroll">
              <a href="matriculas.php">Matrículas</a>
            </li>
            
            <li class="page-scroll">
              <a href="documentos.php">Documentos</a>
            </li>
            
            <li class="page-scroll active">
              <a href="consultas.php">Consultas</a>
            </li>

            <li class="page-scroll">
              <a href="pagos.php">Pagos</a>
            </li>

            <li class="page-scroll">
              <a href="profes.php">+Profes</a>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right nombre">
            <div>
              <a href="#" style="color: #2C3E50">
                <strong><?php echo $_SESSION["usuarioActual"];?></strong>
              </a><br>
              <a href="../util/logout.php">Salir</a>
            </div>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>

    <section style="margin-top: 50px">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center title">
            <h2>Consultas</h2>
            <hr class="star-primary">
          </div>
        </div>
      </div>
    </section>
    
    <div class="container" style="margin-top: -70px">
      
    </div>
    
    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="../js/classie.js"></script>
    <script src="../js/cbpAnimatedHeader.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/freelancer.js"></script>
  </body>
  
</html>