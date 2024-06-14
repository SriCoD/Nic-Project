<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('toast/css/toastr.min.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="javascript:void(0)">Logo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Link</a>
              </li>
            </ul>
            <form class="d-flex">
              <a href="{{ route('logout') }}" class="btn btn-danger" type="button">Logout</a>
            </form>
          </div>
        </div>
      </nav>
    <div class="container">
        @yield('content')
    </div>
    <div class="mt-5 p-4 bg-dark text-white text-center">
        <p>Footer</p>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('toast/js/toastr.min.js')}}"></script>
    <script type="text/javascript">
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif
        @if (Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
            
        @endif
    </script>
</body>
</html>