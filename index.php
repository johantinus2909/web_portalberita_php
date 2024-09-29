<?php
session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelatihan Mediatama h2</title>
    <link rel="stylesheet" href="css/pelatihanh2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- CSS here -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="asset/css/ticker-style.css">
    <link rel="stylesheet" href="asset/css/flaticon.css">
    <link rel="stylesheet" href="asset/css/slicknav.css">
    <link rel="stylesheet" href="asset/css/animate.min.css">
    <link rel="stylesheet" href="asset/css/magnific-popup.css">
    <link rel="stylesheet" href="asset/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="asset/css/themify-icons.css">
    <link rel="stylesheet" href="asset/css/slick.css">
    <link rel="stylesheet" href="asset/css/nice-select.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <style>
        /* Trending Top */
        .img-trending-top {
            width: 50%;
            height: 50%;
            /* Atur lebar gambar untuk Trending Top */
            /* object-fit: cover; Mengatur gambar agar sesuai dengan kontainer */
        }

        /* Trending Bottom */
        .img-trending-bottom {
            width: 100%;
            /* Atur lebar gambar untuk Trending Bottom agar sesuai dengan kolom */
            height: auto;
            /* Menjaga rasio aspek gambar */
        }

        /* Right Content */
        .img-trending-right {
            width: 100%;
            /* Atur lebar gambar untuk Right Content agar sesuai dengan kolom */
            height: auto;
            /* Menjaga rasio aspek gambar */
        }
    </style>
</head>

