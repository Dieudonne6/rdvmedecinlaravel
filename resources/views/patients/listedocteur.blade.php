@extends('base')


<body>



<section class="doctors-area ptb-100">

    <div class="container">
        <div class="section-title">
            <h2>Rencontrer Nos Docteurs</h2>
        </div>
        
        <div class="row">
            @foreach ($docteur as $docteur)
            <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                <div class="doctor-item">
                    <div class="doctor-top">
                        <img src="/storage/docteur/{{ $docteur->document }}" alt="Doctor">
                        <a href="appointment.html">Get Appointment</a>
                    </div>
                    <div class="doctor-bottom">
                        <h3>
                            <a href="doctor-details.html">Dr.{{ $docteur->name }}</a>
                        </h3>
                        <span>{{ $docteur->service }}</span>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
        <div class="doctor-btn">
            <a href="doctor.html">See All</a>
        </div>
    </div>

</section>


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