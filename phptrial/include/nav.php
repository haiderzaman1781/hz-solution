<!DOCTYPE html>
<html lang="en" data-bs-theme="">

<head>
    <!-- AOS BOOTSTRAP -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/navbar.css">
    
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <!-- Fonts -->
   
    <style>
        .bgc {
            background-color: gray;
            border-radius: 200px;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div id="preloader">
        <span class="spinner"></span>
    </div>
    <nav class="navbar navbar-expand-md bg-light navbar-light position-sticky">
        <div class="navbar-brand w-50">
            <img class="w-10" src="./images/Removal-332.png" alt="">
        </div>
        <button class="navbar-toggler" data-target="#collapsenavbar" type="button" data-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="collapsenavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="./home.php" class="nav-link mx-lg-4 " >Home</a>
                </li>
                <li class="nav-item">
                    <a href="./about.php" class="nav-link mx-lg-4" >About</a>
                </li>
                <li class="nav-item">
                    <a href="./insertforn.php" class="nav-link mx-lg-4" >login</a>
                </li>
                <li class="nav-item">
                    <a href="./weather.html" class="nav-link mx-lg-4" >portfolio</a>
                </li>
                <li class="nav-item">
                    <a href="./service.php" class="nav-link dropdown mx-lg-4" >Service</a>
                </li>
            </ul>
        </div>
    </nav>

    <script src="./js/function.js"></script>
