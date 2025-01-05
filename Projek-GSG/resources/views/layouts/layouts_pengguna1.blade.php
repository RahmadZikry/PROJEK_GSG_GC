<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Pengguna</title>
    <link rel="icon" type="image/png" href="templatemo_540_lava_landing_page/assets/images/logosss.png">
<!--

Lava Landing Page

https://templatemo.com/tm-540-lava-landing-page

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="templatemo_540_lava_landing_page/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="templatemo_540_lava_landing_page/assets/css/font-awesome.css">

    <link rel="stylesheet" href="templatemo_540_lava_landing_page/assets/css/templatemo-lava.css">

    <link rel="stylesheet" href="templatemo_540_lava_landing_page/assets/css/owl-carousel.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <p class="logo">
                            <img src="templatemo_540_lava_landing_page/assets/images/logosss.png"
                            class="logo-img" width="70" height="70">
                            GSG
                        </p>

                        @if(session('success'))
                            <div class="mt-3 alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#welcome" class="menu-item">Home</a></li>
                            <li class="scroll-to-section"><a href="#about" class="menu-item">Menu</a></li>
                            <li class="scroll-to-section"><a href="#testimonials" class="menu-item">Tanggal</a>
                            <li class="scroll-to-section"><a href="/logout" class="hide-menu ms-2 ps-1">--Logout--</a>
                            </li>
                            {{-- <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="" class="menu-item">About Us</a></li>
                                    <li><a href="" class="menu-item">Features</a></li>
                                    <li><a href="" class="menu-item">FAQ's</a></li>
                                    <li><a href="" class="menu-item">Blog</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="#contact-us" class="menu-item">Contact Us</a></li> --}}
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1>Reservasi Gedung Serba Guna <em>GSG</em></h1>
                        <p>Gedung serbaguna Politeknik Calteks Riau merupakan fasilitas yang bagus dan dapat terbilang mewah.
                            Untuk harga penyewaannya juga termasuk murah dan peminjamannya juga sangatlah gampang.</p>
                        <a href="#about" class="main-button-slider">KNOW US BETTER</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>01</h2>
                            <img src="templatemo_540_lava_landing_page/assets/images/features-icon-1.png" alt="">
                            <h4>Syarat Dan Ketentuan</h4>
                            <p>Adapula syarat dan ketentuan dalam peminjaman Gedung Serba Guna.</p>
                            <a href="/syarat" class="main-button">
                                Baca Syarat
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>02</h2>
                            <img src="templatemo_540_lava_landing_page/assets/images/features-icon-2.png" alt="">
                            <h4>Formulir Peminjaman</h4>
                            <p>Isi formulir untuk peminjaman GSG sesuai kebutuhan Anda.</p>
                            <a href="peminjamanForm" class="main-button">
                                Pinjam Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>03</h2>
                            <img src="templatemo_540_lava_landing_page/assets/images/features-icon-3.png" alt="">
                            <h4>Pesan</h4>
                            <p>Cek pesan atau notifikasi dari admin terkait status peminjaman GSG Anda.</p>
                            <a href="/pesan" class="main-button">
                                Cek Pesan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <div class="left-image-decor"></div>

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="promotion">
        <div class="container">
            <div class="row">
                <div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="templatemo_540_lava_landing_page/assets/images/GSG2.png" class="mx-auto rounded img-fluid d-block" alt="App">
                </div>
                <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
                    <ul>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            <img src="templatemo_540_lava_landing_page/assets/images/about-icon-01.png" alt="">
                            <div class="text">
                                <h4>Deskripsi Umum Gedung Serba Guna</h4>
                                <p>GSG terletak di sebelah barat Kampus Utama Politeknik Caltex Riau dan berkapasitas 1500–2000 orang.
                                    Gedung ini mulai beroperasi pada 2012 dan digunakan pertama kali untuk acara wisuda.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.5s">
                            <img src="templatemo_540_lava_landing_page/assets/images/about-icon-02.png" alt="">
                            <div class="text">
                                <h4>Fasilitas yang Tersedia di GSG</h4>
                                <p>GSG dilengkapi dengan dua layar proyektor, panggung, sistem AC dan soundsystem,
                                    serta pilihan meja bundar atau petak untuk fleksibilitas acara.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                            <img src="templatemo_540_lava_landing_page/assets/images/about-icon-03.png" alt="">
                            <div class="text">
                                <h4>Pemanfaatan dan Pengelolaan GSG</h4>
                                <p>GSG digunakan untuk acara kampus seperti wisuda dan disewa untuk kegiatan eksternal,
                                    seperti pernikahan, yang dikelola oleh Yayasan Politeknik Caltex Riau.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <div class="right-image-decor"></div>

    <!-- ***** TANGGALL Starts ***** -->
    <section class="section" id="testimonials">
        {{-- <div class="container"> --}}
            {{-- <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>Taggal Peminjaman GSG <em>Kalender</em></h2>
                        <p>
                            ● <span style="color: green;">Blok tanggal warna hijau</span> = Tanggal sudah di-booking dengan DP (sudah fix)<br>
                            ● <span style="color: orange;">Blok tanggal warna orange</span> = Booking tanpa DP (bisa berubah)<br>
                            ● <span style="color: blue;">Blok tanggal warna biru</span> = Acara/Event PCR, misal: Wisuda
                        </p>
                    </div>
                </div>
            </div> --}}
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
            <style>
                .calendar {
                    display: grid;
                    grid-template-columns: repeat(7, 1fr);
                    gap: 5px;
                    margin-top: 20px;
                }

                .day {
                    border: 1px solid #ddd;
                    text-align: center;
                    padding: 10px;
                    border-radius: 4px;
                    cursor: pointer;
                }

                .day.empty {
                    background-color: #f5f5f5;
                    cursor: default;
                }

                .day.green {
                    background-color: green;
                    color: white;
                }

                .day.orange {
                    background-color: orange;
                    color: white;
                }

                .day.blue {
                    background-color: blue;
                    color: white;
                }
            </style>
        </head>

        <body class="bg-light text-dark">
            <div class="col-lg-8 offset-lg-2">
                <div class="center-heading">
                    <h2>Taggal Peminjaman GSG <br><em>Kalender</em></h2>
                    <p>
                        ● <span style="color: green;">Blok tanggal warna hijau</span> = Tanggal sudah di-booking dengan DP (sudah fix)<br>
                        ● <span style="color: orange;">Blok tanggal warna orange</span> = Booking tanpa DP (bisa berubah)<br>
                        ● <span style="color: blue;">Blok tanggal warna biru</span> = Acara/Event PCR, misal: Wisuda
                    </p>
                </div>
                <div id="calendar" class="calendar"></div>
            </div>

            <script>
                // Fungsi untuk membuat kalender
                function createCalendar(year, month) {
                    const calendar = document.getElementById("calendar");
                    calendar.innerHTML = ""; // Reset kalender
                    const date = new Date(year, month);
                    const firstDay = date.getDay(); // Hari pertama dalam bulan
                    const daysInMonth = new Date(year, month + 1, 0).getDate(); // Jumlah hari dalam bulan

                    // Tambahkan tanggal kosong sebelum hari pertama
                    for (let i = 0; i < firstDay; i++) {
                        const emptyCell = document.createElement("div");
                        emptyCell.classList.add("day", "empty");
                        calendar.appendChild(emptyCell);
                    }

                    // Tambahkan tanggal dengan warna tertentu
                    const bookings = {
                        5: "green", // Tanggal 5 di-booking dengan DP
                        12: "orange", // Tanggal 12 di-booking tanpa DP
                        18: "blue" // Tanggal 18 adalah acara PCR
                    };

                    for (let day = 1; day <= daysInMonth; day++) {
                        const dayCell = document.createElement("div");
                        dayCell.classList.add("day");
                        dayCell.innerText = day;

                        // Tambahkan warna jika ada dalam objek bookings
                        if (bookings[day]) {
                            dayCell.classList.add(bookings[day]);
                        }

                        calendar.appendChild(dayCell);
                    }
                }

                // Inisialisasi kalender untuk bulan dan tahun saat ini
                const today = new Date();
                createCalendar(today.getFullYear(), today.getMonth());
            </script>
        </body>
    </section>
                {{-- <div class="col-lg-10 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="owl-carousel owl-theme">
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="templatemo_540_lava_landing_page/assets/images/testimonial-author-1.png" alt="Author One"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Jonathan Smart</h4>
                                <p>“Nullam hendrerit, elit a semper pharetra, ipsum nibh tristique tortor, in tempus
                                    urna elit in mauris.”</p>
                                <span>Besta CTO</span>
                            </div>
                        </div>
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="templatemo_540_lava_landing_page/assets/images/testimonial-author-1.png" alt="Second Author"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Martino Tino</h4>
                                <p>“Morbi non mi luctus felis molestie scelerisque. In ac libero viverra, placerat est
                                    interdum, rhoncus leo.”</p>
                                <span>Web Analyst</span>
                            </div>
                        </div>
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="templatemo_540_lava_landing_page/assets/images/testimonial-author-1.png" alt="Author Third"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>George Tasa</h4>
                                <p>“Fusce rutrum in dolor sit amet lobortis. Ut at vehicula justo. Donec quam dolor,
                                    congue a fringilla sed, maximus et urna.”</p>
                                <span>System Admin</span>
                            </div>
                        </div>
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="templatemo_540_lava_landing_page/assets/images/testimonial-author-1.png" alt="Fourth Author"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Sir James</h4>
                                <p>"Fusce rutrum in dolor sit amet lobortis. Ut at vehicula justo. Donec quam dolor,
                                    congue a fringilla sed, maximus et urna."</p>
                                <span>New Villager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ***** Testimonials Ends ***** -->


    <!-- ***** Footer Start ***** -->
    {{-- <footer id="contact-us">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <!-- ***** Contact Form Start ***** -->
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="contact-form">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input name="name" type="text" id="name" placeholder="Full Name" required=""
                                                style="background-color: rgba(250,250,250,0.3);">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input name="email" type="text" id="email" placeholder="E-Mail Address"
                                                required="" style="background-color: rgba(250,250,250,0.3);">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" rows="6" id="message" placeholder="Your Message"
                                                required="" style="background-color: rgba(250,250,250,0.3);"></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="main-button">Send Message
                                                Now</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- ***** Contact Form End ***** -->
                    <div class="right-content col-lg-6 col-md-12 col-sm-12">
                        <h2>More About <em>Lava</em></h2>
                        <p>Phasellus dapibus urna vel lacus accumsan, iaculis eleifend leo auctor. Duis at finibus odio.
                            Vivamus ut pharetra arcu, in porta metus. Suspendisse blandit pulvinar ligula ut elementum.
                            <br><br>If you need this contact form to send email to your inbox, you may follow our <a
                                rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact</a> page
                            for more detail.</p>
                        <ul class="social">
                            <li><a href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <p>Copyright &copy; 2020 Lava Landing Page

                        | Designed by <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer> --}}

    <!-- jQuery -->
    <script src="templatemo_540_lava_landing_page/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="templatemo_540_lava_landing_page/assets/js/popper.js"></script>
    <script src="templatemo_540_lava_landing_page/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="templatemo_540_lava_landing_page/assets/js/owl-carousel.js"></script>
    <script src="templatemo_540_lava_landing_page/assets/js/scrollreveal.min.js"></script>
    <script src="templatemo_540_lava_landing_page/assets/js/waypoints.min.js"></script>
    <script src="templatemo_540_lava_landing_page/assets/js/jquery.counterup.min.js"></script>
    <script src="templatemo_540_lava_landing_page/assets/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="templatemo_540_lava_landing_page/assets/js/custom.js"></script>

</body>
</html>
