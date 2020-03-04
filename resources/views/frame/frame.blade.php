<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/frame/css/code.css')}}">
    <style>
         * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
        }

        .All {
            width: 1020px;
            margin: auto;
            padding-top: 50px;
            display: flex;
        }

        .pics {
            width: 680px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .employees {
            width: 170px;
            height: 170px;
            background-color: red;
            transition: 2s;
        }

        .employee {
            width: 100%;
            height: 100%;
            position: relative;
            top: 0px;
            left: 0px;
            z-index: 0;
            transition: 1s;
        }

        .employees:nth-child(4n+1).active .employee {
            left: 765px;
            transition: 1s;
            background-color: skyblue;
            z-index: 2;
        }

        .employees:nth-child(4n+2).active .employee {
            left: 595px;
            transition: 1s;
            background-color: skyblue;
            z-index: 2;
        }

        .employees:nth-child(4n+3).active .employee {
            left: 425px;
            transition: 1s;
            background-color: skyblue;
            z-index: 2;
        }

        .employees:nth-child(4n).active .employee {
            left: 255px;
            transition: 1s;
            background-color: skyblue;
            z-index: 2;
        }

        .employees:nth-child(n+1):nth-child(-n+4).active .employee {
            top: 85px;
        }

        .employees:nth-child(n+5):nth-child(-n+8).active .employee {
            top: -85px;
        }

        .employees:nth-child(n+9):nth-child(-n+12).active .employee {
            top: -255px;
        }

        .employees.grow .employee {
            transform: scale(2);
        }

        .intro {
            width: 340px;
            height: 510px;
            background-color: royalblue;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .selfive {
            width: 340px;
            height: 340px;
            background-color: tomato;
            background-image: url('https://static.wixstatic.com/media/94b792_36540e3c4de7409fb11e5af0388d03a3~mv2.jpg/v1/fill/w_90,h_99,al_c,q_80,usm_0.66_1.00_0.01/%E7%B6%B2%E7%AB%99%E5%B0%8F%E6%A8%99.webp');
            background-size: cover;
            background-position: center;
        }

        .Content {
            width: 100%;
            height: calc(100% / 3);
            background-color: yellow;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/hollow">Hollow</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/card">Card</a>
                </li>
                <li class="nav-item">
                    <a href="/pics" class="nav-link">Pics</a>
                </li>
                <li class="nav-item">
                    <a href="/data" class="nav-link">Update</a>
                </li>
                <li><a href="/home" class="nav-link">Login</a></li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a> -->
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> --}}
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    @yield('home')
    @yield('hollow')
    @yield('card')

    <div class="card">
        <div class="card-header">
            Lorem ipsum dolor sit amet.
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <div class="mm d-flex justify-content-center"><a href="#" class="btn btn-primary">Go somewhere</a></div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>

</html>
