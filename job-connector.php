<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Job Connector</title>
    <link rel="stylesheet" href="job-conector.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="./img/logo.png" alt="Belajar Bekerja">
            </div>
            <nav>
                <ul>
                    <li><a href="#program">Program</a></li>
                    <li><a href="#biaya">Biaya</a></li>
                    <li><a href="#komunitas">Komunitas</a></li>
                    <li><a href="#faqs">FAQs</a></li>
                    <li><a href="#tentang">Tentang</a></li>
                </ul>
                <?php 
                if(isset($_SESSION['username'])){
                ?>
                <div class="auth-buttons">
                    <form action="" method="post">
                        <button class="login" href="login.html" name="logout" id="logout">logout</button>
                    </form>
                    <a class="register" href="#">Halo <?php echo "$_SESSION[username]"?></a>
                </div>
                <?php
                }else{
                    ?>
                    <div class="auth-buttons">
                    <a class="login" href="login.html">Login</a>
                    <a class="register" href="register.html">Daftar Akun</a>
                </div>
                <?php } ?>
            </nav>
        </div>
    </header>
    <main>
        <div class="hero-wrapper">
            <div class="hero">
                <div class="hero-text">
                    <h1>Program Job Connector</h1>
                    <p>Job Connector merupakan program pelatihan terbaru yang dihadirkan oleh Belajar Bekerja dari Luarsekolah  untuk  mempersiapkan individu menjadi lebih siap secara profesional agar bisa mendapatkan pekerjaan yang tepat sesuai dengan okupasi yang dipilih. Program ini berjalan selama 6 bulan lebih.</p>
                    <div class="button-hero">
                        <i class="material-icons">arrow_downward</i>
                        <a href="#program" class="">Pilih Program</a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="./img/hero-img-jobconnector.png" alt="Career Building">
                </div>
            </div>
        </div>
        <!-- <section class="pilihan-program">
            <h2>Ikuti program yang sesuai denganmu</h2>
            <p>Rasakan pengalaman bekerja di dunia industri dan dapatkan kesempatan disalurkan ke company partner</p>
            <div class="program-list">
                <div class="program-card">
                    <img src="img/Rectangle 18866.png" alt="Video Editor">
                    <div class="program-info">
                        <span class="badge">Job Connector</span>
                        <h3>Video Editor</h3>
                        <p>Program pilihan untuk menjadi seorang video editor dalam kurun waktu 6 bulan.</p>
                    </div>
                </div>
                <div class="program-card">
                    <img src="img/Rectangle 18867.png" alt="UI/UX Designer">
                    <div class="program-info">
                        <span class="badge">Job Connector</span>
                        <h3>UI/UX Designer</h3>
                        <p>Program pilihan untuk menjadi seorang UI/UX designer dalam kurun waktu 6 bulan.</p>
                    </div>
                </div>
                <div class="program-card">
                    <img src="img/Rectangle 18868.png" alt="Graphic Designer">
                    <div class="program-info">
                        <span class="badge">Job Connector</span>
                        <h3>Graphic Designer</h3>
                        <p>Program pilihan untuk menjadi seorang graphic designer dalam kurun waktu 6 bulan.</p>
                    </div>
                </div>
                <div class="program-card">
                    <img src="img/Rectangle 18869.png" alt="WebDev Specialist">
                    <div class="program-info">
                        <span class="badge">Job Connector</span>
                        <h3>WebDev Specialist</h3>
                        <p>Program pilihan untuk menjadi seorang web developer dalam kurun waktu 6 bulan.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="benefit">
            <div class="benefit-header">
                <img src="benefit-icon.png" alt="Benefit Icon" class="benefit-icon">
                <h2>Benefit</h2>
                <p>Tidak hanya satu, tapi banyak manfaat yang akan kamu dapatkan</p>
                <p class="description">Kamu akan mendapatkan berbagai benefit yang bermanfaat dengan mengikuti program Belajar Bekerja.</p>
            </div>
            <div class="benefit-grid">
                <div class="benefit-card highlight">
                    <h3>Real case industry</h3>
                    <p>Dapatkan pengalaman mengerjakan kasus-kasus yang terjadi di industri.</p>
                </div>
                <div class="benefit-card">
                    <h3>Didampingi oleh praktisi</h3>
                    <p>Bimbingan dari praktisi perusahaan agar kasus yang diselesaikan sesuai.</p>
                </div>
                <div class="benefit-card">
                    <h3>Kelas dan materi gratis</h3>
                    <p>Kamu bisa mendapatkan materi berbentuk e-book gratis sesuai program yang kamu ambil.</p>
                </div>
                <div class="benefit-card">
                    <h3>Project portofolio</h3>
                    <p>Bangun portofolio dengan kasus industri yang akan kamu selesaikan di program ini.</p>
                </div>
                <div class="benefit-card">
                    <h3>Sertifikat dan performance report</h3>
                    <p>Bangun portofolio dengan kasus-kasus industri yang akan kamu selesaikan dan dapatkan insight langsung dari mentormu terkait hasil kerjamu.</p>
                </div>
                <div class="benefit-card">
                    <h3>Kurikulum standar industri</h3>
                    <p>Kamu akan mempelajari berbagai modul berdasarkan dengan future skill yang dibutuhkan industri saat ini.</p>
                </div>
                <div class="benefit-card">
                    <h3>Intensive career class</h3>
                    <p>Setiap minggunya akan mendapatkan kelas yang menunjang persiapan karir.</p>
                </div>
                <div class="benefit-card">
                    <h3>Pencarian kerja</h3>
                    <p>Kamu diberikan bimbingan untuk persiapan dokumen yang sesuai kebutuhan perusahaan.</p>
                </div>
                <div class="benefit-card">
                    <h3>Intensive career support</h3>
                    <p>Kamu bisa mendapatkan akses untuk melakukan diskusi dengan mentor terkait persiapan karir.</p>
                </div>
                <div class="benefit-card">
                    <h3>Community</h3>
                    <p>Akses dan gabung kedalam komunitas untuk mendapatkan informasi dan manfaat yang bermanfaat.</p>
                </div>
            </div>
        </section> -->
        <div class="content-section">
            <div class="program-section">
                <img src="/img/Asset_Fast_jobconnector_pilihanprogram.png" alt="">
                <span>Pilihan program</span>
                <h2>Ikuti program yang sesuai denganmu</h2>
                <p>Rasakan pengalaman bekerja di dunia industri dan dapatkan kesempatan disalurkan ke company partner</p>
                <div class="program-grid">
                    <!-- <div class="program-content">
                        <img src="./img/Rectangle 18866.png" alt="">
                        <div class="program-content-text">
                            <span>Job Connector</span>
                            <div class="program-title">
                                <i class="material-icons">movie</i>
                                <p>Video Editor</p>
                            </div>
                            <p>Program pilihan untuk menjadi seorang video editor dalam kurun waktu 6 bulan.</p>
                        </div>
                    </div>
                    <div class="program-content">
                        <img src="img/Rectangle 18867.png" alt="">
                        <div class="program-content-text">
                            <span>Job Connector</span>
                            <div class="program-title">
                                <i class="material-icons">architecture</i>
                                <p>UIUX Designer</p>
                            </div>
                            <p>Program pilihan untuk menjadi seorang video editor dalam kurun waktu 6 bulan.</p>
                        </div>
                    </div>
                    <div class="program-content">
                        <img src="img/Rectangle 18868.png" alt="">
                        <div class="program-content-text">
                            <span>Job Connector</span>
                            <div class="program-title">
                                <i class="material-icons">brush</i>
                                <p>Graphic Designer</p>
                            </div>
                            <p>Program pilihan untuk menjadi seorang video editor dalam kurun waktu 6 bulan.</p>
                        </div>
                    </div>
                    <div class="program-content">
                        <img src="img/Rectangle 18869.png" alt="">
                        <div class="program-content-text">
                            <span>Job Connector</span>
                            <div class="program-title">
                                <i class="material-icons">code</i>
                                <p>WebDev Specialist</p>
                            </div>
                            <p>Program pilihan untuk menjadi seorang video editor dalam kurun waktu 6 bulan.</p>
                        </div>
                    </div> -->
                <?php include'php/r_programs.php' ?>
                </div>
                
            </div>
            <div class="benefit-section">
                <img src="/img/Asset_Fast_jobconnector.png" alt="">
                <span>Benefit</span>
                <h2>Tidak hanya satu,tapi banyak manfaat yang akan kamu dapatkan</h2>
                <p>Kamu akan mendapatkan berbagai benefit yang bermanfaat dengan mengikuti program Belajar Bekerja</p>
                <div class="grid-content-4">
                    <div class="grid-item">
                        <i class="material-icons">business_center</i>
                        <p class="grid-item-title">Real case industry
                        </p>
                        <p class="grid-item-subtext">Dapatkan pengalaman menyelesaikan kasus-kasus yang terjadi di Industri.</p>
                    </div>
                    <div class="grid-item">
                        <i class="material-icons">connect_without_contact</i>
                        <p class="grid-item-title">Didampingi oleh praktisi
                        </p>
                        <p class="grid-item-subtext">Bimbingan dari praktisi perusahaan agar kasus yang diselesaikan sesuai.</p>
                    </div>
                    <div class="grid-item">
                        <i class="material-icons">subscriptions</i>
                        <p class="grid-item-title">Kelas dan materi gratis
                        </p>
                        <p class="grid-item-subtext">Kamu bisa mendapatkan materi berkualitas secara gratis sesuai program yang kamu ambil.</p>
                    </div>
                    <div class="grid-item">
                        <i class="material-icons">cases</i>
                        <p class="grid-item-title">Project portofolio
                        </p>
                        <p class="grid-item-subtext">Bangun portofolio dengan kasus nyata di industri yang akan kamu selesaikan di program ini.</p>
                    </div>
                </div>
                <div class="grid-content-2">
                    <div class="grid-item">
                        <i class="material-icons">business_center</i>
                        <p class="grid-item-title">Sertifikat dan performance report</p>
                        <p class="grid-item-subtext">Bangun portofolio dengan kasus - kasus industri yang akan kamu selesaikan dan dapatkan insight langsung dari mentormu terkait hasil kerjamu.</p>
                    </div>
                    <div class="grid-item">
                        <i class="material-icons">corporate_fare</i>
                        <p class="grid-item-title">Kurikulum standar industri</p>
                        <p class="grid-item-subtext">Kamu akan mempelajari berbagai modul bersadarkan dengan future skill yang dibutuhkan industri saat ini.</p>
                    </div>
                </div>
                <div class="grid-content-4">
                    <div class="grid-item">
                        <i class="material-icons">hotel_class</i>
                        <p class="grid-item-title">Intensive career class
                        </p>
                        <p class="grid-item-subtext">Setiap minggunya kamu akan mendapatkan kelas mengenai persiapan karir.</p>
                    </div>
                    <div class="grid-item">
                        <i class="material-icons">work</i>
                        <p class="grid-item-title">Pencarian kerja
                        </p>
                        <p class="grid-item-subtext">Dapatkan pengalaman menyelesaikan kasus-kasus yang terjadi di Industri.</p>
                    </div>
                    <div class="grid-item">
                        <i class="material-icons">support_agent</i>
                        <p class="grid-item-title">Intensive career support
                        </p>
                        <p class="grid-item-subtext">Kamu bisa mendapatkan akses untuk melakukan bimbingan mengenai karir.</p>
                    </div>
                    <div class="grid-item">
                        <i class="material-icons">groups</i>
                        <p class="grid-item-title">Community
                        </p>
                        <p class="grid-item-subtext">Akses dan gabung kedalam komunitas untuk mendapatkan info menarik dan bermanfaat.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="section-snk">
            <div class="snk-icon">
                <img src="img/snk-icon.png" alt="icon">
            </div>
            <p class="snk-title">Syarat dan Ketentuan</p>
            <div class="snk-wrap">
                <div class="snk-content">
                    <h2>Kami memiliki standar yang harus diperhatikan oleh para peserta agar prosesnya berjalan lancar</h2>
                        <li>
                            <i class="material-icons bluefill">flag</i>
                            peserta harus mengikuti program sampai akhir
                        </li>
                        <li>
                            <i class="material-icons bluefill">folder_off</i>
                            Apabila peserta tidak menyelesaikan project atau program magang sesuai waktu dan alurnya, peserta tidak akan mendapatkan sertifikat magang.
                        </li>
                        <li>
                            <i class="material-icons bluefill">disabled_visible</i>
                            Tidak menyebarluaskan dan menyalahgunakan data perusahaan
                        </li>
                        <li>
                            <i class="material-icons bluefill">do_not_touch</i>
                            Program yang sudah dibeli tidak dapat dikembalikan
                        </li>
                    <button>Pilih Program</button>
                </div>
                <img src="img/Screenshot 2024-05-16 135307.png" alt="" class="snk-img">
            </div>
        </div>

        <section id="faqs" class="faq-container">
            <h4 class="faq-title">FAQs</h4>
            <h2>Frequently asked questions</h2>
            <p class="faq-subtitle">Butuh bantuan? Coba cek terlebih dahulu pertanyaan yang sering ditanyakan berikut</p>
            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    Apa itu Belajar Bekerja?
                    <i class="material-icons">arrow_downward</i>
                </div>
                <div class="faq-answer">
                    Belajar Bekerja adalah program pelatihan yang dirancang untuk membantu Anda memperoleh keterampilan kerja.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    Kenapa harus Belajar Bekerja?
                    <i class="material-icons">arrow_downward</i>
                </div>
                <div class="faq-answer">
                    Program ini memberikan pelatihan praktis yang relevan dengan industri saat ini.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    Apakah programnya berbayar?
                    <i class="material-icons">arrow_downward</i>
                </div>
                <div class="faq-answer">
                    Ya, program ini berbayar dengan berbagai pilihan paket sesuai kebutuhan Anda.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    Bisakah melakukan refund jika sudah membeli programnya?
                    <i class="material-icons">arrow_downward</i>
                </div>
                <div class="faq-answer">
                    Ya, Anda dapat melakukan refund sesuai dengan kebijakan refund yang berlaku.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    Bisakah melakukan refund jika sudah membeli programnya?
                    <i class="material-icons">arrow_downward</i>
                </div>
                <div class="faq-answer">
                    Ya, Anda dapat melakukan refund sesuai dengan kebijakan refund yang berlaku.
                </div>
            </div>
            <script src="scroll.js"></script>
        </section>
        <footer>
            <div id="tentang" class="footer-container">
                <div class="footer-content">
                    <div class="footer-company">
                        <img src="img/icon-footer.png" alt="icon">
                        <strong>Headquarter</strong>
                        <p>Jl. Nama jalan, Blok nama blok, nomor bangunan dan sebagainya kode pos 00000</p>
                        <div class="footer-company-contact">
                            <div class="contact-img">
                                <img src="img/icon/wa.png" alt="">
                            </div>
                            <div class="contact-content">
                                <strong>Whatsapp</strong>
                                <p>+62 812 1234 567</p>
                            </div>
                        </div>
                        <div class="footer-company-contact">
                            <div class="contact-img">
                                <img src="img/icon/email.png" alt="">
                            </div>
                            <div class="contact-content">
                                <strong>Email</strong>
                                <p>cs@belajarbekerja.com</p>
                            </div>
                        </div>
                        <div>
                            <p>Jam pelayanan konsumen</p>
                            <p>(09:00 - 17.00 WIB)</p>
                        </div>
                    </div>
                    <div class="footer-produk">
                        <p class="footer-title">Produk</p>
                        <div class="footer-produk-content">
                            <p>Project Based Industry (PBI)</p>
                            <p>Job Connector</p>
                            <p>Aplikasi Segera!</p>
                        </div>
                    </div>
                    <div class="footer-about">
                        <p class="footer-title">Perusahaan</p>
                        <div class="footer-about-content">
                            <p>Tentang Kami</p>
                            <p>Newsroom</p>
                            <p>Visi Kami</p>
                            <p>Hubungi Kami</p>
                            <p>Pusat Bantuan</p>
                        </div>
                    </div>
                    <div class="footer-sumber-daya">
                        <p class="footer-title">Sumber Daya</p>
                        <div class="footer-sumber-daya-content">
                            <p>Kenapa Belajar Bekerja?</p>
                            <p>Update tentang program</p>
                            <p>Gabung Komunitas</p>
                            <p>Blog</p>
                        </div>
                    </div>
                    <div class="footer-social">
                        <p class="footer-title">Media Sosial</p>
                        <div class="footer-social-content">
                            <div class="footer-social-img">
                                <img src="img/icon/ig.png" alt="">
                                <p>Instagram</p>
                            </div>
                            <div class="footer-social-img">
                                <img src="img/icon/x.png" alt="">
                                <p>X / Twitter</p>
                            </div>
                            <div class="footer-social-img">
                                <img src="img/icon/linkedin-fill.png" alt="">
                                <p>Linkedin</p>
                            </div>
                        </div>
                    </div>
                    <div class="footer-payment">
                        <p class="footer-title">Metode Pembayaran</p>
                        <div class="footer-payment-content">
                            <div class="partner-payment">
                                <p>Partner</p>
                                <img src="img/icon/midtrans.png" alt="icon">
                            </div>
                            <div class="credit-card-payment">
                                <p>Kartu Kredit</p>
                                <div class="credit-card-grid">
                                    <img src="img/icon/visa.png" alt="icon">
                                    <img src="img/icon/mastercard.png" alt="icon">
                                </div>
                            </div>
                            <div class="bank-payment">
                                <p>Bank Transfer</p>
                                <div class="bank-grid">
                                    <img src="img/icon/BCA.png" alt="icon">
                                    <img src="img/icon/BNI.png" alt="icon">
                                    <img src="img/icon/BRI.png" alt="icon">
                                    <img src="img/icon/gopay.png" alt="icon">
                                    <img src="img/icon/jenius.png" alt="icon">
                                    <img src="img/icon/lainnya.png" alt="icon">
                                </div>
                            </div>
                            <div class="qris-payment">
                                <p>QRIS</p>
                                <img src="img/icon/QRIS.png" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-lisensi-container">
                <div class="footer-border"></div>
            <div class="footer-lisensi">
                <p>Lisensi</p>
                <p>Syarat & Ketentuan</p>
                <p>Privasi</p>
                <p>Cookies</p>
                <p>Penggunaan Data</p>
            </div>
            <div class="footer-company-credit">
                <p>© 2024 Belajar Bekerja. All right reserved</p>
                <p>Belajar Bekerja merupakan program untuk mempersiapkan individu 
                menjadi lebih siap secara profesional. Dimana peserta dapat mengerjakan
                kasus nyata yang terjadi di dunia industri dengan memanfaatkan pemahaman
                digital transformasi serta teknologi Kecerdasan Buatan (AI) yang
                langsung didampingi oleh praktisi berpengalaman. Pada program ini semua
                orang memiliki kesempatan untuk berpengalaman di industri!
            </p>
            </div>
            </div>
            
        </footer>
    </main>
</body>
</html>
