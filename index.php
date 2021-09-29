

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Body Style -->
    <link rel="stylesheet" href="assets/css/login.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>

    <title>Pacial 2</title>
</head>
<body>
    <!------ Login Form  ---------->
<form class="vh-100 gradient-custom" action="validate.php" method="post">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <!------ Login Components ---------->
            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Ingrese su nombre de usuario y contraseña</p>

              <!------ Usuario Field ---------->
              <div class="form-outline form-white mb-4">
                <input type="text" name="nameuser" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Usuario</label>
              </div>

              <!------ Password Field ---------->
              <div class="form-outline form-white mb-4">
                <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Contraseña</label>
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Olvide mi contraseña</a></p>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

            <!------ Social Networks ---------->
              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="https://www.mesoamericana.edu.gt" class="text-white"><i class="fab fa-qq fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0">No posee un usuario <a href="#!" class="text-white-50 fw-bold">Crear Usuario</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</body>

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>

</html>