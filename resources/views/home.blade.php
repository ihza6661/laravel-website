<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halodoc Landing Page</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    @extends('main')
    @section('container')
    <!-- Header Section -->
    <header class="header">
        <div class="container">
            <h1>Solusi Kesehatan Terlengkap</h1>
            <p class="p1">Chat dokter, kunjungi rumah sakit, beli obat, cek lab dan update informasi seputar kesehatan,
                semua bisa
                di Halodoc!</p>
            <div class="services-icons">
                <div class="service-icon">
                    <img src="logo/chat-doctor-v2.webp" alt="Chat dengan Dokter">
                    <p>Chat dengan Dokter</p>
                </div>
                <div class="service-icon">
                    <img src="logo/health-store-v2.webp" alt="Toko Kesehatan">
                    <p>Toko Kesehatan</p>
                </div>
                <div class="service-icon">
                    <img src="logo/homelab.webp" alt="Home Lab & Vaksinasi">
                    <p>Vaksinasi</p>
                </div>
                <div class="service-icon">
                    <img src="logo/haloskin.webp" alt="Haloskin">
                    <p>Haloskin</p>
                </div>
                <div class="service-icon">
                    <img src="logo/visit-hospital-v2.webp" alt="Buat Janji RS">
                    <p>Buat Janji RS</p>
                </div>
            </div>

            <div class="insurance-box">
                <div class="icon">
                    <img src="logo/hand.png" alt="Insurance Icon">
                </div>
                <div class="content">
                    <h3>Sambungkan Asuransimu</h3>
                    <p>Dapatkan manfaat asuransi secara langsung untuk layanan Halodoc.</p>
                </div>
                <div class="arrow">
                    <span>&#8250;</span>
                </div>
            </div>
        </div>
    </header>

    <!-- Layanan Khusus Section -->
    <section class="layanan-khusus">
        <div class="container">
            <h2>Layanan Khusus</h2>
            <div class="layanan-items-container">
                <div class="layanan-items">
                    <div class="layanan-item">
                        <img src="logo/layanan bidan.webp" alt="">
                        <p>Layanan Bidan</p>
                    </div>
                    <div class="layanan-item">
                        <img src="logo/diabetes-care.webp" alt="">
                        <p>Perawatan Diabetes</p>
                    </div>
                    <div class="layanan-item">
                        <img src="logo/heart-care.webp" alt="">
                        <p>Kesehatan Jantung</p>
                    </div>
                    <div class="layanan-item">
                        <img src="logo/skin-health.webp" alt="">
                        <p>Kesehatan Kulit</p>
                    </div>
                    <div class="layanan-item">
                        <img src="logo/sexual-health.webp" alt="">
                        <p>Kesehatan Seksual</p>
                    </div>
                    <div class="layanan-item">
                        <img src="logo/mental-health-v2.webp" alt="">
                        <p>Kesehatan Mental</p>
                    </div>
                    <div class="layanan-item">
                        <img src="logo/animal-health-v2.webp" alt="">
                        <p>Kesehatan Hewan</p>
                    </div>
                    <div class="layanan-item">
                        <img src="logo/parenting.webp" alt="">
                        <p>Parenting</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- </section> -->

        <!-- penunjang kesehatan  -->

        <!-- <section class="layanan-khusus"> -->
        <div class="container">
            <h2>Penunjang Kesehatan</h2>
            <div class="layanan-items-container">
                <div class="layanan-items">
                    <div class="layanan-item">
                        <img src="logo/stress-check-icon.webp" alt="">
                        <p>Cek Stress</p>
                    </div>
                    <div class="layanan-item">
                        <img src="logo/period-tracker-v2.webp" alt="">
                        <p>Kalender Menstruasi</p>
                    </div>
                    <div class="layanan-item">
                        <img src="logo/bmi-calculator-v2.webp" alt="">
                        <p>Kalkulator BMI</p>
                    </div>
                    <div class="layanan-item">
                        <img src="logo/pregnancy-v2.webp" alt="">
                        <p>Kalender Kehamilan</p>
                    </div>
                    <div class="layanan-item">
                        <img src="logo/diabetes-care.webp" alt="">
                        <p>Resiko Diabetes</p>
                    </div>
                    <div class="layanan-item">
                        <img src="logo/medicine-reminder-v2.webp" alt="">
                        <p>Pengingat Obat</p>
                    </div>
                    <div class="layanan-item">
                        <img src="logo/donation.webp" alt="">
                        <p>Donasi</p>
                    </div>
                    <div class="layanan-item">
                        <img src="logo/stress-check-icon.webp" alt="">
                        <p>Tes Depresi</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Penawaran Menarik Section -->
    <div class="container">
        <h2 class="penawaran-menarik-h2">Penawaran Menarik</h2>
    </div>
    <section class="penawaran-menarik">

        <div class="container-image">
            <button class="carousel-button prev">&#10094;</button>
            <div class="carousel-images">
                <img src="logo/card1.webp" alt="">
                <img src="logo/card2.webp" alt="">
                <img src="logo/card1.webp" alt="">
                <img src="logo/card2.webp" alt="">
                <img src="logo/card1.webp" alt="">
                <img src="logo/card2.webp" alt="">
            </div>
            <button class="carousel-button next">&#10095;</button>
        </div>
    </section>

    <!-- Artikel Baru Section -->
    <section class="artikel-baru">
        <div class="container">
            <h2>Baca 100+ Artikel Baru</h2>
            <div class="artikel-cards">
                <div class="artikel-card">
                    <img src="logo/card1.webp" alt="Article 1">
                    <h3>Ini 7 Penyebab Bercak Darah Saat Tidak Menstruasi</h3>
                </div>
                <div class="artikel-card">
                    <img src="logo/card2.webp" alt="Article 2">
                    <h3>Ketahui 5 Penyebab Sakit Perut Setelah Intim</h3>
                </div>
                <div class="artikel-card">
                    <img src="logo/card1.webp" alt="Article 2">
                    <h3>Ini 7 Penyebab Bercak Darah Saat Tidak Menstruasi</h3>
                </div>
                <div class="artikel-card">
                    <img src="logo/card2.webp" alt="Article 2">
                    <h3>Ketahui 5 Penyebab Sakit Perut Setelah Intim</h3>
                </div>
            </div>
        </div>
    </section>
    @endsection
    <script src="script.js"></script>
</body>

</html>