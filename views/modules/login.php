<div class="login-box">
  <div class="login-logo">
    <img src="views/img/plantilla/icon.png" class="img-responsive" style="padding:30px 100px 0px 100px" alt="">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingresar al sistema</p>

    <form method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Usuario" name="ingresousuario" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña" name="ingresopassword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>
      <?php

      $login = new ClaseControladorUsuarios();
      $login -> MetodoControladorIngresoUsuario();

      ?>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->