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
                                <a href="#" class="nav-link  active">Accueil</a>
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
                                <a href="{{ route('apropos') }}" class="nav-link">A Propos</a>
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
                            <img style="width: 45px; height: 45px;" src="/storage/patients/{{ auth()->user()->img }}" alt="">

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


    <div class="home-slider owl-theme owl-carousel">
        <div class="slider-item slider-item-img">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="slider-text">
                            <div class="slider-shape">
                                <img src="assets/img/home-one/home-slider/1.png" alt="Shape">
                            </div>
                            <h1>Soins de Santé Exceptionnels pour Tous</h1>
                            <p> 
                                 Prenez le contrôle de votre bien-être dès aujourd'hui en planifiant
                                  votre prochain rendez-vous médical en ligne. Votre bien-être est au cœur de tout ce que nous faisons.</p>
                            <div class="common-btn">
                                <a href="{{ route('prendrerendezvous') }}" style="text-decoration: none">PRENDRE RENDEZ-VOUS</a>
                                <a class="cmn-btn-right" href="{{ route('apropos') }}" style="text-decoration: none">Lire plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item slider-item-img">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="slider-text">
                            <div class="slider-shape-two">
                                <img src="assets/img/home-one/home-slider/2.png" alt="Shape">
                            </div>
                            <h1>Prendre Soin de sa Santé est Primordiale</h1>
                            <p>Nous comprenons l'importance de la commodité et de l'accessibilité en matière de soins de santé.
                                C'est pourquoi nous avons rendu la prise de rendez-vous plus facile que jamais.</p>
                                <div class="common-btn">
                                    <a href="appointment.html" style="text-decoration: none">PRENDRE RENDEZ-VOUS</a>
                                    <a class="cmn-btn-right" href="{{ route('apropos') }}" style="text-decoration: none">Lire plus</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item slider-item-img">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="slider-text">
                            <div class="slider-shape-three">
                                <img src="assets/img/home-one/home-slider/3.png" alt="Shape">
                            </div>
                            <h1>Nous Offrons un Traitement de Qualite</h1>
                            <p> Notre système de réservation en ligne rapide et convivial 
                                vous permet de fixer facilement des rendez-vous adaptés à votre emploi du temps chargé.</p>
                                <div class="common-btn">
                                    <a href="appointment.html" style="text-decoration: none">PRENDRE RENDEZ-VOUS</a>
                                    <a class="cmn-btn-right" href="{{ route('apropos') }}" style="text-decoration: none">Lire plus</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="counter-area">
        <div class="container">
            <div class="row counter-bg">
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="counter-item">
                        <i class="icofont-patient-bed"></i>
                        <h3>
                            <span class="odometer" data-count="850">00</span>
                        </h3>
                        <p>Patients Beds</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="counter-item">
                        <i class="icofont-doctor-alt"></i>
                        <h3>
                            <span class="odometer" data-count="1000+">00</span>
                        </h3>
                        <p>Patient & Heureux</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="counter-item">
                        <i class="icofont-doctor-alt"></i>
                        <h3>
                            <span class="odometer" data-count="750">00</span>
                        </h3>
                        <p>Docteurs & Infirmier</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="counter-item">
                        <i class="icofont-badge"></i>
                        <h3>
                            <span class="odometer" data-count="5">00</span>
                        </h3>
                        <p>Anees d'Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="about-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-item">
                        <div class="about-left">
                            <img src="assets/img/home-one/4.jpg" alt="About">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-item about-right">
                        <img src="assets/img/home-one/5.png" alt="About">
                        <h2>A Propos de Nous</h2>
                        <p>Chez MEDSEV, nous croyons en la fourniture de
                             soins de santé de qualité supérieure qui mettent l'accent sur la
                             compassion, la commodité et la personnalisation. Fondée avec la
                              vision de rendre les soins de santé accessibles et sans tracas, notre clinique est dédiée à offrir des solutions de santé complètes pour répondre aux besoins variés de nos patients. </p>
                        <ul>
                            <li>
                                <i class="icofont-check-circled"></i>
                                Visiter notre Site Web
                            </li>
                            <li>
                                <i class="icofont-check-circled"></i>
                                Choisir un Service
                            </li>
                            <li>
                                <i class="icofont-check-circled"></i>
                                Envoyer un Messege
                            </li>
                        </ul>
                        <a href="{{ route('apropos') }}"  style="text-decoration: none">Voir d'Avantage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="services-area pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Nos differents Services</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-item">
                        <div class="service-front">
                            <i class="icofont-doctor"></i>
                            <h3>Consultation en cardiologie</h3>
                            <p>Bénéficiez d'une évaluation complète de votre santé cardiovasculaire.</p>
                        </div>
                        <div class="service-end">
                            <i class="icofont-doctor"></i>
                            <h3>Consultation en cardiologier</h3>
                            <p>Bénéficiez d'une évaluation complète de votre santé cardiovasculaire.</p>
                            <a href="{{ route('services') }}" style="text-decoration: none">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".5s">
                    <div class="service-item">
                        <div class="service-front">
                            <i class="icofont-prescription"></i>
                            <h3>Consultation médicale générale </h3>
                            <p>Consultez nos médecins qualifiés pour des examens et des évaluations pour votre bien-être.</p>
                        </div>
                        <div class="service-end">
                            <i class="icofont-prescription"></i>
                            <h3>Consultation médicale générale </h3>
                            <p>Consultez nos médecins qualifiés pour des examens et des évaluations pour votre bien-être.</p>
                            <a href="{{ route('services') }}" style="text-decoration: none">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".7s">
                    <div class="service-item">
                        <div class="service-front">
                            <i class="icofont-patient-file"></i>
                            <h3>Services de vaccination</h3>
                            <p>Protégez-vous et votre famille contre les maladies en programmant des vaccinations régulières ou spécifiques</p>
                        </div>
                        <div class="service-end">
                            <i class="icofont-patient-file"></i>
                            <h3>Services de vaccination</h3>
                            <p>Protégez-vous et votre famille contre les maladies en programmant des vaccinations régulières ou spécifiques</p>
                            <a href="{{ route('services') }}" style="text-decoration: none">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".9s">
                    <div class="service-item">
                        <div class="service-front">
                            <i class="icofont-tooth"></i>
                            <h3>Soins dentaires préventifs</h3>
                            <p>Gardez votre sourire éclatant avec des nettoyages dentaires réguliers .</p>
                        </div>
                        <div class="service-end">
                            <i class="icofont-tooth"></i>
                            <h3>Soins dentaires préventifs</h3>
                            <p>Gardez votre sourire éclatant avec des nettoyages dentaires réguliers .</p>
                            <a href="{{ route('services') }}" style="text-decoration: none">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-item">
                        <div class="service-front">
                            <i class="icofont-heart-beat-alt"></i>
                            <h3>Examens de santé préventifs </h3>
                            <p>Prenez des mesures proactives pour votre santé en planifiant des examens de santé complets</p>
                        </div>
                        <div class="service-end">
                            <i class="icofont-heart-beat-alt"></i>
                            <h3>Examens de santé préventifs </h3>
                            <p>Prenez des mesures proactives pour votre santé en planifiant des examens de santé complets</p>
                            <a href="{{ route('services') }}" style="text-decoration: none">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".5s">
                    <div class="service-item">
                        <div class="service-front">
                            <i class="icofont-drug"></i>
                            <h3>Services de réadaptation </h3>
                            <p>Bénéficiez de programmes de réadaptation complets pour la récupération divers</p>
                        </div>
                        <div class="service-end">
                            <i class="icofont-drug"></i>
                            <h3>Services de réadaptation </h3>
                            <p>Bénéficiez de programmes de réadaptation complets pour la récupération divers</p>
                            <a href="{{ route('services') }}" style="text-decoration: none">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".7s">
                    <div class="service-item">
                        <div class="service-front">
                            <i class="icofont-dna-alt-1"></i>
                            <h3>Services de neurologie</h3>
                            <p>Consultez nos neurologues experts pour vos troubles et d'autres problèmes neurologiques.</p>
                        </div>
                        <div class="service-end">
                            <i class="icofont-dna-alt-1"></i>
                            <h3>Services de neurologie</h3>
                            <p> Consultez nos neurologues experts pour vos troubles et d'autres problèmes neurologiques.</p>
                            <a href="{{ route('services') }}" style="text-decoration: none">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".9s">
                    <div class="service-item">
                        <div class="service-front">
                            <i class="icofont-ambulance-cross"></i>
                            <h3>Services de gastro-entérologie</h3>
                            <p>Obtenez des soins spécialisés pour les troubles digestifs, tels que les reflux acides</p>
                        </div>
                        <div class="service-end">
                            <i class="icofont-ambulance-cross"></i>
                            <h3>Services de gastro-entérologie</h3>
                            <p>Obtenez des soins spécialisés pour les troubles digestifs, tels que les reflux acides</p>
                            <a href="{{ route('services') }}" style="text-decoration: none">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <section class="doctors-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Rencontrer Nos Docteurs</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                    <div class="doctor-item">
                        <div class="doctor-top">
                            <img src="assets/img/home-one/doctor/1.jpg" alt="Doctor">
                            <a href="appointment.html">Get Appointment</a>
                        </div>
                        <div class="doctor-bottom">
                            <h3>
                                <a href="doctor-details.html">Dr. Babatunde</a>
                            </h3>
                            <span>Neurosurgeon</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".5s">
                    <div class="doctor-item">
                        <div class="doctor-top">
                            <img src="assets/img/home-one/doctor/2.jpg" alt="Doctor">
                            <a href="appointment.html">Get Appointment</a>
                        </div>
                        <div class="doctor-bottom">
                            <h3>
                                <a href="doctor-details.html">Dr. Addision Smith</a>
                            </h3>
                            <span>Neurosurgeon</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4 wow fadeInUp" data-wow-delay=".7s">
                    <div class="doctor-item">
                        <div class="doctor-top">
                            <img src="assets/img/home-one/doctor/3.jpg" alt="Doctor">
                            <a href="appointment.html">Get Appointment</a>
                        </div>
                        <div class="doctor-bottom">
                            <h3>
                                <a href="doctor-details.html">Dr. Sarah Tylor</a>
                            </h3>
                            <span>Dental Surgeon</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="doctor-btn">
                <a href="doctor.html">See All</a>
            </div>
        </div>
    </section>


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





    @else
    <p>Vous n'êtes pas connecté. Connectez-vous pour accéder à plus de fonctionnalités.</p>
    <a href="{{ route('connex') }}" class="btn btn-primary">connection</a></div>
@endauth





    <footer class="pb-70">

        <div class="newsletter-area">
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
        </div>

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



