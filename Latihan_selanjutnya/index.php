<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | Yohanes Diosepta Ardana</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link rel="stylesheet" href="bootstrap-5.3.8-dist/css/Latihan Bootstrap.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center animate__animated animate__fadeInDown" href="#">
                <div class="logo-circle">
                    <img src="logo saya.jpg" alt="Logo" class="img-fluid logo-img">
                </div>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#proyek">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="home" class="hero-section d-flex align-items-center justify-content-center text-white text-center">
        <div class="container px-4">
            <h1 class="display-3 fw-bold font-playfair animate__animated animate__fadeInDown">Mewujudkan Ide Inovatif dalam Bentuk Teknologi.</h1>
            <p class="lead mt-4 animate__animated animate__fadeInUp">
                Saya Yohanes Diosepta Ardana, seorang mahasiswa Teknik Mekatronika yang bersemangat dalam robotika, sistem otomasi, dan menciptakan solusi cerdas dari nol.
            </p>
            <a href="#services" class="btn btn-lg btn-light-outline mt-5 animate__animated animate__zoomIn">Jelajahi Keahlian Saya <i class="bi bi-arrow-down-circle-fill ms-2"></i></a>
        </div>
    </header>

    <section id="services" class="py-5">
        <div class="container">
            <div class="d-flex justify-content-center mb-5 animate__animated animate__fadeInUp">
                <div class="section-badge">Skills</div>
            </div>
            <h2 class="section-title text-center mb-5 font-playfair animate__animated animate__fadeIn">Apa yang Saya Kuasai</h2>
            
            <?php
            // Buat koneksi ke database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "yohanes dio";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Cek koneksi
            if ($conn->connect_error) {
                die("Koneksi gagal: " . $conn->connect_error);
            }

            // Ambil data dari tabel skills
            $sql = "SELECT judul, deskripsi FROM skills";
            $result = $conn->query($sql);
            ?>

            <div class="row g-4 justify-content-center">
                <?php
                if ($result->num_rows > 0) {
                    $animation_delay = 0;
                    // Output data dari setiap baris
                    while($row = $result->fetch_assoc()) {
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card shadow-sm p-4 text-center h-100 animate__animated animate__fadeInUp animate__delay-<?php echo $animation_delay; ?>s">
                        <h4 class="fw-bold"><?php echo $row["judul"]; ?></h4>
                        <p class="text-muted"><?php echo $row["deskripsi"]; ?></p>
                    </div>
                </div>
                <?php
                        $animation_delay += 1;
                    }
                } else {
                    echo "<p class='text-center'>Data skills tidak ditemukan.</p>";
                }
                // Tutup koneksi
                $conn->close();
                ?>
            </div>
        </div>
    </section>

    <section id="proyek" class="py-5 bg-light-section">
        <div class="container">
            <div class="d-flex justify-content-center mb-5 animate__animated animate__fadeInUp">
                <div class="section-badge">Portfolio</div>
            </div>
            <h2 class="section-title text-center mb-5 font-playfair animate__animated animate__fadeIn">Proyek Akademis & Pribadi</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <a href="#" class="project-card d-block text-decoration-none rounded overflow-hidden shadow-sm animate__animated animate__zoomIn">
                        <img src="logo mekanika.jfif" class="img-fluid w-100 object-fit-cover" alt="Engrave dengan Mesin Staubli">
                        <div class="project-overlay d-flex flex-column align-items-center justify-content-center text-white text-center p-3">
                            <h5 class="fw-bold">Pembuatan Engrave dengan Mesin Staubli</h5>
                            <p class="small text-muted mb-0">Robotika Industri & Manufaktur</p>
                            <i class="bi bi-link-45deg fs-2 mt-2"></i>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="#" class="project-card d-block text-decoration-none rounded overflow-hidden shadow-sm animate__animated animate__zoomIn animate__delay-1s">
                        <img src="logo elektronika.jfif" class="img-fluid w-100 object-fit-cover" alt="Pengukuran Daya Listrik">
                        <div class="project-overlay d-flex flex-column align-items-center justify-content-center text-white text-center p-3">
                            <h5 class="fw-bold">Pengukuran Daya Listrik Berbasis IoT & Motor 1 Phase</h5>
                            <p class="small text-muted mb-0">Internet of Things & Monitoring</p>
                            <i class="bi bi-link-45deg fs-2 mt-2"></i>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="#" class="project-card d-block text-decoration-none rounded overflow-hidden shadow-sm animate__animated animate__zoomIn animate__delay-2s">
                        <img src="logo informatika.jfif" class="img-fluid w-100 object-fit-cover" alt="Smart Home">
                        <div class="project-overlay d-flex flex-column align-items-center justify-content-center text-white text-center p-3">
                            <h5 class="fw-bold">Sistem Smart Home Berbasis IoT</h5>
                            <p class="small text-muted mb-0">Sistem Otomasi & Kontrol Jarak Jauh</p>
                            <i class="bi bi-link-45deg fs-2 mt-2"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-5">
        <div class="container">
            <div class="d-flex justify-content-center mb-5 animate__animated animate__fadeInUp">
                <div class="section-badge">About</div>
            </div>
            <h2 class="section-title text-center mb-5 font-playfair animate__animated animate__fadeIn">Filosofi Inovasi Saya</h2>
            <div class="row g-4 align-items-center">
                <div class="col-lg-12 animate__animated animate__fadeInLeft">
                    <p class="lead text-justify">
                        Filosofi saya adalah inovasi yang lahir dari perpaduan presisi mekanik, kecerdasan elektronik, dan efisiensi kode. Setiap proyek adalah kesempatan untuk memecahkan masalah yang kompleks dan menciptakan sistem yang tidak hanya berfungsi, tetapi juga cerdas dan andal.
                    </p>
                    <p class="text-justify mt-4">
                        Halo! Saya Yohanes Diosepta Ardana. Saat ini saya adalah mahasiswa tingkat tiga di Jurusan Teknik Mekatronika Politeknik Surakarta. Spesialisasi saya mencakup otomasi industri, IoT, dan sistem kontrol cerdas, yang selalu menjadi fokus minat saya. Kurikulum perkuliahan telah membekali saya dengan kompetensi teknis yang solid: pemrograman dalam C/C++ dan Python, perancangan rangkaian elektronika, serta keahlian dalam mikrokontroler seperti Arduino dan desain 3D menggunakan AutoCAD. Pengalaman di organisasi kampus turut membentuk saya menjadi individu yang cakap dalam komunikasi, teamwork, dan problem-solving. Saya telah mengaplikasikan pengetahuan ini dalam berbagai proyek, termasuk pengembangan sistem kontrol Arduino, perancangan inverter, dan pembuatan aplikasi web. Saya siap berdedikasi untuk terus belajar, berinovasi, dan berkontribusi sebagai engineer mekatronika yang profesional.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-lg-8">
                    <canvas id="skillChart"></canvas>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5">
        <div class="container">
            <div class="d-flex justify-content-center mb-5 animate__animated animate__fadeInUp">
                <div class="section-badge">Contact</div>
            </div>
            <h2 class="section-title text-center mb-5 font-playfair animate__animated animate__fadeIn">Hubungi Saya untuk Proyek Anda</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form class="p-5 rounded shadow-lg animate__animated animate__fadeInUp" action="process_contact_data.php" method="post" enctype="application/x-www-form-urlencoded">
                        <h4 class="mb-4 text-center fw-bold text-primary">Kirim Pesan</h4>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <input type="text" class="form-control form-control-lg" name="nama" id="nama" placeholder="Nama Lengkap">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Alamat Email">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" rows="5" name="pesan" id="pesan" placeholder="Ceritakan ide proyek atau kesempatan kolaborasi di sini..."></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-lg btn-primary-send mt-3">Kirim Pesan <i class="bi bi-send-fill ms-2"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-white text-center py-4">
        <div class="container">
            <p class="mb-0">
                <i class="bi bi-robot me-2"></i>
                Yohanes Diosepta Ardana
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="bootstrap-5.3.8-dist/js/Script.js"></script>
</body>
</html>