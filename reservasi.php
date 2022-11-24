<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Gustoro Coffee Shop</title>

    <style>
        .product img{
        width: 300px;
        }
        .product .description{
            margin-left : 20px ;
        }
        .product{
            padding: 10px;
            display: flex;
        }
    </style>

</head>

<body class="home-bg">
    <header class="bg-dark py-5">
        <nav class="nav navbar-expand-lg sticky-top p-5   navbar-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsMiddle" aria-controls="#navbarsMiddle" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse justify-content-md-center" id="navbarsMiddle">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="#home" class="nav-link" aria-current="page">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a href="#home" class="nav-link" aria-current="page">PROFILE</a>
                        </li>
                        <li class="nav-item">
                            <a href="products.php" class="nav-link" aria-current="page">PRODUCTS</a>
                        </li>
                        <li class="nav-item">
                            <a href="#home" class="nav-link" aria-current="page">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a href="#home" class="nav-link" aria-current="page">ORDER</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container px-2">
            <div class="row gx-3 d-flex align-items-center justify-content-center">
                <div class="col-6 col-lg-5 col-xl-5 col-xxl-4 ">
                    <div class="my-5 text-warning text-center text-xl-start">
                        <h1 class="display-2 fw-bolder mb-2">Our Products</h1>
                        <h5 class="lead fw-normal mb-4">Tell us what do you want</h5>
                    </div>
                </div>
                <div class="col-6 col-xl-4 col-xxl-5 text-center">
                    <div class="lottie-product">
                        <lottie-player src="https://assets4.lottiefiles.com/private_files/lf30_fpdvsz3i.json" background="transparent" style="width:400px;height:400px;" speed="1" loop autoplay></lottie-player>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="bg-light">
        <div class="">
        <div class="row">
            <div class="col-md-3 bg-warning ">
                <div class="container mx-5">
                <h3>Categories</h3>
                <ul>
                    <li><a href="#list-coffee">Coffee</a></li>
                    <li><a href="#list-tea">Tea</a></li>
                    <li><a href="#list-food">Food</a></li>
                </ul>
                </div>
            </div>
            <div class="col-md-9 mt-5">
                <div id="list-coffee">
                    <ul>
                    while(){
                        <li>
                    <div class="product">
                        <img src="assets/product-1.png" alt="">
                        <div class="description">
                        <h3>Biji Kopi House Blend ETC 50% Robusta 50% Arabica</h3>
                        <h5> Rp50.000 - Rp100.000</h5>
                        </div>
                    </div>
                    </li>
                    </ul>
                </div>
                <div id="list-tea">
                    <ul>
                    while(){
                        <li>
                    <div class="product">
                        <img src="assets/product-1.png" alt="">
                        <div class="description">
                        <h3>Biji Kopi House Blend ETC 50% Robusta 50% Arabica</h3>
                        <h5> Rp50.000 - Rp100.000</h5>
                        </div>
                    </div>
                    </li>
                    </ul>
                </div>
                <div id="list-food">
                    
                </div>
            </div>
        </div>
        </div>
    </section>


    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>