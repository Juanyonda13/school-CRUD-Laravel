<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SENA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <nav class="container-fluid mw-100">
       <ul class="nav justify-content-center">
           <li class="nav-item"  href="{{url('http://127.0.0.1:8000')}}"><a class="nav-link">Home</a></li>
           <li class="nav-item"><a class="nav-link" href="{{url('students/create')}}">students</a></li>
           <li class="nav-item"><a class="nav-link" href="{{url('matters/create')}}">matters</a> </li>
           <li class="nav-item"><a class="nav-link" href="{{url('degrees/create')}}">degrees</a></li>
       </ul>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    @yield('Webtemplates')
</body>
</html>