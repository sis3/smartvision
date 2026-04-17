@extends('layouts.app')

@section('content')

<header class="header slider-fade">
    <div class="owl-carousel owl-theme">
        <div class="item bg-img" data-overlay-dark="7" data-background="{{ asset('assets/images/slider/5.jpg') }}">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12 text-center mt-60">
                            <h1><span>Le branding ne commence pas par un logo.</span><br>Il commence par une décision stratégique</h1>
                            <p>Nous aidons les entreprises et institutions à structurer leur marque et leur communication<br>
                            afin de transformer leur image en levier de crédibilité, de fidélisation et de ventes durables.<br>
                            Beaucoup d'entreprises communiquent.<br>
                            Peu ont une marque réellement structurée pour vendre et durer.</p>
                            <a href="contact.html" class="btn-1 mt-15">Contactez-nous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item bg-img" data-overlay-dark="7" data-background="{{ asset('assets/images/slider/6.jpg') }}">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mt-60">
                            <h1><span>Expression</span><br>de Marque</h1>
                            <p>Nous créons de nouvelles narrations et un contenu pour<br>engager plus d'audience à travers une histoire.</p>
                            <a href="contact.html" class="btn-1 mt-15">Contactez-nous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item bg-img" data-overlay-dark="5" data-background="{{ asset('assets/images/slider/4.jpg') }}">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-md-12 text-end mt-60">
                            <h1><span>Motion</span><br>& Vidéo</h1>
                            <p>Nous traduisons vos idées en animation motion<br>et vidéos explicatives.</p>
                            <a href="contact.html" class="btn-1 mt-15">Contactez-nous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</header>

<div class="line-vr-section"></div>

<!-- NOTRE VISION -->
<section class="services section-padding">
    <div class="container">
        <div class="row mb-30">
            <div class="col-md-12 text-center">
                <h6 class="wow" data-splitting>Smart Vision</h6>
                <h1 class="wow" data-splitting>Notre Vision</h1>
                <div class="line-hr-section center"></div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <p style="font-size: 1.2rem; font-weight: 500;">Nous croyons que le branding n'est ni esthétique ni décoratif.<br>C'est un outil stratégique qui permet à une organisation :</p>
                <ul style="list-style: none; padding: 0; margin: 1.5rem 0;">
                    <li>✓ d'être comprise rapidement,</li>
                    <li>✓ d'inspirer confiance,</li>
                    <li>✓ de créer une expérience cohérente,</li>
                    <li>✓ et de générer des résultats mesurables.</li>
                </ul>
                <div style="background: #f5f5f5; padding: 1.5rem; border-radius: 12px;">
                    <p><strong>Une marque claire simplifie la décision d'achat.</strong><br>Une marque floue rend toute communication coûteuse et inefficace.</p>
                    <p style="margin-top: 0.8rem;">La visibilité sans clarté devient une dépense.<br><strong>La clarté transforme chaque action en investissement.</strong></p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="line-vr-section"></div>

