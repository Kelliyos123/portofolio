


<?php
$servername = "localhost";
$username = "root"; // Sesuaikan dengan username database Anda
$password = ""; // Sesuaikan dengan password database Anda
$dbname = "portofolio"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>





<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/seasansavoix.png" type="image/x-icon">

        <!--=============== BOXICONS ===============-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        

        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title> seasansavoix-Kelliyos Antoni </title>
    </head>
    <body>
        <!--=============== HEADER ===============-->
        <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">SEASANSAVOIX</a>

            <div class="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">
                            <i class='bx bx-home'></i>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#about" class="nav__link">
                            <i class='bx bx-user'></i>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#skills" class="nav__link">
                            <i class='bx bxs-book'></i>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#work" class="nav__link">
                            <i class='bx bx-briefcase-alt-2'></i>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#testimonial" class="nav__link">
                            <i class='bx bxs-comment'></i>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            <i class='bx bx-message-square-detail'></i>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Theme Change Button -->
            <i class='bx bx-moon change-theme' id="theme-button"></i>
        </nav>
        </header>

        <!--=============== MAIN ===============-->
        <class="main">
            <!--=============== HOME ===============--> 
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__data">
                        <span class="home__greeting">Hello, I'm</span>
                        <h1 class="home__name">Kelliyos Antoni</h1>
                        <h3 class="home__education">UI/UX Designer</h3>
                        <h2 class="home__alamat">Tuban</h2>
                        <h4 class="home__negara">Indo<span>nesia</span></h4>

                        <div class="home__buttons">
                            <a download="" href="assets/pdf/Kelliyos Antoni Resume Vision +.pdf" class="button button--ghost">
                                Download CV
                            </a>
                            <a href="#about" class="button">About me</a>
                        </div>
                    </div>

                    <div class="home__handle">
                        <img src="assets/img/profil.png" alt="" class="home_img">
                    </div>

                    <div class="home__social">
                        <a href="https://www.linkedin.com/in/kelliyos-antoni-400984221/" target="_blank" class="home__social-link">
                            <i class='bx bxl-linkedin-square'></i>
                        </a>
                        <a href="https://github.com/Kelliyos123" target="_blank" class="home__social-link">
                            <i class='bx bxl-github'></i>
                        </a>
                        <a href="https://dribbble.com/kelliyosantoni" target="_blank" class="home__social-link">
                            <i class='bx bxl-dribbble'></i>
                        </a>
                        <a href="https://open.spotify.com/user/4q0uv5ld0x805ckc5j6ucn3l9" target="_blank" class="home__social-link">
                            <i class='bx bxl-spotify'></i>
                        </a>
                        <a href="https://discord.com/channels/1060966826219155587/1060966827108356098" target="_blank" class="home__social-link">
                            <i class='bx bxl-discord-alt'></i>
                        </a>
                    </div>

                    <a href="#about" class="home__scroll">
                        <i class='bx bx-mouse home__scroll-icon'></i>
                        <span class="home__scroll-name">Scroll Down</span>
                    </a>
                </div>
            </section>
            
            <!--=============== ABOUT ===============-->
            <section class="about section" id="about">
                <span class="section__subtitle">My Intro</span>
                <h2 class="section__title">About Me</h2>

                <div class="about__container container grid">
                    <img src="assets/img/about.png" alt="" class="about__img">

                    <div class="about__data">
                        <div class="about__info">
                            <div class="about__box">
                                <i class='bx bx-award about__icon'></i>
                                <h3 class="about_title">Experience</h3>
                                <span class="about__subtitle">2 Years Experience</span>
                            </div>

                            <div class="about__box">
                                <i class='bx bx-briefcase-alt about__icon'></i>
                                <h3 class="about_title">Completed</h3>
                                <span class="about__subtitle">9+ projects</span>
                            </div>

                            <div class="about__box">
                                <i class='bx bx-support about__icon'></i>
                                <h3 class="about_title">Support</h3>
                                <span class="about__subtitle">Online 24/14</span>
                            </div>
                        </div>

                        <p class="about__description">
                            As a graduate of Information Technology from Universitas Brawijaya with a strong interest in UI/UX Design, 
                            Graphic Design, and related fields, I have frequently been involved in creating designs for organizational needs or events. 
                            I have successfully created landing page designs, mobile designs, development project designs, and various other designs. 
                            I am eager to continue developing my skills in design by gaining motivation and experience.
                        </p>

                        <a href="#contact" class="button">Contact Me</a>
                    </div>
                </div>
            </section>

            <!--=============== SKILLS ===============-->
            <section class="skills section" id="skills">
                <span class="section__subtitle">My Abilities</span>
                <h2 class="section__title">My Experience</h2>

                <div class="skills__container container grid">
                    <div class="skills__content">
                        <h3 class="skills__title">Frontend Developer</h3>

                        <div class="skills__box">

                            <div class="skills__group">

                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>

                                    <div>
                                        <h3 class="skills__name">HTML</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>

                                    <div>
                                        <h3 class="skills__name">CSS</h3>
                                        <span class="skills__level">Advanced</span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>

                                    <div>
                                        <h3 class="skills__name">JavaScript</h3>
                                        <span class="skills__level">Basic</span>
                                    </div>
                                </div>
                                
                            </div>


                            <div class="skills__group">

                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>

                                    <div>
                                        <h3 class="skills__name">Bootstrap</h3>
                                        <span class="skills__level">Basic</span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>

                                    <div>
                                        <h3 class="skills__name">Git</h3>
                                        <span class="skills__level">Basic</span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>

                                    <div>
                                        <h3 class="skills__name">React</h3>
                                        <span class="skills__level">Basic</span>
                                    </div>
                                </div>
                                
                            </div>

                        </div>
                    </div>

                    <div class="skills__content">
                        <h3 class="skills__title">Beckend Developer</h3>

                        <div class="skills__box">

                            <div class="skills__group">

                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>

                                    <div>
                                        <h3 class="skills__name">PHP</h3>
                                        <span class="skills__level">Basic</span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>

                                    <div>
                                        <h3 class="skills__name">Node JS</h3>
                                        <span class="skills__level">Basic</span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>

                                    <div>
                                        <h3 class="skills__name">Python</h3>
                                        <span class="skills__level">Basic</span>
                                    </div>
                                </div>
                                
                            </div>


                            <div class="skills__group">

                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>

                                    <div>
                                        <h3 class="skills__name">MySQL</h3>
                                        <span class="skills__level">Basic</span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>

                                    <div>
                                        <h3 class="skills__name">Firebase</h3>
                                        <span class="skills__level">Basic</span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>

                                    <div>
                                        <h3 class="skills__name">Mongo DB</h3>
                                        <span class="skills__level">Basic</span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="skills__content">
                        <h3 class="skills__title">UI/UX Designer</h3>

                        <div class="skills__box">

                            <div class="skills__group">

                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>

                                    <div>
                                        <h3 class="skills__name">Architectural Information</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>

                                    <div>
                                        <h3 class="skills__name">Hierarchy</h3>
                                        <span class="skills__level">Advanced</span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>

                                    <div>
                                        <h3 class="skills__name">Sequential</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>

                                    <div>
                                        <h3 class="skills__name">Protype</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>
                                
                            </div>


                            <div class="skills__group">

                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>

                                    <div>
                                        <h3 class="skills__name">Matriks</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>

                                    <div>
                                        <h3 class="skills__name">Design Interaction</h3>
                                        <span class="skills__level">Advanced</span>
                                    </div>
                                </div>
                                
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>

                                    <div>
                                        <h3 class="skills__name">Functionality</h3>
                                        <span class="skills__level">Advanced</span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>

                                    <div>
                                        <h3 class="skills__name">Visual Design</h3>
                                        <span class="skills__level">Advanced</span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </section>

            <!--=============== SERVICES ===============-->
            <section class="services section">
                <span class="section__subtitle">My Services</span>
                <h2 class="section__title">What i Offer</h2>

                <div class="services__container container grid">
                    <div class="services__card">
                        <h3 class="services__title">Product <br> Designer </h3>

                        <span class="services__button">
                            See more <i class='bx bx-right-arrow-alt services__icon'></i>
                        </span>

                        <div class="services__modal">
                            <div class="services__modal-content">
                                <i class='bx bx-x services__modal-close'></i>

                                <h3 class="services__modal-title">Product Designer</h3>
                                <p class="services__modal-description">
                                    Desain produk adalah proses menciptakan rancangan visual dan fungsional suatu produk sebelum diproduksi. Ini melibatkan penelitian, konseptualisasi, pengembangan, pembuatan prototipe, pengujian, dan evaluasi sebelum produksi.
                                </p>

                                <ul class="services__modal-list">
                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon'></i>
                                        <p class="services__modal-info">
                                            Market and User Research.
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon'></i>
                                        <p class="services__modal-info">
                                            Conceptualization and Ideation.
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon'></i>
                                        <p class="services__modal-info">
                                            Prototype Development.
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon'></i>
                                        <p class="services__modal-info">
                                            Testing and Iterating.  
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon'></i>
                                        <p class="services__modal-info">
                                            Collaboration with the Production Team.
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon'></i>
                                        <p class="services__modal-info">
                                            Evaluation and Optimization.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="services__card">
                        <h3 class="services__title">UI/UX <br> Designer</h3>

                        <span class="services__button">
                            See more <i class='bx bx-right-arrow-alt services__icon'></i>
                        </span>

                        <div class="services__modal">
                            <div class="services__modal-content">
                                <i class='bx bx-x services__modal-close'></i>

                                <h3 class="services__modal-title">UI/UX Designer</h3>
                                <p class="services__modal-description">
                                    UI/UX desain menciptakan antarmuka pengguna yang baik dan pengalaman pengguna yang memuaskan dalam produk digital. UI berfokus pada tampilan visual, sementara UX berfokus pada pengalaman pengguna secara keseluruhan.
                                </p>

                                <ul class="services__modal-list">
                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon'></i>
                                        <p class="services__modal-info">
                                            I develop the user interface.
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon'></i>
                                        <p class="services__modal-info">
                                            Web page development. 
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon'></i>
                                        <p class="services__modal-info">
                                            I create ux element interactions. 
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon'></i>
                                        <p class="services__modal-info">
                                            I position your company brand   
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon'></i>
                                        <p class="services__modal-info">
                                            Design and mockups of products for companies.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="services__card">
                        <h3 class="services__title">Visual <br> Designer</h3>

                        <span class="services__button">
                            See more <i class='bx bx-right-arrow-alt services__icon'></i>
                        </span>

                        <div class="services__modal">
                            <div class="services__modal-content">
                                <i class='bx bx-x services__modal-close'></i>

                                <h3 class="services__modal-title">Visual Designer</h3>
                                <p class="services__modal-description">
                                    Visual desain menciptakan tampilan visual yang menarik dan efektif dalam desain produk atau karya seni. Ini melibatkan pengaturan warna, bentuk, tata letak, dan elemen estetika untuk menyampaikan pesan dengan jelas dan menarik.
                                </p>

                                <ul class="services__modal-list">
                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon'></i>
                                        <p class="services__modal-info">
                                            Color Selection and Settings.
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon'></i>
                                        <p class="services__modal-info">
                                            Typography.
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon'></i>
                                        <p class="services__modal-info">
                                            Layout Settings.
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon'></i>
                                        <p class="services__modal-info">
                                            Use of Form and Visual Style.
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon'></i>
                                        <p class="services__modal-info">
                                            Contrast Settings and Visual Hierarchy.
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon'></i>
                                        <p class="services__modal-info">
                                            Visual Consistency.
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon'></i>
                                        <p class="services__modal-info">
                                            Editing and Optimization.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </section>

            <!--=============== WORK ===============-->
            <section class="work section" id="work">
                <span class="section__subtitle">My Portofolio</span>
                <h2 class="section__title">Recent Works</h2>

                <div class="work__filters">
                    <span class="work__item active-work" data-filter="all">All</span>
                    <span class="work__item" data-filter=".web">Web</span>
                    <span class="work__item" data-filter=".mobile">Mobile</span>
                    <span class="work__item" data-filter=".design">Design</span>
                    <!-- <span class="work__item" data-filter=".tarkam">Tarkam</span> -->
                </div>

                <div class="work__container container grid">
                    <div class="work__card mix web">
                        <img src="assets/img/desain_nestvacation.png" alt="" class="work__img">

                        <h3 class="work__title">UI/UX Web Design “Nestvacation””</h3>

                        <a href="#" class="work__button">
                            Demo <i class='bx bx-right-arrow-alt work__icon'></i>
                        </a>
                    </div>

                    <div class="work__card mix web">
                        <img src="assets/img/desain_website_PT. Gendoel Karya Nusantara.png" alt="" class="work__img">

                        <h3 class="work__title">UI/UX Web Design “PT.GKN”</h3>

                        <a href="#" class="work__button">
                            See more <i class='bx bx-right-arrow-alt work__icon'></i>
                        </a>
                    </div>

                    <div class="work__card mix mobile">
                        <img src="assets/img/desain_kelimartapps.png" alt="" class="work__img">

                        <h3 class="work__title">UI/UX Mobile Design “Kelimart Apps”</h3>

                        <a href="#" class="work__button">
                            See more <i class='bx bx-right-arrow-alt work__icon'></i>
                        </a>
                    </div>

                    <div class="work__card mix mobile">
                        <img src="assets/img/desain_aplikasi DAOB.png" alt="" class="work__img">

                        <h3 class="work__title">UI/UX Mobile Design “DAOB Apps”</h3>

                        <a href="#" class="work__button">
                            See more <i class='bx bx-right-arrow-alt work__icon'></i>
                        </a>
                    </div>

                    <div class="work__card mix mobile">
                        <img src="assets/img/desain_aplikasi U Pocket.png" alt="" class="work__img">

                        <h3 class="work__title">UI/UX Mobile Design “U Pocket Apps”</h3>

                        <a href="#" class="work__button">
                            See more <i class='bx bx-right-arrow-alt work__icon'></i>
                        </a>
                    </div>

                    <div class="work__card mix mobile">
                        <img src="assets/img/desain_likeaspotify.png" alt="" class="work__img">

                        <h3 class="work__title">UI/UX Mobile Design “Like a Spotify”</h3>

                        <a href="#" class="work__button">
                            See more <i class='bx bx-right-arrow-alt work__icon'></i>
                        </a>
                    </div>

                    <div class="work__card mix web">
                        <img src="assets/img/desain_rapatonlinekominfo.png" alt="" class="work__img">

                        <h3 class="work__title">UI/UX Web Design “Rapat Online Kominfo”</h3>

                        <a href="#" class="work__button">
                            See more <i class='bx bx-right-arrow-alt work__icon'></i>
                        </a>
                    </div>

                    <div class="work__card mix design">
                        <img src="assets/img/desain_logo.png" alt="" class="work__img">

                        <h3 class="work__title">Logo Design</h3>

                        <a href="#" class="work__button">
                            See more <i class='bx bx-right-arrow-alt work__icon'></i>
                        </a>
                    </div>

                    <div class="work__card mix design">
                        <img src="assets/img/desain_Jacket.png" alt="" class="work__img">

                        <h3 class="work__title">Desain Jacket</h3>

                        <a href="#" class="work__button">
                            See more <i class='bx bx-right-arrow-alt work__icon'></i>
                        </a>
                    </div>

                    <div class="work__card mix design">
                        <img src="assets/img/desain_logo2.png" alt="" class="work__img">

                        <h3 class="work__title">Logo Design</h3>

                        <a href="#" class="work__button">
                            See more <i class='bx bx-right-arrow-alt work__icon'></i>
                        </a>
                    </div>

                    <div class="work__card mix design">
                        <img src="assets/img/desain_banner.png" alt="" class="work__img">

                        <h3 class="work__title">Banner Design</h3>

                        <a href="#" class="work__button">
                            See more <i class='bx bx-right-arrow-alt work__icon'></i>
                        </a>
                    </div>

                    <div class="work__card mix design">
                        <img src="assets/img/desain_poster.png" alt="" class="work__img">

                        <h3 class="work__title">Poster Design</h3>

                        <a href="#" class="work__button">
                            See more <i class='bx bx-right-arrow-alt work__icon'></i>
                        </a>
                    </div>

                    <div class="work__card mix design">
                        <img src="assets/img/desain_id card.png" alt="" class="work__img">

                        <h3 class="work__title">ID Card Design</h3>

                        <a href="#" class="work__button">
                            See more <i class='bx bx-right-arrow-alt work__icon'></i>
                        </a>
                    </div>

                    <div class="work__card mix design">
                        <img src="assets/img/desain_lanyard.png" alt="" class="work__img">

                        <h3 class="work__title">Lanyard Design</h3>

                        <a href="#" class="work__button">
                            See more <i class='bx bx-right-arrow-alt work__icon'></i>
                        </a>
                    </div>

                    <div class="work__card mix design">
                        <img src="assets/img/desain_sertifikat.png" alt="" class="work__img">

                        <h3 class="work__title">Sertificate Design</h3>

                        <a href="#" class="work__button">
                            See more <i class='bx bx-right-arrow-alt work__icon'></i>
                        </a>
                    </div>

                    <!-- <div class="work__card mix tarkam">
                        <img src="assets/img/work6.png" alt="" class="work__img">

                        <h3 class="work__title">Tarkam</h3>

                        <a href="#" class="work__button">
                            Demo <i class='bx bx-right-arrow-alt work__icon'></i>
                        </a>
                    </div>
                    -->
                </div>
            </section>


            <!--=============== TESTIMONIALS ===============-->
            <section class="testimonial section" id="testimonial">
                <span class="section__subtitle">My Clients say</span>
                <h2 class="section__title">Testimonial</h2>

                <div class="testimonial__container container swiper">
                    <div class="swiper-wrapper">
                        <div class="testimonial__card swiper-slide">
                            <img src="assets/img/testimoni1.png" alt="" class="testimonial__img">

                            <h3 class="testimonial__name">Nadila</h3>
                            <p class="testimonial__description">
                                jujur puas banget sama pelayanannyaa. kakaknya ramah & sabar buat jelasin ke aku yang buta akan desain, buat desainnya penataan layout & pemilihan warna pas, selalu dijelasin detail pokoknya teh sampe paham. kalo bisa ngasih bintang, ak bakal ngasih 100 buat hasil + pelayanannya
                            </p>
                        </div>

                        <!-- <div class="testimonial__card swiper-slide">
                            <img src="assets/img/testimonial2.png" alt="" class="testimonial__img">

                            <h3 class="testimonial__name">Laura</h3>
                            <p class="testimonial__description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione maxime omnis vitae soluta quis ex!
                            </p>
                        </div> -->

                        <div class="testimonial__card swiper-slide">
                            <img src="assets/img/testimoni2.png" alt="" class="testimonial__img">

                            <h3 class="testimonial__name">Rochman</h3>
                            <p class="testimonial__description">
                                desain nya sesuai yg saya mau, tanpa ribet dia bikin yg saya utarakan dg cepat dan hasilnya memuaskan.
                            </p>
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </section>

            <!--=============== CONTACT ===============-->
            <section class="contact section" id="contact">
                <span class="section__subtitle">Get In Touch</span>
                <h2 class="section__title">Contact Me</h2>

                <div class="contact__container container grid">
                    <div class="contact__content">
                        <h3 class="contact__title">Talk to me</h3>

                        <div class="contact__info">
                            <div class="contact__card">
                                <i class="bx bx-mail-send contact__card-icon"></i>
                                <h3 class="contact__card-title">Email</h3>
                                <span class="contact__card-data">kellliyosantonibustle@gmail.com</span>

                                <a href="https://email=kelliyosantonibustle@gmail.com" target="_blank" class="contact__button">
                                    Write me <i class="bx bx-right-arrow-alt contact__button-icon"></i>
                                </a>
                            </div>

                            <div class="contact__card">
                                <i class="bx bxl-whatsapp contact__card-icon"></i>
                                <h3 class="contact__card-title">Whatsapp</h3>
                                <span class="contact__card-data">+62 895 0879 6197</span>

                                <a href="https://api.whatsapp.com/send?phone=+6289508796197&text= Permisi kak apakah bisa membantu saya" target="_blank" class="contact__button">
                                    Write me <i class="bx bx-right-arrow-alt contact__button-icon"></i>
                                </a>
                            </div>

                            <div class="contact__card">
                                <i class="bx bxl-instagram contact__card-icon"></i>
                                <h3 class="contact__card-title">Instagram</h3>
                                <span class="contact__card-data">kelliyosantoni_</span>

                                <a href="https://www.instagram.com/kelliyosantoni_/" target="_blank" class="contact__button">
                                    Write me <i class="bx bx-right-arrow-alt contact__button-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="contact__content">
                        <h3 class="contact__title">Write me your project</h3>

                        <form action="email.php" method="post" class="contact__form">
                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">Names</label>
                                <input type="text" name="name" placeholder="insert your name" class="contact__form-input">
                            </div>

                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">Mail</label>
                                <input type="email" name="email" placeholder="insert your email " class="contact__form-input">
                            </div>

                            <div class="contact__form-div contact__form-area">
                                <label for="" class="contact__form-tag">Project</label>
                                <textarea type="text" name="description"  id="" cols="30" rows="10" placeholder="Write your project" class="contact__form-input"></textarea>
                            </div>

                            <button class="button" type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </section>
        </main>

        <!--=============== FOOTER ===============-->
        <footer class="footer">
            <div class="footer__container container">
                <h1 class="footer__title">Kelliyos</h1>

                <ul class="footer__list">
                    <li>
                        <a href="#about" class="footer__link">About</a>
                    </li>
                    <li>
                        <a href="#work" class="footer__link">Projects</a>
                    </li>
                    <li>
                        <a href="#testimonial" class="footer__link">Testimonial</a>
                    </li>
                    <li>
                    <?php
                        $today = date("Y-m-d");
                        $sql = "SELECT * FROM visitors WHERE visit_date = '$today'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $sql = "UPDATE visitors SET visit_count = visit_count + 1 WHERE visit_date = '$today'";
                        } else {
                            $sql = "INSERT INTO visitors (visit_date, visit_count) VALUES ('$today', 1)";
                        }

                        if ($conn->query($sql) === TRUE) {
                        }

                        $sql = "SELECT SUM(visit_count) as total_visits FROM visitors";
                        $result = $conn->query($sql);
                        $total_visits = 0;

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $total_visits = $row['total_visits'];
                        }

                        $conn->close();
                        ?>
                        <a class="footer__link">Visitors: <?php echo $total_visits; ?></a>
                    </li>
                </ul>

                <ul class="footer__social">
                    <a href="" target="_blank" class="footer__social-link">
                        <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="" target="_blank" class="footer__social-link">
                        <i class="bx bxl-instagram"></i>
                    </a>
                    <a href="" target="_blank" class="footer__social-link">
                        <i class="bx bxl-twitter"></i>
                    </a>
                </ul>

                <span class="footer__copy">
                    &#169; Kelliyos Antoni. All right reserved
                </span>
            </div>
        </footer>

        <!--=============== SCROLLREVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--=============== MIXITUP FILTER ===============-->
        <script src="assets/js/mixitup.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>