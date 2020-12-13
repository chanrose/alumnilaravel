<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ALUMNI') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('alumni.home') }}">
                {{ config('app.name', 'ALUMNI') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li>
                            <a class="nav-link" href="/add-alumni" role="button">
                                Add Alumni
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="/view-list" role="button">
                                View Alumnus
                            </a>
                        </li>
                        <li class="nav-item dropdown">

                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <main class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="mt-5">
                        <div class="img-fluid max-width: 20% m-4">
                            <img src="https://raw.githubusercontent.com/chanrose/alumnilaravel/main/public/media/AIUCenter.png" class="rounded mx-auto d-block" alt="..." width="260" >
                        </div>

                    </div>

                    <div class="card-body">

                        <div class="d-flex justify-content-center my-2">
                          Welcome to AIU's ALUMNI Management System, here is a concept design only.
                            <br />
                        </div>
                        <div class="d-flex justify-content-center">
                            <br />
                            <div class="row mx-auto">
                                <div class="col">
                                    <div class="card m-2" style="width: 18rem;">
                                        <img class="card-img-top"
                                             height="200 px"
                                             src="https://raw.githubusercontent.com/chanrose/alumnilaravel/9be39d882175fc08226e9cb6ce51a0ba1390640c/public/media/building.svg"
                                             alt="Card image building">
                                        <div class="card-body">
                                            <h5 class="card-title">Made for Organization</h5>
                                            <p class="card-text">ALUMNI helps administrator to keep the record of the graduated students</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card m-2" style="width: 18rem;">
                                        <img class="card-img-top"
                                             height="200 px"
                                             src="https://raw.githubusercontent.com/chanrose/alumnilaravel/9be39d882175fc08226e9cb6ce51a0ba1390640c/public/media/manage.svg"
                                             alt="Card image management">
                                        <div class="card-body">
                                            <h5 class="card-title">Complete Management</h5>
                                            <p class="card-text">Administrators can add, edit, view, and delete the records</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card m-2" style="width: 18rem;">
                                        <img class="card-img-top"
                                             height="200 px"
                                             src="https://raw.githubusercontent.com/chanrose/alumnilaravel/9be39d882175fc08226e9cb6ce51a0ba1390640c/public/media/profile.svg"
                                             alt="Card image building">
                                        <div class="card-body">
                                            <h5 class="card-title">View for each profile</h5>
                                            <p class="card-text">Each records has a view page with appropriate looks</p>

                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                       <div class="my-5 text-center">
                           <div class="jumbotron">
                               <h1 class="display-4">How do I get start?</h1>
                               <p class="lead">Chanbroset Prach, made for Course Project.</p>


                               <hr class="my-4">

                               <p class="lead">
                                   <a class="btn btn-primary btn-lg" href="/register" role="button">Register Now</a>
                               </p>
                           </div>
                       </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</div>

</body>