<body>
    <!-- start header -->
    <?php include 'templates/navbar.php' ?>
    <!-- end header -->

    <!-- carousel -->
    <div class="carousel">
        <!-- list item -->
        <div class="list">
            <div class="item">
                <img src="img/img1.jpg" alt="Johan Portrait">
                <div class="content">
                    <div class="author">JOHAN</div>
                    <div class="title">MEVN STACK</div>
                    <div class="topic">MEDIATAMA</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima
                        placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et
                        quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at
                        laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/img2.jpg" alt="Porto Image">
                <div class="content">
                    <div class="author">JOHAN</div>
                    <div class="title">MEVN STACK</div>
                    <div class="topic">MEDIATAMA</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima
                        placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et
                        quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at
                        laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/img3.jpg" alt="Project Kabitat">
                <div class="content">
                    <div class="author">JOHAN</div>
                    <div class="title">MEVN STACK</div>
                    <div class="topic">MEDIATAMA</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima
                        placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et
                        quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at
                        laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/img4.jpg" alt="Web Elearning">
                <div class="content">
                    <div class="author">JOHAN</div>
                    <div class="title">MEVN STACK</div>
                    <div class="topic">MEDIATAMA</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima
                        placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et
                        quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at
                        laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- list thumbnail -->
        <div class="thumbnail">
            <div class="item">
                <img src="img/img1.jpg" alt="Johan Thumbnail">
                <div class="content">
                    <div class="title">Name Slider</div>
                    <div class="description">Description</div>
                </div>
            </div>
            <div class="item">
                <img src="img/img2.jpg" alt="Porto Thumbnail">
                <div class="content">
                    <div class="title">Name Slider</div>
                    <div class="description">Description</div>
                </div>
            </div>
            <div class="item">
                <img src="img/img3.jpg" alt="Project Kabitat Thumbnail">
                <div class="content">
                    <div class="title">Name Slider</div>
                    <div class="description">Description</div>
                </div>
            </div>
            <div class="item">
                <img src="img/img4.jpg" alt="Web Elearning Thumbnail">
                <div class="content">
                    <div class="title">Name Slider</div>
                    <div class="description">Description</div>
                </div>
            </div>
        </div>

        <!-- next prev -->
        <div class="arrows">
            <button id="prev">&lt;</button>
            <button id="next">&gt;</button>
        </div>

        <!-- time running -->
        <div class="time"></div>
    </div>

    <main>
        <!-- Trending Area Start -->
        <div class="trending-area fix">
            <div class="container">
                <div class="trending-main">
                    <!-- Trending Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trending-tittle">
                                <strong>Berita Viral</strong>
                                <div class="trending-animated">
                                    <ul id="js-news" class="js-hidden">
                                        <?php
                                        $berita_viral = mysqli_query($connect, "SELECT judul_berita FROM berita ORDER BY tgl_berita DESC LIMIT 3");
                                            if ($berita_viral) {
                                                while ($data = mysqli_fetch_assoc($berita_viral)) {
                                        ?>
                                                <li class="news-item"><?php echo htmlspecialchars($data['judul_berita']); ?></li>
                                        <?php
                                            }
                                        } else {
                                            echo "<div class='col-lg-12'><p>Tidak ada yang viral.</p></div>";
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <?php
                        // Bagian Trending Top - Menampilkan berita terbaru
                        $query_top = mysqli_query($connect, "SELECT * FROM berita ORDER BY tgl_berita DESC LIMIT 1");
                        $top_data = mysqli_fetch_assoc($query_top);
                        ?>
                        <div class="col-lg-8">
                            <!-- Trending Top -->
                            <div class="trending-top mb-30">
                                <div class="trend-top-img">
                                    <img src="../PELATIHAN_MEDIATAMA/admin/images/<?php echo htmlspecialchars($top_data['gambar_berita']); ?>" alt="" class="img-trending-top">
                                    <div class="trend-top-cap">
                                        <span>Appetizers</span>
                                        <h2>
                                            <a href="detail.php?slug=<?php echo htmlspecialchars($top_data['slug']); ?>">
                                                <?php echo htmlspecialchars($top_data['judul_berita']); ?>
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </div>

                            <!-- Trending Bottom -->
                            <div class="trending-bottom">
                                <div class="row">
                                    <?php
                                    // Bagian Trending Bottom - Menampilkan tiga berita terbaru (selain berita terbaru yang sudah ditampilkan di Trending Top)
                                    $query_bottom = mysqli_query($connect, "SELECT * FROM berita WHERE slug != '{$top_data['slug']}' ORDER BY tgl_berita DESC LIMIT 3");
                                    while ($data = mysqli_fetch_assoc($query_bottom)) {
                                        // Query untuk mendapatkan nama kategori berdasarkan id_kategori
                                        $kategori_query = mysqli_query($connect, "SELECT nama_kategori_berita FROM kategori_berita WHERE id_kategori = '{$data['id_kategori']}' LIMIT 1");
                                        $kategori = mysqli_fetch_assoc($kategori_query); // Mendapatkan nama kategori
                                    ?>
                                        <div class="col-lg-4">
                                            <div class="single-bottom mb-35">
                                                <div class="trend-bottom-img mb-30">
                                                    <img src="../PELATIHAN_MEDIATAMA/admin/images/<?php echo htmlspecialchars($data['gambar_berita']); ?>" alt="" class="img-trending-bottom">
                                                </div>
                                                <div class="trend-bottom-cap">
                                                    <span class="color1"><?php echo htmlspecialchars($kategori['nama_kategori_berita']); ?></span> <!-- Tampilkan nama kategori -->
                                                    <h4>
                                                        <a href="detail.php?slug=<?php echo htmlspecialchars($data['slug']); ?>">
                                                            <?php echo htmlspecialchars($data['judul_berita']); ?>
                                                        </a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>

                        </div>

                        <!-- Right content -->
                        <div class="col-lg-4">
                            <?php
                            $query_right = mysqli_query($connect, "SELECT * FROM berita WHERE slug != '{$top_data['slug']}' ORDER BY tgl_berita DESC LIMIT 4");
                            while ($data = mysqli_fetch_assoc($query_right)) {
                                $kategori_query = mysqli_query($connect, "SELECT nama_kategori_berita FROM kategori_berita WHERE id_kategori = '{$data['id_kategori']}' LIMIT 1");
                                $kategori = mysqli_fetch_assoc($kategori_query); // Mendapatkan nama kategori
                            ?>
                                <div class="trand-right-single d-flex">
                                    <div class="trand-right-img">
                                        <img src="../PELATIHAN_MEDIATAMA/admin/images/<?php echo htmlspecialchars($data['gambar_berita']); ?>" alt="" class="img-trending-right">
                                    </div>
                                    <div class="trand-right-cap">
                                        <span class="color1"><?php echo htmlspecialchars($kategori['nama_kategori_berita']); ?></span>
                                        <h4>
                                            <a href="detail.php?slug=<?php echo htmlspecialchars($data['slug']); ?>">
                                                <?php echo htmlspecialchars($data['judul_berita']); ?>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- Trending Area End -->
        <!--   Weekly-News start -->
        <div class="weekly-news-area pt-50">
            <div class="container">
                <div class="weekly-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Weekly Top News</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="weekly-news-active dot-style d-flex dot-style">
                                <div class="weekly-single">
                                    <div class="weekly-img">
                                        <img src="asset/img/news/weeklyNews2.jpg" alt="">
                                    </div>
                                    <div class="weekly-caption">
                                        <span class="color1">Strike</span>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="weekly-single active">
                                    <div class="weekly-img">
                                        <img src="asset/img/news/weeklyNews1.jpg" alt="">
                                    </div>
                                    <div class="weekly-caption">
                                        <span class="color1">Strike</span>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="weekly-single">
                                    <div class="weekly-img">
                                        <img src="asset/img/news/weeklyNews3.jpg" alt="">
                                    </div>
                                    <div class="weekly-caption">
                                        <span class="color1">Strike</span>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="weekly-single">
                                    <div class="weekly-img">
                                        <img src="asset/img/news/weeklyNews1.jpg" alt="">
                                    </div>
                                    <div class="weekly-caption">
                                        <span class="color1">Strike</span>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Weekly-News -->
        <!-- Whats New Start -->
        <section class="whats-news-area pt-50 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row d-flex justify-content-between">
                            <div class="col-lg-3 col-md-3">
                                <div class="section-tittle mb-30">
                                    <h3>Whats New</h3>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <div class="properties__button">
                                    <!--Nav Button  -->
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Lifestyle</a>
                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Travel</a>
                                            <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Fashion</a>
                                            <a class="nav-item nav-link" id="nav-Sports" data-toggle="tab" href="#nav-nav-Sport" role="tab" aria-controls="nav-contact" aria-selected="false">Sports</a>
                                            <a class="nav-item nav-link" id="nav-technology" data-toggle="tab" href="#nav-techno" role="tab" aria-controls="nav-contact" aria-selected="false">Technology</a>
                                        </div>
                                    </nav>
                                    <!--End Nav Button  -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!-- Nav Card -->
                                <div class="tab-content" id="nav-tabContent">
                                    <!-- card one -->
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="asset/img/news/whatNews1.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="asset/img/news/whatNews2.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="asset/img/news/whatNews3.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="asset/img/news/whatNews4.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card two -->
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="asset/img/news/whatNews1.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="asset/img/news/whatNews2.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="asset/img/news/whatNews3.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="asset/img/news/whatNews4.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card three -->
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="asset/img/news/whatNews1.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="asset/img/news/whatNews2.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="asset/img/news/whatNews3.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="asset/img/news/whatNews4.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card fure -->
                                    <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="asset/img/news/whatNews1.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="asset/img/news/whatNews2.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="asset/img/news/whatNews3.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="asset/img/news/whatNews4.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card Five -->
                                    <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel" aria-labelledby="nav-Sports">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="asset/img/news/whatNews1.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="asset/img/news/whatNews2.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="asset/img/news/whatNews3.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="asset/img/news/whatNews4.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card Six -->
                                    <div class="tab-pane fade" id="nav-techno" role="tabpanel" aria-labelledby="nav-technology">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="asset/img/news/whatNews1.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="asset/img/news/whatNews2.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="asset/img/news/whatNews3.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="asset/img/news/whatNews4.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Nav Card -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-40">
                            <h3>Follow Us</h3>
                        </div>
                        <!-- Flow Socail -->
                        <div class="single-follow mb-45">
                            <div class="single-box">
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="asset/img/news/icon-fb.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="asset/img/news/icon-tw.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="asset/img/news/icon-ins.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="asset/img/news/icon-yo.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- New Poster -->
                        <div class="news-poster d-none d-lg-block">
                            <img src="asset/img/news/news_card.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Whats New End -->
        <!--   Weekly2-News start -->
        <div class="weekly2-news-area  weekly2-pading gray-bg">
            <div class="container">
                <div class="weekly2-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Weekly Top News</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="weekly2-news-active dot-style d-flex dot-style">
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="asset/img/news/weekly2News1.jpg" alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1">Corporate</span>
                                        <p>25 Jan 2020</p>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="asset/img/news/weekly2News2.jpg" alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1">Event night</span>
                                        <p>25 Jan 2020</p>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="asset/img/news/weekly2News3.jpg" alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1">Corporate</span>
                                        <p>25 Jan 2020</p>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="asset/img/news/weekly2News4.jpg" alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1">Event time</span>
                                        <p>25 Jan 2020</p>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="asset/img/news/weekly2News4.jpg" alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1">Corporate</span>
                                        <p>25 Jan 2020</p>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Weekly-News -->
        <!-- Start Youtube -->
        <div class="youtube-area video-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="video-items-active">
                            <div class="video-items text-center">
                                <iframe src="https://www.youtube.com/embed/CicQIuG8hBo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="video-items text-center">
                                <iframe src="https://www.youtube.com/embed/rIz00N40bag" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="video-items text-center">
                                <iframe src="https://www.youtube.com/embed/CONfhrASy44" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                            <div class="video-items text-center">
                                <iframe src="https://www.youtube.com/embed/lq6fL2ROWf8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                            <div class="video-items text-center">
                                <iframe src="https://www.youtube.com/embed/0VxlQlacWV4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-info">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="video-caption">
                                <div class="top-caption">
                                    <span class="color1">Politics</span>
                                </div>
                                <div class="bottom-caption">
                                    <h2>Welcome To The Best Model Winner Contest At Look of the year</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor sit lorem ipsum dolor sit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testmonial-nav text-center">
                                <div class="single-video">
                                    <iframe src="https://www.youtube.com/embed/CicQIuG8hBo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <div class="video-intro">
                                        <h4>Welcotme To The Best Model Winner Contest</h4>
                                    </div>
                                </div>
                                <div class="single-video">
                                    <iframe src="https://www.youtube.com/embed/rIz00N40bag" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <div class="video-intro">
                                        <h4>Welcotme To The Best Model Winner Contest</h4>
                                    </div>
                                </div>
                                <div class="single-video">
                                    <iframe src="https://www.youtube.com/embed/CONfhrASy44" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <div class="video-intro">
                                        <h4>Welcotme To The Best Model Winner Contest</h4>
                                    </div>
                                </div>
                                <div class="single-video">
                                    <iframe src="https://www.youtube.com/embed/lq6fL2ROWf8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <div class="video-intro">
                                        <h4>Welcotme To The Best Model Winner Contest</h4>
                                    </div>
                                </div>
                                <div class="single-video">
                                    <iframe src="https://www.youtube.com/embed/0VxlQlacWV4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <div class="video-intro">
                                        <h4>Welcotme To The Best Model Winner Contest</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Start youtube -->
        <!--  Recent Articles start -->
        <div class="recent-articles">
            <div class="container">
                <div class="recent-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Recent Articles</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="recent-active dot-style d-flex dot-style">
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="asset/img/news/recent1.jpg" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">Night party</span>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="asset/img/news/recent2.jpg" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">Night party</span>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="asset/img/news/recent3.jpg" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">Night party</span>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="asset/img/news/recent2.jpg" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">Night party</span>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Recent Articles End -->
        <!--Start pagination -->
        <div class="pagination-area pb-45 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow roted"></span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow right-arrow"></span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End pagination  -->
    </main>


    <footer class="footer-container">
        <div class="footer-content">
            <div class="footer-links">
                <ul>
                    <li><a href="about.html">Home</a></li>
                    <li><a href="privacy.html">Kategori</a></li>
                    <li><a href="contact.html">Berita</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Mediatama. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="js/app.js"></script>
    <script src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="./asset/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./asset/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./asset/js/popper.min.js"></script>
    <script src="./asset/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./asset/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./asset/js/owl.carousel.min.js"></script>
    <script src="./asset/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="./asset/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./asset/js/wow.min.js"></script>
    <script src="./asset/js/animated.headline.js"></script>
    <script src="./asset/js/jquery.magnific-popup.js"></script>

    <!-- Breaking New Pluging -->
    <script src="./asset/js/jquery.ticker.js"></script>
    <script src="./asset/js/site.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./asset/js/jquery.scrollUp.min.js"></script>
    <script src="./asset/js/jquery.nice-select.min.js"></script>
    <script src="./asset/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="./asset/js/contact.js"></script>
    <script src="./asset/js/jquery.form.js"></script>
    <script src="./asset/js/jquery.validate.min.js"></script>
    <script src="./asset/js/mail-script.js"></script>
    <script src="./asset/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./asset/js/plugins.js"></script>
    <script src="./asset/js/main.js"></script>
</body>

</html>