<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
  <script src="https://kit.fontawesome.com/37158bfb1f.js" crossorigin="anonymous"></script>
    <title>Send-Mail</title>
</head>
<body>
    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('home')}}"><h4>Send-Email-App</h4></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">ddddd</span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link active " aria-current="page" href="{{route('home')}}"><h5>Envoi de Email individuel</h5> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="pag" href="{{route('homegroupe')}}"><h5>Envoi de  Email grouper</h5> </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link " href="{{route('addContactview')}}"><h5>Ajouter un contact</h5></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('listContactview')}}"><h5>Liste des contacts</h5></a>
              </li>
            </ul>
          </div>
        </div>
      </nav> --}}
      <nav class="navbar navbar-expand-sm navbar-dark bg-primary ">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('home')}}">SendMail-App</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">Envoi de Email individuel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('homegroupe')}}">Envoi de  Email grouper</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('addContactview')}}">Ajouter un contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('listContactview')}}">Liste des contacts</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  

      @yield('content')


{{-- 
      @livewireScripts
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> --}}
    
</body>
</html>