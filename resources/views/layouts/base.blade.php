<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Unimix</title>
</head>
<style>
    #menu-item{
        color:#466b94		;
        font-weight: bold;
    }
    #menu-bg{
        color:#3f4b60;
    }
</style>
<body>

    <nav class="navbar navbar-expand-sm bg-light ">
        <a class="navbar-brand" href="#">
            <img src="/images/logo/logo.png" width="200" height="65" class="d-inline-block align-top" alt="">
        </a>
        <div class="container">
            <ul class="nav " >
                <li class="nav-item">
                    <a class="nav-link" href="/" id="menu-item">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="menu-item">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="menu-item">Why Unimix</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/products" id="menu-item">Products & Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="menu-item">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="menu-item">People</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="menu-item">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')
    
    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>