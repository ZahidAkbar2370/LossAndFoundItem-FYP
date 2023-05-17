<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lost and Found</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <div class="container-fluid  bg-light">
        <div class="row">
            <div class="col-md-3 ">
                <h1>TLost</h1>
            </div>
            <div class="col-md-7">
                <nav class="navbar navbar-expand-lg navbar-light float-right">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My TLost
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('my-items') }}">My Items</a>
                                <a class="dropdown-item" href="{{ url('add-item') }}">Add New Item</a>
                                <a class="dropdown-item" href="{{ url('my-account') }}">My Account</a>
                                <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ url('logout') }}">Sign Out</a>
                                </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                        </ul>
                        {{-- <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form> --}}
                    </div>
                    </nav>
            </div>

            <div class="col-md-2">
                @if(!empty(Auth::user()))
                <a href="{{ url('logout') }}" class="btn btn-primary float-right mt-2 ml-2">Logout</a>
                    {{-- <form action="{{ URL::to('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary float-right mt-2 ml-2">Logout</button>
                    </form> --}}
                @else
                    <a href="{{ url('register') }}" class="btn btn-primary float-right mt-2 ml-2">Register</a>
                    <a  href="{{ url('login') }}" class="btn btn-primary float-right mt-2">Login</a>
                @endif
            </div>
        </div>
    </div>

   
    @yield('content')

    <div class="container-fluid bg-dark mt-4 text-white p-5">
        <div class="row">
            <div class="col-3">
                <h1 class="mt-5 text-center">TLost</h1>
            </div>

            <div class="col-3">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, ullam. Alias eveniet labore provident molestias saepe quam adipisci placeat animi atque vitae, corrupti consectetur modi eos dolores odit, illo magni.</p>
            </div>

            <div class="col-3">
                <h2>Helpful Links</h2>
                <ul>
                    <li>Home</li>
                    <li>Home</li>
                    <li>Home</li>
                    <li>Home</li>
                </ul>
            </div>

            <div class="col-3">
                <h2>Social Accounts</h2>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Facebook</a></li>
                </ul>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>