<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>E-Com Project</title>
</head>

<body>

    {{ View::make('header') }}
    @yield('content')

    {{ view::make('footer') }}



    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}

{{-- 
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script> --}}

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <style>
        .custom-login {
            height: 500px;
            margin-top: 160px;
        }

        .custom-footer {
            position: absolute;
            width: 100%;
            /* min-height: 5vh; */
            
            
        }
        img.slider-img{
            height:400px; !important

        }
        .slider-text{
            /* background-color: #2e2a3a7a; */
            width: 100%;
            left:0px;
        }
        .carousel-control-next, .carousel-control-prev{
            background-color: #2b28281c;
            width: 2%;
        }
        .carousel-caption {
            position: unset;
            background-color: #2e2a3a7a; 

        }
        .trending-image{
            height: 100px;
        }
        .trending-item{
            float: left;
            width: 20%;
        }
        .trending-wrapper{
            margin: 30px;
        }
        .custom-class{
            min-height: 200vh;
        }
        .detail-img{
            width: 300px;
            height: 300px;
            object-fit: contain;
        }
        .search-box{
  
            width:500px !important;
        }
        .search-wrapper{
            margin: 50px;
        }

    </style>
</body>

</html>
