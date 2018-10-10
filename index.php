<!doctype html>
<html lang="es">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
      <link rel="stylesheet" href="assets/css/styles.css">
      <link rel="stylesheet" href="assets/font/css/font-ct.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
      <title>Test Drive | Plan de Acogida</title>
   </head>
   <body >
      <form class="form-signin row" action="register.php" method="post">
         <div class="form-group col-md-12 col-lg-12 col-sm-12 d-flex justify-content-center align-items-center flex-column">
            <img class="img-fluid" style="width: 250px" src="assets/img/logo.png" alt="">
            <h1 class="h3 my-3 mt-5 font-weight-normal text-center titulo"><i class="demo-icon icon-23"></i>REGISTRO</h1>
         </div>
         <p class="px-3 text-muted">Regístrate a continuación y empieza tu test drive a través de este Rally por nuestra compañía. Conocerás nuestros diferentes canales digitales y te llenarás de motivación para los retos que te esperan. Diligencia estos datos para continuar:</p>
         <div class="form-group col-md-6 col-lg-6 col-sm-12">
            <label for="nombre" class="text-muted small">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control primero" placeholder="Nombre Completo *" required autofocus>
         </div>
         <div class="form-group col-md-6 col-lg-6 col-sm-12">
            <label for="cedula" class="text-muted small">Cédula</label>
            <input type="text" id="cedula" name="cedula" class="form-control todos" placeholder="Cedula *" required>
         </div>
         <div class="form-group col-md-6 col-lg-6 col-sm-12">
            <label for="cargo" class="text-muted small">Cargo</label>
            <input type="text" id="cargo" name="cargo" class="form-control todos" placeholder="Cargo *" required>
         </div>
         <div class="form-group col-md-6 col-lg-6 col-sm-12">
            <label for="area" class="text-muted small">Área</label>
            <input type="text" id="area" name="area" class="form-control todos" placeholder="Área *" required>
         </div>
         <div class="form-group col-md-6 col-lg-6 col-sm-12">
            <label for="linea" class="text-muted small">Línea</label>
            <input type="text" id="linea" name="linea" class="form-control todos" placeholder="Línea *" required>
         </div>
         <div class="form-group col-md-6 col-lg-6 col-sm-12">
            <label for="empresa" class="text-muted small">Empresa</label>
            <input type="text" id="empresa" name="empresa" class="form-control ultimo" placeholder="Empresa *" required>
         </div>
         <button class="btn btn-lg mx-3 btn-primary btn-block" type="submit">Registrarse</button>
         <div class="form-group col-md-12 col-lg-12 col-sm-12">
            <p class="mt-4 mb-3 text-muted small text-center">Motorysa &copy; 2017-2018</p>
         </div>
      </form>
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="bootstrap/jquery-3.3.1.slim.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
      <script src="bootstrap/js/popper.min.js"></script>
   </body>
</html>