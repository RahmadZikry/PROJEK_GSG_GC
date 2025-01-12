<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Politeknik Caltex Riau">
    <title>Profil Pengguna</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
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

        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
        }

        h1 {
            color: #16a085;
            font-size: 2rem;
            margin-bottom: 15px;
        }

        .profile-container {
            margin: auto;
            text-align: center;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 30px 20px;
            width: 90%;
            max-width: 500px;
        }

        .profile-container img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #16a085;
        }

        .profile-container h1 {
            font-size: 24px;
            margin: 20px 0 5px;
        }

        .profile-container h2 {
            font-size: 18px;
            color: #888;
            margin: 0 0 15px;
        }

        .profile-container .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin: 15px 0;
        }

        .profile-container .social-icons a {
            text-decoration: none;
            color: #555;
            font-size: 18px;
            transition: color 0.3s;
        }

        .profile-container .social-icons a:hover {
            color: #16a085;
        }

        .profile-container p {
            font-size: 14px;
            color: #666;
            line-height: 1.6;
        }

        .info-list {
            text-align: left;
            margin: 20px auto;
            padding: 0;
            list-style: none;
            width: 80%;
            color: #333;
            font-size: 16px;
        }

        .info-list li {
            padding: 8px 0;
            border-bottom: 1px solid #ddd;
        }

        .info-list li span {
            font-weight: bold;
            color: #16a085;
        }

        .btn-edit {
            background-color: #16a085;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 15px;
        }

        .btn-edit:hover {
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
                <span style="color: rgb(5, 5, 7); font-weight: 600;">Profil User</span>
            </a>

            <a class="nav-link" href="/pengguna">Kembali</a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Profil Container -->
    <div class="profile-container">
        <img src="https://i.pinimg.com/736x/ea/56/af/ea56af3c45db2a9bea14bf9cec3a01ff.jpg" alt="Profile Picture">
        <h1> @if (Auth::check())
            {{ Auth::user()->name }} <!-- Menampilkan nama pengguna yang login -->
        @else
            user
        @endif</h1>
        <h2>Pengguna</h2>

        <ul class="info-list">
            <li><span>Nama:</span> {{ Auth::user()->name }}</li>
            <li><span>Email:</span> {{ Auth::user()->email }}</li>
        </ul>
    </div>
</body>

</html>
