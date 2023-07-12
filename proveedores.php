<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestión de Inventario</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="shortcut icon" href="img/favicon.ico">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
      $(document).ready(function(){
        // Activate tooltip
        $('[data-toggle="tooltip"]').tooltip();
        
        // Select/Deselect checkboxes
        var checkbox = $('table tbody input[type="checkbox"]');
        $("#selectAll").click(function(){
          if(this.checked){
            checkbox.each(function(){
              this.checked = true;                        
            });
          } else{
            checkbox.each(function(){
              this.checked = false;                        
            });
          } 
        });
        checkbox.click(function(){
          if(!this.checked){
            $("#selectAll").prop("checked", false);
          }
        });
      });
      </script>
      
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
      
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>AE</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>El Cuartel</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="bg-red">Admin</small>
                  <span class="hidden-xs">Emily Aguirre</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <p>
                      www.incanatoit.com - Desarrollando Software
                      <small>www.youtube.com/jcarlosad7</small>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Almacén</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="almacen/articulo"><i class="fa fa-circle-o"></i> Artículos</a></li>
                <li><a href="almacen/categoria"><i class="fa fa-circle-o"></i> Categorías</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-th"></i>
                <span>Compras</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="compras/ingreso"><i class="fa fa-circle-o"></i> Ingresos</a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> Proveedores</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-shopping-cart"></i>
                <span>Ventas</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i> Ventas</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i> Clientes</a></li>
              </ul>
            </li>
                       
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Acceso</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="configuracion/usuario"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                
              </ul>
            </li>
             <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li>
                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>





       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Proveedores</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  	<div class="row">
	                  	<div class="col-md-12">
		                          <!--Contenido-->
                              <div class="container">
                                <div class="table-responsive">
                                  <div class="table-wrapper">
                                    <div class="table-title">
                                      <div class="row">
                                        <div class="col-xs-6">
                                          <h2>Administrar <b>Proveedores</b></h2>
                                        </div>
                                        <div class="col-xs-6">
                                          <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons" style="font-size: 15px;">&#xE147;</i> <span>Añadir nuevo proveedor</span></a>
                                          <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons" style="font-size: 15px;">&#xE15C;</i> <span>Borrar</span></a>						
                                        </div>
                                      </div>
                                    </div>
                                    <table class="table table-striped table-hover">
                                      <thead>
                                        <tr>
                                          <th>
                                            <span class="custom-checkbox">
                                              <input type="checkbox" id="selectAll">
                                              <label for="selectAll"></label>
                                            </span>
                                          </th>
                                          <th>Nombre</th>
                                          <th>Email</th>
                                          <th>Dirección</th>
                                          <th>Teléfono</th>
                                          <th>Acciones</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            <span class="custom-checkbox">
                                              <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                              <label for="checkbox1"></label>
                                            </span>
                                          </td>
                                          <td>Thomas Hardy</td>
                                          <td>thomashardy@mail.com</td>
                                          <td>89 Chiaroscuro Rd, Portland, USA</td>
                                          <td>(171) 555-2222</td>
                                          <td>
                                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <span class="custom-checkbox">
                                              <input type="checkbox" id="checkbox2" name="options[]" value="1">
                                              <label for="checkbox2"></label>
                                            </span>
                                          </td>
                                          <td>Dominique Perrier</td>
                                          <td>dominiqueperrier@mail.com</td>
                                          <td>Obere Str. 57, Berlin, Germany</td>
                                          <td>(313) 555-5735</td>
                                          <td>
                                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <span class="custom-checkbox">
                                              <input type="checkbox" id="checkbox3" name="options[]" value="1">
                                              <label for="checkbox3"></label>
                                            </span>
                                          </td>
                                          <td>Maria Anders</td>
                                          <td>mariaanders@mail.com</td>
                                          <td>25, rue Lauriston, Paris, France</td>
                                          <td>(503) 555-9931</td>
                                          <td>
                                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <span class="custom-checkbox">
                                              <input type="checkbox" id="checkbox4" name="options[]" value="1">
                                              <label for="checkbox4"></label>
                                            </span>
                                          </td>
                                          <td>Fran Wilson</td>
                                          <td>franwilson@mail.com</td>
                                          <td>C/ Araquil, 67, Madrid, Spain</td>
                                          <td>(204) 619-5731</td>
                                          <td>
                                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                          </td>
                                        </tr>					
                                        <tr>
                                          <td>
                                            <span class="custom-checkbox">
                                              <input type="checkbox" id="checkbox5" name="options[]" value="1">
                                              <label for="checkbox5"></label>
                                            </span>
                                          </td>
                                          <td>Martin Blank</td>
                                          <td>martinblank@mail.com</td>
                                          <td>Via Monte Bianco 34, Turin, Italy</td>
                                          <td>(480) 631-2097</td>
                                          <td>
                                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                          </td>
                                        </tr> 
                                      </tbody>
                                    </table>   
                                </div>
                              <!-- Edit Modal HTML -->
                              <div id="addEmployeeModal" class="modal fade">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <form>
                                      <div class="modal-header">						
                                        <h4 class="modal-title">Añadir Proveedor</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      </div>
                                      <div class="modal-body">					
                                        <div class="form-group">
                                          <label>Nombre</label>
                                          <input type="text" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                          <label>Email</label>
                                          <input type="email" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                          <label>Dirección</label>
                                          <textarea class="form-control" required></textarea>
                                        </div>
                                        <div class="form-group">
                                          <label>Teléfono</label>
                                          <input type="text" class="form-control" required>
                                        </div>					
                                      </div>
                                      <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                                        <input type="submit" class="btn btn-success" value="Añadir">
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                              <!-- Edit Modal HTML -->
                              <div id="editEmployeeModal" class="modal fade">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <form>
                                      <div class="modal-header">						
                                        <h4 class="modal-title">Editar Proveedor</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      </div>
                                      <div class="modal-body">					
                                        <div class="form-group">
                                          <label>Nombre</label>
                                          <input type="text" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                          <label>Email</label>
                                          <input type="email" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                          <label>Dirección</label>
                                          <textarea class="form-control" required></textarea>
                                        </div>
                                        <div class="form-group">
                                          <label>Teléfono</label>
                                          <input type="text" class="form-control" required>
                                        </div>					
                                      </div>
                                      <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                        <input type="submit" class="btn btn-info" value="Save">
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                              <!-- Delete Modal HTML -->
                              <div id="deleteEmployeeModal" class="modal fade">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <form>
                                      <div class="modal-header">						
                                        <h4 class="modal-title">Eliminar Proveedor</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      </div>
                                      <div class="modal-body">					
                                        <p>Estás seguro que deseas eliminar estos registros?</p>
                                        <p class="text-warning"><small>Esta acción no se podrá revertir</small></p>
                                      </div>
                                      <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                                        <input type="submit" class="btn btn-danger" value="Eliminar">
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
		                          <!--Fin Contenido-->
                           </div>
                        </div>
		                    
                  		</div>
                  	</div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2023 <a href="www.unach.com">Gestión de Proyectos TI</a>.</strong> Todos los derechos reservados.
      </footer>

      
    <!-- jQuery 2.1.4 -->
    <script src="js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="js/app.min.js"></script>
    
  </body>
</html>
