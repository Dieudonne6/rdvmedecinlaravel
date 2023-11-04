@extends('base')


<body>
    @auth

        <div class="loader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="spinner">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-9 col-lg-9">
                        <div class="header-top-item">
                            <div class="header-top-left">
                                <ul>
                                    <li>
                                        <a href="tel:+07554332322">
                                            <i class="icofont-ui-call"></i>
                                            Call : +07 554 332 322
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#5139343d3d3e113c34352234277f323e3c">
                                            <i class="icofont-ui-message"></i>
                                            <span class="__cf_email__"
                                                data-cfemail="2149444d4d4e614c44455244570f424e4c">[email&#160;protected]</span>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="icofont-location-pin"></i>
                                        210-27 Quadra, Canada
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="header-top-item">
                            <div class="header-top-right">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-pinterest"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="navbar-area sticky-top">

            <div class="mobile-nav">
                <a href="index.html" class="logo">
                    <img src="assets/img/logo-two.png" alt="Logo">
                </a>
            </div>

            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/logo.png" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="{{ route('accueil') }}"class="nav-link  ">Accueil</a>
                                    {{-- <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link active">Home Page 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-2.html" class="nav-link">Home Page 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-3.html" class="nav-link">Home Page 3</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-4.html" class="nav-link">Home Page 4</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-5.html" class="nav-link">Home Page 5</a>
                                    </li>
                                </ul> --}}
                                </li>


                                <li class="nav-item">
                                    <a href="about.html" class="nav-link active">A Propos</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="appointment.html" class="nav-link">rendez-vous</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="departments.html" class="nav-link">Department</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="contact.html" class="nav-link">Contact </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="testimonials.html" class="nav-link">Avis</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="privacy-policy.html" class="nav-link">Confidentialite</a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">Services</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="service.html" class="nav-link">Service</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="service-details.html" class="nav-link">Service Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">Docteur</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="doctor.html" class="nav-link">Docteur</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="doctor-details.html" class="nav-link">Docteur Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="login.html" class="nav-link">Deconnexion</a>
                                </li>


                                {{-- <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="blog-details.html" class="nav-link">Blog Details</a>
                                    </li>
                                </ul>
                            </li> --}}

                            </ul>
                            <div style="margin-right: 18px;  display: inline-block; overflow: hidden; border-radius: 100%;">
                                <img style="width: 45px; height: 45px;" src="/storage/patients/{{ auth()->user()->img }}"
                                    alt="">

                            </div>

                            <div class="nav-srh">
                                <div class="search-toggle">

                                    <button class="search-icon icon-search"><i class="icofont-search-1"></i></button>
                                    <button class="search-icon icon-close"><i class="icofont-close"></i></button>
                                    {{-- <img style="width:50px" src="/storage/essai/{{ $essai->img }}" alt=""> --}}
                                </div>

                                <div class="search-area">
                                    <form>
                                        <input type="text" class="src-input" id="search-terms"
                                            placeholder="Search here..." />
                                        <button type="submit" name="submit" value="Go" class="search-icon"><i
                                                class="icofont-search-1"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>




        <div class="page-title-area page-title-four">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="page-title-item">
                        <h2>Service</h2>
                        {{-- <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <i class="icofont-simple-right"></i>
                            </li>
                            <li>A Propos</li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>


        <div class="service-details-area ptb-100">
            <div class="container">
                <div class="services-details-img">
                    <img src="assets/img/service-details-bg.jpg" alt="Service Details">
                    <h2>Nous mettons des specialistes a votre disposition </h2>
                    <p>Notre plateforme médicale s'engage à offrir des soins de santé complets et de haute qualité, en
                        mettant
                        l'accent sur la compassion et la compréhension des besoins individuels. Depuis nos débuts, nous nous
                        efforçons de fournir des solutions de santé accessibles et pratiques pour notre communauté. Notre
                        équipe de médecins expérimentés et dévoués est déterminée à offrir des diagnostics précis et des
                        traitements efficaces, tout en créant un environnement chaleureux et accueillant pour nos patients.
                        Avec l'utilisation des technologies médicales de pointe, nous nous engageons à être votre partenaire
                        de confiance dans votre parcours vers le bien-être et la santé optimale.</p>
                    <blockquote>
                        <i class="icofont-quote-left"></i>
                        Notre engagement envers l'excellence médicale se reflète dans notre approche proactive envers la
                        santé préventive et la gestion des maladies. Nous nous efforçons de rester à jour avec les avancées
                        médicales les plus récentes afin de garantir que nos patients reçoivent les meilleurs soins
                        possibles. En collaborant avec des spécialistes de divers domaines, nous sommes en mesure d'offrir
                        des solutions de traitement complètes et individualisées qui répondent aux besoins uniques de chaque
                        patient. Notre objectif est de promouvoir la santé et le bien-être à long terme pour tous ceux qui
                        franchissent les portes de notre clinique
                    </blockquote>

                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="service-details-inner-left">
                            <img src="assets/img/signup-bg.jpg" alt="Service">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="service-details-inner">
                            <h2>Nous prenons toujours soin de nos patients</h2>
                            <p>Chez MEDSEV, notre priorité est de veiller au bien-être de nos patients
                                à chaque étape de leur parcours de soins. Nous croyons en une approche holistique qui va
                                au-delà du traitement des symptômes, en mettant l'accent sur la compréhension approfondie
                                des besoins individuels et des préoccupations de chaque patient. Notre équipe dévouée
                                d'infirmières et de professionnels de la santé est toujours prête à offrir un soutien
                                attentionné et empathique, créant un environnement où nos patients se sentent en sécurité et
                                pris en charge. Nous nous engageons à fournir des soins de qualité supérieure et à mettre en
                                place les mesures nécessaires pour garantir que chaque visite chez nous soit une expérience
                                confortable et bénéfique pour votre santé à long terme.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="blog-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Our Latest Blogs</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="blog-item">
                            <div class="blog-top">
                                <a href="blog-details.html">
                                    <img src="assets/img/home-one/11.jpg" alt="Blog">
                                </a>
                            </div>
                            <div class="blog-bottom">
                                <h3>
                                    <a href="blog-details.html">In this hospital there are special surgeon.</a>
                                </h3>
                                <p>Lorem ipsum is dolor sit amet, csectetur adipiscing elit, dolore smod tempor incididunt
                                    ut labore et....</p>
                                <ul>
                                    <li>
                                        <a href="blog-details.html">
                                            Read More
                                            <i class="icofont-long-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        Jan 03, 2020
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".5s">
                        <div class="blog-item">
                            <div class="blog-top">
                                <a href="blog-details.html">
                                    <img src="assets/img/home-one/12.jpg" alt="Blog">
                                </a>
                            </div>
                            <div class="blog-bottom">
                                <h3>
                                    <a href="blog-details.html">World AIDS Day, designated on 1 December.</a>
                                </h3>
                                <p>Lorem ipsum is dolor sit amet, csectetur adipiscing elit, dolore smod tempor incididunt
                                    ut labore et....</p>
                                <ul>
                                    <li>
                                        <a href="blog-details.html">
                                            Read More
                                            <i class="icofont-long-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        Jan 03, 2020
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4 wow fadeInUp" data-wow-delay=".7s">
                        <div class="blog-item">
                            <div class="blog-top">
                                <a href="blog-details.html">
                                    <img src="assets/img/home-one/13.jpg" alt="Blog">
                                </a>
                            </div>
                            <div class="blog-bottom">
                                <h3>
                                    <a href="blog-details.html">More than 80 clinical trials launch to test
                                        coronavirus.</a>
                                </h3>
                                <p>Lorem ipsum is dolor sit amet, csectetur adipiscing elit, dolore smod tempor incididunt
                                    ut labore et....</p>
                                <ul>
                                    <li>
                                        <a href="blog-details.html">
                                            Read More
                                            <i class="icofont-long-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        Jan 03, 2020
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




    <footer class="pb-70">

        {{-- <div class="newsletter-area">
        <div class="container">
            <div class="row newsletter-wrap align-items-center">
                <div class="col-lg-7">
                    <div class="newsletter-item">
                        <h2>Join Our Newsletter</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="newsletter-item">
                        <div class="newsletter-form">
                            <form class="newsletter-form" data-toggle="validator">
                                <input type="email" class="form-control" placeholder="Enter Your Email"
                                    name="EMAIL" required autocomplete="off">
                                <button class="btn newsletter-btn" type="submit">
                                    Subscribe
                                </button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="footer-item">
                        <div class="footer-contact">
                            <h3>Contact Us</h3>
                            <ul>
                                <li>
                                    <i class="icofont-ui-message"></i>
                                    <a
                                        href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#88e1e6eee7c8e5edece1fbedfea6ebe7e5"><span
                                            class="__cf_email__"
                                            data-cfemail="b0d9ded6dff0ddd5d4d9c3d5c69ed3dfdd">[email&#160;protected]</span></a>
                                    <a
                                        href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#3b535e5757547b565e5f52485e4d15585456"><span
                                            class="__cf_email__"
                                            data-cfemail="563e333a3a39163b33323f2533207835393b">[email&#160;protected]</span></a>
                                </li>
                                <li>
                                    <i class="icofont-stock-mobile"></i>
                                    <a href="tel:+07554332322">Call: +07 554 332 322</a>
                                    <a href="tel:+236256256365">Call: +236 256 256 365</a>
                                </li>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    210-27 Quadra, Market Street,<br> Victoria Canada
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="footer-item">
                        <div class="footer-quick">
                            <h3>Quick Links</h3>
                            <ul>
                                <li>
                                    <a href="about.html">About us</a>
                                </li>
                                <li>
                                    <a href="blog.html">Blog</a>
                                </li>
                                <li>
                                    <a href="blog-details.html">Our Expertise</a>
                                </li>
                                <li>
                                    <a href="faq.html">Faq</a>
                                </li>
                                <li>
                                    <a href="doctor.html">Doctors</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-quick">
                            <h3>Our Services</h3>
                            <ul>
                                <li>
                                    <a href="#">Dental Care</a>
                                </li>
                                <li>
                                    <a href="#">Cardiology</a>
                                </li>
                                <li>
                                    <a href="#">Hijama Therapy</a>
                                </li>
                                <li>
                                    <a href="#">Massage Therapy</a>
                                </li>
                                <li>
                                    <a href="#">Ambluance Sevices</a>
                                </li>
                                <li>
                                    <a href="#">Medicine</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-feedback">
                            <h3>Feedback</h3>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="your_message" rows="5" placeholder="Message"></textarea>
                                </div>
                                <div class="text-left">
                                    <button type="submit" class="btn feedback-btn">SUBMIT</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    @else
    @include('index')
 @endauth
