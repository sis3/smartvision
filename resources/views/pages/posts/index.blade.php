@extends('app')
@section('title', 'Articles')

@section('content')
<main>
    <div class="breadcrumb" data-background="assets/img/breadcrumb/breadcrumb.png">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content text-center">
                        <h2 class="title">Actualités</h2>
                        <p>

                            Découvrez notre blog pour en savoir plus sur notre processus créatif
                            <br>
                            Événements à venir et remises de prix.
                        </p>
                    </div>
                    <div class="breadcrumb__menu section-space-top">
                        <nav>
                            <ul>
                                <li>
                                    <span><a href="{{ route('home')}}">Accueil</a></span>
                                </li>
                                <li class="active"><span>Actualités</span></li>
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

    <section class="insights theme-bg-light section-space">
        <div class="container-fluid">
            <div class="section-title-wrapper wow fade-in-bottom" data-wow-delay="600ms">
                <h2 class="title"> <span>Actualités</span> & Articles</h2>
            </div>
        </div>
        <div class="container">
            <div class="insights__inner">
                @forelse($posts as $post)
                <div class="insights__item wow fade-in-bottom" data-wow-delay="600ms">
                    <div class="insights__media">
                        <a href="{{ route('posts.show', $post->slug) }}">
                            <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}">
                        </a>
                    </div>

                    <div class="insights__content">
                        <ul class="insight-list">
                            <li>
                                <span>Actualité</span>
                                5 mins
                            </li>
                        </ul>

                        <h4 class="title rr-title-anim">
                            <a href="{{ route('posts.show', $post->slug) }}">
                                {{ $post->title }}
                            </a>
                        </h4>

                        <ul class="meta-list">
                            <li>Administrateur</li>
                            <li>{{ $post->created_at->format('d.m.Y') }}</li>
                        </ul>
                    </div>

                    <div class="insights__btn">
                        <a href="{{ route('posts.show', $post->slug) }}" class="btn-primary btn-black-2">
                            Lire plus
                        </a>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center">
                    <div class="">
                        <h4 class="text-black">Aucun article disponible</h4>
                        <p class="text-black">Les actualités et articles seront publiés prochainement.</p>
                    </div>
                </div>
                @endforelse

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
