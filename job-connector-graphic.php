<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Connector Graphic Design</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="connector-graphicdesign.css">
    <header>
        <div class="container">
            <div class="logo">
                <img src="img/logo.png" alt="Belajar Bekerja">
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
</head>
<body>
    <div class="hero-bg">
        <img src="img/Masking.png" alt="">
    </div>
    <div class="hero-section">
        <div class="hero-text">
            <span class="page-type">Job Connector</span>
            <h1>Menjadi Seorang Graphic Designer Handal di Dunia Industri</h1>
            <p>
            Raih kesempatan untuk ditempatkan di company partner
            kita sebagai seorang graphic designer dengan proyek-proyek
            dunia industri
            </p>
            <div class="hero-btn">
                <button class="hero-register">Daftar Sekarang</button>
                <button class="hero-schedule">
                    <i class="material-icons">arrow_downward</i>
                    Cek Jadwal
                </button>
            </div>
        </div> 
        <div class="hero-img">
            <img src="img/hero-img-graphicdesign.png" alt="">
        </div>
    </div>
    <div class="partner-section">
        <div class="partner-container">
            <img src="img/partner.png" alt="Cakap">
            <img src="img/partner2.png" alt="Jobready">
            <img src="img/partner3.png" alt="Sirclo">
            <img src="img/partner4.png" alt="Astra Financial">
            <img src="img/partner5.png" alt="Manulife">
            <img src="img/partner6.png" alt="IDN Media">
        </div>
    </div>
    <div class="job-connector-sidebar">
        <span >Job Connector</span>
        <p>Graphic Designer</p>
        <a><i class="material-icons">info</i>Tentang Program</a>
        <a><i class="material-icons">library_books</i>Kurikulum</a>
        <a><i class="material-icons">summarize</i>Metode Pembelajaran</a>
        <a><i class="material-icons">person_4</i>Mentor</a>
        <a><i class="material-icons">clear_all</i>Linimasa Pendaftaran</a>
        <a><i class="material-icons">support_agent</i>Career Support</a>
        <a href="#faqs"><i class="material-icons">quiz</i>FAQs</a>
        <button class="sidebar-register">Daftar Sekarang</button>
        <button class="sidebar-contact">Hubungi Kami</button>
    </div>
    <div class="content-container">
        <div class="section-about-program">
            <span class="content-title">Tentang Program</span>
            <h3>Apa itu job connector graphic designer?</h3>
            <p>Job Connector Graphic Designer adalah sebuah
            program yang dirancang khusus untuk membantu para
            desainer grafis dalam mencapai kesuksesan karier mereka. 
            Program ini menyediakan berbagai macam pelatihan, sumber daya, 
            dan akses ke kesempatan kerja yang relevan dalam industri desain 
            grafis.
            </p>
            <img src="img/about-program.png" alt="">
        </div>
        <h3>Kenapa Harus mengikuti program ini?</h3>
        <div class="grid-program-benefit">
            <div class="grid-program-item">
                <img src="img/icon/insights.png" alt="">
                <h4>Peningkatan Keterampilan</h4>
                <p>Dapatkan pengetahuan mendalam tentang software desain terkini, teknik desain yang efektif, dan tren industri terbaru.</p>
            </div>
            <div class="grid-program-item">
                <img src="img/icon/meetingroom.png" alt="">
                <h4>Akses ke Kesempatan Kerja</h4>
                <p>Program ini memungkinkan para peserta untuk terhubung dengan jaringan profesional yang luas dalam industri desain grafis.</p>
            </div>
            <div class="grid-program-item">
                <img src="img/icon/build.png" alt="">
                <h4>Portfolio Development</h4>
                <p>Membangun dan meningkatkan portofolio desain portofolio yang kuat untuk menarik perhatian perusahaan atau klien potensial.</p>
            </div>
        </div>
        <div class="benefit-section">
            <h2>Benefit menjadi seorang Graphic Designer</h2>
            <div class="benefit-card">
                <div class="benefit-card-content">
                    <h4>Benefit yang akan kamu dapatkan</h4>
                    <div class="card-item">
                        <i class="material-icons">check_circle</i>
                        <p>Gaji yang menjanjikan. Seorang graphic designer memiliki gaji rata-rata 6 - 10 juta rupiah.*</p>
                    </div>
                    <div class="card-item">
                        <i class="material-icons">check_circle</i>
                        <p>Banyak dibutuhkan perusahaan, karena setiap perusahaan pasti membutuhkan seorang graphic designer.</p>
                    </div>
                    <div class="card-item">
                        <i class="material-icons">check_circle</i>
                        <p>Memiliki prospek karir yang jelas.</p>
                    </div>
                    <div class="card-item">
                    <i class="material-icons">check_circle</i>
                        <p>Berkembang sesuai dengan era industri.Berkembang sesuai dengan era industri.</p>
                    </div>
                </div>
                <div class="benefit-card-img">
                    <img src="img/Graphic Asset.png" alt="img">
                </div>
            </div>
            <p class="benefit-sm-txt">*sumber Glasdoor</p>
            <button>Yuk, Daftar Sekarang</button>
        </div>
        <section class="curriculum-container">
            <span class="content-title">Kurikulum</span>
            <h2>Pembelajaran mengikuti trend industri saat ini</h2>
            <div class="course-content">
                <!-- <div class="module">
                    <div class="module-header" onclick="toggleContent('module1-content')">
                        <div class="module-header-title">
                            <i class="material-icons">folder</i>
                            <p>Visual Design Fundamentals</p>
                        </div>
                        <div class="module-header-schedule">
                            <p>Minggu 1</p>
                            <i class="material-icons">keyboard_arrow_down</i>
                        </div>
                    </div>
                    <div class="module-content" id="module1-content">
                        <p>Pada modul ini, kamu akan mempelajari konsep dasar desain visual, mulai dari visual design principles hingga sketching & drawing. Kamu juga akan mempelajari tentang print & digital design untuk dapat menghasilkan output desain yang efektif dan sesuai dengan kebutuhan. Materi yang akan dipelajari di modul ini mencakup:</p>
                        <ul>
                            <li>Introduction Visual Design, Role Skill and Skills you need to learn</li>
                            <li>Visual Design Principles</li>
                            <li>Typography & Color Theory</li>
                            <li>Software Proficiency: Adobe Creative Suites</li>
                            <li>Sketching and Drawing</li>
                            <li>Image, Vector, Video & Motions</li>
                            <li>Layout and Composition</li>
                            <li>Print and Digital Design</li>
                        </ul>
                        <div class="module-content-icon">
                            <i class="material-icons">summarize</i><p>8 Tugas Praktik</p>
                        </div>
                    </div>
                </div>
                <div class="module">
                    <div class="module-header" onclick="toggleContent('module2-content')">
                        <div class="module-header-title">
                            <i class="material-icons">folder</i>
                            <p>Branding Design</p>
                        </div>
                        <div class="module-header-schedule">
                            <p>Minggu 2</p>
                            <i class="material-icons">keyboard_arrow_down</i>
                        </div>
                    </div>
                    <div class="module-content" id="module2-content">
                        p
                    </div>
                </div>
                <div class="module">
                    <div class="module-header" onclick="toggleContent('module3-content')">
                        <div class="module-header-title">
                            <i class="material-icons">folder</i>
                            <p>Marketing Design</p>
                        </div>
                        <div class="module-header-schedule">
                            <p>Minggu 3</p>
                            <i class="material-icons">keyboard_arrow_down</i>
                        </div>
                    </div>
                    <div class="module-content" id="module3-content"></div>
                </div>
                <div class="module">
                    <div class="module-header" onclick="toggleContent('module4-content')">
                        <div class="module-header-title">
                            <i class="material-icons">folder</i>
                            <p>Proyek Akhir: Apa lah terserah lau</p>
                        </div>
                        <div class="module-header-schedule">
                            <p>Minggu 4</p>
                            <i class="material-icons">keyboard_arrow_down</i>
                        </div>
                    </div>
                    <div class="module-content" id="module4-content"></div>
                </div> -->
                <?php include 'php/r_kurikulum.php'; ?>
            </div>
            <script src="script.js"></script>
            <button class="register-button">Yuk, Daftar Sekarang</button>
        </section>
        <div class="tools-section">
            <h3>Tools yang digunakan</h3>
            <div class="tools-content">
                <div class="tools-item">
                    <img src="img/icon/Miro.png" alt="">
                    <p>Miro</p>
                </div>
                <div class="tools-item">
                    <img src="img/icon/Slack.png" alt="">
                    <p>Slack</p>
                </div>
                <div class="tools-item">
                    <img src="img/icon/Illustrator.png" alt="">
                    <p>Illustrator</p>
                </div>
                <div class="tools-item">
                    <img src="img/icon/PS.png" alt="">
                    <p>Photoshop</p>
                </div>
            </div>
        </div>
        <div class="learning-section">
            <span class="content-title">Metode pembelajaran</span>
            <h3>Akses materi belajar secara fleksibel, online maupun offline</h3>
            <p>Kamu bisa datang ke office Belajar Bekerja atau akses secara online untuk proses belajarmu.</p>
            <div class="learning-section-content">
                <div class="learning-item">
                    <div class="learning-schedule">
                        <i class="material-icons">wb_sunny</i>
                        <p>Akses jam pagi-sore</p>
                    </div>
                    <p>Office : Belum tersedia</p>
                    <p>Akses online</p>
                    <div class="learning-type">
                        <div class="SPL">
                            <p>SPL</p>
                            <p>Bebas Jam Akses</p>
                        </div>
                        <div class="Webinar">
                            <p>Webinar*</p>
                            <p>09.00 - 12.00 WIB</p>
                        </div>
                    </div>
                    <span>*menyesuaikan program dan mentor</span>
                </div>
                <div class="learning-item">
                    <div class="learning-schedule">
                        <i class="material-icons">wb_sunny</i>
                        <p>Akses jam pagi-sore</p>
                    </div>
                    <p>Office : Belum tersedia</p>
                    <p>Akses online</p>
                    <div class="learning-type">
                        <div class="SPL">
                            <p>SPL</p>
                            <p>Bebas Jam Akses</p>
                        </div>
                        <div class="Webinar">
                            <p>Webinar*</p>
                            <p>09.00 - 12.00 WIB</p>
                        </div>
                    </div>
                    <span>*menyesuaikan program dan mentor</span>
                </div>
            </div>
        </div>
        <div class="mentor-section">
            <span class="content-title">Mentor</span>
            <h3>Belajar dan praktik bareng mentor terpilih yang sudah berpengalaman dibidangnya</h3>
            <p>Gali insights dan dibimbing langsung oleh para mentor yang sudah bekerja di industri</p>
            <div class="mentor-grid">
                <!-- <div class="mentor-item">
                    <img src="img/mentor1.png" alt="">
                    <h4>Reynaldi Daniel</h4>
                    <p>Pekerja serabutan</p>
                    <p>Office</p>
                    <div class="mentor-link">
                        <img src="img/icon/linkedin-blue.png" alt="icon">
                        <a href="#mentor1">Lihat Linkedin Reynaldi</a>
                    </div>
                </div>
                <div class="mentor-item">
                    <img src="img/mentor2.png" alt="">
                    <h4>Ariz Fucking Motherfucker</h4>
                    <p>Caritanamah Manager</p>
                    <p>PT XYZ</p>
                    <div class="mentor-link">
                        <img src="img/icon/linkedin-blue.png" alt="icon">
                        <a href="#mentor1">Lihat Linkedin Reynaldi</a>
                    </div>
                </div>
                <div class="mentor-item">
                    <img src="img/mentor3.png" alt="">
                    <h4>Fretti Aldina</h4>
                    <p>SVP Product Design</p>
                    <p>Square Enix</p>
                    <div class="mentor-link">
                        <img src="img/icon/linkedin-blue.png" alt="icon">
                        <a href="#mentor1">Lihat Linkedin Reynaldi</a>
                    </div>
                </div> -->
                <?php include 'php/r_mentors.php' ?>
            </div>
        </div>
        <div class="linimasa-section">
            <span class="content-title">Linimasa pendaftaran</span>
            <h3>Belajar dan biaya program job connector: graphic designer</h3>
            <!-- <div class="linimasa-content">
                <div class="linimasa-header">
                    <div class="linimasa-batch">
                        <p>Batch 2</p>
                    </div>
                    <div class="linimasa-header-icon">
                        <i class="material-icons">calendar_month</i>
                        <p>Segera Diumumkan</p>
                    </div>
                </div>
                <div class="linimasa-schedule">
                    <div class="linimasa-date">
                        <p>Program dimulai</p>
                        <p>1 Januari - 31 Juni 2025</p>
                    </div>
                    <div class="linimasa-jadwal">
                        <p>Jadwal belajar</p>
                        <p>Senin - Jumat</p>
                    </div>
                    <div class="linimasa-method">
                        <p>Metode</p>
                        <p>SPL dan Webinar</p>
                    </div>
                    <div class="linimasa-time">
                        <p>Jadwal Webinar</p>
                        <p>09.00-12.00 WIB</p>
                    </div>
                </div>
                <div class="linimasa-schedule-btn">
                    <button class="linimasa-btn-closed">Pendaftaran belum dibuka</button>
                    <button class="linimasa-btn-reg">Daftar Sekarang</button>
                    <button class="linimasa-btn-contact">Hubungi Kami</button>
                </div>
            </div>
            <div class="linimasa-content">
                <div class="linimasa-header">
                    <div class="linimasa-batch">
                        <p>Batch 1</p>
                    </div>
                    <div class="linimasa-header-icon">
                        <i class="material-icons">calendar_month</i>
                        <p>Pendaftaran ditutup 20 mei 2024</p>
                    </div>
                </div>
                <div class="linimasa-schedule">
                    <div class="linimasa-date">
                        <p>Program dimulai</p>
                        <p>1 Juni - 31 Desember 2024</p>
                    </div>
                    <div class="linimasa-jadwal">
                        <p>Jadwal belajar</p>
                        <p>Senin - Jumat</p>
                    </div>
                    <div class="linimasa-method">
                        <p>Metode</p>
                        <p>SPL dan Webinar</p>
                    </div>
                    <div class="linimasa-time">
                        <p>Jadwal Webinar</p>
                        <p>09.00-12.00 WIB</p>
                    </div>
                </div>
                <div class="linimasa-schedule-btn">
                    <button class="linimasa-btn-closed">Pendaftaran belum dibuka</button>
                    <button class="linimasa-btn-reg">Daftar Sekarang</button>
                    <button class="linimasa-btn-contact">Hubungi Kami</button>
                </div>
            </div> -->
            <?php include 'php/r_linimasa.php' ?>
        </div>
        <div class="price-section">
            <div class="price-content">
                <div class="price-item">
                    <div>
                        <p class="price-header">Harga Normal</p>
                    </div>
                    <p class="price-number">Rp.5.999.000</p>
                    <ul>
                        <li>Bayar secara full payment diawal dan dapatkan cashback Rp 1.000.000. Atau </li>
                        <li>Bayar dengan cicilan bunga 0% selama 6 bulan (Wajib DP 20%).</li>
                    </ul>
                </div>
                <div class="price-item">
                    <div>
                        <img src="img/icon/auto_awesome.png" alt="">
                        <p class="price-header">Early bird promo</p>
                        <img src="img/icon/auto_awesome.png" alt="">
                    </div>
                    <p class="price-number">Rp 4.500.000</p>
                    <ul>
                        <li>Bayar secara full payment diawal. Atau </li>
                        <li>Bayar dengan cicilan bunga 0% selama 6 bulan (Wajib DP 20%).</li>
                    </ul>
                </div>
                <div class="price-item">
                    <div>
                        <p class="price-header">Study Now, Pay later</p>
                    </div>
                    <p class="price-number">Rp.5.999.000</p>
                    <ul>
                        <li>Bebas biaya di bulan pertama. Bayar sebesar 5% atau Rp 300.000 dari bulan 2-7, lalu sisanya bayar sebesar Rp 700.000 dari bulan 8-13, setelah program berakhir.</li>
                    </ul>
                </div>
            </div>
            <span>*Berlaku dari 1-10 April 2024 </span>
        </div>
        <div class="payment-method-section">
            <h3>Metode pembayaran tersedia </h3>
            <div class="payment-method-content">
                <div class="payment-method-item">
                    <i class="material-icons">credit_card</i>
                    <h4>Advance full payment</h4>
                    <p>Bayar full biaya program diawal pendaftaran dan dapatkan cashback sebesar Rp 1.000.000.</p>
                </div>
                <div class="payment-method-item">
                    <i class="material-icons">diversity_3</i>
                    <h4>Study now. Pay later</h4>
                    <p>Bayar grace period sebesar 5% dari total pembayaran setiap bulan pada bulan 1-6 program berlangsung. Sisa pembayaran akan dicicil saat bulan ke 7-12.</p>
                </div>
                <div class="payment-method-item">
                    <i class="material-icons">percent</i>
                    <h4>Cicilan bunga 0%</h4>
                    <p>Bayar DP sebesar 20% dari harga full, kemudian sisanya dicicil setiap bulan sesuai durasi, dengan bunga 0%.</p>
                </div>
            </div>
        </div>
        <div class="career-support-section">
            <span class="content-title">Career support</span>
            <h3>Kami akan selalu hadir untuk mendengarkan dan membantu terkait karir impianmu</h3>
            <p>Tersedia klinik karir dan komunitas yang bisa kamu akses secara gratis</p>
            <div class="career-content">
                <img src="img/Rectangle 18871.png" alt="">
                <div class="career-content-text">
                    <h3>Bingung terkait karirmu kedepannya? Jangan khawatir, kamu bisa konsultasi melalui klinik karir!</h3>
                    <p>Klinik karir tersedia pada setiap program untuk membantumu jika kamu merasa ragu atau bingung mengenai ruang lingkup karir. Konsultasi klinik karir tersedia setiap hari senin - jumat pada pukul 10.00 - 12.00 WIB dan 13.00 - 15.00 WIB, tergantung dengan jadwal yang kamu pilih.</p>
                    <button>Yuk,Daftar Sekarang</button>
                </div>
            </div>
            <div class="career-content">
                <div class="career-content-text">
                    <h3>Akses dan kembangkan networking di komunitas Belajar Bekerja</h3>
                    <p>Kamu akan memiliki akses ke berbagai forum yang tersedia di komunitas Belajar Bekerja. Kamu bisa share dan mendapatkan info terkait karir, event, lowongan, dan masih banyak lagi. Kamu bisa bertemu dengan berbagai orang yang memiliki background berbeda yang tentunya bisa memperluas koneksimu.</p>
                    <button>Yuk,Daftar Sekarang</button>
                </div>
                <img src="img/Rectangle 18872.png" alt="">
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
        </section>
        <div class="notif-section">
            <div class="notif-section-content">
                <img src="img/sunflower.png" alt="">
                <div class="notif-section-text">
                    <p class="notif-title">Tunggu apa lagi? Yuk segera daftar sebelum slot habis!</p>
                    <p class="notif-subtext">Dengan mengikuti program ini, kamu akan mendapatkan kesempatan untuk belajar dan dibimbing oleh ahlinya langsung. Jangan lupa juga kesempatan untuk disalurkan ke company partner kami, loh.</p>
                    <button>Daftar Sekarang</button>
                </div>
                
            </div>
        </div>
        <script src="scroll.js"></script>
    </div>
</body>
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
</html>