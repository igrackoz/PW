<?php

include "includes/funciones.php";
encabezado('Administración de actividades complementarias');
?>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 form-wrapper auth">
        <?php
          if (!empty($_SESSION['error'])) {
            ?>
            <h2><span class="badge bg-danger"><?php echo $_SESSION['error'];?></span></h2>
            <?php
          } 
        ?>

        <h3 class="text-center form-title">Registro en el sistema de actividades complementarias</h3>

        <form action="userAuth.php" method="POST" class="needs-validation" novalidate>
          <div class="form-group">
            <label style="color:red">Uso obligatorio de cuenta oficial</label>
            <input type="email" name="email" class="form-control form-control-lg" placeholder="solo cuentas de misitio.com" required>
            <div class="invalid-feedback">
                  Se requiere cuenta oficial
            </div>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="pswd" class="form-control form-control-lg" required>
            <div class="invalid-feedback">
                  Se requiere contraseña
            </div>
          </div>
          <div class="form-group">
            <label>Confirmar Password</label>
            <input type="password" name="pswdConf" class="form-control form-control-lg" required>
            <div class="invalid-feedback">
                  Se requiere confirmar contraseña
            </div>
          </div>
		    <br>
          <div class="form-group">
            <button type="submit" name="signUp" style="width:100%" class="btn btn-lg btn-warning">Registrar</button>
          </div>
        </form>
        <p>Ya tienes cuenta? <a href="login.php">Inicia sesión</a></p>
      </div>
      <script src="js/form-validation.js"></script>
    </div>
  </div>
</body>
</html>