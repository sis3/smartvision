@extends('app')

@section('title', 'A-propos')
@section('content')
<main>
    <!-- about area start  -->
    <section class="about" data-background="assets/img/about/bg.png">
        <div class="container">
            <div class="about-inner">
                <div class="shape upDown">
                </div>

                <h2 class="title">
                    Creative design <br>
                    solution agency
                </h2>
            </div>
        </div>
    </section>
    <!-- about area end  -->



    <!--our-team area start  -->
    <section class="our-team section-space">
        <div class="container">
            <div class="section-2-title-wrapper wow fade-in-bottom" data-wow-delay="600ms">
                <div class="section-2__top">
                    <h6 class="left-sub-title">Our Team Members</h6>
                    <h6 class="right-sub-title">Working Worldwide</h6>
                </div>
                <div class="section-2__bottom">
                    <h3 class="title">
                        Our talented team of experts is dedicated to delivering the
                        best results with skill, creativity, and professionalism.
                    </h3>
                    <a href="#" class="btn-primary">View All Members</a>
                </div>
            </div>

            <div class="row gutter-30 mb-minus-30 section-space-top">
                <div class="col-lg-6 col-xl-4">
                    <div class="our-team__item">
                        <div class="media">
                            <img src="assets/img/our-team/member-1.jpg" alt="image">
                        </div>
                        <div class="content">
                            <p>
                                Design Director <br>
                                & CEO
                            </p>
                            <h5 class="title">
                                <a href="#">
                                    Adrian <br>
                                    Miles</a>
                            </h5>

                            <ul class="socail">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Linkedin</a></li>
                                <li><a href="#">Instagram</a></li>
                                <li><a href="#">Dribbble</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="our-team__item">
                        <div class="media">
                            <img src="assets/img/our-team/member-3.jpg" alt="image">
                        </div>
                        <div class="content">
                            <p>
                                Design Director <br>
                                & CEO
                            </p>
                            <h5 class="title">
                                <a href="#">
                                    Adrian <br>
                                    Miles</a>
                            </h5>

                            <ul class="socail">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Linkedin</a></li>
                                <li><a href="#">Instagram</a></li>
                                <li><a href="#">Dribbble</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="our-team__item">
                        <div class="media">
                            <img src="assets/img/our-team/member-2.jpg" alt="image">
                        </div>
                        <div class="content">
                            <p>
                                Design Director <br>
                                & CEO
                            </p>
                            <h5 class="title">
                                <a href="#">
                                    Adrian <br>
                                    Miles</a>
                            </h5>

                            <ul class="socail">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Linkedin</a></li>
                                <li><a href="#">Instagram</a></li>
                                <li><a href="#">Dribbble</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our-team area end  -->


    <!--about-video area start  -->
    <div class="about-video">
        <div class="container">
            <div class="media">
                <img src="assets/img/approach/video.jpg" alt="image">
                <div class="video">
                    <a class="popup-video"
                        href="https://www.youtube.com/watch?v=fIlvm3WSSCo&list=RD_80SAWi9bcw&index=15">
                        <img src="assets/img/hero-2/intro.png" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--about-video area start  -->

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
