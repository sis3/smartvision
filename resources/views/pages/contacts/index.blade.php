@extends('app')

@section('title', 'Contact')
@section('content')
<main>
    <div class="breadcrumb" data-background="assets/img/breadcrumb/breadcrumb.png">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content text-center">
                        <h2 class="title">CONTACT US</h2>
                        <p>
                            Drop us a line to get your next creative project started.
                            We'd love to hear from you.
                        </p>
                    </div>
                    <div class="breadcrumb__menu section-space-top">
                        <nav>
                            <ul>
                                <li>
                                    <span><a href="index.html">Home</a></span>
                                </li>
                                <li class="active"><span>CONTACT US</span></li>
                            </ul>
                        </nav>
                        <div class="scroll-down">
                            <h6>
                                <a href="#contact">
                                    Scroll Down <i class="fa-solid fa-arrow-down"></i></a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog area start -->
    <section id="contact" class="contact-info-area section-space-top">
        <div class="container">
            <div class="section-title-wrapper">
                <h3 class="title">
                    Partnering with global brands, founders, startups, and VCs to
                    deliver brands that drive profitable growth and lasting
                    impact.
                </h3>
            </div>
            <div class="wrapper section-space-top">
                <div class="contact-info__item">
                    <div class="contact-info-widget">
                        <h3>Get in touch</h3>
                    </div>
                    <div class="contact-info-widget-link">
                        <h5>New Business.</h5>
                        <h5><a href="">contact99@gmail.com</a></h5>
                    </div>
                    <div class="contact-info-widget-link">
                        <h5>Join the Team.</h5>
                        <h5><a href="">domin22@rejouice.com</a></h5>
                    </div>
                </div>
                <div class="contact-info__item">
                    <div class="contact-info-widget">
                        <h3>Get in touch</h3>
                    </div>
                    <div class="contact-info-widget-link">
                        <h5>
                            <a href="">4375 30th Street <br>
                                California, 92104 <br>
                                USA</a>
                        </h5>
                    </div>
                    <div class="contact-info-widget-link">
                        <h5>Join the Team.</h5>
                        <h5><a href="">domin22@rejouice.com</a></h5>
                    </div>
                </div>
                <div class="contact-info__item">
                    <div class="contact-info-widget">
                        <h3>Get in touch</h3>
                    </div>
                    <div class="contact-info-widget-link">
                        <h5>New Business.</h5>
                        <h5><a href="">contact99@gmail.com</a></h5>
                    </div>
                    <div class="contact-info-widget-link">
                        <h5>Join the Team.</h5>
                        <h5><a href="">domin22@rejouice.com</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog area end -->
    <!-- contact-area start -->
    <section class="contact-area section-space">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="contact-us__area">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <div class="contact-us__form-wrapper">
                                        <h2 class="title">We’ve been waiting for you!</h2>
                                        <form class="contact-us__form" id="contact-us__form" method="POST"
                                            action="./mail.php">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="contact-us__input wow fadeInLeft" data-wow-delay=".4s">
                                                        <input type="text" id="name" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="contact-us__input wow fadeInLeft" data-wow-delay=".5s">
                                                        <input id="password" type="password" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="contact-us__input wow fadeInLeft" data-wow-delay=".5s">
                                                        <input id="number" type="number" placeholder="Phone">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="contact-us__input wow fadeInLeft" data-wow-delay=".5s">
                                                        <input id="Subject" type="text" placeholder="Subject">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="contact-us__textarea wow fadeInLeft"
                                                        data-wow-delay=".7s">
                                                        <textarea name="textarea" id="textarea" cols="30" rows="10"
                                                            placeholder="Write Your Message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit"
                                                        class="btn-black btn-white rr-btnn mt-20 wow fadeInLeft"
                                                        data-wow-delay=".8s">
                                                        Submit Message
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-thumb">
                            <img src="assets/img/contact/contact-img-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area end -->
    <!-- footer area start  -->
    <footer class="footer-area">
        <div class="footer-bg" data-background="assets/img/footer/footer-bg.png')}}">
            <div class="container">
                <div class="footer-top-inner">
                    <div class="text">
                        <p>ÉCRIVEZ-NOUS ET NOUS VOUS CONTACTERONS !</p>
                    </div>
                    <div class="footer-socail">
                        <ul>
                            <li><a href="https://ml.linkedin.com/company/smarts-vision">LINKEDIN</a></li>
                            <li><a href="https://www.facebook.com/visionsmart818/">FACEBOOK</a></li>
                        </ul>
                        <div class="info-link">
                            <a href="mailto:contact@smartvision-ml.com">contact@smartvision-ml.com</a>
                        </div>
                    </div>
                </div>
                <div class="footer-widget-wrapper-box">
                    <div class="footer-widget-wrapper">
                        <div class="footer-widget-box let-talk">
                            <h3 class="let-talk-title">
                                Parlons
                                <a href="{{route('contact')}}"><i class="fa-solid fa-arrow-right"></i></a>
                            </h3>
                            <p>Envie de lancer quelque chose ?</p>
                        </div>
                        <div class="footer-widget-box">
                            <h2 class="title">Liens rapides</h2>
                            <ul class="footer-nav-list">
                                <li><a href="about.html">À propos</a></li>
                                <li><a href="blog-details.html">Actualités</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </div>
                        <div class="footer-widget-box">
                            <h2 class="title">Services</h2>
                            <ul class="footer-nav-list">
                                <li><a href="{{route('contact')}}">Brand Strategy</a></li>
                                <li><a href="{{route('contact')}}"> Communication et corporate</a></li>
                                <li><a href="{{route('contact')}}">Brand Design</a></li>
                                <li><a href="{{route('contact')}}">Personal Branding</a></li>
                            </ul>
                        </div>
                        <div class="footer-widget-box">
                            <h2 class="title">Contacts</h2>
                            <ul class="footer-nav-list">
                                <li>
                                    <a href="{{route('contact')}}">N'tomikorobougou près du GMS</a>
                                </li>
                                <li>
                                    <a href="tel:+22378187300">+223 78-18-73-00 / 66 82 59 94</a>
                                </li>
                                <li>
                                    <a href="{{route('contact')}}">contact@smartvision-ml.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="copyright-area">
                    <div class="copyright-area-inner">
                        <div class="copyright-text">
                            <p class="text">
                                © Copyright {{ Date('Y')}}, All Rights Reserved by
                                <a href="#">Smart Vision</a>
                            </p>
                            <a class="back" href="#">Vers le Haut</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <h4 class="footer-bottom-title" style="font-size: 150px;">SmartVision</h2>
        </div>
    </footer>
    <!-- footer area end  -->
</main>
@endsection
