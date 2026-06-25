@extends('app')
@section('title', 'Formation')

@section('content')
    <style>
    .service-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 15px;
    }

    .service-card {
        cursor: pointer;
        margin: 0;
    }

    .service-card input {
        display: none;
    }

    .service-card span {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 70px;
        padding: 15px;
        text-align: center;
        border: 2px solid #e5e5e5;
        border-radius: 12px;
        background: #fff;
        font-weight: 600;
        transition: all .3s ease;
    }

    .service-card:hover span {
        transform: translateY(-3px);
        border-color: #000;
        box-shadow: 0 10px 25px rgba(0,0,0,.08);
    }

    .service-card input:checked + span {
        background: #111;
        color: #fff;
        border-color: #111;
    }

    .contact-us__input input,
    .contact-us__textarea textarea {
        width: 100%;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 14px 18px;
        transition: .3s;
    }

    .contact-us__input input:focus,
    .contact-us__textarea textarea:focus {
        border-color: #111;
        outline: none;
        box-shadow: 0 0 0 4px rgba(0,0,0,.08);
    }
    </style>
<main>
    <div class="breadcrumb" data-background="assets/img/breadcrumb/breadcrumb.png">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content text-center">
                        <h2 class="title"> Parlons de votre projet</h2>
                        <p>
                            Vous souhaitez renforcer votre marque, structurer votre communication, développer votre visibilité ou valoriser votre expertise ?
                        </p>
                    </div>
                    <div class="breadcrumb__menu section-space-top">
                        <nav>
                            <ul>
                                <li>
                                    <span><a href="{{ route('home')}}">Accueil</a></span>
                                </li>
                                <li class="active"><span>Formation</span></li>
                            </ul>
                        </nav>
                        <div class="scroll-down">
                            <h6>
                                <a href="#">
                                    {{-- vers le bas <i class="fa-solid fa-arrow-down"></i></a> --}}
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="contact" class="contact-info-area section-space-top">
        <div class="container">
            <div class="section-title-wrapper">
                <h3 class="title">
               Que ce soit pour un projet de branding, de communication, de marketing, de couverture média, de personal branding ou de formation, notre équipe est à votre écoute.
                </h3>
            </div>
    </section>
    <section class="contact-area section-space">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-us__area">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <div class="contact-us__form-wrapper">
                                        <h2 class="title">Parlons de vos ambitions !</h2>

                                        <form class="contact-us__form" id="contact-us__form" method="POST" action="{{ route('contact.submit') }}">
                                            @csrf

                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="contact-us__input">
                                                        <input type="text" name="name" placeholder="Nom complet *" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="contact-us__input">
                                                        <input type="email" name="email" placeholder="Adresse email *" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="contact-us__input">
                                                        <input type="tel" name="phone" placeholder="Numéro de téléphone">
                                                    </div>
                                                </div>

                                                <div class="col-12 mt-4">
                                                    <h5 class="mb-3">
                                                        Quel service vous intéresse ?
                                                    </h5>

                                                    <div class="service-grid">

                                                        @foreach ($formations as $formation)
                                                            <label class="service-card">
                                                                <input
                                                                    type="radio"
                                                                    name="subject"
                                                                    value="{{ $formation->id }}"
                                                                    {{ old('subject') == $formation->id ? 'checked' : '' }}
                                                                    required
                                                                >
                                                                <span>{{ $formation->title }}</span>
                                                            </label>
                                                        @endforeach

                                                    </div>
                                                </div>

                                                <div class="col-12 mt-4">
                                                    <div class="contact-us__textarea">
                                                        <textarea
                                                            name="message"
                                                            rows="6"
                                                            placeholder="Décrivez votre besoin ou votre projet..."
                                                            required></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-12 mt-4 mb-4">
                                                    <button type="submit" class="rr-btn">
                                                        <span class="btn-wrap">
                                                            <span class="text-one">Envoyer la demande</span>
                                                            <span class="text-two">Envoyer la demande</span>
                                                        </span>
                                                    </button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
