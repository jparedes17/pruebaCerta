<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <style>
    .row.content {
      height: 550px
    }

    .sidenav {
      background-color: #70E73C;
      height: 650px;
    }

    @media screen and (max-width: 767px) {
      .row.content {
        height: auto;
      }
    }

    a {
      color: white;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-inverse visible-xs">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="">Logo</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="{{route('plantilla')}}">Inicio</a></li>
          <li><a href="{{route('monitores')}}">Monitores</a></li>
          <li><a href="{{route('monitorias')}}">Monitorias</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 sidenav hidden-xs">
        <h2>Logo</h2>
        <ul class="nav nav-pills nav-stacked">
          <li><a href="{{route('plantilla')}}">Inicio</a></li>
          <li><a href="{{route('monitores')}}">Monitores</a></li>
          <li><a href="{{route('monitorias')}}">Monitorias</a></li>
        </ul>
        
      </div>
      <div class="container">
        @yield('contenido')
      </div>
    </div>
  </div>
 
</body>
</html>