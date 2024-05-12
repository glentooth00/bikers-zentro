<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Login</title>
</head>

<body>

    {{-- <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="#">Laravel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav> --}}

    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    {{-- <div class="col-md-6">
                        <img src="{{ asset('image/banner.png') }}" alt="Image" class="img-fluid">
                    </div> --}}
                    <div class="card p-3">
                        {{-- <div class="card-header">Login</div> --}}
                        <img src="{{ asset('image/banner.png') }}" alt="Image" class="mt-2 img-fluid mb-4">
                        <div class="card-body">
                            <form action="{{ route('login.custom') }}" method="POST">
                                @csrf

                                <!-- Username Field -->
                                <div class="form-group">
                                    <label for="username">Username:</label>
                                    <input type="text" name="username" id="username" class="form-control" required>
                                    @error('username')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Password Field -->
                                <div class="form-group">
                                    <label for="password">Password:</label>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-primary">Login</button>

                                <!-- Display General Error -->
                                @if ($errors->has('error'))
                                    <div class="text-danger">{{ $errors->first('error') }}</div>
                                @endif
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</body>

</html>
<style>
    @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);


    body {
        margin: 0;
        font-size: .9rem;
        font-weight: 400;
        line-height: 1.6;
        color: #212529;
        text-align: left;
        background-color: #f5f8fa;
    }

    .navbar-laravel {
        box-shadow: 0 2px 4px rgba(0, 0, 0, .04);
    }

    .navbar-brand,
    .nav-link,
    .my-form,
    .login-form {
        font-family: Raleway, sans-serif;
    }

    .my-form {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .my-form .row {
        margin-left: 0;
        margin-right: 0;
    }

    .login-form {
        padding-top: 10rem;
        padding-bottom: 1.5rem;
    }

    .login-form .row {
        margin-left: 0;
        margin-right: 0;
    }
</style>
