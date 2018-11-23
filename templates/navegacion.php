  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        
        <div class="info">
          <p>Administrador VisitMed</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menú de Administración</li>
        <li class="treeview">
          <a href="#">
            <i class="fas fa-tachometer-alt"></i>&nbsp;&nbsp; <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="far fa-circle"></i>&nbsp;&nbsp;Dashboard</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
          <i class="fas fa-clipboard-list" aria-hidden="true"></i>&nbsp;&nbsp;
            <span>Recepción</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Fichas Expedientes</a></li>
            <li><a href="crear_expediente_medico.1.php"><i class="fa fa-plus-circle"></i> Agregar Ficha Expediente</a></li>   
            <li><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Citas</a></li>
            <li><a href="#"><i class="fa fa-plus-circle"></i> Agregar Citas</a></li>         
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fas fa-user" aria-hidden="true"></i>&nbsp;&nbsp; 
            <span>Enfermería</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Ficha Clinica</a></li>
            <li><a href="#"><i class="fa fa-plus-circle"></i> Agregar Ficha Clinica</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
          <i class="fa fa-user-md" aria-hidden="true"></i>
            <span>Médicos</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Historia Clinica</a></li>
            <li><a href="#"><i class="fa fa-plus-circle"></i> Agregar Historia Clinica</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fas fa-user-circle"></i>&nbsp;&nbsp;
            <span>Personal Médico</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lista_personal_medico.php"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Personal Médico</a></li>
            <li><a href="crear_personal_medico.php"><i class="fa fa-plus-circle"></i> Agregar Personal Médico</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Categoria Personal Médico</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lista_categoria_medica.php"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Categorias </a></li>
            <li><a href="crear_categoria_medica.php"><i class="fa fa-plus-circle"></i> Agregar Categoria </a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="far fa-user-circle"></i>&nbsp;&nbsp;
            <span>Usuarios</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lista_usuarios.php"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Usuarios</a></li>
            <li><a href="crear_usuario.php"><i class="fa fa-plus-circle"></i> Agregar Usuarios</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Categoria Usuarios</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lista_categoria_usuario.php"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Categorias</a></li>
            <li><a href="crear_categoria_usuario.php"><i class="fa fa-plus-circle"></i> Agregar Categoria</a></li>
          </ul>
        </li>
        <!-- Estructura de Correos
        <li>
          <a href="../mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        -->
         <!-- Estructura en subniveles 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->