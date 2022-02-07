{{-- TODO delete --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'SeikoControl') }}</title>
    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="css/adminlte.min.css">
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}

    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="hoverlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <script src="js/adminlte.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        console.log('Hi!');
    </script>
</head>

<body class="sidebar-mini" style="height: auto;">
    <div class="wrapper">
      @include('socios._navbar')

      @include('socios._sidebar')
        <aside class="main-sidebar sidebar-white sidebar-light elevation-4">
            <a href="/" class="brand-link ">
                <img src="images/Logo!SeikoC.png" alt="INICIO" class="brand-image img-circle elevation-3" style="opacity:.8">
                <span class="brand-text font-weight-light ">
                    <b>Admin</b>LTE
                </span>
            </a>
            <div class="sidebar">
                <nav class="pt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu">
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
                                            <div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong
                                                  class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong
                                                  class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong
                                                  class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div>
                                            <div class="search-path"></div>
                                        </a></div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="http://127.0.0.1:8000/admin/pages">
                                <i class="far fa-fw fa-file "></i>
                                <p>
                                    Pages
                                    <span class="badge badge-success right">
                                        4
                                    </span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-header ">
                            ACCOUNT SETTINGS
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="/admin/settings">
                                <i class="fas fa-fw fa-user fa fa-user "></i>
                                <p>
                                    Profile
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="/admin/settings">
                                <i class="fas fa-fw fa-lock "></i>
                                <p>
                                    Change Password
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview ">
                            <a class="nav-link  " href="">
                                <i class="fas fa-fw fa-share "></i>
                                <p>
                                    Multi Level
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">
                                        <i class="far fa-fw fa-circle "></i>
                                        <p>
                                            Level 1
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview ">
                                    <a class="nav-link  " href="">
                                        <i class="far fa-fw fa-circle "></i>
                                        <p>
                                            Level 1
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a class="nav-link  " href="#">
                                                <i class="far fa-fw fa-circle "></i>
                                                <p>
                                                    Level 2
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item has-treeview ">
                                            <a class="nav-link  " href="">
                                                <i class="far fa-fw fa-circle "></i>
                                                <p>
                                                    Level 2
                                                    <i class="fas fa-angle-left right"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a class="nav-link  " href="#">
                                                        <i class="far fa-fw fa-circle "></i>
                                                        <p>
                                                            Level 3
                                                        </p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link  " href="#">
                                                        <i class="far fa-fw fa-circle "></i>
                                                        <p>
                                                            Level 3
                                                        </p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">
                                        <i class="far fa-fw fa-circle "></i>
                                        <p>
                                            Level 1
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header ">
                            LABELS
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="#">
                                <i class="far fa-fw fa-circle text-red"></i>
                                <p>
                                    Important
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="#">
                                <i class="far fa-fw fa-circle text-yellow"></i>
                                <p>
                                    Warning
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="#">
                                <i class="far fa-fw fa-circle text-cyan"></i>
                                <p>
                                    Information
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper " style="min-height: 382.8px;">
            <div class="content-header">
                <div class="container-fluid">
                    <h1>Dashboard</h1>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="py-2">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-3">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-3 bg-white border-b border-gray-200">
                                    <section class="">
                                        <form class="" action="admin/posts" method="post">
                                            <input type="hidden" name="_token" value="6AIlk0BSGnLdhThjEOEhORrmy74HZSsO9bd9p3jL">
                                            <div class="mb-6">
                                                <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="category">
                                                    Categorías
                                                </label>
                                                <select class="" name="category" id="category">

                                                    <option value="1">
                                                        Est
                                                    </option>
                                                    <option value="2">
                                                        Enim
                                                    </option>
                                                    <option value="3">
                                                        Doloremque
                                                    </option>
                                                </select>
                                            </div>



                                        </form>
                                    </section>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>





        <div id="sidebar-overlay"></div>
    </div>







</body>

</html>
<!-- Sidebar  -->
{{-- <nav id="sidebar" class="active ">

	<ul class="list-unstyled components mb-5">
		<h1 href="/dashboard" class="logo"><span class="fa fa-user"></span>SOCIO</h1>

		<li>
			<a href="{{url('/socio/reclamo') }}"><span class="fa fa-sticky-note"></span>Realizar Reclamos o Sugerencias</a>
</li>
<li class="active">
    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pagos </a>
    <ul class="collapse list-unstyled" id="homeSubmenu">
        <li>
            <a href="#">Historial</a>
        </li>
        <li>
            <a href="#">Deudas</a>
        </li>
        <li>
            <a href="#">Multas</a>
        </li>
    </ul>
</li>
<li>
    <a href="#">About</a>
</li>

<li>
    <a href="#"><span class="fa fa-cogs"></span> Cambiar contraseña</a>
</li>
<li>
    <a href="#"><span class="fa fa-paper-plane"></span> Contacts</a>
</li>
</ul>
</nav> --}}
{{-- @extends('adminlte::page')
implementa la vista de adminlte

@section('title', 'Dashboard')
agregamos un titulo

@section('content_header')
    <h1>Dashboard</h1>
@stop
Agregamos un header a nuestra pagina

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

Contenido de nuestra pagina

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

agregamos css

@section('js')
    <script> console.log('Hi!'); </script>
@stop --}}
{{-- //agregamos Java Script --}}
