@extends('app')

@section('title', 'Projet')
@section('content')
<main>
    <div class="breadcrumb" data-background="assets/img/breadcrumb/breadcrumb.png">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content text-center">
                        <h2 class="title">PORTFOLIO</h2>
                        <p>
                            We build beautiful and functional websites that help you
                            <br>
                            achieve your business goals.
                        </p>
                    </div>
                    <div class="breadcrumb__menu section-space-top">
                        <nav>
                            <ul>
                                <li>
                                    <span><a href="index.html">Home</a></span>
                                </li>
                                <li class="active"><span>Portfolio Grid</span></li>
                            </ul>
                        </nav>
                        <div class="scroll-down">
                            <h6>
                                <a href="#portfolio">
                                    Scroll Down <i class="fa-solid fa-arrow-down"></i></a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- portfolio area start  -->
    <section id="portfolio" class="portfolio section-space">
        <div class="container">
            <div class="section__wrapper"></div>
            <div class="portfolio-inner">
                <div class="portfolio-wrapper">
                    <div class="portfolio__item wow fade-in-bottom" data-wow-delay="600ms">
                        <div class="thumb" data-cursor-text="View">
                            <a href="#">
                                <img src="assets/img/portfolio/portfolio-1.jpg" alt="image">
                            </a>
                            <ul class="tags">
                                <li>Branding/</li>
                                <li>Package_Design/</li>
                                <li>Development</li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3 class="title rr-title-anim">Packaging design</h3>
                            <span class="date">// 2024</span>
                        </div>
                    </div>
                    <div class="portfolio__item wow fade-in-bottom" data-wow-delay="600ms">
                        <div class="thumb" data-cursor-text="View">
                            <a href="#">
                                <img src="assets/img/portfolio/portfolio-2.jpg" alt="image">
                            </a>
                            <ul class="tags">
                                <li>Branding/</li>
                                <li>Package_Design/</li>
                                <li>Development</li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3 class="title rr-title-anim">Mobile App Design</h3>
                            <span class="date">// 2024</span>
                        </div>
                    </div>
                    <div class="portfolio__item wow fade-in-bottom" data-wow-delay="600ms">
                        <div class="thumb" data-cursor-text="View">
                            <a href="#">
                                <img src="assets/img/portfolio/portfolio-3.jpg" alt="image">
                            </a>
                            <ul class="tags">
                                <li>Branding/</li>
                                <li>Package_Design/</li>
                                <li>Development</li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3 class="title rr-title-anim">Mockup Design</h3>
                            <span class="date">// 2024</span>
                        </div>
                    </div>
                    <div class="portfolio__item wow fade-in-bottom" data-wow-delay="600ms">
                        <div class="thumb" data-cursor-text="View">
                            <a href="#">
                                <img src="assets/img/portfolio/portfolio-4.jpg" alt="image">
                            </a>
                            <ul class="tags">
                                <li>Branding/</li>
                                <li>Package_Design/</li>
                                <li>Development</li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3 class="title rr-title-anim">Brand Identity Design</h3>
                            <span class="date">// 2024</span>
                        </div>
                    </div>
                    <div class="portfolio__item wow fade-in-bottom" data-wow-delay="600ms">
                        <div class="thumb" data-cursor-text="View">
                            <a href="#">
                                <img src="assets/img/portfolio/portfolio-6.jpg" alt="image">
                            </a>
                            <ul class="tags">
                                <li>Branding/</li>
                                <li>Package_Design/</li>
                                <li>Development</li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3 class="title rr-title-anim">
                                Digital Product Design
                            </h3>
                            <span class="date">// 2024</span>
                        </div>
                    </div>
                    <div class="portfolio__item wow fade-in-bottom" data-wow-delay="600ms">
                        <div class="thumb" data-cursor-text="View">
                            <a href="#">
                                <img src="assets/img/portfolio/portfolio-7.jpg" alt="image">
                            </a>
                            <ul class="tags">
                                <li>Branding/</li>
                                <li>Package_Design/</li>
                                <li>Development</li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3 class="title rr-title-anim">Mobile App Design</h3>
                            <span class="date">// 2024</span>
                        </div>
                    </div>
                    <div class="portfolio__item wow fade-in-bottom" data-wow-delay="600ms">
                        <div class="thumb" data-cursor-text="View">
                            <a href="#">
                                <img src="assets/img/portfolio/portfolio-8.jpg" alt="image">
                            </a>
                            <ul class="tags">
                                <li>Branding/</li>
                                <li>Package_Design/</li>
                                <li>Development</li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3 class="title rr-title-anim">Headphone Mockup</h3>
                            <span class="date">// 2024</span>
                        </div>
                    </div>
                    <div class="portfolio__item wow fade-in-bottom" data-wow-delay="600ms">
                        <div class="thumb" data-cursor-text="View">
                            <a href="#">
                                <img src="assets/img/portfolio/portfolio-9.jpg" alt="image">
                            </a>
                            <ul class="tags">
                                <li>Branding/</li>
                                <li>Package_Design/</li>
                                <li>Development</li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3 class="title rr-title-anim">Brand Identity Design</h3>
                            <span class="date">// 2024</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio area end  -->

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
