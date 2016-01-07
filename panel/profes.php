<?php include("../control/seguridad.php");?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="Panel de administración del Club Villareal Medellín">
    <meta name="Author" content="Giovanny Escobar Uribe">

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
            <img alt="logo" src="../img/logo_brand.png" class="img-brand">
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

            <li class="page-scroll">
              <a href="consultas.php">Consultas</a>
            </li>

            <li class="page-scroll">
              <a href="pagos.php">Pagos</a>
            </li>

            <li class="page-scroll active">
              <a href="profes.php">+Profes</a>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right divNombre">
            <div>
              <a href="#" class="vinculo">
                <strong><?php echo $_SESSION["usuarioActual"];?></strong>
              </a><br>
              <a class="salida vinculo" href="../util/logout.php">Salir</a>
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
            <h2>+Profes</h2>
            <hr class="star-primary">
          </div>
        </div>
      </div>
    </section>

    <div class="container" style="margin-top: -70px">
      <div class="row">
          <div class="col-lg-8 col-lg-offset-2">

            <!-- Formulario de registro de nuevo profe -->
            <form name="registroProfe" id="profeForm" novalidate>
              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>Nombre</label>
                  <input type="text"
                    class="form-control"
                    placeholder="Nombre"
                    id="name"
                    required data-validation-required-message="Por favor ingrese un nombre">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>Apellido</label>
                  <input type="text"
                    class="form-control"
                    placeholder="Apellido"
                    id="lastName"
                    required data-validation-required-message="Por favor ingrese un apellido">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>Usuario</label>
                  <input type="text"
                    class="form-control"
                    placeholder="Usuario"
                    id="user"
                    required data-validation-required-message="Por favor ingrese un nombre de usuario">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>Contraseña</label>
                  <input type="password"
                    class="form-control"
                    placeholder="Contraseña"
                    id="password"
                    required data-validation-required-message="Por favor ingrese una contraseña">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <br>
              <div id="success"></div>

              <div class="row">
                <div class="form-group col-xs-12">
                  <button type="submit" class="btn btn-success btn-lg">Guardar</button>
                </div>
              </div>
            </form>

            <a href="admin.php" class="btn btn-default">
              <i class="fa fa-times"></i> Cancelar
            </a>
          </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="../js/classie.js"></script>
    <script src="../js/cbpAnimatedHeader.js"></script>

    <!-- Profe Form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/registro_profe.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/freelancer.js"></script>
  </body>
</html>