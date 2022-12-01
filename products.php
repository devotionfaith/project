<?php
session_start();

if (empty($_SESSION['username'])) {
    $url3 = "login.php?value=3";
}

include 'koneksi.php';
$sql = "SELECT * FROM jenis_product";
$query = mysqli_query($connect, $sql) or die(mysqli_error($connect));
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css" />
    <title>Gustoro Coffee Shop</title>
</head>

<body>
    <nav class="nav nav-bg navbar-expand-lg fixed-top navbar-dark p-3">
        <div class="container-fluid">
            <?php
            if (empty($_SESSION['username'])) { ?>
            <a href="<?= $url3 ?>" class="btn-login position-absolute"> <button
                    class="button-profile">Login</button></a>
            <?php } else { ?>
            <a href="logout.php?value=0" class="btn-logout position-absolute"> <button
                    class="btn-danger">Logout</button></a>
            <?php
            }
            ?> <div class="collapse navbar-collapse justify-content-md-center" id="navbarsMiddle">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link" aria-current="page">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="products.php" class="nav-link" aria-current="page">PRODUCTS</a>
                    </li>
                    <li class="nav-item">
                        <a href="lihatorder.php" class="nav-link" aria-current="page">LIHAT ORDER</a>
                    </li>
                    <li class="nav-item">
                        <a href="reservasi.php" class="nav-link" aria-current="page">RESERVASI</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="bg-dark position-relative d-flex align-items-center justify-content-center" id="section1">
        <div class="container px-2">
            <div class="row gx-3 d-flex align-items-start justify-content-center">
                <div class=" d-flex align-items-center flex-column justify-content-center">
                    <lottie-player src="https://assets8.lottiefiles.com/private_files/lf30_fpdvsz3i.json"
                        background="transparent" speed="1.5" style="width: 300px; height: 300px;" loop autoplay>
                    </lottie-player>
                    <div
                        class="text-warning text-center text-xl-center d-flex flex-column align-items-center justify-content-center">
                        <h1 class="display-2 fw-bolder mb-1 ">Our Products</h1>
                        <h5 class="lead fw-normal mb-3">Tell us what do you want</h5>
                        <a class="btn" href="#list-coffee"> <button class="button-profile">Lihat Produk
                            </button></a>
                    </div>
                </div>
                <div class="col-6 col-xl-4 col-xxl-5 text-center">

                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="section2">
        <div class="row">
            <div class="col-3 container-category">
                <div class="container mx-1 category">
                    <h2 class="mb-3">Categories</h2>
                    <ul>
                        <?php
                        while ($jenis = mysqli_fetch_array($query)) {
                        ?>
                        <li><a href="#<?php echo $jenis['id_jenis']; ?>"
                                class="link-category"><?php echo $jenis['nama_jenis'] ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 container-product bg-light">

                <?php
                $sql_product = "SELECT * FROM product";
                $query_product = mysqli_query($connect, $sql_product) or die(mysqli_error($connect));
                while ($list_product = mysqli_fetch_array($query_product)) {
                ?>

                <div id="<?php echo $jenis['id_jenis']; ?>" class="pt-5">
                    <ul>
                        <li>
                            <div class="product">
                                <div class="container-image  img-hover-zoom--blur">
                                    <img src="gambar-product/<?php echo $list_product['gambar']; ?>">
                                </div>
                                <div class="description">
                                    <h3>NAMA : <?php echo $list_product['nama_product']; ?></h3>
                                    <h5>HARGA : <?php echo $list_product['harga']; ?></h5>
                                    <h5>Jumlah Tersedia : <?php echo $list_product['jumlah_tersedia']; ?></h5>
                                    <a href="order.php?id=<?php echo $list_product['id_product']; ?>"
                                        class="btn btn-info">Order</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>