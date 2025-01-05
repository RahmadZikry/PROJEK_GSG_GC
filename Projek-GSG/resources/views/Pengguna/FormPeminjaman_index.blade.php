<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Politeknik Caltex Riau">
    <title>Formulir Peminjaman GSG</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #2c3e50;
            padding: 10px 15px;
        }

        .navbar-brand {
            color: #fff;
            font-weight: 600;
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            margin-right: 10px;
            width: 50px;
            height: 50px;
        }

        .nav-link {
            color: blue !important;
            font-weight: 500;
            text-decoration: none;
        }

        .nav-link:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1, h2 {
            color: #16a085;
        }

        h1 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 10px;
        }

        h2 {
            font-size: 1.5rem;
            margin-top: 20px;
        }

        ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        li {
            margin-bottom: 10px;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9rem;
            color: #777;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #16a085;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            text-align: center;
            font-size: 1rem;
        }

        .btn:hover {
            background-color: #13876a;
        }
    </style>
</head>

<body>
    @if(session('pesan'))
    <div class="alert alert-success">
        {{ session('pesan') }}
    </div>
@endif
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container d-flex justify-content-between">
            <a class="navbar-brand" href="#">
                <img src="templatemo_540_lava_landing_page/assets/images/logosss.png" alt="Logo">
                <span style="color: rgb(5, 5, 7); font-weight: 600;">GSG</span>
            </a>
            
            <a class="nav-link" href="/pengguna">Kembali</a>
        </div>
    </nav>

    <!-- Form Section -->
    <div class="container">
        <h1>Formulir Peminjaman</h1>
        <p class="text-muted text-center">
            Harap isi formulir berikut dengan data yang valid. Pastikan semua informasi benar untuk menghindari kendala.
        </p>
        <div class="card">
            <div class="row">
                <div class="col-md-8">
                    <form action="/peminjamanForm" method="POST" enctype="multipart/form-data">
                        <!-- Tambahkan CSRF Token -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
                        {{-- <div class="mb-3">
                            <label for="peminjamanId" class="form-label">ID Peminjaman</label>
                            <input type="text" name="peminjaman_id" class="form-control" id="peminjamanId" placeholder="Masukkan ID peminjaman" required>
                        </div>
    
                        <div class="mb-3">
                            <label for="userId" class="form-label">ID User</label>
                            <input type="text" name="user_id" class="form-control" id="userId" placeholder="Masukkan ID user" required>
                        </div> --}}
    
                        <div class="mb-3">
                            <label for="tanggalPeminjaman" class="form-label">Tanggal Peminjaman</label>
                            <input type="date" name="tanggal_peminjaman" class="form-control" id="tanggalPeminjaman" required>
                        </div>
    
                        <div class="mb-3">
                            <label for="tanggalPengembalian" class="form-label">Tanggal Pengembalian</label>
                            <input type="date" name="tanggal_pengembalian" class="form-control" id="tanggalPengembalian" required>
                        </div>
    
                        <div class="mb-3">
                            <label for="metodePembayaran" class="form-label">Metode Pembayaran</label>
                            <select name="metode_pembayaran" class="form-select" id="metodePembayaran" required>
                                <option selected disabled>Pilih Metode Pembayaran</option>
                                <option value="Tunai">Tunai</option>
                                <option value="Non_Tunai">Non Tunai</option>
                            </select>
                        </div>
    
                        <div class="mb-3">
                            <label for="buktiPembayaran" class="form-label">Bukti Pembayaran</label>
                            <input type="file" name="bukti_pembayaran" class="form-control" id="buktiPembayaran" accept="image/jpeg,image/png,image/jpg" required>
                        </div>
    
                        {{-- <div class="mb-3">
                            <label for="statusPembayaran" class="form-label">Status Pembayaran</label>
                            <select name="status_pembayaran" class="form-select" id="statusPembayaran" required>
                                <option selected disabled>Pilih Status Pembayaran</option>
                                <option value="Sukses">Sukses</option>
                                <option value="Gagal">Gagal</option>
                                <option value="Menunggu">Menunggu</option>
                            </select>
                        </div> --}}
    
                        {{-- <div class="mb-3">
                            <label for="statusVerifikasi" class="form-label">Status Verifikasi</label>
                            <select name="status_verifikasi" class="form-select" id="statusVerifikasi" required>
                                <option selected disabled>Pilih Status Verifikasi</option>
                                <option value="Tertunda">Tertunda</option>
                                <option value="Disetujui">Disetujui</option>
                                <option value="Ditolak">Ditolak</option>
                            </select>
                        </div> --}}
    
                        <div class="mb-3">
                            <label for="tujuanPeminjaman" class="form-label">Tujuan Peminjaman</label>
                            <input type="text" name="tujuan_peminjaman" class="form-control" id="tujuanPeminjaman" placeholder="Tujuan meminjam GSG" required>
                        </div>
    
                        <div class="mb-3">
                            <label for="nomorHp" class="form-label">Nomor HP</label>
                            <input type="tel" name="nomor_hp" class="form-control" id="nomorHp" placeholder="Nomor yang dapat dihubungi" required>
                        </div>
    
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea name="pesan" class="form-control" id="pesan" rows="3" placeholder="Pesan yang ingin disampaikan" required></textarea>
                        </div>
    
                        <button type="submit" class="btn btn-primary w-100">Kirim</button>
                    </form>
                </div>
                <div class="col-md-4 text-center">
                    <img src="layout/src/assets/images/products/gsg1.jpg" alt="GSG" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    

    <!-- Scripts -->
    <script src="templatemo_540_lava_landing_page/assets/js/jquery-2.1.0.min.js"></script>
    <script src="templatemo_540_lava_landing_page/assets/js/popper.js"></script>
    <script src="templatemo_540_lava_landing_page/assets/js/bootstrap.min.js"></script>
</body>

</html>
