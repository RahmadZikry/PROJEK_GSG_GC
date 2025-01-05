<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Formulir Peminjaman GSG</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="templatemo_540_lava_landing_page/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="templatemo_540_lava_landing_page/assets/css/font-awesome.css">
    <link rel="stylesheet" href="templatemo_540_lava_landing_page/assets/css/templatemo-lava.css">
    <link rel="stylesheet" href="templatemo_540_lava_landing_page/assets/css/owl-carousel.css">
</head>

<body>
    <!-- Navbar -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- Logo -->
                        <p class="logo">
                            <img src="templatemo_540_lava_landing_page/assets/images/logosss.png" 
                            class="logo-img" width="70" height="70">
                            GSG
                        </p>
                        <!-- Menu -->
                        <ul class="nav">
                            <li><a href="/pengguna">Kembali</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Form Section -->
    <div class="container mt-5 pt-5">
        <h1 class="text-center text-primary mb-4">Formulir Peminjaman</h1>
        <div class="mb-4 text-center">
            <p class="text-muted">
                Harap isi formulir berikut dengan data yang valid. Data ini akan digunakan untuk proses peminjaman Gedung Serba Guna (GSG).
                Pastikan semua informasi diisi dengan benar untuk menghindari kendala dalam pemrosesan.
            </p>
        </div>
        <div class="card p-4">
            <div class="row">
                <div class="col-md-8">
                    <form>
                        <div class="mb-3">
                            <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="namaLengkap" placeholder="Nama yang bertanggung jawab atas peminjaman GSG">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Kami akan mengirimkan detail pemesanan ke email ini">
                        </div>
                        <div class="mb-3">
                            <label for="nomorHandphone" class="form-label">Nomor Handphone</label>
                            <input type="tel" class="form-control" id="nomorHandphone" placeholder="Nomor yang dapat kami hubungi">
                        </div>
                        <div class="mb-3">
                            <label for="tanggalPeminjaman" class="form-label">Tanggal Peminjaman</label>
                            <input type="date" class="form-control" id="tanggalPeminjaman">
                        </div>
                        <div class="mb-3">
                            <label for="rentangWaktu" class="form-label">Rentang Waktu</label>
                            <select class="form-select" id="rentangWaktu">
                                <option selected>Pilih Opsi</option>
                                <option value="1">1 hari</option>
                                <option value="2">2 hari</option>
                                <option value="3">3 hari</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tujuanPeminjaman" class="form-label">Tujuan Peminjaman</label>
                            <input type="text" class="form-control" id="tujuanPeminjaman" placeholder="Tujuan anda untuk meminjam GSG">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="3" placeholder="Pesan yang ingin anda sampaikan kepada kami."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Kirim</button>
                    </form>
                </div>
                <div class="col-md-4">
                    <img src="layout/src/assets/images/products/gsg1.jpg" alt="GSG" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="templatemo_540_lava_landing_page/assets/js/jquery-2.1.0.min.js"></script>
    <script src="templatemo_540_lava_landing_page/assets/js/popper.js"></script>
    <script src="templatemo_540_lava_landing_page/assets/js/bootstrap.min.js"></script>
    <script src="templatemo_540_lava_landing_page/assets/js/owl-carousel.js"></script>
    <script src="templatemo_540_lava_landing_page/assets/js/scrollreveal.min.js"></script>
    <script src="templatemo_540_lava_landing_page/assets/js/waypoints.min.js"></script>
    <script src="templatemo_540_lava_landing_page/assets/js/jquery.counterup.min.js"></script>
    <script src="templatemo_540_lava_landing_page/assets/js/imgfix.min.js"></script>
    <script src="templatemo_540_lava_landing_page/assets/js/custom.js"></script>
</body>

</html>