<!-- NOTRE EXPERTISE -->
<section class="services section-padding bg-drk">
    <div class="container">
        <div class="row mb-30">
            <div class="col-md-12 text-center">
                <h6 class="wow" data-splitting>Savoir-faire</h6>
                <h1 class="wow" data-splitting>Notre Expertise</h1>
                <div class="line-hr-section center"></div>
                <p class="mt-20">Nos expertises couvrent l'ensemble des leviers nécessaires<br>à la construction et au déploiement d'une marque claire, crédible et cohérente.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <div class="item"><div class="wrap"><div class="con"><h4>Brand Strategy</h4><p>Structuration de l'ADN de marque, clarification de la vision, définition de la promesse et du positionnement.</p></div></div></div>
                    <div class="item"><div class="wrap"><div class="con"><h4>Communication Corporate</h4><p>Construction d'une communication institutionnelle claire, cohérente et alignée avec la réalité de l'organisation.</p></div></div></div>
                    <div class="item"><div class="wrap"><div class="con"><h4>Brand Design</h4><p>Création d'identités visuelles pensées comme des outils de crédibilité, jamais comme une finalité.</p></div></div></div>
                    <div class="item"><div class="wrap"><div class="con"><h4>Personal Branding</h4><p>Accompagnement des dirigeants et leaders dans la structuration d'une image cohérente et maîtrisée.</p></div></div></div>
                    <div class="item"><div class="wrap"><div class="con"><h4>Brand Content & Storytelling</h4><p>Clarification des messages clés et construction d'un discours de marque lisible et impactant.</p></div></div></div>
                    <div class="item"><div class="wrap"><div class="con"><h4>Digital Marketing & Réseaux Sociaux</h4><p>Déploiement de stratégies digitales au service de la notoriété, de la confiance et de la conversion.</p></div></div></div>
                </div>
            </div>
        </div>
        <div class="row mt-30">
            <div class="col-md-12 text-center">
                <p style="font-weight: 500;">Nous ne multiplions pas les actions.<br>Nous alignons la marque avant de l'exposer.</p>
                <a href="#" class="btn-1 mt-15">Demander un accompagnement stratégique</a>
            </div>
        </div>
    </div>
</section>

<div class="line-vr-section"></div>

<!-- NOTRE MÉTHODE -->
<section class="services section-padding">
    <div class="container">
        <div class="row mb-30">
            <div class="col-md-12 text-center">
                <h6 class="wow" data-splitting>Processus</h6>
                <h1 class="wow" data-splitting>Notre Méthode</h1>
                <div class="line-hr-section center"></div>
                <p>Notre méthode repose sur une logique claire : clarifier avant de communiquer, structurer avant de vendre.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-4 col-6 mb-30 text-center">
                <div class="step-box">
                    <div class="step-number" style="font-size: 2rem; font-weight: bold;">1</div>
                    <h4>Comprendre</h4>
                    <p>Analyse de la vision, des objectifs, du contexte et des réalités terrain.</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-6 mb-30 text-center">
                <div class="step-box">
                    <div class="step-number" style="font-size: 2rem; font-weight: bold;">2</div>
                    <h4>Structurer</h4>
                    <p>Clarification de l'identité, des messages, de l'offre et de la promesse.</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-6 mb-30 text-center">
                <div class="step-box">
                    <div class="step-number" style="font-size: 2rem; font-weight: bold;">3</div>
                    <h4>Aligner</h4>
                    <p>Harmonisation de l'image, des supports et de l'expérience client.</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-6 mb-30 text-center">
                <div class="step-box">
                    <div class="step-number" style="font-size: 2rem; font-weight: bold;">4</div>
                    <h4>Activer</h4>
                    <p>Déploiement cohérent de la communication et accompagnement opérationnel.</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-6 mb-30 text-center">
                <div class="step-box">
                    <div class="step-number" style="font-size: 2rem; font-weight: bold;">5</div>
                    <h4>Fidéliser</h4>
                    <p>Construction d'une relation durable et d'une communauté alignée.</p>
                </div>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12 text-center">
                <div style="background: #f5f5f5; padding: 1rem; border-radius: 8px;">
                    <p>Sans méthode, les résultats restent occasionnels.<br><strong>Avec une marque structurée, la croissance devient prévisible.</strong></p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="line-vr-section"></div>

