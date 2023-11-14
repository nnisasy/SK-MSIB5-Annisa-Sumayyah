<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKO BUKET | BLAM HOUSE</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/logo1.png">

    <!-- CDN Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/vendor/font.awesome.min.css">
    <!-- Linear Icons CSS -->
    <link rel="stylesheet" href="assets/css/vendor/linearicons.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <!-- Jquery ui CSS -->
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/footer.css">

    <style>
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
        }
    </style>
</head>

<body>
    <?php
    include '../conn.php';
    $query = mysqli_query($conn, "SELECT * from buket as b join kategori as k on b.id_kategori = k.id_kategori join sizebuket as sb on b.id_sizebuket = sb.id_sizebuket JOIN status as s on b.id_status = s.id_status ORDER BY b.id_buket ASC;");
    ?>

    <!-- Header Area Start Here -->
    <header class="main-header-area">
        <div class="main-header header-transparent header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-xl-2 col-md-6 col-6 col-custom">
                        <div class="header-logo d-flex align-items-center">
                            <a href="index.html">
                                <img class="img-full" src="assets/images/logo/logo.png" alt="Header Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 d-none d-lg-flex justify-content-center col-custom">
                        <nav class="main-nav d-none d-lg-flex">
                            <ul class="nav">
                                <li>
                                    <a class="active" href="#home">
                                        <span class="menu-text"> Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#product">
                                        <span class="menu-text"> Product</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#about">
                                        <span class="menu-text"> About</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-md-6 col-6 col-custom">
                        <div class="header-right-area main-nav">
                            <ul class="nav">
                                <li class="mobile-menu-btn d-lg-none">
                                    <a class="off-canvas-btn" href="#">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Start -->
        <aside class="off-canvas-wrapper" id="mobileMenu">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="btn-close-off-canvas">
                    <i class="fa fa-times"></i>
                </div>
                <div class="off-canvas-inner">
                    <div class="mobile-navigation">
                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="#home">Home</a></li>
                                <li><a href="#product">Produk</a></li>
                                <li><a href="#about">Tentang Kami</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Mobile Menu End -->

    </header>
    <!-- Header Area End Here -->

    <!-- Slider/Intro Section Start -->
    <div class="intro11-slider-wrap section" id="home">
        <div class="intro11-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="intro11-section swiper-slide slide-1 slide-bg-1 bg-position">
                    <div class="intro11-content text-left">
                        <h3 class="title-slider text-uppercase">Top Trend</h3>
                        <h2 class="title">Sunflower Bouquet</h2>
                        <p class="desc-content">Kami menyediakan berbagai buket yang indah.</p>
                        <a href="#" class="btn flosun-button secondary-btn theme-color  rounded-0">Shop Now</a>
                    </div>
                </div>

                <div class="intro11-section swiper-slide slide-2 slide-bg-1 bg-position">
                    <div class="intro11-content text-left">
                        <h3 class="title-slider black-slider-title text-uppercase">Collection</h3>
                        <h2 class="title">Money Bouquet</h2>
                        <p class="desc-content">Buket hadiah wisuda, ulang tahun dan acara lainnya. </p>
                        <a href="#" class="btn flosun-button secondary-btn rounded-0">Shop Now</a>
                    </div>
                </div>
            </div>

            <div class="home1-slider-prev swiper-button-prev main-slider-nav"><i class="lnr lnr-arrow-left"></i></div>
            <div class="home1-slider-next swiper-button-next main-slider-nav"><i class="lnr lnr-arrow-right"></i></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- Slider/Intro Section End -->

    <!--Product Area Start-->
    <div class="product-area mt-text-2" id="product">
        <div class="container custom-area-2 overflow-hidden">
            <div class="row">
                <div class="col-12 col-custom">
                    <div class="section-title text-center mb-30">
                        <span class="section-title-1">Hadiah yang luar biasa</span>
                        <h3 class="section-title-3">Produk Pilihan </h3>
                    </div>
                </div>
            </div>

            <div class="row g-3">
                <?php
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <div class="col-md-3 col-sm-12 ">
                        <div class="card">
                            <div class="card-body">
                                <div class="product-image">
                                    <a class="d-block" href="#">
                                        <img src="../admin/<?php echo $data['gambar'] ?>" alt="" width="250px" height="250px">
                                    </a>
                                </div><br>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="#"><?php echo $data['nama_buket'] ?></a></h4>
                                    </div>
                                    <div class="product-title">
                                        <h5 class="title-2"><a href="#"><span class="badge bg-secondary"><?php echo $data['nama_kategori'] ?></span></a></h5>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price "><?php echo "Rp. " . number_format($data["harga"], 0, ',', '.') ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div><br><br>
    <!--Product Area End-->

    <!-- About Area Start Here -->
    <div class="about-area mt-text-2 mb-5" id="about">
        <div class="container custom-area">
            <div class="row">
                <div class="col-12 col-custom">
                    <div class="section-title text-center">
                        <span class="section-title-1">Tentang Kami</span>
                        <h3 class="section-title-3">Blam House</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="about-carousel swiper-container intro11-carousel-wrap col-12 col-custom">
                    <div class="swiper-wrapper">
                        <div class="single-item swiper-slide">
                            <div class="single-about text-center">
                                <div class="about-img">
                                    <img src="assets/images/about/owner.jpg" alt="">
                                    <div class="about-author">
                                        <h6>Annisa Sumayyah <span>Owner</span></h6>
                                    </div>
                                </div>
                                <div class="about-content">
                                    <p>
                                        Blam House adalah sebuah unit usaha yang bergerak di bidang jasa pembuatan dan pengiriman berbagai jenis buket, dengan menggunakan channel internet sebagai media utamadalam promosinya.
                                        Blam berdiri sejak tanggal 16 Oktober 2021 dengan pengalaman lebih dari 2 tahun kami sudah berhasil melayani lebih dari 2.000 pelanggan untuk pengiriman buket.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- About Area End Here -->

    <!--Footer Area Start-->
    <footer>
        <p class="footer-logo">Blam House</p>
        <p>Jl. Srijaya Palembang | 30153</p>
        <div class="sosmed">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-dribbble"></i></a>
        </div>
        <p class="end">&copy; CopyRight 2023 | BLAM HOUSE</p>
    </footer>
    <!--Footer Area End-->


    <!-- JS -->
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- jQuery Migrate JS -->
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Swiper Slider JS -->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <!-- nice select JS -->
    <script src="assets/js/plugins/nice-select.min.js"></script>
    <!-- Ajaxchimpt js -->
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <!-- Jquery Ui js -->
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <!-- Jquery Countdown js -->
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <!-- jquery magnific popup js -->
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>


</body>

</html>