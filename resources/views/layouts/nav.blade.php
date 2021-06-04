
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-ompatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>LABORATORIO</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">laboratorio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Inicio</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="register">Registrar</a>
              </li>       
              @guest
              <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
              </li>
              @else
              <li class="nav-item">
                <a class="nav-link"href="/dashboard">Dashboard</a>
              </li>
              <li class="nav-item">
                <form style="display: inline" action="/logout" method="POST">
                    @csrf
                    <a class="nav-link" href="#" onclick="this.closest('form').submit()">Logout</a>
                </form>
              </li>
              @endguest         
            </ul>
          </div>
        </div>
    </nav>

</body>
</html>


