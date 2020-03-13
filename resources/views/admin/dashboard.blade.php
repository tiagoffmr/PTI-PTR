@extends('layout.base')
@section('content')


  <style>



    #sidebar-wrapper {

      background: #2c3fb1;
      height: 100%;
      width: 10%;

    }
  </style>
  <!-- Sidebar -->
  <div id = "sidebar-wrapper">
  <nav class="navbar navbar-dark" style="background-color: #2c3fb1;">

    <!-- Links -->
    <ul class="navbar-nav" >
      <li class="nav-item">
        <a class="nav-link" href="#">Students</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Professor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Subjects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Classes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Import Data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Permissions</a>
      </li>
    </ul>

  </nav>
  </div>
  <!-- /#sidebar-wrapper -->
@endsection
