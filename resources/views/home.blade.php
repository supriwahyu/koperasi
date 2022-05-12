@extends('layouts.app')
@section('style')
@endsection
@section('content')
<!-- {{--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>--}} -->

        <!-- top-navbar -->
    <!-- {{--<nav class="navbar navbar-light bg-white flex-sm-nowrap p-0 shadow">
      <a class="navbar-brand bg-light col-sm-3 col-md-3 mr-0 py-3 shadow-md d-none d-md-block" href="#">Sublime Salão</a>
      
      <button class="btn btn-link mr-auto py-3" id="sidebarToggle">
        <i class="fa fa-bars"></i>
      </button>
      
      <ul class="nav mr-3 d-flex flex-wrap">
        <li class="nav-item dropdown text-nowrap">
          <a class="nav-link dropdown-toggle" href="#" 
             id="navbarDropdown" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="true">
            Notifications
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Ação</a>
            <a class="dropdown-item" href="#">Outra ação</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Algo mais aqui</a>
          </div>
        </li>
        
         <li class="nav-item dropdown text-nowrap">
          <a class="nav-link dropdown-toggle" href="#" 
             id="navbarDropdown" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="true">
            Profile
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Ação</a>
            <a class="dropdown-item" href="#">Outra ação</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Algo mais aqui</a>
          </div>
        </li>
        <li class="nav-item dropdown text-nowrap">
          <a class="nav-link" href="#">
            Sair
          </a>         
        </li>
      </ul>
    </nav>--}} -->

      <div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav" id="my-ul">
        <li class="sidebar-brand">
          <a href="#">
                        Start Bootstrap
                    </a>
        </li>
        <li class="li active">
          <a href="#">Dashboard</a>
        </li>
        <li class="li">
          <a href="#">Shortcuts</a>
        </li>
        <li class="li">
          <a href="#">Overview</a>
        </li>
        <li class="li">
          <a href="#">Events</a>
        </li>
        <li class="li">
          <a href="#">About</a>
        </li>
        <li class="li">
          <a href="#">Services</a>
        </li>
        <li class="li">
          <a href="#">Contact</a>
        </li>
      </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <h1>Simple Sidebar</h1>
            <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens,
              the page content will be pushed off canvas.</p>
            <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

  <!-- Menu Toggle Script -->
@endsection
