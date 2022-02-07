<aside id="sidebar" class="active main-sidebar sidebar-white sidebar-light elevation-4">
    <a href="/" class="brand-link ">
        <img src="images/Logo!SeikoC.png" alt="INICIO" class="brand-image img-circle elevation-3" style="opacity:.8">
        <span class="logo brand-text font-weight-light ">
            <b>SOCIO</b>
        </span>
    </a>
    <ul class="pt-2 nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu">
        <li>
            <div class="form-inline my-2">
                <div class="input-group" data-widget="sidebar-search" data-arrow-sign="»">
                    <input class="form-control form-control-sidebar" type="search" placeholder="search" aria-label="search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-fw fa-search"></i>
                        </button>
                    </div>
                </div>
                <div class="sidebar-search-results">
                    <div class="list-group"><a href="#" class="list-group-item">
                            <div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong
                                  class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong>
                                <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong
                                  class="text-light"></strong>!<strong class="text-light"></strong>
                            </div>
                            <div class="search-path"></div>
                        </a></div>
                </div>
            </div>
        </li>
        <li class="nav-header ">Notificaciones</li>
        <li class="nav-item">
            <a class="nav-link  " href="posts">
                <i class="far fa-fw fa-file "></i>
                <p>Buzon de reclamos y Sugerencias<span class="badge badge-success right">4</span></p>
            </a>
        </li>
        <li class="nav-item has-treeview ">
            <a class="nav-link  " href="">
                <i class="fas fa-fw fa-share "></i>
                <p>Ver<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a class="nav-link  " href="reclamos">
                        <i class="far fa-fw fa-circle "></i>
                        <p>Notificaciones</p>
                    </a>
                </li>
                <li class="nav-item has-treeview ">
                    <a class="nav-link  " href="">
                        <i class="far fa-fw fa-circle "></i>
                        <p>Lista de pagos<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link  " href="/reclamos"><i class="far fa-fw fa-circle "></i>
                                <p>posts</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview ">
                            <a class="nav-link  " href="">
                                <i class="far fa-fw fa-circle "></i>
                                <p>Level 2<i class="fas fa-angle-left right"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    {{-- <a class="{{ request()->is('admin/dashboard')? 'nav-link' 'text-blue-500' :'' }} " href="/admin/dashboard">
                                    <i class="far fa-fw fa-circle "></i>
                                    <p>Level 3</p>
                                    </a> --}}
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">
                                        <i class="far fa-fw fa-circle "></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="#">
                        <i class="far fa-fw fa-circle "></i>
                        <p>Level 1</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-header ">CONFIGURACIONES</li>
        <li class="nav-item">
            <a class="nav-link  " href="/admin/settings">
                <i class="fas fa-fw fa-user fa fa-user "></i>
                <p>Perfil</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link  " href="/admin/settings">
                <i class="fas fa-fw fa-lock "></i>
                <p>Cambiar Contraseña</p>
            </a>
        </li>

        <li class="nav-header ">OPCIONES</li>
        <li @can('user.index')
        class="nav-item ">
        <a class="nav-link  " href="user"><i class="fas fa-fw fa-users"></i>
            <p>Lista de Socios</p>
        </a>
        @endcan
        </li>
        <li class="nav-item">
            <a class="nav-link  " href="tconsumo">
                <i class="fas fa-fw fa-cash-register"></i>
                <p>Tarifas consumos</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link  " href="tmulta">
                <i class="fas fa-fw fa-cash-register"></i>
                <p>Tarifas Multa</p>
            </a>
        </li>
        <li @can('lectura.index')
        class="nav-item">
        <a class="nav-link  " href="user.index">
            <i class="fas fa-fw fa-glasses"></i>
            <p>Registrar Lectura</p>
        </a>
        @endcan
        </li>
        <li @can('caja.index')
        class="nav-item">
        <a class="nav-link  " href="user.index">
            <i class="fas fa-fw fa-dollar-sign"></i>
            <p>Registrar Pago</p>
        </a>
        @endcan
        </li>
        {{--
        'text'       => 'Socio',
                  'icon' => 'fas fa-fw fa-users',
                  'icon_color' => 'blue',
                  'url'        => 'user',
                  'can'  => 'user.index',
              ],
              [
                  'text'       => 'Tarifa Consumo',
                  'icon' => 'fas fa-fw fa-cash-register',
                  'icon_color' => 'blue',
                  'url' => 'tconsumo',
                  'can'  => 'tconsumo.index',
              ],
              [
                  'text'       => 'Tarifa Multa',
                  'icon' => 'fas fa-fw fa-cash-register',
                  'icon_color' => 'blue',
                  'url'        => 'tmulta',
                  'can'  => 'tmulta.index',
              ],
              [
                  'text'       => 'Lectura',
                  'icon' => 'fas fa-fw fa-glasses',
                  'icon_color' => 'blue',
                  'url'        => '#',
                  'can'  => 'user.index',
              ],
              [
                  'text'       => 'Pagos',
                  'icon' => 'fas fa-fw fa-dollar-sign',
                  'icon_color' => 'blue',
                  'url'        => '#',
                  'can'  => 'user.index',
              ],
              [
                  'text'       => 'Notificaciones de Pago',
                  'icon' => 'fas fa-fw fa-list    ',
                  'icon_color' => 'blue',
                  'url'        => '#',
                  'can' => '',

              ], --}}

    </ul>
</aside>
