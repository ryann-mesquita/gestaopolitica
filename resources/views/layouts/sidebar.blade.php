        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{ asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                        <p>{{ Auth::user()->name }}</p>
                        <!-- Status -->
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- search form (Optional) -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search..."/>
          <span class="input-group-btn">
            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
          </span>
                    </div>
                </form>
                <!-- /.search form -->

                <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
              <li class="header">Menu</li>
              <li><a href="/charts"><span>Página Inicial</span></a></li>
             @can('adm')
              <li class="treeview">
              <a href="#"><i class="far fa-caret-square-down pull-right"></i><span>Gestão de Campanha</span> </a>
                <ul class="treeview-menu">
                  <li><a href="{{route('dashboard.create')}}"><i class="fas fa-user-plus"></i>&nbsp;&nbsp;&nbsp;Cadastrar Eleitor</a></li>
                  <li><a href="/dashboard"><i class="fas fa-list-ol"></i>&nbsp;&nbsp;&nbsp;Eleitores Cadastrados</a></li>
                  <li>
                    <a href="/aniversario">
                      <i class="fas fa-birthday-cake"></i>&nbsp;&nbsp;&nbsp;Eleitores Aniversariantes</a></li>
                  <li><a href="/relatorios/create"><i class="fas fa-file-invoice"></i>&nbsp;&nbsp;&nbsp;Relatórios Individuais</a>
                  </li>
                  
                  <li><a href="/relatorios/create"> <i class="fas fa-window-restore"></i>&nbsp;&nbsp;&nbsp;Relatórios Combinados</a>
                  </li>
                  <li><a href="/mapas"> <i class="fas fa-map-marked-alt"></i>&nbsp;&nbsp;&nbsp;Geolocalização de Eleitores</a>
                  </li>
                  
                  <li><a href="/gabinete"> <i class="fas fa-desktop"></i>&nbsp;&nbsp;&nbsp;Gabinete Virtual</a></li>
                </ul>
              </li>
            @endcan

              <li class="treeview">
                <a href="#"><i class="far fa-caret-square-down pull-right"></i><span>Gestão de Eleição</span> </a>
                <ul class="treeview-menu">
                  <li><a href="{{route('colaboradores.create')}}"><i class="fas fa-user-plus"></i>&nbsp;&nbsp;&nbsp;Cadastrar Colaborador</a></li>
                  <li><a href="/colaboradores"><i class="fas fa-list-ol"></i>&nbsp;&nbsp;&nbsp;Colaboradores Cadastrados</a></li>
            @can('edit_post')
                  <li><a href="/relatorios-colaboradores/create"><i class="fas fa-file-invoice"></i>&nbsp;&nbsp;&nbsp;Relatórios Individuais</a></li>
                  <li><a href="/relatorios-colaboradores/create"><i class="fas fa-window-restore"></i>&nbsp;&nbsp;&nbsp;Relatórios Combinados</a></li>
                </ul>
              </li>

            @endcan             

                       <!-- Optionally, you can add icons to the links -->
                   <!--  <li class="active"><a href="#"><span>Link</span></a></li>-->
                   <!--
                   <li><a href="/charts"><span>Página Inicial</span></a></li>
                   <li><a href="{{route('dashboard.create')}}"><span> Cadastrar</span></a></li>
                   <li><a href="{{route('colaboradores.create')}}"><span>   Cadastrar Colaborador</span></a></li>
                   <li><a href="/gabinete"><span>Gabinete Virtual</span></a></li>
                   @can('edit_post')
                   <li><a href="/mapas"><span>Mapa em Tempo Real</span></a></li>
                   <li><a href="/relatorios/create"><span>Relatórios Individuais</span></a></li>
                   <li><a href="/aniversario"><span>Aniversariantes</span></a></li>
                   <li><a href="/relatorios/create"><span>Relatórios Combinados</span></a></li>
                   <li><a href="/dashboard"><span>Listagem de Cadastrados</span></a></li>
                   <li><a href="/colaboradores"><span>Colaboradores</span></a></li>
                   @endcan
                   -->
                   

                 <!-- Permissões de SuperAdmin-->
                 @can('adm')
                 <li class="treeview">
                  <a href="#"><i class="far fa-caret-square-down pull-right"></i><span>Gestão do Sistema</span> </a>
                  <ul class="treeview-menu">
                    <li><a href="/usuarios"><i class="fas fa-users"></i><span>Usuários</span></a></li>
                    <li><a href="/roles"><i class="fas fa-users-cog"></i><span>Perfis</span></a></li>    
                    <li><a href="/permissions"><i class="fas fa-user-lock"></i><span>Permissões</span></a></li>
                    <li><a href="{{ url('/register') }}"><i class="fas fa-user-plus"></i>Novo Usuário</a></li> 
                    @endcan
                </ul>
              </li>  
            </ul><!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
