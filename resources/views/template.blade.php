<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portfolio | Muhammad Sahril - 5026231220</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa; /* Warna latar belakang yang lembut */
        }

        .navbar {
            padding: 1rem 1.5rem;
            transition: all 0.3s ease-in-out;
        }
        
        .navbar-brand {
            font-weight: 600;
            font-size: 1.25rem;
        }

        .navbar-brand .nrp {
            font-size: 0.8rem;
            font-weight: 400;
            color: #d4d4d4;
        }

        .nav-link {
            font-weight: 500;
            color: #ffffff !important;
            margin: 0 0.5rem;
            transition: all 0.2s ease;
        }

        .nav-link:hover {
            transform: translateY(-2px);
            color: #c1eaff !important;
        }

        .nav-link i {
            margin-right: 8px; /* Jarak antara ikon dan teks */
        }
        
        .content-wrapper {
            background-color: #ffffff;
            padding: 2.5rem;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            margin-top: -50px; /* Konten sedikit menjorok ke atas header */
            position: relative;
            z-index: 10;
        }

        .page-header {
            background: linear-gradient(90deg, #007bff, #0056b3);
            color: white;
            padding: 4rem 2rem;
            border-radius: 0 0 30% 30% / 0 0 20% 20%;
        }

        .footer {
            background-color: #343a40;
            color: #adb5bd;
            padding: 1.5rem 0;
            font-size: 0.9rem;
        }

        .header-link {
            color: #FFFFFF; /* Mengatur warna teks menjadi PUTIH secara paksa */
            text-decoration: none; /* Menghapus garis bawah pada link */
            transition: color 0.3s ease, transform 0.3s ease; /* Efek transisi halus */
            display: inline-block; /* Diperlukan untuk efek transform */
        }

        .header-link:hover {
            color: #e0e0e0; /* Warna berubah menjadi putih-abu saat di-hover (feedback visual) */
            text-decoration: none; /* Memastikan tidak ada garis bawah saat hover */
            transform: translateY(-2px); /* Memberi efek sedikit terangkat */
        }

    </style>
</head>

<body>
    <header class="page-header text-center">
        <a href="/" class="header-link">
            <h1>Muhammad Sahril</h1>
            <p class="lead">5026231220</p>
        </a>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-project-diagram"></i>All Front End</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pegawai"><i class="fas fa-users"></i>Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/bukutulis"><i class="fas fa-book"></i>Tugas CRUD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-file-alt"></i>EAS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="latihanDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-dumbbell"></i>Latihan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="latihanDropdown">
                            <a class="dropdown-item" href="#">Latihan 1</a>
                            <a class="dropdown-item" href="#">Latihan 2</a>
                            <a class="dropdown-item" href="#">Latihan 3</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <main class="container my-5">
        <div class="content-wrapper">
            @yield('content')
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>