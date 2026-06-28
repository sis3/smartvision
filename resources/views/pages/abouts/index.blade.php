@extends('app')

@section('title', 'À Propos - Smart Vision')
@section('content')
<main>
    <!-- Breadcrumb -->
    <div class="breadcrumb" data-background="assets/img/breadcrumb/breadcrumb.png">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content text-center">
                        <h2 class="title">À Propos</h2>
                        <p>
                            Le branding ne commence pas par un logo. Il commence par une décision stratégique.
                            Nous aidons les entreprises et institutions à structurer leur marque et leur communication
                            afin de transformer leur image en levier de crédibilité, de fidélisation et de ventes durables.
                        </p>
                    </div>
                    <div class="breadcrumb__menu section-space-top">
                        <nav>
                            <ul>
                                <li>
                                    <span><a href="{{ route('home') }}">Accueil</a></span>
                                </li>
                                <li class="active"><span>À Propos</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vision Section -->
    <section class="insights theme-bg-light section-space">
        <div class="container">
            <div class="section-title-wrapper wow fade-in-bottom" data-wow-delay="600ms">
                <span class="subtitle">NOTRE VISION</span>
                <h2 class="title">Transformer l'image en <span>levier de croissance</span></h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-center">
                        <p class="lead" style="font-size: 1.2rem; color: #333; margin-bottom: 30px;">
                            Beaucoup d'entreprises communiquent. Peu ont une marque réellement structurée pour vendre et durer.
                        </p>
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <div class="vision-card p-4" style="background: white; border-radius: 12px; box-shadow: 0 5px 25px rgba(0,0,0,0.08); height: 100%;">
                                    <h4 style="color: #1a1a1a; font-weight: 700;">Ce que nous croyons</h4>
                                    <p style="color: #555; line-height: 1.8;">
                                        Le branding n'est ni esthétique ni décoratif. C'est un outil stratégique qui permet à une organisation :
                                    </p>
                                    <ul style="list-style: none; padding: 0; text-align: left; color: #555;">
                                        <li style="padding: 5px 0;">✓ d'être comprise rapidement</li>
                                        <li style="padding: 5px 0;">✓ d'inspirer confiance</li>
                                        <li style="padding: 5px 0;">✓ de créer une expérience cohérente</li>
                                        <li style="padding: 5px 0;">✓ et de générer des résultats mesurables</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="vision-card p-4" style="background: #f8f9fa; border-radius: 12px; box-shadow: 0 5px 25px rgba(0,0,0,0.08); height: 100%;">
                                    <h4 style="color: #1a1a1a; font-weight: 700;">Notre conviction</h4>
                                    <p style="color: #555; line-height: 1.8;">
                                        Une marque claire simplifie la décision d'achat.<br>
                                        Une marque floue rend toute communication coûteuse et inefficace.
                                    </p>
                                    <div style="margin-top: 20px; padding: 15px; background: #1a1a1a; border-radius: 8px;">
                                        <p style="color: white; font-weight: 500; margin: 0;">
                                            "La visibilité sans clarté devient une dépense.<br>
                                            La clarté transforme chaque action en investissement."
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Expertise Section -->
    <section class="insights section-space" style="background: #f8f9fa;">
        <div class="container">
            <div class="section-title-wrapper wow fade-in-bottom" data-wow-delay="600ms">
                <span class="subtitle">NOTRE EXPERTISE</span>
                <h2 class="title">Des compétences au service de votre <span>marque</span></h2>
                <p>Nos expertises couvrent l'ensemble des leviers nécessaires à la construction et au déploiement d'une marque claire, crédible et cohérente.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="expertise-card p-4" style="background: white; border-radius: 12px; box-shadow: 0 5px 25px rgba(0,0,0,0.08); height: 100%; transition: transform 0.3s;">
                        <h4 style="color: #1a1a1a; font-weight: 700;">Brand Strategy</h4>
                        <p style="color: #555;">Structuration de l'ADN de marque, clarification de la vision, définition de la promesse et du positionnement.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="expertise-card p-4" style="background: white; border-radius: 12px; box-shadow: 0 5px 25px rgba(0,0,0,0.08); height: 100%;">
                        <h4 style="color: #1a1a1a; font-weight: 700;">Communication Corporate</h4>
                        <p style="color: #555;">Construction d'une communication institutionnelle claire, cohérente et alignée avec la réalité de l'organisation.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="expertise-card p-4" style="background: white; border-radius: 12px; box-shadow: 0 5px 25px rgba(0,0,0,0.08); height: 100%;">
                        <h4 style="color: #1a1a1a; font-weight: 700;">Brand Design</h4>
                        <p style="color: #555;">Création d'identités visuelles pensées comme des outils de crédibilité, jamais comme une finalité.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="expertise-card p-4" style="background: white; border-radius: 12px; box-shadow: 0 5px 25px rgba(0,0,0,0.08); height: 100%;">
                        <h4 style="color: #1a1a1a; font-weight: 700;">Personal Branding</h4>
                        <p style="color: #555;">Accompagnement des dirigeants et leaders dans la structuration d'une image cohérente et maîtrisée.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="expertise-card p-4" style="background: white; border-radius: 12px; box-shadow: 0 5px 25px rgba(0,0,0,0.08); height: 100%;">
                        <h4 style="color: #1a1a1a; font-weight: 700;">Brand Content & Storytelling</h4>
                        <p style="color: #555;">Clarification des messages clés et construction d'un discours de marque lisible et impactant.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="expertise-card p-4" style="background: white; border-radius: 12px; box-shadow: 0 5px 25px rgba(0,0,0,0.08); height: 100%;">
                        <h4 style="color: #1a1a1a; font-weight: 700;">Digital Marketing & Réseaux Sociaux</h4>
                        <p style="color: #555;">Déploiement de stratégies digitales au service de la notoriété, de la confiance et de la conversion.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <p style="font-style: italic; color: #555;">Nous ne multiplions pas les actions. Nous alignons la marque avant de l'exposer.</p>
                <a href="{{ route('formations') }}" class="btn-primary btn-black-2 mt-3">Demander un accompagnement stratégique</a>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="footer-area">
        <div class="footer-bg" data-background="assets/img/footer/footer-bg.png">
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
                                <a href="{{ route('contact') }}"><i class="fa-solid fa-arrow-right"></i></a>
                            </h3>
                            <p>Envie de lancer quelque chose ?</p>
                        </div>
                        <div class="footer-widget-box">
                            <h2 class="title">Liens rapides</h2>
                            <ul class="footer-nav-list">
                                <li><a href="{{ route('about') }}">À propos</a></li>
                                <li><a href="{{ route('posts') }}">Actualités</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                        <div class="footer-widget-box">
                            <h2 class="title">Services</h2>
                            <ul class="footer-nav-list">
                                <li><a href="{{ route('contact') }}">Brand Strategy</a></li>
                                <li><a href="{{ route('contact') }}">Communication et corporate</a></li>
                                <li><a href="{{ route('contact') }}">Brand Design</a></li>
                                <li><a href="{{ route('contact') }}">Personal Branding</a></li>
                            </ul>
                        </div>
                        <div class="footer-widget-box">
                            <h2 class="title">Contacts</h2>
                            <ul class="footer-nav-list">
                                <li>
                                    <a href="{{ route('contact') }}">N'tomikorobougou près du GMS</a>
                                </li>
                                <li>
                                    <a href="tel:+22378187300">+223 78-18-73-00 / 66 82 59 94</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">contact@smartvision-ml.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="copyright-area">
                    <div class="copyright-area-inner">
                        <div class="copyright-text">
                            <p class="text">
                                © Copyright {{ date('Y') }}, All Rights Reserved by
                                <a href="#">Smart Vision</a>
                            </p>
                            <a class="back" href="#">Vers le Haut</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <h4 class="footer-bottom-title"  >SmartVision</h4>
        </div>
    </footer>
</main>
@endsection
