<?php
include "includes/funciones.php";
encabezado('Administracion de avtividades complementarias');
?>
<div class="container mt-5">
  <div class="row d-flex justify-content-center">
    <div class="col-md-7">
      <div class="card px-5 py-4" id="form1">
        <div class="form-data">
          <main class="form-signin">
            <form action="userAuth.php" method="POST" class="needs-validation" novalidate>
              <h1 class="h3 mb-3 fw-normal"> por favor inicie sesion </h1>
              <div class="form-floatin mb-3">
                <input type="email" class="form-control" id="email" placeholder="ingresar email" name="email" required>
                <div class="invalid-feedback">
                  se requiere cuenta de email
                </div>
                <label for="email">.</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" placeholder="ingresar password" name="pswd" required>
                <div class="invalid-feedback">
                  se requiere contraseña
                </div>
                <label for="pwd"> contraseña</label>
              </div>

              <button type="submit" class="btn btn-primary" name="signIn"> iniciar sesion</button>

            </form>
            <p class="lead text-center"> Aun no me registro </p>
            <a class="btn btn-success" href="signup.php" style="width:100%" role="button"> Quiero Registrarme</a>
          </main>
        </div>
        <script src="js/form-validation.js"></script>
      </div>
    </div>
  </div>
</div>