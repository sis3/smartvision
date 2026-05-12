@extends('app')

@section('title', 'Accueil')
@section('content')
            <main>
                <!-- hero area start  -->
                <section class="hero" data-background="{{ asset('assets/img/hero/hero-bg.png')}}">
                    <div class="container">
                        <div class="hero__inner">
                            <div class="hero__content">
                                <h1 class="hero-title">
                                    Smart Vision
                                    <span class="des">
                                    </span>
                                    <img class="arrow" src="{{ asset('assets/img/hero/hero-arrow.png')}}" alt="image">
                                    Branding <br> Communication et corporate

                                    <img class="circle" src="{{ asset('assets/img/hero/hero-shape.png')}}" alt="image">
                                </h1>

                            </div>
                        </div>
                    </div>
                </section>
                <!-- hero area start  -->

                <section class="hero-video">
                    <div class="hero-video__wrapper">
                        <div class="work">
                            <h6></h6>
                        </div>
                        <div class="hero__play">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=8oON21G1Bqg">
                                <svg width="18" height="22" viewBox="0 0 18 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 11L0 0.607697V21.3923L18 11Z" fill="black">
                                </svg>
                            </a>

                            <a class="popup-video has--play" href="https://www.youtube.com/watch?v=8oON21G1Bqg">
                                <span>LIRE</span>
                            </a>
                        </div>
                        <div class="play">
                            <h6><a href="#about">SCROLL VERS LE BAS</a></h6>
                        </div>
                    </div>
                </section>

                <section class="about-us theme-bg-gray section-space-top">
                    <div class="container">
                        <div class="about-us__inner">
                            <h6 class="about-us__sub-title wow fade-in-left" data-wow-delay="600ms">
                                <span>Smart Vision</span>
                            </h6>
                            <div class="about-us__content wow fade-in-bottom" data-wow-delay="600ms">
                                <p> Le branding ne commence pas par un logo.
                                    Il commence par une décision stratégique.

                                    <br> Nous aidons les entreprises et institutions à structurer leur marque et leur
                                    communication
                                    afin de transformer leur image en levier de crédibilité, de fidélisation et de
                                    ventes durables.Beaucoup d’entreprises communiquent. Peu ont une marque réellement
                                    structurée pour vendre et durer.
                                </p>

                                <a href="" class="btn-black" style="background-color: white; color: black;">Plus de
                                    détails
                                </a>Plus
                            </div>
                            <span class="about-us__date wow fade-in-right" data-wow-delay="600ms"></span>
                        </div>
                        <br>
                        <br>
                        <br>
                    </div>
                </section>

                <!-- counter area start  -->

                <!-- counter area end  -->

                <!-- experience area start  -->
                <section id="about" class="experience">
                    <div class="experience__media">
                        {{-- <img src="{{ asset('assets/img/services/experience.jpg')}}" alt="image"> --}}

                        <div class="experience__card">
                            <div class="experience__card-wrapper">
                                <h2 class="number">15+</h2>
                                <p>
                                    We have over a 15 years of experience in design,
                                    development, production, and support of modern digital
                                    solutions.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- experience area end  -->

                <section class="mission-statement section-space"
                    data-background="assets/img/our-services/mission-statement-bg.png">
                    <div class="container">
                        <div class="mission-statement__top wow fade-in-bottom" data-wow-delay="600ms">
                            <h4 class="sub-title">
                                Notre Vision
                                <span><svg width="25" height="31" viewBox="0 0 25 31" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15 28.3333L13.8217 29.5117L15 30.69L16.1783 29.5117L15 28.3333ZM1.66667 0C1.22464 0 0.800716 0.175595 0.488156 0.488155C0.175595 0.800716 0 1.22464 0 1.66667C0 2.10869 0.175595 2.53262 0.488156 2.84518C0.800716 3.15774 1.22464 3.33333 1.66667 3.33333V0ZM5.48833 21.1783L13.8217 29.5117L16.1783 27.155L7.845 18.8217L5.48833 21.1783ZM16.1783 29.5117L24.5117 21.1783L22.155 18.8217L13.8217 27.155L16.1783 29.5117ZM16.6667 28.3333V11.6667H13.3333V28.3333H16.6667ZM5 0H1.66667V3.33333H5V0ZM16.6667 11.6667C16.6667 8.57247 15.4375 5.60501 13.2496 3.41709C11.0617 1.22916 8.09419 0 5 0V3.33333C7.21014 3.33333 9.32975 4.21131 10.8926 5.77411C12.4554 7.33691 13.3333 9.45653 13.3333 11.6667H16.6667Z"
                                            fill="#B3EC11"></path>
                                    </svg>
                                </span>
                            </h4>
                            <div class="mission-statement__item wow fade-in-bottom" data-wow-delay="600ms">
                                <h5 class="title">Une marque </h5>
                                <h5 class="title has--border">
                                    claire
                                    <span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.99984 2H19.9165M19.9165 2V19.9167M19.9165 2L1.99984 19.9167"
                                                stroke="black" stroke-width="3" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </h5>
                                <h5 class="title">simplifie la</h5>
                            </div>
                            <div class="mission-statement__item wow fade-in-bottom" data-wow-delay="600ms">
                                <h5 class="title has--border">
                                    décision
                                    <span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.99984 2H19.9165M19.9165 2V19.9167M19.9165 2L1.99984 19.9167"
                                                stroke="black" stroke-width="3" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </h5>
                                <h5 class="title">d'achat</h5>
                            </div>
                        </div>

                        <div class="mission-statement__content wow fade-in-bottom" data-wow-delay="600ms">
                            <p class="description">
                                Nous croyons que le branding n’est ni esthétique ni décoratif.
                                C’est un outil stratégique qui permet à une organisation d’être comprise
                                rapidement, d’inspirer confiance, de créer une expérience cohérente, et de générer des
                                résultats mesurables. <br> <br>
                                Une marque claire simplifie la décision d’achat. Une marque floue rend toute
                                communication coûteuse et inefficace.La visibilité sans
                                clarté devient une dépense.
                                La clarté transforme chaque action en investissement.
                            </p>
                            <br>
                            <div class="mission-statement__box">
                                <h2 style="color: black;"><span class="odometer" data-count="50"
                                        style="color: black;">0</span>+</h2>
                                <p style="color: black;">
                                    Des projets réussis, menés avec excellence et précision
                                </p>
                            </div>
                            <div class="mission-statement__wrapper">
                                <div class="item-box">
                                    <h4 style="color: black;"><span class="odometer" data-count="99"
                                            style="color: black;">0</span>%</h4>
                                    <p style="color: black;">La satisfaction de nos clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- services area start  -->
                <section class="our-services section-space">
                    <div class="container">
                        <div class="section-2-title-wrapper wow fade-in-bottom" data-wow-delay="600ms">
                            <div class="section-2__top">
                                <h6 class="left-sub-title">Notre expertise</h6>
                                <h6 class="right-sub-title"></h6>
                            </div>
                            <div class="section-2__bottom">
                                <h3 class="title">
                                    Nos expertises couvrent l’ensemble des leviers nécessaires
                                    à la construction et au déploiement d’une marque claire, crédible et cohérente.
                                </h3>
                            </div>
                        </div>

                        <div class="our-services__wrapper section-space-top">
                            <div class="our-services__item wow fade-in-bottom" data-wow-delay="600ms">
                                <div class="title-wrapper">
                                    <h3 class="title rr-title-anim">
                                        <a href="#">Brand Strategy</a> <span></span>
                                    </h3>
                                </div>
                                <div class="our-services__media">
                                    <div class="section-2__bottom">
                                        <h5 class="title">
                                            Structuration de l’ADN de marque, clarification de la vision,
                                            définition de la promesse et du positionnement.
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="our-services__item wow fade-in-bottom" data-wow-delay="600ms">
                                <div class="title-wrapper">
                                    <h3 class="title rr-title-anim">
                                        <a href="#">Communication Corporate</a> <span></span>
                                    </h3>
                                </div>
                                <div class="our-services__media">
                                    <div class="section-2__bottom">
                                        <h5 class="title">
                                            Construction d’une communication institutionnelle claire, cohérente
                                            et alignée avec la réalité de l’organisation.
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="our-services__item wow fade-in-bottom" data-wow-delay="600ms">
                                <div class="title-wrapper">
                                    <h3 class="title rr-title-anim">
                                        <a href="#">Brand Design</a> <span></span>
                                    </h3>
                                </div>
                                <div class="our-services__media">
                                    <div class="section-2__bottom">
                                        <h5 class="title">
                                            Création d’identités visuelles pensées
                                            comme des outils de crédibilité, jamais comme une finalité.
                                        </h5>
                                    </div>

                                </div>
                            </div>
                            <div class="our-services__item wow fade-in-bottom" data-wow-delay="600ms">
                                <div class="title-wrapper">
                                    <h3 class="title rr-title-anim">
                                        <a href="#">Personal Branding</a> <span></span>
                                    </h3>
                                </div>
                                <div class="our-services__media">
                                    <div class="section-2__bottom">
                                        <h5 class="title">
                                            Accompagnement des dirigeants et leaders dans la structuration d’une
                                            image cohérente et maîtrisée.
                                        </h5>
                                    </div>
                                </div>
                            </div>

                            <div class="our-services__item wow fade-in-bottom" data-wow-delay="600ms">
                                <div class="title-wrapper">
                                    <h3 class="title rr-title-anim">
                                        <a href="#">Brand Content et Storytelling </a> <span></span>
                                    </h3>
                                </div>
                                <div class="our-services__media">
                                    <div class="section-2__bottom">
                                        <h5 class="title">
                                            Clarification des messages clés et construction d’un discoursde marque
                                            lisible et impactant.
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="our-services__item wow fade-in-bottom" data-wow-delay="600ms">
                                <div class="title-wrapper">
                                    <h3 class="title rr-title-anim">
                                        <a href="#">Digital Marketing et Réseaux Sociaux</a> <span></span>
                                    </h3>
                                </div>
                                <div class="our-services__media">
                                    <div class="section-2__bottom">
                                        <h5 class="title">
                                            Déploiement de stratégies digitales
                                            au service de la notoriété, de la confiance et de la conversion.
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- services area end  -->

                <section class="working-process section-space-top">
                    <div class="container">
                        <div class="section-2-title-wrapper wow fade-in-bottom" data-wow-delay="600ms">
                            <div class="section-2__top">
                                <h6 class="left-sub-title">Notre méthode</h6>
                                <h6 class="right-sub-title"></h6>
                            </div>
                            <div class="section-2__bottom">
                                <h3 class="title">
                                    Notre méthode repose sur une logique claire :
                                    clarifier avant de communiquer, structurer avant de vendre.

                                </h3>
                            </div>
                        </div>
                        <div class="working-process__wrapper section-space-top">
                            <div class="working-process__item">
                                <div class="content">
                                    <span>001</span>
                                    <p>
                                        Comprendre Analyse de la vision, des objectifs, du contexte
                                        et des réalités terrain de l’organisation.
                                    </p>
                                </div>
                            </div>
                            <div class="working-process__item">
                                <div class="content">
                                    <span>002</span>
                                    <p>
                                        Structurer Clarification de l’identité, des messages, de l’offre
                                        et de la promesse de marque.
                                    </p>
                                </div>
                            </div>
                            <div class="working-process__item">
                                <div class="content">
                                    <span>003</span>
                                    <p>
                                        Aligner Harmonisation de l’image, des supports
                                        et de l’expérience client à chaque point de contact.
                                    </p>
                                </div>
                            </div>
                            <div class="working-process__item">
                                <div class="content">
                                    <span>004</span>
                                    <p>
                                        Activer Déploiement cohérent de la communication
                                        et accompagnement opérationnel.
                                    </p>
                                </div>
                            </div>
                            <div class="working-process__item">
                                <div class="content">
                                    <span>005</span>
                                    <p>
                                        Fidéliser Construction d’une relation durable
                                        et d’une communauté alignée autour de la marque.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="section-2-title-wrapper wow fade-in-bottom" data-wow-delay="600ms">
                            <div class="section-2__bottom">
                                <h3 class="title">
                                    Sans méthode, les résultats restent occasionnels.
                                    Avec une marque structurée, la croissance devient prévisible.

                                </h3>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- portfolio area start  -->
                <section class="portfolio section-space">
                    <div class="container">
                        <div class="section__wrapper">
                            <div class="section-sub__wrapper">
                                <h6>Portfolio</h6>
                                <span></span>
                            </div>

                            <div class="section__wrap">
                                <h2 class="section-title rr-title-anim">REALISATIONS </h2>
                                <div class="section__content">
                                    <p>
                                        Pour des raisons de confidentialité,
                                        les stratégies de marque développées pour nos clients
                                        ne sont pas rendues publiques.Les projets présentés illustrent toutefois :notre
                                        exigence de cohérence,notre approche stratégique,et la qualité des univers
                                        visuels produits
                                    </p>

                                    <a href="blog-details" class="btn-black btn-white" style="color: black;">NOS
                                        PROJETS<img src="{{ asset('assets/img/icon/star-black.png')}}" alt="image"></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-inner">
                            <div class="portfolio-wrapper">
                                @forelse($projects->slice(0,3) as $project)
                                <div class="portfolio__item wow fade-in-bottom {{ $project->is_span_2 ? 'span-2' : '' }}"
                                    data-wow-delay="600ms">
                                    <div class="thumb" data-cursor-text="Voir">
                                        <a href="{{ $project->project_url ?: '#' }}">
                                            <img src="{{ asset('storage/' . $project->image) }}"
                                                alt="{{ $project->title }}">
                                        </a>
                                        @if($project->tags && count($project->tags) > 0)
                                        <ul class="tags">
                                            @foreach($project->tags as $index => $tag)
                                            <li>{{ $tag['tag'] }}@if(!$loop->last) // @endif</li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </div>
                                    <div class="content">
                                        <h3 class="title rr-title-anim">{{ $project->title }}</h3>
                                        @if($project->date)
                                        <span class="date">// {{ $project->date }}</span>
                                        @endif
                                    </div>
                                </div>
                                @empty
                                <div class="col-12">
                                    <div class="no-projects-message text-center py-5">
                                        <div class="" role="alert">
                                            <i class="fa-solid fa-folder-open fa-3x mb-3"></i>
                                            <h4>Aucun projet disponible</h4>
                                            <p>Désolé, il n'y a pas de projets pour le moment. Revenez bientôt !</p>
                                        </div>
                                    </div>
                                </div>
                                @endforelse
                            </div>
                        </div>


                    </div>
                </section>
                <!-- portfolio area end  -->


                <!-- blog area start  -->
                <section class="blog section-space">
                    <div class="container">
                        <div class="section__wrapper">
                            <div class="section-sub__wrapper">
                                <h6>Actualités</h6>
                                <span></span>
                            </div>

                            <div class="section__wrap">
                                <h2 class="section-title rr-title-anim">ARTICLES</h2>
                                <div class="section__content">
                                    <p>
                                        Ici, nous mettons à votre disposition des contenus soigneusement conçus pour
                                        vous informer, vous inspirer et renforcer vos compétences.
                                    </p>

                                    <a href="blog-details" class="btn-black btn-white" style="color: black;">VOIR<img
                                            src="{{ asset('assets/img/icon/star-black.png')}}" alt="image"></a>
                                </div>
                            </div>
                        </div>

                        <div class="row gutter-30 mb-minus-30">
                            @forelse($posts->slice(0,3) as $post)
                            <div class="col-lg-6 col-xl-4">
                                <div class="blog__item wow fade-in-bottom" data-wow-delay="600ms">
                                    <div class="blog-media">
                                        <a href="{{ route('blog.details', $post->slug) }}">
                                            <img src="{{ $post->image ? asset('storage/' . $post->image) : asset('assets/img/blog/blog-1.jpg') }}"
                                                alt="{{ $post->title }}">
                                        </a>
                                    </div>
                                    <ul class="blog-meta__list">
                                        <li>{{ $post->category ?? 'insight' }}</li>
                                        <li>{{ $post->created_at ? $post->created_at->format('d F, Y') : '25 march,
                                            2025' }}</li>
                                    </ul>
                                    <h4 class="blog-title rr-title-anim">
                                        <a href="{{ route('blog.details', $post->slug) }}">{{ $post->title }}</a>
                                    </h4>
                                    <p class="blog-excerpt">{{ Str::limit($post->excerpt ?? $post->content, 100) }}</p>
                                    <a class="read-more" href="{{ route('blog.details', $post->slug) }}">Read more
                                        <span><i class="fa-solid fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                            @empty
                            <div class="col-12">
                                <div class="no-articles-message text-center py-5">
                                    <div class="" role="alert">
                                        <i class="fa-solid fa-newspaper fa-3x mb-3"></i>
                                        <h4>Aucun article disponible</h4>
                                        <p>Désolé, il n'y a pas d'articles pour le moment. Revenez bientôt pour
                                            découvrir nos nouveaux contenus !</p>
                                    </div>
                                </div>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </section>
                <!-- blog area end  -->

                <section class="blog section-space">
                    <div class="container">
                        <div class="section__wrapper">
                            <div class="section-sub__wrapper">
                                <h6>FORMATION</h6>
                                <span></span>
                            </div>

                            <div class="section__wrap">
                                <h2 class="section-title rr-title-anim">Se former</h2>
                                <div class="section__content">
                                    <p>
                                        Nous vous proposons du contenu utile, pratique et directement applicable, pour
                                        transformer vos idées en compétences réelles.
                                    </p>

                                    <a href="blog-details" class="btn-black btn-white" style="color: black;">VOIR<img
                                            src="{{ asset('assets/img/icon/star-black.png')}}" alt="image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- cta area start  -->
                <!-- cta area end  -->

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