<!-- REALISATIONS & REFERENCES -->
<section class="services section-padding bg-drk">
    <div class="container">
        <div class="row mb-30">
            <div class="col-md-12 text-center">
                <h6 class="wow" data-splitting>Portfolio</h6>
                <h1 class="wow" data-splitting>Réalisations & Références</h1>
                <div class="line-hr-section center"></div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <p><em>Pour des raisons de confidentialité, les stratégies de marque développées pour nos clients ne sont pas rendues publiques.<br>Les projets présentés illustrent toutefois : notre exigence de cohérence, notre approche stratégique, et la qualité des univers visuels produits.</em></p>
                <div style="background: #fff; padding: 1.5rem; border-radius: 12px; margin: 1.5rem 0; text-align: left;">
                    <h4>Fiche type projet</h4>
                    <p><strong>Client :</strong> [Confidentiel]<br>
                    <strong>Secteur :</strong> Luxe / Technologie / Institutionnel<br>
                    <strong>Besoin :</strong> Clarification de marque et alignement stratégique<br>
                    <strong>Intervention Smart Vision :</strong> Audit, Brand strategy, identité visuelle et déploiement<br>
                    <strong>Résultat :</strong> Croissance de la confiance et augmentation des leads qualifiés</p>
                </div>
                <p><strong>Une marque forte se juge sur sa cohérence, pas sur la quantité de visuels exposés.</strong></p>
            </div>
        </div>
    </div>
</section>

<div class="line-vr-section"></div>

<!-- FORMATIONS CERTIFIANTES -->
<section class="services section-padding">
    <div class="container">
        <div class="row mb-30">
            <div class="col-md-12 text-center">
                <h6 class="wow" data-splitting>Apprendre</h6>
                <h1 class="wow" data-splitting>Formations Certifiantes</h1>
                <div class="line-hr-section center"></div>
                <p>Smart Vision propose des formations et accompagnements destinés aux entreprises, institutions et établissements académiques,<br>axés sur la pratique, la structuration et l'impact réel.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 mb-30 text-center">
                <div class="step-box">
                    <h4>Personal Branding & Community Management</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-30 text-center">
                <div class="step-box">
                    <h4>Communication Institutionnelle</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-30 text-center">
                <div class="step-box">
                    <h4>Branding stratégique</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-30 text-center">
                <div class="step-box">
                    <h4>Graphisme & Digital Marketing</h4>
                </div>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12 text-center">
                <p style="font-weight: 500;">Former, ce n'est pas transmettre des outils.<br>C'est structurer une manière de penser la marque.</p>
                <a href="#" class="btn-1 mt-15">Demander une formation sur mesure</a>
            </div>
        </div>
    </div>
</section>

<div class="line-vr-section"></div>

<!-- MOTS DU FONDATEUR & INSPIRATIONS -->
<section class="services section-padding bg-drk">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h3>Mots du Fondateur</h3>
                <p style="font-size: 1.1rem; font-style: italic;">« Construire une marque, c'est d'abord faire le choix de la clarté. Nous aidons nos clients à transformer la complexité en avantage. »</p>
                <div class="mt-20">
                    <span>✨ Liens inspirations : </span>
                    <a href="https://www.lagencex.fr/" target="_blank" rel="noopener noreferrer">https://www.lagencex.fr/</a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="line-vr-section"></div>

