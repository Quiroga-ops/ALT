  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrar usuarios
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Administrar usuarios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario" >
            Agregar usuario
          </button>
        </div>



        <div class="box-body">
          <table class="table table-bordered table-striped dt-responsive tablas">
            <thead>
              <tr>
                <th style="width:10px">#</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Foto</th>
                <th>Perfil</th>
                <th>Estado</th>
                <th>Ultimo Login</th>
                <th>Acciones</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>1</td>
                <td>Pepe</td>
                <td>Admin</td>
                <td><img src="views/img/usuarios/default/user.png" class="img-thumbnail" width="40px"></td>
                <td>Administrador</td>
                <td><button class="btn btn-success btn-xs">Activado</button></td>
                <td>2022-12-01 13:23:32</td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                  </div>
                </td>
              </tr>


              <tr>
                <td>1</td>
                <td>Pepe</td>
                <td>Admin</td>
                <td><img src="views/img/usuarios/default/user.png" class="img-thumbnail" width="40px"></td>
                <td>Administrador</td>
                <td><button class="btn btn-success btn-xs">Activado</button></td>
                <td>2022-12-01 13:23:32</td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                  </div>
                </td>
              </tr>


              <tr>
                <td>1</td>
                <td>Pepe</td>
                <td>Admin</td>
                <td><img src="views/img/usuarios/default/user.png" class="img-thumbnail" width="40px"></td>
                <td>Administrador</td>
                <td><button class="btn btn-danger btn-xs">Desactivado</button></td>
                <td>2022-12-01 13:23:32</td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                  </div>
                </td>
              </tr>


            </tbody>
          </table>
        </div>
        <!-- /.box-body -->






      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!--===================================
=         MODAL AGREGAR USUARIO       =
=====================================-->
<div id="modalAgregarUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">
                <!--===================================
                =         HEAD MODAL                  =
                =====================================-->
                <div class="modal-header" style="background-color: #f39c12; color:white;>
                  <h5 class="modal-title">Agregar Usuario</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
<!--===============================
=         INGRESAR NOMBRE        =
================================-->
                <!--===================================
                =           BODY MODAL                 =
                =====================================-->
                <div class="modal-body">
                  <div class="box-body">
                    
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input class="form-control input-lg" type="text" name="nuevonombre" placeholder="Ingresar nombre" required>
                      </div>
                    </div>
<!--===============================
=         INGRESAR USUARIO        =
================================-->

                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-key"></i></span>
                      <input class="form-control input-lg" type="text" name="nuevousuario" placeholder="Ingresar usuario" required>
                    </div>
                  </div>


<!--===============================
=         INGRESAR CONTRASEÑA        =
================================-->

                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                      <input class="form-control input-lg" type="password" name="nuevopassword" placeholder="Ingresar contraseña" required>
                    </div>
                  </div>



<!--=================================
=         SELECCIONAR PERFIL        =
==================================-->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-users"></i></span>
              <select class="form-control input-lg" name="nuevoperfil" >
                <option value="">Selecionar perfil</option>
                <option value="Administrador">Administrador</option>
                <option value="Especial">Especial</option>
                <option value="Vendedor">Vendedor</option>


              </select>
            </div>
          </div>
<!--=================================
=             SUBIR FOTO            =
==================================-->
          <div class="form-group">
            <div class="panel">SUBIR FOTO</div>
            <input type="file" id="nuevafoto" name="nuevafoto">
            <p class="help-block">Peso maximo de la foto 200 MB.</p>
            <img src="views/img/usuarios/default/perfil.png" class="img-thumbnail" width="100px">

          </div>













        </div><!--modal-body-->
      </div><!--box-body-->

      <!--===================================
      =           FOOTER MODAL               =
      =====================================-->
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>



        <button type="submit" class="btn btn-primary" style="background-color:#00a65a; color:white;">Guardar cambios</button>
      </div>

    </form>



    </div><!--MODAL-CONTENT-->
  </div><!--MODAL-DIALOG-->
</div><!--MODAL-->