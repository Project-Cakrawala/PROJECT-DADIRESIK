<!doctype html>
<html lang="en">

<head>
</head>

<body>
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <br><br><br><br><br><br><br>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?= base_url() . '/assets/img/5.jpg'  ?>" class="d-block w-100 h-50" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url() . '/assets/img/5.jpg'  ?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url() . '/assets/img/5.jpg'  ?>" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
    </section>
    <!-- banner part start-->


    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-layers" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M3.188 8L.264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l-1.063.567L14.438 10 8 13.433 1.562 10 4.25 8.567 3.187 8z" />
                                    <path fill-rule="evenodd" d="M7.765 1.559a.5.5 0 0 1 .47 0l7.5 4a.5.5 0 0 1 0 .882l-7.5 4a.5.5 0 0 1-.47 0l-7.5-4a.5.5 0 0 1 0-.882l7.5-4zM1.563 6L8 9.433 14.438 6 8 2.567 1.562 6z" />
                                </svg></span>
                            <h4>Artikel</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-6 align-self-center">
                    <div class="single_feature_text text-center ">
                        <h2>DADI RESIK WASH</h2>
                        <p>Usaha Pembersihan yang memberikan kemudahan dan kelancaran dalam proses pembersihan rumah dan perabotan anda </p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M1.5 13A1.5 1.5 0 0 0 3 14.5h8a1.5 1.5 0 0 0 1.5-1.5V9a.5.5 0 0 0-1 0v4a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 0 0-1H3A1.5 1.5 0 0 0 1.5 5v8zm7-11a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.5H9a.5.5 0 0 1-.5-.5z" />
                                    <path fill-rule="evenodd" d="M14.354 1.646a.5.5 0 0 1 0 .708l-8 8a.5.5 0 0 1-.708-.708l8-8a.5.5 0 0 1 .708 0z" />
                                </svg></i></span>
                            <h4>Foto Galeri</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->


    <br><br>
    <!-- member_counter counter start -->
    <section class="member_counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">
                            <?php
                            $filecounter = "counter.txt";
                            $fl = fopen($filecounter, "r+");
                            $hit = fread($fl, filesize($filecounter));
                            // echo("<table width=250 align=center border=1 cellspacing=0 cellpadding=0
                            // bordercolor=#0000FF><tr>");
                            // echo("<td width=250 valign=middle align=center>");
                            // echo("<font face=verdana size=2 color=#FF0000><b>");
                            // echo("Anda pengunjung yang ke:");
                            echo ($hit);
                            echo ("</b></font>");
                            echo ("</td>");
                            echo ("</tr></table>");
                            fclose($fl);
                            $fl = fopen($filecounter, "w+");
                            $hit = $hit + 1;
                            fwrite($fl, $hit, strlen($hit));
                            fclose($fl);
                            ?>
                        </span>
                        <h4>SEMUA PENGUNJUNG</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">960</span>
                        <h4>PELANGGAN</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">1020</span>
                        <h4>MENYUKAI PELAYANAN</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter" id="amb">
                            <script>
                                var h = 0;
                                var d;
                                var htgon = 0;

                                function wktNtmbh() {
                                    document.getElementById('amb').innerHTML = h;
                                    h++;
                                    d = setTimeout("wktNtmbh()", 1000);
                                }

                                function mUlai() {
                                    if (!htgon) {
                                        htgon = 1;
                                        wktNtmbh();
                                    }
                                }
                                window.onload = mUlai;
                            </script>
                        </span>
                        <h4>LAMA ONLINE</h4>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-- member_counter counter end -->

    <!--::review_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>TESTIMONIAL</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <!-- <img src="assets/img/home/img/special_cource_1.png" class="special_img" alt=""> -->
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4">Backend</a>
                            <a href="course-details.html">
                                <h3>Dickyfli Perdana Putra</h3>
                            </a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="assets/img/home/img/author/author_1.png" alt="">
                                    <div class="author_info_text">
                                        <p>By:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="assets/img/home/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="assets/img/home/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="assets/img/home/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="assets/img/home/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="assets/img/home/img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="assets/img/home/img/special_cource_2.png" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4">Frontend</a>
                            <a href="course-details.html">
                                <h3>Berto Juni Krisnanto</h3>
                            </a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="assets/img/home/img/author/author_2.png" alt="">
                                    <div class="author_info_text">
                                        <p>By:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="assets/img/home/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="assets/img/home/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="assets/img/home/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="assets/img/home/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="assets/img/home/img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <!-- <img src="assets/img/home/img/special_cource_3.png" class="special_img" alt=""> -->
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4">UI/UX Designer</a>
                            <a href="course-details.html">
                            </a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="assets/img/home/img/author/author_3.png" alt="">
                                    <div class="author_info_text">
                                        <p>By:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="assets/img/home/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="assets/img/home/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="assets/img/home/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="assets/img/home/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="assets/img/home/img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <!-- <img src="assets/img/home/img/special_cource_3.png" class="special_img" alt=""> -->
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4">Tester</a>
                            <a href="course-details.html">
                                <h3>Bayu Luthfi Putera Arief</h3>
                            </a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <!-- <img src="assets/img/home/img/special_cource_3.png" class="special_img" alt=""> -->
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4">Analyst</a>
                            <a href="course-details.html">
                                <h3>Inosensia</h3>
                            </a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        </div>
        <!-- end produk -->

        <!-- TEAM -->
        <div class="site-section border-bottom">
            <div class="container">
                <div class="row align-items-sm-center align-items-xl-stretch">
                    <div class="col-md-6 col-lg-6">
                        <div class="learning_member_text">
                            <h5>Lokasi/Maps</h5>
                            <!--<h2>Our Advance Educator
                            Learning System</h2>
                        <p>Fifth saying upon divide divide rule for deep their female all hath brind mid Days
                            and beast greater grass signs abundantly have greater also use over face earth
                            days years under brought moveth she star</p> -->
                            <div class="row">


                            </div>
                        </div>
                    </div>
                    <!--<div class="col-lg-6 col-md-6">
                    <div class="learning_img">
                        <img src="assets/img/home/img/advance_feature_img.png" alt="">
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->




</body>

</html>