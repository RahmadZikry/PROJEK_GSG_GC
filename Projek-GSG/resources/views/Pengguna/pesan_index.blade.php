<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Politeknik Caltex Riau">
    <title>Pesan Admin - GSG</title>

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
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
            background: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            color: #16a085;
            text-align: center;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #16a085;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .btn-detail {
            background-color: #16a085;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-detail:hover {
            background-color: #13876a;
        }
    </style>
</head>

<body>
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

    <!-- Pesan Admin Section -->
    <div class="container">
        <h1>Pesan dari Admin</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Isi Pesan</th>
                    <th>Tanggal</th>
                    {{-- <th>Aksi</th> --}}
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Pengingat Peminjaman</td>
                    <td>Peminjaman GSG Anda dijadwalkan pada 5 Januari 2025.</td>
                    <td>2025-01-04</td>
                    {{-- <td><button class="btn-detail">Detail</button></td> --}}
                </tr>
                <tr>
                    <td>2</td>
                    <td>Konfirmasi Pembayaran</td>
                    <td>Pembayaran untuk peminjaman GSG telah berhasil diproses.</td>
                    <td>2025-01-03</td>
                    {{-- <td><button class="btn-detail">Detail</button></td> --}}
                </tr>
                <tr>
                    <td>3</td>
                    <td>Perubahan Jadwal</td>
                    <td>Jadwal peminjaman GSG Anda telah diubah sesuai permintaan.</td>
                    <td>2025-01-02</td>
                    {{-- <td><button class="btn-detail">Detail</button></td> --}}
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
