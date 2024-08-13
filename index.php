<?php 
session_start();
if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    header("location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Bekerja</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="img/logo.png" alt="Belajar Bekerja">
            </div>
            <nav>
                <ul>
                    <li><a href="#program-tersedia">Program</a></li>
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
        <div class="hero">
            <div class="hero-text">
                <span class="announcement">
                    <span class="dot-blue"></span>
                    Program Job Connector telah hadir
                    <i class="material-icons">east</i>
                </span>
                <h1>Mulai bangun karir untuk masa depanmu, <span class="highlight">hanya disini.</span></h1>
                <p class="hero-sub-text">Mempersiapkan individu menjadi lebih siap secara profesional untuk dunia industri dengan memanfaatkan pemahaman digital transformasi serta teknologi kecerdasan buatan (AI) yang langsung didampingi oleh praktisi berpengalaman.</p>
                <div class="buttons">
                    <a href="job-connector.php" class="btn primary">Lihat Program</a>
                    <a href="#consultation" class="btn secondary">Konsultasi Gratis</a>
                </div>
                <div class="rating">
                    <p>Masih bingung? Konsultasikan dengan kami, GRATIS</p>
                    <div class="rating-wrapper">
                        <div class="rating-img">
                            <img src="img/user.png" alt="">
                        </div>
                        <div class="rating-text">
                            <p>⭐⭐⭐⭐⭐ 4.8 </p>
                            <p>dari review 124 alumni</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-image">
                <img src="img/Light.png" alt="img-header" class="img-header">
                <div class="img-body-container">
                    <img src="img/body.png" alt="Career-Building" class="img-body">
                </div>
            </div>
        </div>
        <section class="partners">
            <div class="container">
                <img src="img/partner.png" alt="Cakap">
                <img src="img/partner2.png" alt="Jobready">
                <img src="img/partner3.png" alt="Sirclo">
                <img src="img/partner4.png" alt="Astra Financial">
                <img src="img/partner5.png" alt="Manulife">
                <img src="img/partner6.png" alt="IDN Media">
            </div>
            <p class="note">Daftarkan dirimu, raih kesempatan untuk disalurkan ke company partner kami bersama Cakap</p>
        </section>
        <div class="recommendation-section">
            <div class="testcontent">
                <div class="icon-container">
                    <img src="img/iconreview.png" alt="Icon" class="section-icon">
                </div>
                <span class="section-title">Rekomendasi program</span>
                <h2>Bagaimana posisi karirmu saat ini?</h2>
                <p>Kami akan membantumu untuk merekomendasikan program yang sesuai dengan kondisimu saat ini dan bidang yang membuatmu tertarik.</p>
                <div class="form-group">
                    <div class="selector-recomendation">
                        <p>Aku merasa bahwa</p>
                        <div class="btn-selector" id="btn-selector" onclick="selectorDropdown()">
                            <p id="selector-header">Pilih Jawaban</p>
                            <i class="material-icons">arrow_drop_down</i>
                        </div>
                    </div>
                    <div class="selector-recomendation-career" id="btn-recom" onclick="selectorDropdown()">
                        <p>Bidang pekerjaan yang diminati</p>
                        <div class="btn-career-selector">
                            <p  id="recom-header">Pilih bidang atau role</p>
                            <i class="material-icons">arrow_drop_down</i>
                        </div>
                    </div>
                    <script src="script.js"></script>

                    <!-- <div class="form-field">
                        <form id="recommendation-form">
                        <label for="career-stage">Aku merasa bahwa</label>
                        <select id="career-stage" class="select-career" onchange="getRecommendations()">
                            <option value="">Pilih jawaban</option>
                            <option value="portofolio">Mau Punya Portofolio</option>
                            <option value="it">Merasa Salah Jurusan</option>
                            <option value="advanced">Bingung Untuk Membangun karir</option>
                        </select>
                    </div>
                    <div class="form-field">
                        <label for="interest-area">Bidang pekerjaan yang diminati</label>
                        <select id="interest-area" class="select-career" onchange="getRecommendations()">
                            <option value="">Pilih bidang atau role</option>
                            <option value="engineering">Teknologi Informasi (IT)</option>
                            <option value="marketing">marketing</option>
                            <option value="creative">Creative</option>
                        </select>
                    </div> -->
                    <div id="recommendations" class="recommendations">
                        <!-- Recommendations will be displayed here -->
                    </div>
                </div>
                <div class="selector-popup" id="selector-popup">
                    <li class="selector-popup-value" data-value="option1" >Bingung cari pengalaman pertama di industri</li>
                    <li class="selector-popup-value" data-value="option2" >Masih cari passion yang cocok, nih</li>
                    <li class="selector-popup-value" data-value="option3" >Mau punya portofolio</li>
                    <li class="selector-popup-value" data-value="option4" >Merasa salah jurusan</li>
                    <li class="selector-popup-value" data-value="option5" >Bingung untuk membangun karir</li>
                    <li class="selector-popup-value" data-value="option6" >Cari magang yang auto lolos</li>
                    <li class="selector-popup-value" data-value="option7" >Mau punya mentor khusus untuk konsultasi karir</li>
                    <li class="selector-popup-value" data-value="option8" >Mau ngelamar kerja tapi ga punya skill yang mumpuni</li>
                </div>
                <div class="selector-popup-recom" id="selector-recomendation">
                    <li class="selector-popup-recom-value" data-value="recom1">Teknologi Informasi (IT)</li>
                    <li class="selector-popup-recom-value" data-value="recom2">Marketing</li>
                    <li class="selector-popup-recom-value" data-value="recom3">Creative</li>
                </div>
                <div class="program-recomendation" id="program-recomendation">
                    <p>Rekomendasi Program</p>
                    <div class="program-recomendation-wrap">
                        <div class="program-recomendation-content">
                            <img src="img/Rectangle 18868.png" alt="">
                            <div class="program-recom-text">
                                <span>Project Based Internship</span>
                                <div class="program-title">
                                    <i class="material-icons">brush</i>
                                    <p>Graphic Designer</p>
                                </div>
                                <p>Program pilihan untuk magang menjadi seorang graphic designer dengan pilihan durasi maksimal 3 bulan.</p>
                            </div>
                        </div>
                        <div class="program-recomendation-content">
                            <img src="img/Rectangle 18866.png" alt="">
                            <div class="program-recom-text">
                                <span>Project Based Internship</span>
                                <div class="program-title">
                                    <i class="material-icons">movie</i>
                                    <p>Video Editor</p>
                                </div>
                                <p>Program pilihan untuk magang menjadi seorang video editor dengan pilihan durasi maksimal 3 bulan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <section class="belajar-bekerja">
            <div class="belajar-bekerja-content">
                <div class="left-panel">
                    <img src="img/ssprogram.png" alt="Lamaran terkirim">
                </div>
                <div class="right-panel">
                    <img src="img/iconSuportsection.png" alt="icon">
                    <span class="section-title">Mudah dan efisien</span>
                    <h2>Saatnya bilang “tidak” dengan proses daftar magang yang terlalu lama dan ribet</h2>
                    <p>Kamu sering mengeluh atau bahkan ditolak ketika ingin magang di suatu perusahaan? Beruntung kamu menemukan Belajar Bekerja</p>
                    <p>Platform kami menawarkan berbagai role yang sedang banyak dicari oleh jobseeker, kamu bisa memilih sesuai kebutuhan dan tentunya <span class="highlight2">AUTO LOLOS. *</span></p>
                    <button id="pilih-program">Pilih Program</button>
                    <p class="right-panel-sm-txt">*hanya tersedia di beberapa program pilihan</p>
                    
                </div>
            </div>
            <div class="stats">
                <div>
                    <strong>3</strong>
                    <h3>Batch telah dilaksanakan</h3>
                    <p>Rasakan pengalaman langsung di industri</p>
                </div>
                <div>
                    <strong>200+</strong>
                    <h3>Orang telah bergabung</h3>
                    <p>Banyak alumni terbantu dengan program Belajar Bekerja.</p>
                </div>
                <div>
                    <strong>50+</strong>
                    <h3>Project telah dikerjakan</h3>
                    <p>Berbagai project kamu kerjakan sesuai role yang kamu pilih</p>
                </div>
                <div>
                    <strong>10+</strong>
                    <h3>Role tersedia</h3>
                    <p>Semua role bisa kamu pilih dan ikuti sesuai kebutuhan</p>
                </div>
            </div>
        </section>
        <section id="program-tersedia">
            <img src="img/Asset_Fastprogram.png" alt="">
            <span class="section-title">Program tersedia</span>
            <h2>Pilihan program yang bisa kamu ikuti</h2>
            <p>Pilih program yang sesuai dengan kebutuhanmu. Setiap program memiliki benefitnya tersendiri.</p>
            <div class="program">
                <div class="program-item">
                    <img src="img/program1.png" alt="Project Based Internship">
                    <h3>Project Based Internship (PBI)</h3>
                    <p>Program magang berdurasi maksimal 3 bulan. Cocok untukmu untuk mendapatkan basic experiences atau portofolio.</p>
                    <button onclick="lihatDetailProgram('PBI')">Lihat Detail Program</button>
                </div>
                <div class="program-item">
                    <img src="img/Asset_Fast.png" alt="Job Connector">
                    <h3>Job Connector</h3>
                    <p>Program berdurasi 6 bulan atau lebih. Cocok untukmu agar lebih siap secara profesional untuk bisa mendapatkan pekerjaan.</p>
                    <button onclick="lihatDetailProgram('JobConnector')">Lihat Detail Program</button>
                </div>
            </div>
        </section>
        <div class="benefit-section">
            <div class="icon-container">
                <img src="img/iconreview.png" alt="Icon" class="section-icon">
            </div>
            <span class="section-title">Benefit utama</span>
            <h2>Kenapa kamu harus memilih Belajar Bekerja</h2>
            <div class="benefits">
                <div class="benefit">
                    <img src="img/benefit1.png" alt="Bella" class="mentor-image">
                    <h3>Career Advancements</h3>
                    <p>Tingkatkan karirmu dengan mengikuti kelas pengembangan karir, konsultasi karir secara intensif, dan kesempatan dapat pekerjaan dengan partner industri Belajar Bekerja.</p>
                </div>
                <div class="benefit">
                    <img src="img/benefit2.png" alt="Bella" class="mentor-image">
                    <h3>Hands-On Industry Experience</h3>
                    <p>Dapatkan pengalaman bekerja sesungguhnya dengan mengerjakan proyek nyata industri didukung pembelajaran yang terupdate dengan kurikulum industri.</p>
                </div>
                <div class="benefit">
                    <img src="img/benefit3.png" alt="Bella" class="mentor-image">
                    <h3>Career Advancements</h3>
                    <p>Tingkatkan karirmu dengan mengikuti kelas pengembangan karir, konsultasi karir secara intensif, dan kesempatan dapat pekerjaan dengan partner industri Belajar Bekerja.</p>
                </div>
                <div class="benefit">
                    <img src="img/benefit4.png" alt="Bella" class="mentor-image">
                    <h3>Hands-On Industry Experience</h3>
                    <p>Dapatkan pengalaman bekerja sesungguhnya dengan mengerjakan proyek nyata industri didukung pembelajaran yang terupdate dengan kurikulum industri.</p>
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
        <section class="testimonials-section">
            <div class="testimonial-icon">
                <img src="img/iconreview.png" alt="icon">
            </div>
            <p class="snk-title">Review alumni</p>
            <div class="testimonial-title">
                <h2>Banyak alumni merasakan manfaat dari program Belajar Bekerja</h2>
            </div>
            <div class="grid-wrapper">
                <div class="testimonials-container">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="testimonial-header">
                                <div class="testimonial-user-img">
                                    <img src="img/user-img/Ellipse 61.png" alt="">
                                </div>
                                <div>
                                    <p class="testimonial-user-name">Nama User</p>
                                    <p class="testimonial-program">Program yang diikuti</p>
                                </div>
                            </div>
                            <p class="testimonial-text">Framer has helped me to scale my agency by being able to make websites in a very efficient and creative way.</p>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="testimonial-header">
                                <div class="testimonial-user-img">
                                    <img src="img/user-img/Ellipse 62.png" alt="">
                                </div>
                                <div>
                                    <p class="testimonial-user-name">Nama User</p>
                                    <p class="testimonial-program">Program yang diikuti</p>
                                </div>
                            </div>
                            <p class="testimonial-text">As a seasoned designer always on the lookout for innovative tools, Framer.com instantly grabbed my attention. This powerful web design platform is more than just a design tool - it’s a complete ecosystem that revolutionizes the way websites are created and published.</p>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="testimonial-header">
                                <div class="testimonial-user-img">
                                    <img src="img/user-img/Ellipse 63.png" alt="">
                                </div>
                                <div>
                                    <p class="testimonial-user-name">Nama User</p>
                                    <p class="testimonial-program">Program yang diikuti</p>
                                </div>
                            </div>
                            <p class="testimonial-text">Framer has helped me to scale my agency by being able to make websites in a very efficient and creative way.</p>
                        </div>
                    </div>
                </div>
                <div class="testimonials-container">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="testimonial-header">
                                <div class="testimonial-user-img">
                                    <img src="img/user-img/Ellipse 64.png" alt="">
                                </div>
                                <div>
                                    <p class="testimonial-user-name">Nama User</p>
                                    <p class="testimonial-program">Program yang diikuti</p>
                                </div>
                            </div>
                            <p class="testimonial-text">As a seasoned designer always on the lookout for innovative tools, Framer.com instantly grabbed my attention. This powerful web design platform is more than just a design tool - it’s a complete ecosystem that revolutionizes the way websites are created and published.</p>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="testimonial-header">
                                <div class="testimonial-user-img">
                                    <img src="img/user-img/Ellipse 65.png" alt="">
                                </div>
                                <div>
                                    <p class="testimonial-user-name">Nama User</p>
                                    <p class="testimonial-program">Program yang diikuti</p>
                                </div>
                            </div>
                            <p class="testimonial-text">Framer has helped me to scale my agency by being able to make websites in a very efficient and creative way.</p>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="testimonial-header">
                                <div class="testimonial-user-img">
                                    <img src="img/user-img/Ellipse 66.png" alt="">
                                </div>
                                <div>
                                    <p class="testimonial-user-name">Nama User</p>
                                    <p class="testimonial-program">Program yang diikuti</p>
                                </div>
                            </div>
                            <p class="testimonial-text">Framer has helped me to scale my agency by being able to make websites in a very efficient and creative way.</p>
                        </div>
                    </div>
                </div>
                <div class="testimonials-container">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="testimonial-header">
                                <div class="testimonial-user-img">
                                    <img src="img/user-img/Ellipse 67.png" alt="">
                                </div>
                                <div>
                                    <p class="testimonial-user-name">Nama User</p>
                                    <p class="testimonial-program">Program yang diikuti</p>
                                </div>
                            </div>
                            <p class="testimonial-text">Framer has helped me to scale my agency by being able to make websites in a very efficient and creative way.</p>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="testimonial-header">
                                <div class="testimonial-user-img">
                                    <img src="img/user-img/Ellipse 68.png" alt="">
                                </div>
                                <div>
                                    <p class="testimonial-user-name">Nama User</p>
                                    <p class="testimonial-program">Program yang diikuti</p>
                                </div>
                            </div>
                            <p class="testimonial-text">As a seasoned designer always on the lookout for innovative tools, Framer.com instantly grabbed my attention. This powerful web design platform is more than just a design tool - it’s a complete ecosystem that revolutionizes the way websites are created and published.</p>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="testimonial-header">
                                <div class="testimonial-user-img">
                                    <img src="img/user-img/Ellipse 69.png" alt="">
                                </div>
                                <div>
                                    <p class="testimonial-user-name">Nama User</p>
                                    <p class="testimonial-program">Program yang diikuti</p>
                                </div>
                            </div>
                            <p class="testimonial-text">Framer has helped me to scale my agency by being able to make websites in a very efficient and creative way.</p>
                        </div>
                    </div>
                </div>
                <div class="testimonials-container">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="testimonial-header">
                                <div class="testimonial-user-img">
                                    <img src="img/user-img/Ellipse 610.png" alt="">
                                </div>
                                <div>
                                    <p class="testimonial-user-name">Nama User</p>
                                    <p class="testimonial-program">Program yang diikuti</p>
                                </div>
                            </div>
                            <p class="testimonial-text">Framer has helped me to scale my agency by being able to make websites in a very efficient and creative way.</p>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="testimonial-header">
                                <div class="testimonial-user-img">
                                    <img src="img/user-img/Ellipse 611.png" alt="">
                                </div>
                                <div>
                                    <p class="testimonial-user-name">Nama User</p>
                                    <p class="testimonial-program">Program yang diikuti</p>
                                </div>
                            </div>
                            <p class="testimonial-text">Framer has helped me to scale my agency by being able to make websites in a very efficient and creative way.</p>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="testimonial-header">
                                <div class="testimonial-user-img">
                                    <img src="img/user-img/Ellipse 612.png" alt="">
                                </div>
                                <div>
                                    <p class="testimonial-user-name">Nama User</p>
                                    <p class="testimonial-program">Program yang diikuti</p>
                                </div>
                            </div>
                            <p class="testimonial-text">As a seasoned designer always on the lookout for innovative tools, Framer.com instantly grabbed my attention. This powerful web design platform is more than just a design tool - it’s a complete ecosystem that revolutionizes the way websites are created and published.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <script src="review.js"></script>
            </div>
            <section id="faqs"class="faq-container">
                <h4 class="faq-title">FAQs</h4>
                <h2>Frequently asked questions</h2>
                <p class="faq-subtitle">Butuh bantuan? Coba cek terlebih dahulu pertanyaan yang sering ditanyakan berikut</p>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        Apa itu Belajar Bekerja?
                        <i id="icon" class="material-icons">arrow_downward</i>
                    </div>
                    <div class="faq-answer">
                        Belajar Bekerja adalah program pelatihan yang dirancang untuk membantu Anda memperoleh keterampilan kerja.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        Kenapa harus Belajar Bekerja?
                        <i id="icon" class="material-icons">arrow_downward</i>
                    </div>
                    <div class="faq-answer">
                        Program ini memberikan pelatihan praktis yang relevan dengan industri saat ini.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        Apakah programnya berbayar?
                        <!-- <span class="arrow">▼</span> -->
                        <i id="icon" class="material-icons">arrow_downward</i>
                    </div>
                    <div class="faq-answer">
                        Ya, program ini berbayar dengan berbagai pilihan paket sesuai kebutuhan Anda.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        Bisakah melakukan refund jika sudah membeli programnya?
                        <i id="icon" class="material-icons">arrow_downward</i>
                    </div>
                    <div class="faq-answer">
                        Ya, Anda dapat melakukan refund sesuai dengan kebijakan refund yang berlaku.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        Bisakah melakukan refund jika sudah membeli programnya?
                        <i id="icon" class="material-icons">arrow_downward</i>
                    </div>
                    <div class="faq-answer">
                        Ya, Anda dapat melakukan refund sesuai dengan kebijakan refund yang berlaku.
                    </div>
                </div>
            </section>
            <script src="scroll.js"></script>
        </div>
    </main>
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
                            <img src="img/icon/wa.png" alt="">
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
</body>
</html>