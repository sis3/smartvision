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
        box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
    }

    .service-card input:checked+span {
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
        box-shadow: 0 0 0 4px rgba(0, 0, 0, .08);
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
                            Vous souhaitez renforcer votre marque, structurer votre communication, développer votre
                            visibilité ou valoriser votre expertise ?
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
            <!-- Message de succès en haut de la section -->
            @if(session('success'))
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-success"
                        style="background-color: #d4edda; color: #155724; padding: 20px; border-radius: 10px; margin-bottom: 30px; border: 1px solid #c3e6cb; text-align: center; font-size: 1.1rem;">
                        <i class="fas fa-check-circle" style="margin-right: 10px;"></i>
                        {{ session('success') }}
                    </div>
                </div>
            </div>
            @endif
            <div class="section-title-wrapper">
                <h3 class="title">
                    Que ce soit pour un projet de branding, de communication, de marketing, de couverture média, de
                    personal branding ou de formation, notre équipe est à votre écoute.
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

                                        <form class="contact-us__form" id="contact-us__form" method="POST"
                                            action="{{ route('contact.submit') }}">
                                            @csrf

                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="contact-us__input">
                                                        <input type="text" name="name" placeholder="Nom complet *"
                                                            onclick="event.preventDefault();" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="contact-us__input">
                                                        <input type="email" name="email" placeholder="Adresse email *"
                                                            onclick="event.preventDefault();" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="contact-us__input">
                                                        <input type="tel" name="phone" placeholder="+223 ... *"
                                                            onclick="event.preventDefault();" required>
                                                    </div>
                                                </div>

                                                <div class="col-12 mt-4">
                                                    <h5 class="mb-3">
                                                        Quel service vous intéresse ?
                                                    </h5>

                                                    <div class="service-grid">
                                                        @foreach ($formations as $formation)
                                                        <label class="service-card">
                                                            <input type="radio" name="formation_id"
                                                                value="{{ $formation->id }}" {{
                                                                old('formation_id')==$formation->id ? 'checked' : '' }}
                                                            required>
                                                            <span>{{ $formation->title }}</span>
                                                        </label>
                                                        @endforeach
                                                    </div>
                                                </div>

                                                <div class="col-12 mt-4">
                                                    <div class="contact-us__textarea">
                                                        <textarea name="message" rows="6"
                                                            placeholder="Décrivez votre besoin ou votre projet..."
                                                            onclick="event.preventDefault();" required></textarea>
                                                    </div>
                                                </div>

                                                <!-- CAPTCHA SECTION -->
                                                <div class="col-12 mt-4">
                                                    <div class="captcha-wrapper"
                                                        style="background: #f8f9fa; padding: 20px; border-radius: 12px; border: 1px solid #e9ecef;">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-4">
                                                                <label style="font-weight: 600; margin-bottom: 0;">
                                                                    <i class="fas fa-shield-alt"
                                                                        style="color: #c51718; margin-right: 8px;"></i>
                                                                    Vérification
                                                                </label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="d-flex align-items-center gap-3 flex-wrap">
                                                                    <span id="captchaQuestion"
                                                                        style="font-size: 1.1rem; font-weight: 500; background: white; padding: 8px 16px; border-radius: 8px; border: 1px solid #dee2e6;">
                                                                        <!-- Généré par JavaScript -->
                                                                    </span>
                                                                    <span
                                                                        style="font-weight: 600; color: #6c757d;">=</span>
                                                                    <input type="number" id="captchaAnswer"
                                                                        onclick="event.preventDefault();"
                                                                        placeholder="Résultat" style="
                                width: 120px;
                                padding: 10px 15px;
                                border: 2px solid #dee2e6;
                                border-radius: 8px;
                                font-size: 1rem;
                                transition: all 0.3s;
                                text-align: center;
                            ">
                                                                    <button type="button" id="refreshCaptcha" style="
                                background: none;
                                border: none;
                                color: #c51718;
                                font-size: 1.2rem;
                                cursor: pointer;
                                padding: 8px;
                                transition: transform 0.3s;
                            " onmouseover="this.style.transform='rotate(180deg)'"
                                                                        onmouseout="this.style.transform='rotate(0deg)'">
                                                                        <i class="fas fa-sync-alt"></i>
                                                                    </button>
                                                                </div>
                                                                <div id="captchaError"
                                                                    style="color: #dc3545; font-size: 0.9rem; margin-top: 8px; display: none;">
                                                                    <i class="fas fa-exclamation-circle"></i> Réponse
                                                                    incorrecte, veuillez réessayer.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 mt-4 mb-4">
                                                    <button type="submit" id="submitBtn" class="btn-black"
                                                        style="background-color: #c51718">
                                                        <span class="btn-wrap">
                                                            <span class="text-one" style="color: #000">Envoyer la
                                                                demande</span>
                                                        </span>
                                                    </button>
                                                </div>

                                            </div>
                                        </form>

                                        <!-- JavaScript pour le captcha -->
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
    let num1, num2, operation, correctAnswer;

    // Fonction pour générer une nouvelle question
    function generateCaptcha() {
        // Choisir aléatoirement l'opération (0: addition, 1: multiplication)
        const opType = Math.floor(Math.random() * 2);

        if (opType === 0) {
            // Addition
            num1 = Math.floor(Math.random() * 10) + 1;
            num2 = Math.floor(Math.random() * 10) + 1;
            operation = '+';
            correctAnswer = num1 + num2;
            document.getElementById('captchaQuestion').textContent = `${num1} + ${num2}`;
        } else {
            // Multiplication
            num1 = Math.floor(Math.random() * 9) + 1;
            num2 = Math.floor(Math.random() * 9) + 1;
            operation = '×';
            correctAnswer = num1 * num2;
            document.getElementById('captchaQuestion').textContent = `${num1} × ${num2}`;
        }

        // Réinitialiser le champ et cacher l'erreur
        document.getElementById('captchaAnswer').value = '';
        document.getElementById('captchaError').style.display = 'none';
        document.getElementById('captchaAnswer').style.borderColor = '#dee2e6';
    }

    // Générer le premier captcha
    generateCaptcha();

    // Rafraîchir le captcha
    document.getElementById('refreshCaptcha').addEventListener('click', generateCaptcha);

    // Valider le captcha avant soumission
    document.getElementById('contact-us__form').addEventListener('submit', function(e) {
        const userAnswer = parseInt(document.getElementById('captchaAnswer').value);
        const errorDiv = document.getElementById('captchaError');
        const answerInput = document.getElementById('captchaAnswer');

        // Vérifier si la réponse est vide ou incorrecte
        if (isNaN(userAnswer) || userAnswer !== correctAnswer) {
            e.preventDefault(); // Empêcher la soumission
            errorDiv.style.display = 'block';
            answerInput.style.borderColor = '#dc3545';
            answerInput.style.boxShadow = '0 0 0 4px rgba(220, 53, 69, 0.1)';

            // Secouer le champ
            answerInput.style.animation = 'shake 0.5s ease';
            setTimeout(() => {
                answerInput.style.animation = '';
            }, 500);

            // Générer une nouvelle question après erreur
            setTimeout(generateCaptcha, 1000);
        } else {
            // Succès - le formulaire sera soumis normalement
            document.getElementById('submitBtn').innerHTML = `
                <span class="btn-wrap">
                    <span class="text-one"><i class="fas fa-spinner fa-spin"></i> Envoi en cours...</span>
                </span>
            `;
            document.getElementById('submitBtn').disabled = true;
        }
    });

    // Réinitialiser le style du champ quand l'utilisateur tape
    document.getElementById('captchaAnswer').addEventListener('input', function() {
        this.style.borderColor = '#dee2e6';
        this.style.boxShadow = 'none';
        document.getElementById('captchaError').style.display = 'none';
    });

    // Permettre la soumission avec la touche Entrée sur le champ captcha
    document.getElementById('captchaAnswer').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            document.getElementById('contact-us__form').dispatchEvent(new Event('submit'));
        }
    });
});

// Animation CSS pour le shake
const styleSheet = document.createElement("style");
styleSheet.textContent = `
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
        20%, 40%, 60%, 80% { transform: translateX(5px); }
    }
`;
document.head.appendChild(styleSheet);
                                        </script>
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
            <h4 class="footer-bottom-title">SmartVision</h2>
        </div>
    </footer>
    <!-- footer area end  -->
</main>
@endsection