<!-- NOS OFFRES (conservé à l'identique) -->
<section class="services section-padding">
    <div class="container">
        <div class="row mb-30">
            <div class="col-md-12 text-center">
                <h6 class="wow" data-splitting>L'Agence X</h6>
                <h1 class="wow" data-splitting>Nos Offres</h1>
                <div class="line-hr-section center"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="wrap">
                            <div class="icon-1"><i class="icon et-strategy"></i></div>
                            <div class="con">
                                <h4>Stratégie de Marque</h4>
                                <p>Nous identifions vos besoins et mettons notre créativité au service de votre développement stratégique. <br>(Audit de marque; Plateforme de marque; Brand communication; Stratégie digitale)</p>
                                <div class="icon-2"><a href="strategie-digitale.html"><span class="fa-sharp fa-light fa-arrow-right"></span></a></div>
                            </div>
                            <div class="numb">01</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wrap">
                            <div class="icon-1"><i class="icon et-pencil"></i></div>
                            <div class="con">
                                <h4>Identité de Marque et Branding</h4>
                                <p>Identité globale, stratégie de communication graphique, logo ou encore direction artistique...<br>Nous donnons vie à vos idées.</p>
                                <div class="icon-2"><a href="identite-branding.html"><span class="fa-sharp fa-light fa-arrow-right"></span></a></div>
                            </div>
                            <div class="numb">02</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wrap">
                            <div class="icon-1"><i class="icon et-browser"></i></div>
                            <div class="con">
                                <h4>Gestion et Animation des Réseaux Sociaux</h4>
                                <p>Nous créons de nouvelles narrations et un contenu pour engager plus d'audience à travers une histoire.<br>(Expression digitale de marque)</p>
                                <div class="icon-2"><a href="gestion-rs.html"><span class="fa-sharp fa-light fa-arrow-right"></span></a></div>
                            </div>
                            <div class="numb">03</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wrap">
                            <div class="icon-1"><i class="icon et-video"></i></div>
                            <div class="con">
                                <h4>Motion & Vidéo</h4>
                                <p>Nous identifions votre besoin et traduisons vos idées en animation motion et vidéos explicatives.</p>
                                <div class="icon-2"><a href="motion-video.html"><span class="fa-sharp fa-light fa-arrow-right"></span></a></div>
                            </div>
                            <div class="numb">04</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wrap">
                            <div class="icon-1"><i class="icon et-desktop"></i></div>
                            <div class="con">
                                <h4>Développement Web</h4>
                                <p>Nous concevons et développons toutes sortes de sites et applications web pour les entreprises et particuliers.</p>
                                <div class="icon-2"><a href="developpement-web.html"><span class="fa-sharp fa-light fa-arrow-right"></span></a></div>
                            </div>
                            <div class="numb">05</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wrap">
                            <div class="icon-1"><i class="icon et-book-open"></i></div>
                            <div class="con">
                                <h4>Packaging & Edition</h4>
                                <p>Nous créons et produisons de l'habillage physique et promotionnel d'un produit, d'un bien de consommation mais aussi des livres (book-packaging)</p>
                                <div class="icon-2"><a href="packaging-edition.html"><span class="fa-sharp fa-light fa-arrow-right"></span></a></div>
                            </div>
                            <div class="numb">06</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="line-vr-section"></div>

<!-- Works -->
<section class="works section-padding bg-drk">
    <div class="container">
        <div class="row mb-30">
            <div class="col-md-12 text-center">
                <h6 class="wow" data-splitting>Jetez un coup d'œil à nos derniers coups</h6>
                <h1 class="wow" data-splitting>Nos derniers coups</h1>
                <div class="line-hr-section center"></div>
            </div>
        </div>
    </div>
    <div class="full-width">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    @foreach([1,2,3,4,5,6] as $item)
                    <div class="item">
                        <div class="wrap img-grayscale">
                            <div class="img img-grayscale"><img src="{{ asset('assets/images/work/'.$item.'.jpg') }}" class="img-fluid"></div>
                            <div class="text"><h4>Projet {{ $item }}</h4></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Promo Popup Video -->
<section class="video-popup section-padding bg-img bg-fixed" data-overlay-dark="5" data-background="{{ asset('assets/images/slider/6.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h6 class="wow" data-splitting>L'agence X en Video</h6>
                <h1 class="wow" data-splitting>Spot Video</h1>
            </div>
            <div class="col-md-12 text-center">
                <a class="vid" href="https://youtu.be/52Mw2TrcZBs">
                    <div class="vid-butn"><span class="icon"><i class="fa-regular fa-play"></i></span></div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Team -->
<section class="team section-padding">
    <div class="container">
        <div class="row mb-30">
            <div class="col-md-12 text-center">
                <h6 class="wow" data-splitting>Staff Créatif</h6>
                <h1 class="wow" data-splitting>Nos Agents X</h1>
                <div class="line-hr-section center"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="img img-grayscale"><img src="{{ asset('assets/images/x/01.jpg') }}" alt="" class="w-100"></div>
                        <div class="con">
                            <h5 class="mb-0">Frédéric NDOUNGUE<br><span>Lead Graphic Designer<br>& Co-Founder</span></h5>
                            <div class="arrow"><a href="#0"><i class="fa-solid fa-arrow-up"></i></a></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img img-grayscale"><img src="{{ asset('assets/images/x/02.jpg') }}" alt="" class="w-100"></div>
                        <div class="con">
                            <h5 class="mb-0">Joyce N.<br><span>Head Stratégie Marketing & Co-Founder</span></h5>
                            <div class="arrow"><a href="#0"><i class="fa-solid fa-arrow-up"></i></a></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img img-grayscale"><img src="{{ asset('assets/images/x/03.jpg') }}" alt=""></div>
                        <div class="con">
                            <h5 class="mb-0">Xavier D.<br><span>Motion Designer Senior</span></h5>
                            <div class="arrow"><a href="fred-ndoungue.html"><i class="fa-solid fa-arrow-up"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="line-vr-section"></div>

<!-- Testimonials -->
<section class="testimonials section-padding">
    <div class="container">
        <div class="row mb-30">
            <div class="col-md-12 text-center">
                <h6 class="wow" data-splitting>Nos Partenaires Parlent !</h6>
                <h1 class="wow" data-splitting>Temoignages</h1>
                <div class="line-hr-section center"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="owl-carousel owl-theme">
                    <div class="item"><span class="quote"><i class="fa-solid fa-ditto"></i></span>
                        <p>Nous recommandons l'agence X les yeux fermés ! Leur écoute et leur engagement sont incroyables...</p>
                        <div class="info"><div class="author-img img-grayscale"><img src="{{ asset('assets/images/team/04.jpg') }}" alt=""></div><div class="cont"><h6>Rostand Mouafo</h6><span>DG. ADCO GROUP</span></div></div>
                    </div>
                    <div class="item"><span class="quote"><i class="fa-solid fa-ditto"></i></span>
                        <p>« Une mission parfaitement réussie, des résultats au rendez-vous... »</p>
                        <div class="info"><div class="author-img img-grayscale"><img src="{{ asset('assets/images/team/05.jpg') }}" alt=""></div><div class="cont"><h6>Camel M.</h6><span>Manager Big Pizzo</span></div></div>
                    </div>
                    <div class="item"><span class="quote"><i class="fa-solid fa-ditto"></i></span>
                        <p>Nous sommes très satisfaits des services professionnels fournis par l'agence X...</p>
                        <div class="info"><div class="author-img img-grayscale"><img src="{{ asset('assets/images/team/06.jpg') }}" alt=""></div><div class="cont"><h6>Guy Nyatcha</h6><span>Ceo & founder 3NG Consulting</span></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="line-vr-section"></div>

<!-- Clients -->
<section class="clients section-padding">
    <div class="container">
        <div class="row mb-30">
            <div class="col-md-12 text-center">
                <h6 class="wow" data-splitting>Ils nous font déjà confiance</h6>
                <h1 class="wow" data-splitting>Nos Partenaires</h1>
                <div class="line-hr-section center"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    @for($i=1; $i<=10; $i++)
                    <div class="clients-logo"><a href="#0"><img src="{{ asset('assets/images/clients/'.$i.'.png') }}" alt=""></a></div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Lets Talk -->
<section class="lets-talk background bg-img bg-fixed section-padding" data-overlay-dark="5" data-background="{{ asset('assets/images/banner2.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="wow" data-splitting>Vous avez un projet ?</h4>
                <h5><span>Discutons</span>-en</h5>
                <a href="tel:+237675430811" class="btn-1 mt-30"><i class="fa-solid fa-phone"></i> 675 43 08 11</a>
                <a href="contact.html" class="btn-5 mt-30"><i class="fa-solid fa-paper-plane"></i> Un projet ? Ecrivez-nous</a>
            </div>
        </div>
    </div>
</section>

@endsection
