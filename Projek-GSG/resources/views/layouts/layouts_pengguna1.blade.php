<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

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
                            <img src="templatemo_540_lava_landing_page/assets/images/logosss.png" class="logo-img"
                                width="70" height="70">
                            GSG
                        </p>

                        @if (session('success'))
                            <div class="mt-3 alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#welcome" class="menu-item">Home</a></li>
                            <li class="scroll-to-section"><a href="#about" class="menu-item">Menu</a></li>
                            <li class="scroll-to-section" style="margin-right: 300px;"><a href="#testimonials" class="menu-item">Tanggal</a>
                            <li class="scroll-to-section"><a href="/logout" class="hide-menu ms-2 ps-1">--Logout--</a>
                            </li>
                            <li class="submenu"><a href="javascript:;">
                                @if (Auth::check())
                                    {{ Auth::user()->name }} <!-- Menampilkan nama pengguna yang login -->
                                @else
                                    Login
                                @endif
                                <img style="margin-left: 10px;" src="https://i.pinimg.com/736x/ea/56/af/ea56af3c45db2a9bea14bf9cec3a01ff.jpg" 
                                alt="" width="45" height="45" class="rounded-circle">
                            </a><ul>
                                <li><a href="/profil" class="hide-menu ms-2 ps-1">My Profile</a></li>
                            </ul></li>
                            <li class="scroll-to-section">
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
                        <p>Gedung serbaguna Politeknik Calteks Riau merupakan fasilitas yang bagus dan dapat terbilang
                            mewah.
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
                            <img src="templatemo_540_lava_landing_page/assets/images/features-icon-1.png"
                                alt="">
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
                            <img src="templatemo_540_lava_landing_page/assets/images/features-icon-2.png"
                                alt="">
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
                            <img src="templatemo_540_lava_landing_page/assets/images/features-icon-3.png"
                                alt="">
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
                    <img src="templatemo_540_lava_landing_page/assets/images/GSG2.png"
                        class="mx-auto rounded img-fluid d-block" alt="App">
                </div>
                <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
                    <ul>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            <img src="templatemo_540_lava_landing_page/assets/images/about-icon-01.png" alt="">
                            <div class="text">
                                <h4>Deskripsi Umum Gedung Serba Guna</h4>
                                <p>GSG terletak di sebelah barat Kampus Utama Politeknik Caltex Riau dan berkapasitas
                                    1500–2000 orang.
                                    Gedung ini mulai beroperasi pada 2012 dan digunakan pertama kali untuk acara wisuda.
                                </p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.5s">
                            <img src="templatemo_540_lava_landing_page/assets/images/about-icon-02.png"
                                alt="">
                            <div class="text">
                                <h4>Fasilitas yang Tersedia di GSG</h4>
                                <p>GSG dilengkapi dengan dua layar proyektor, panggung, sistem AC dan soundsystem,
                                    serta pilihan meja bundar atau petak untuk fleksibilitas acara.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                            <img src="templatemo_540_lava_landing_page/assets/images/about-icon-03.png"
                                alt="">
                                <div class="text">
                                    <h4>Harga Sewa GSG</h4>
                                    <p>GSG tersedia untuk disewa sebagai tempat penyelenggaraan acara pernikahan. 
                                    Dengan harga Rp 31 juta, Anda dapat menggunakan fasilitas lengkap GSG selama satu hari penuh, mulai dari pagi hingga sore. 
                                    </p>
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

            .calendar-controls {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 15px;
                font-size: 1.2em;
            }

            .calendar-controls .btn {
                background-color: #007bff;
                color: white;
                border: none;
                padding: 5px 10px;
                margin: 0 5px;
                border-radius: 4px;
                cursor: pointer;
            }

            .calendar-controls .btn:hover {
                background-color: #0056b3;
            }

            .current-month {
                font-weight: bold;
                margin: 0 10px;
            }
        </style>
        </head>

        <body class="bg-light text-dark">
            <div class="col-lg-8 offset-lg-2">
                <div class="center-heading">
                    <h2>Taggal Peminjaman GSG <br><em>Kalender</em></h2>
                    <p>
                        ● <span style="color: green;">Blok tanggal warna hijau</span> = Tanggal sudah di-booking dengan
                        DP (sudah fix)<br>
                        ● <span style="color: orange;">Blok tanggal warna orange</span> = Booking tanpa DP (bisa
                        berubah)<br>
                        ● <span style="color: blue;">Blok tanggal warna biru</span> = Acara/Event PCR, misal: Wisuda
                    </p>
                </div>

                <!-- Kontrol Navigasi -->
                <div class="calendar-controls">
                    <button id="prev-month" class="btn btn-primary">⟨</button>
                    <span id="current-month" class="current-month">Januari 2025</span>
                    <button id="next-month" class="btn btn-primary">⟩</button>
                </div>

                <div id="calendar" class="calendar"
                    style="display: grid; grid-template-columns: repeat(7, 1fr); gap: 5px; padding: 10px;"></div>
            </div>

            <script>
                const bookings = @json($peminjaman);
                const monthNames = [
                    "Januari", "Februari", "Maret", "April", "Mei", "Juni",
                    "Juli", "Agustus", "September", "Oktober", "November", "Desember"
                ];

                let currentYear = new Date().getFullYear();
                let currentMonth = new Date().getMonth();

                function createCalendar(year, month) {
                    const bookingMap = {}; // Reset setiap kali bulan diganti
                    const calendar = document.getElementById("calendar");
                    calendar.innerHTML = ""; // Reset kalender
                    const date = new Date(year, month);
                    const firstDay = date.getDay();
                    const daysInMonth = new Date(year, month + 1, 0).getDate();

                    // Tambahkan tanggal kosong sebelum hari pertama
                    for (let i = 0; i < firstDay; i++) {
                        const emptyCell = document.createElement("div");
                        emptyCell.classList.add("day", "empty");
                        calendar.appendChild(emptyCell);
                    }

                    // Konversi data booking ke bookingMap
                    bookings.forEach((booking) => {
                        const date = new Date(booking.tanggal_peminjaman);
                        if (isNaN(date)) {
                            console.log("Invalid date:", booking.tanggal_peminjaman);
                            return; // Skip invalid dates
                        }
                        if (date.getMonth() === month && date.getFullYear() === year) {
                            const day = date.getDate();

                            // Logika pewarnaan
                            if (booking.status_pembayaran === "sukses" && booking.status_verifikasi === "disetujui") {
                                bookingMap[day] = "green"; // Booking sukses dan diverifikasi
                            } else if (booking.status_verifikasi === "disetujui") {
                                bookingMap[day] = "orange"; // Booking diverifikasi tanpa pembayaran sukses
                            } else if (booking.status_pembayaran === "event" && booking.status_verifikasi === "event") {
                                bookingMap[day] = "blue";
                            }
                        }
                    });

                    // Tambahkan tanggal dengan warna tertentu
                    for (let day = 1; day <= daysInMonth; day++) {
                        const dayCell = document.createElement("div");
                        dayCell.classList.add("day");
                        dayCell.innerText = day;

                        if (bookingMap[day]) {
                            dayCell.classList.add(bookingMap[day]);
                        }

                        calendar.appendChild(dayCell);
                    }

                    // Perbarui tampilan bulan dan tahun
                    document.getElementById("current-month").innerText = `${monthNames[month]} ${year}`;
                }

                function setupCalendar() {
                    // Event listener untuk tombol navigasi
                    document.getElementById("prev-month").addEventListener("click", () => {
                        currentMonth--;
                        if (currentMonth < 0) {
                            currentMonth = 11;
                            currentYear--;
                        }
                        createCalendar(currentYear, currentMonth);
                    });

                    document.getElementById("next-month").addEventListener("click", () => {
                        currentMonth++;
                        if (currentMonth > 11) {
                            currentMonth = 0;
                            currentYear++;
                        }
                        createCalendar(currentYear, currentMonth);
                    });

                    // Inisialisasi kalender untuk bulan dan tahun saat ini
                    createCalendar(currentYear, currentMonth);
                }

                // Jalankan setup saat halaman dimuat
                document.addEventListener("DOMContentLoaded", setupCalendar);
            </script>
        </body>

    </section>

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
