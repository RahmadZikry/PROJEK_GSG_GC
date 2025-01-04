<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Formulir Peminjaman</h1>
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
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="setuju">
                            <label class="form-check-label" for="setuju">Ceklis untuk menyetujui peminjaman GSG</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Kirim</button>
                    </form>
                </div>
                <div class="col-md-4">
                    <img src="layout\src\assets\images\products\gsg1.jpg" alt="GSG" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
