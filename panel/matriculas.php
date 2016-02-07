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

    <link href="../favicon.png" type="image/png" rel="shortcut icon" />

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/freelancer.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Bootstrap Select CSS -->
    <link href="../css/bootstrap-select.css" rel="stylesheet" >
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
            <li class="page-scroll active">
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

            <li class="page-scroll">
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
            <h2>Matrículas</h2>
            <hr class="star-primary">
          </div>
        </div>
      </div>
    </section>

    <div class="container" style="margin-top: -70px">
      <div class="row">
          <div class="col-lg-8 col-lg-offset-2">

            <!-- Formulario de matricula de nuevo jugador -->
            <form name="matriculaJugador" id="jugadorForm" novalidate>
              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>Nombres</label>
                  <input type="text"
                         class="form-control"
                         placeholder="Nombres"
                         id="name"
                         title="Los nombres solo pueden contener letras"
                         pattern="[A-Za-zÑñÁÉÍÓÚáéíóú ]{1,}"
                         required data-validation-required-message="Por favor ingrese los nombres">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>Apellidos</label>
                  <input type="text"
                         class="form-control"
                         placeholder="Apellidos"
                         id="lastName"
                         title="Los apellidos solo pueden contener letras"
                         pattern="[A-Za-zÑñÁÉÍÓÚáéíóú ]{1,}"
                         required data-validation-required-message="Por favor ingrese los apellidos">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>Documento de Identidad</label>
                  <input type="number"
                         class="form-control"
                         placeholder="Documento de Identidad"
                         id="docId"
                         title="El documento de identidad solo puede contener números"
                         required data-validation-required-message="Por favor ingrese el documento de identidad">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>Fecha de Nacimiento</label>
                  <input type="text"
                         class="form-control"
                         placeholder="Fecha de Nacimiento"
                         id="birth"
                         title="Fecha con el formato dd/mm/aaaa"
                         pattern="[0-9]{2}[\/]{1}[0-9]{2}[\/]{1}[0-9]{4}"
                         required data-validation-required-message="Por favor ingrese la fecha de nacimiento">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>Edad</label>
                  <input type="number"
                         class="form-control"
                         placeholder="Edad"
                         id="age"
                         maxlength="2"
                         title="La edad solo debe contener números"
                         required data-validation-required-message="Por favor ingrese la edad">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>Dirección</label>
                  <input type="text"
                         class="form-control"
                         placeholder="Dirección"
                         id="address"
                         title="Dirección"
                         pattern="[A-Za-z0-9 #-]{1,}"
                         required data-validation-required-message="Por favor ingrese la dirección">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>Teléfono</label>
                  <input type="tel"
                         class="form-control"
                         placeholder="Teléfono"
                         id="tel"
                         title="El teléfono solo debe contener números"
                         pattern="[0-9]{1,}"
                         required data-validation-required-message="Por favor ingrese el número de teléfono">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>EPS</label>
                  <input type="text"
                         class="form-control"
                         placeholder="EPS"
                         id="eps"
                         title="La EPS solo puede contener letras"
                         pattern="[A-Za-zÑñÁÉÍÓÚáéíóú ]{1,}"
                         required data-validation-required-message="Por favor ingrese la EPS">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>Categoría</label>
                  <select class="selectpicker form-control"
                          id="category"
                          title="Categoría"
                          required data-validation-required-message="Por favor seleccione la categoría">
                    <option>Sub 6</option>
                    <option>Sub 8</option>
                    <option>Sub 10</option>
                    <option>Sub 12</option>
                    <option>Sub 14</option>
                  </select>
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>Acudiente</label>
                  <input type="text"
                         class="form-control"
                         placeholder="Acudiente"
                         id="acudiente"
                         title="El acudiente solo puede contener letras"
                         pattern="[A-Za-zÑñÁÉÍÓÚáéíóú ]{1,}"
                         required data-validation-required-message="Por favor ingrese el nombre para el acudiente">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>Teléfono Acudiente</label>
                  <input type="tel"
                         class="form-control"
                         placeholder="Teléfono Acudiente"
                         id="telAcudiente"
                         title="El teléfono solo debe contener números"
                         pattern="[0-9]{1,}"
                         required data-validation-required-message="Por favor ingrese el número de teléfono para el acudiente">
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

            <a href="admin.php" class="btn btn-default" style="margin-bottom: 20px;">
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

    <!-- Matricula Form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/matricula_jugador.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/freelancer.js"></script>

    <!-- Bootstrap Select JavaScript -->
    <script src="../js/bootstrap-select.js"></script>
  </body>
</html>