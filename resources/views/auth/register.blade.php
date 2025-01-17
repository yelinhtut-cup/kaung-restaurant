<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- boostrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Kaung Restaurant</title>
    <!-- title icon logo -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/chef.png') }}">
</head>
<body>
    <div class="container-fluid">
        <div class="row p-5 mt-5 align-items-center">
            <div class="col-3">
            </div>
            <div class="col-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }} <br>
                        @endforeach
                    </div>
                @endif
                <div class="card shadow">
                    <div class="card-header">
                        <img src="{{ asset('images/welcome2.png') }}" alt="welcome" style="width: 200px;">
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ url('/register/store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">User name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" required>
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation " class="form-label">Confirm password</label>
                                <input type="password" class="form-control" name="password_confirmation" required>
                            </div>
                            <button type="submit" class="btn btn-warning rounded-pill ps-3 pe-3">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>