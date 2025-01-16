<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- css -->
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- boostrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    

    <!-- fontawsome icon -->
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
    <title>Kaung Restaurant</title>
    <!-- title icon logo -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/chef.png') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- <div class="display-6 shadow bg-body">
        <header class="ps-5 pt-4 pb-4 ms-2 custom-header-font custom-header-bg">
            <img src="{{ asset('images/chef.png') }}" class="pe-2" alt="#" width="50px">Kaung Restaurant
        </header>
    </div> -->    
        <div class="display-6 custom-header-font custom-header-bg">
            <a class="navbar-brand" href="#" class="  display-6">Kaung Restaurant</a>
        </div>
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown me-5">
                            <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-check" style="font-size:20px"></i> {{ $userName['name'] ?? 'Guest' }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <!-- Hidden form for logout -->
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <!-- Logout link -->
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>
    <div class="container-fluid">
        <div class="row p-5">
            <div class="col text-center">
                <div class="card shadow  bg-body mb-3 rounded" style="width:400px">
                    <img class="card-img-top" src="{{ asset('images/menu1.jpg') }}" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title">Rice & Cuisines</h4>
                      <a href="{{ url('/menu/cuisines') }}" class="btn btn-warning rounded-pill mb-3">See details to order</a>
                    </div>
                  </div>
            </div>
            <div class="col text-center">
                <div class="card card shadow  bg-body mb-3 rounded" style="width:400px">
                    <img class="card-img-top" src="{{ asset('images/juice.jpg') }}" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title">Juice</h4>
                      <a href="juice.html" class="btn btn-warning rounded-pill mb-3">See details to order</a>
                    </div>
                  </div>
            </div>
            <div class="col text-center">
                <div class="card card shadow  bg-body mb-3 rounded" style="width:400px">
                    <img class="card-img-top" src="{{ asset('images/salad.jpg') }}" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title">Salad & Noodle</h4>
                      <a href="salad_noodle.html" class="btn btn-warning rounded-pill mb-3">See details to order</a>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row ps-5">
            <div class="col-9">
                <p><img src="{{ asset('images/telephone-plus-fill.svg') }}" alt="#" class="m-3" style="height: 30px;"><b>09-753454832, 09-770458500</b></p>
            </div>
        </div>
    </div>
</body>
</html>