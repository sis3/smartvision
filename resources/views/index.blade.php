

@extends('layouts.app')




@section('content')
<section class="hero" data-background="{{ asset('assets/img/hero/hero-bg.png') }}">
  <div class="container">
    <div class="hero__inner">
      <div class="hero__content">
        <h1 class="hero-title">
          Le branding ne commence <br> pas par un logo.
          <span class="des">
            Nous aidons les entreprises et institutions à structurer leur marque et leur communication
            afin de transformer leur image en levier de crédibilité, de fidélisation et de ventes durables.
          </span>
          <br>

          <img
            class="arrow"
            src="{{ asset('assets/img/hero/hero-arrow.png') }}"
            alt="image"
         >

          {{-- Il commence par une décision stratégique. --}}
          <br>

          {{-- Beaucoup d’entreprises communiquent.<br>
          Peu ont une marque réellement structurée pour vendre et durer. --}}

          <img
            class="circle"
            src="{{ asset('assets/img/hero/hero-shape.png') }}"
            alt="image"
         >
        </h1>

        <div class="hero__featured">
          <div class="hero__featured__wrapper">
            <div class="swiper hero__featured__active">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="hero__featured__item">
                    <img src="{{ asset('assets/img/hero/hero.png') }}" alt="image">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="hero__featured__bottom">
            <h6 class="title">Projets réalisés</h6>
            <div class="hero__featured__arrow">
              <div class="hero__featured__prev">
                <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                >
                  <path
                    d="M8 5C8 5.742 7.267 6.85 6.525 7.78C5.571 8.98 4.431 10.027 3.124 10.826C2.144 11.425 0.956 12 0 12M0 12C0.956 12 2.145 12.575 3.124 13.174C4.431 13.974 5.571 15.021 6.525 16.219C7.267 17.15 8 18.26 8 19M0 12H24"
                    stroke="black"
                    stroke-width="1.5"
                  ></path>
                </svg>
              </div>

              <div class="hero__featured__next">
                <svg
                  width="24"
                  height="14"
                  viewBox="0 0 24 14"
                  fill="none"
                >
                  <path
                    d="M16 0C16 0.742 16.733 1.85 17.475 2.78C18.429 3.98 19.569 5.027 20.876 5.826C21.856 6.425 23.044 7 24 7M24 7C23.044 7 21.855 7.575 20.876 8.174C19.569 8.974 18.429 10.021 17.475 11.219C16.733 12.15 16 13.26 16 14M24 7H0"
                    stroke="black"
                    stroke-width="1.5"
                  >
                </svg>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
          <!-- hero area start  -->

    <section class="hero-video">
        <div class="hero-video__wrapper">
            <div class="work">
            <h6><a href="#">NOTRE EXPERTISE</a></h6>
            </div>

            <div class="hero__play">
            <a
                class="popup-video"
                href="https://www.youtube.com/watch?v=8oON21G1Bqg"
            >
                <svg
                width="18"
                height="22"
                viewBox="0 0 18 22"
                fill="none"
                >
                <path d="M18 11L0 0.607697V21.3923L18 11Z" fill="black">
                </svg>
            </a>

            <a
                class="popup-video has--play"
                href="https://www.youtube.com/watch?v=8oON21G1Bqg"
            >
                <span>VOIR LA PRÉSENTATION</span>
            </a>
            </div>

            <div class="play">
            <h6><a href="#about">DÉCOUVRIR</a></h6>
            </div>
        </div>
    </section>

          <section class="about-us theme-bg-gray section-space-top">
  <div class="container">
    <div class="about-us__inner">
      <h6
        class="about-us__sub-title wow fade-in-left"
        data-wow-delay="600ms"
      >
        <span>Notre Vision</span>
      </h6>
      <div
        class="about-us__content wow fade-in-bottom"
        data-wow-delay="600ms"
      >
        <p>
          Nous croyons que le branding n’est ni esthétique ni décoratif.
          C’est un outil stratégique qui permet à une organisation :
          d’être comprise rapidement,
          d’inspirer confiance,
          de créer une expérience cohérente,
          et de générer des résultats mesurables.
          Une marque claire simplifie la décision d’achat.
          Une marque floue rend toute communication coûteuse et inefficace.
          La visibilité sans clarté devient une dépense.
          La clarté transforme chaque action en investissement.
        </p>

        <a href="blog-details" class="btn-black">
          Demander un accompagnement stratégique
          <img
            src="assets/img/icon/star-white.png"
            alt="image"
         >
        </a>
      </div>

      <span
        class="about-us__date wow fade-in-right"
        data-wow-delay="600ms"
      >(Smart Vision)</span>
    </div>
  </div>
</section>

          <!-- counter area start  -->
         <section class="counter theme-bg-gray section-space">
  <div class="container">
    <div class="row mb-minus-30">
      <div class="col-lg-4 col-sm-6">
        <div
          class="counter__item wow fade-in-left"
          data-wow-delay="600ms"
        >
          <h4><span class="odometer" data-count="2012">0</span></h4>
          <p>Année de création</p>
        </div>
      </div>

      <div class="col-lg-4 col-sm-6">
        <div
          class="counter__item wow fade-in-bottom"
          data-wow-delay="600ms"
        >
          <h4><span class="odometer" data-count="100">0</span>+</h4>
          <p>Projets réalisés</p>
        </div>
      </div>

      <div class="col-lg-4 col-sm-6">
        <div
          class="counter__item wow fade-in-right"
          data-wow-delay="600ms"
        >
          <h4><span class="odometer" data-count="15">0</span>+</h4>
          <p>Années d’expérience</p>
        </div>
      </div>
    </div>
  </div>
</section>
          <!-- counter area end  -->

          <!-- experience area start  -->
          <section id="about" class="experience">
  <div class="experience__media">
    <img src="{{ asset('assets/img/1.jpg') }}" alt="image">

    <div class="experience__card">
      <div class="experience__card-wrapper">
        <h2 class="number">15+</h2>
        <p>
          Nous avons plus de 15 ans d’expérience en design,
          développement, production et support de solutions numériques modernes.
        </p>
      </div>
    </div>
  </div>
</section>
<!-- experience area end  -->

<!-- title-slider area start  -->
<section class="title-slider theme-bg-gray section-space">
  <div class="title-slider__wrapper">
    <div class="swiper title-slider__active">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="title-slider__item">
            <h3 class="title-slider__title">
              Design Webflow<img
                src="{{ asset('assets/img/Design.png') }}"
                alt="image"
             >
              Design d’application<img
                src="{{ asset('assets/img/creative.png') }}"
                alt="image"
             >Pensée créative
            </h3>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="title-slider__item">
            <h3 class="title-slider__title">
              {{-- <img
                src="{{ asset('assets/img/services/services-4.jpg') }}"
                alt="image"
             > --}}Développement sans code
              <img
                src="{{ asset('assets/img/no_code.png') }}"
                alt="image"
             >
              Développement d’application
              <img
                src="{{ asset('assets/img/app_developpement.png') }}"
                alt="image"
             >
            </h3>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="title-slider__item">
            <h3 class="title-slider__title">
              Design Webflow<img
                src="{{ asset('assets/img/Design.png') }}"
                alt="image"
             >
              Design d’application<img
                src="{{ asset('assets/img/creative.png') }}"
                alt="image"
             >Pensée créative
            </h3>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="title-slider__item">
            <h3 class="title-slider__title">
              {{-- <img
                src="assets/img/services/services-4.jpg"
                alt="image"
             > --}}Développement sans code
              <img
                src="{{ asset('assets/img/no_code.png') }}"
                alt="image"
             >
              Développement d’application
              <img
                src="{{ asset('assets/img/app_developpement.png') }}"
                alt="image"
             >
            </h3>
          </div>
        </div>

      </div>
    </div>

    <div dir="rtl" class="swiper title-slider__active-2">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="title-slider__item">
            <h3 class="title-slider__title">
              Design Webflow<img
                src="{{ asset('assets/img/Design.png') }}"
                alt="image"
             >
              Design d’application<img
                src="{{ asset('assets/img/creative.png') }}"
                alt="image"
             >Pensée créative
            </h3>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="title-slider__item">
            <h3 class="title-slider__title">
              {{-- <img
                src="assets/img/services/services-4.jpg"
                alt="image"
             > --}}Développement sans code
              <img
                src="{{ asset('assets/img/no_code.png') }}"
                alt="image"
             >
              Développement d’application
              <img
                src="{{ asset('assets/img/app_developpement.png') }}"
                alt="image"
             >
            </h3>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="title-slider__item">
            <h3 class="title-slider__title">
              Design Webflow<img
                src="{{ asset('assets/img/Design.png') }}"
                alt="image"
             >
              Design d’application<img
                src="{{ asset('assets/img/creative.png') }}"
                alt="image"
             >Pensée créative
            </h3>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="title-slider__item">
            <h3 class="title-slider__title">
              {{-- <img
                src="assets/img/services/services-4.jpg"
                alt="image"
             > --}}Développement sans code
              <img
                src="{{ asset('assets/img/no_code.png') }}"
                alt="image"
             >
              Développement d’application
              <img
                src="{{ asset('assets/img/app_developpement.png') }}"
                alt="image"
             >
            </h3>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
          <!-- title-slider area end  -->

          <!-- services area start  -->
          <section class="services theme-bg-white section-space">
  <div class="container">
    <div class="section__wrapper">
      <div class="section-sub__wrapper">
        <h6>Nos Services</h6>
        <span></span>
      </div>

      <div class="section__wrap">
        <h2 class="section-title text-black rr-title-anim">
          Services
        </h2>
        <div class="section__content">
          {{-- <p>
            Duis aute irure dolor in reprehenderit in voluptate velit
            esse cillum dolore eu fugiat nulla pariatur. excepteur
            sint occaecat
          </p>

          <a href="blog-details" class="btn-black">
            VOIR TOUS LES SERVICES
            <img
              src="{{ asset('assets/img/nos_services2.png') }}"
              alt="image"
           >
          </a> --}}
           <p>
          Nos expertises couvrent l’ensemble des leviers nécessaires
          à la construction et au déploiement d’une marque claire, crédible et cohérente.
        </p>

        <a href="blog-details" class="btn-black">
          Demander un accompagnement stratégique
          <img
            src="{{ asset('assets/img/nos_services2.png') }}"
            alt="image"
         >
        </div>
      </div>
    </div>

    <div class="services__wrapper">

  <div class="services__item wow fade-in-bottom" data-wow-delay="600ms">
    <div class="services__content">
      <h3 class="title"><a href="#">Stratégie de marque</a></h3>
      <p class="des">
        Structuration de l’ADN de marque, clarification de la vision,
        définition de la promesse et du positionnement.
      </p>

      <ul class="services__list">
        <li>STRUCTURATION DE MARQUE</li>
        <li>CLARIFICATION DE LA VISION</li>
        <li>POSITIONNEMENT</li>
        <li>STRATÉGIE</li>
      </ul>
    </div>

    <div class="services__media">
      <a href="#">
        <img src="{{ asset('assets/img/Identite_de_marque.png') }}" alt="image">
      </a>
    </div>
  </div>

      <div class="services__item wow fade-in-bottom" data-wow-delay="600ms">
  <div class="services__content">
    <h3 class="title"><a href="#">Communication corporate</a></h3>
    <p class="des">
      Construction d’une communication institutionnelle claire, cohérente
      et alignée avec la réalité de l’organisation.
    </p>

    <ul class="services__list">
      <li>COMMUNICATION INSTITUTIONNELLE</li>
      <li>STRUCTURATION DES MESSAGES</li>
      <li>ALIGNEMENT STRATÉGIQUE</li>
      <li>COHÉRENCE DE MARQUE</li>
    </ul>
  </div>

  <div class="services__media">
    <a href="#">
      <img src="{{ asset('assets/img/web_veveloppement.jpg') }}" alt="image">
    </a>
  </div>
</div>
      <div class="services__item wow fade-in-bottom" data-wow-delay="600ms">
        <div class="services__content">
          <h3 class="title"><a href="#">Direction créative</a></h3>
          <p class="des">
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur
            aut odit aut fugit, sed quia consequuntur magni dolores
            eos qui ratione voluptatem sequi nesciunt. neque esti, qui
            dolorem ipsum quia dolor sit amet,
          </p>

          <ul class="services__list">
            <li>DIRECTION ARTISTIQUE</li>
            <li>IDENTITÉ DE MARQUE</li>
            <li>CRÉATION DE LOGO</li>
            <li>DESIGN GRAPHIQUE</li>
          </ul>
        </div>

        <div class="services__media">
          <a href="#">
            <img src="{{ asset('assets/img/direction_creative.jpg') }}" alt="image">
          </a>
        </div>
      </div>

      <div class="services__item wow fade-in-bottom" data-wow-delay="600ms">
  <div class="services__content">
    <h3 class="title"><a href="#">Brand design</a></h3>
    <p class="des">
      Création d’identités visuelles pensées
      comme des outils de crédibilité, jamais comme une finalité.
    </p>

    <ul class="services__list">
      <li>IDENTITÉ VISUELLE</li>
      <li>SYSTÈME GRAPHIQUE</li>
      <li>CHARTE GRAPHIQUE</li>
      <li>COHÉRENCE VISUELLE</li>
    </ul>
  </div>

  <div class="services__media">
    <a href="#">
      <img src="{{ asset('assets/img/disign_ux.jpg') }}" alt="image">
    </a>
  </div>
</div>

     <div class="services__item wow fade-in-bottom" data-wow-delay="600ms">
  <div class="services__content">
    <h3 class="title"><a href="#">Brand content & storytelling</a></h3>
    <p class="des">
      Clarification des messages clés et construction d’un discours
      de marque lisible et impactant.
    </p>

    <ul class="services__list">
      <li>STRATÉGIE DE CONTENU</li>
      <li>MESSAGES CLÉS</li>
      <li>STORYTELLING</li>
      <li>DISCOURS DE MARQUE</li>
    </ul>
  </div>

  <div class="services__media">
    <a href="#">
      <img src="{{ asset('assets/img/disign_graphique.jpg') }}" alt="image">
    </a>
  </div>
</div>
    </div>
  </div>
</section>
          <!-- services area end  -->

          <!-- portfolio area start  -->
          <section class="portfolio section-space">
  <div class="container">
    <div class="section__wrapper">
  <div class="section-sub__wrapper">
    <h6>Réalisations & références</h6>
    <span></span>
  </div>

  <div class="section__wrap">
    <h2 class="section-title rr-title-anim">SÉLECTION</h2>
    <div class="section__content">
      <p>
        Pour des raisons de confidentialité, les stratégies de marque développées pour nos clients
        ne sont pas rendues publiques. Les projets présentés illustrent toutefois notre exigence de cohérence,
        notre approche stratégique et la qualité des univers visuels produits.
      </p>

      <a href="blog-details" class="btn-black btn-white">
        Voir les réalisations
        <img
          src="assets/img/icon/star-black.png"
          alt="image"
       >
      </a>
    </div>
  </div>

  <div class="section__bottom">
    <h2 class="section__bottom-title">réalisations</h2>
    <h3 class="section__bottom-sub-title">[Smart Vision]</h3>
  </div>
</div>

    <div class="portfolio-inner">
  <div class="portfolio-wrapper">

    <div class="portfolio__item wow fade-in-bottom" data-wow-delay="600ms">
      <div class="thumb" data-cursor-text="Voir">
        <a href="#">
          <img src="assets/img/portfolio/portfolio-1.jpg" alt="image">
        </a>
        <ul class="tags">
          <li>Stratégie de marque  //</li>
          <li>Identité visuelle  //</li>
          <li>Positionnement</li>
        </ul>
      </div>
      <div class="content">
        <h3 class="title rr-title-anim">Structuration d’une identité de marque</h3>
        <span class="date">// Projet confidentiel</span>
      </div>
    </div>

    <div class="portfolio__item wow fade-in-bottom" data-wow-delay="600ms">
      <div class="thumb" data-cursor-text="Voir">
        <a href="#">
          <img src="assets/img/portfolio/portfolio-2.jpg" alt="image">
        </a>
        <ul class="tags">
          <li>Brand content  //</li>
          <li>Storytelling  //</li>
          <li>Communication</li>
        </ul>
      </div>
      <div class="content">
        <h3 class="title rr-title-anim">Construction d’un discours de marque</h3>
        <span class="date">// Projet confidentiel</span>
      </div>
    </div>

    <div class="portfolio__item wow fade-in-bottom" data-wow-delay="600ms">
      <div class="thumb" data-cursor-text="Voir">
        <a href="#">
          <img src="assets/img/portfolio/portfolio-3.jpg" alt="image">
        </a>
        <ul class="tags">
          <li>Brand design  //</li>
          <li>Charte graphique  //</li>
          <li>Univers visuel</li>
        </ul>
      </div>
      <div class="content">
        <h3 class="title rr-title-anim">Création d’un univers visuel cohérent</h3>
        <span class="date">// Projet confidentiel</span>
      </div>
    </div>

    <div class="portfolio__item wow fade-in-bottom" data-wow-delay="600ms">
      <div class="thumb" data-cursor-text="Voir">
        <a href="#">
          <img src="assets/img/portfolio/portfolio-4.jpg" alt="image">
        </a>
        <ul class="tags">
          <li>Communication corporate  //</li>
          <li>Structuration  //</li>
          <li>Alignement</li>
        </ul>
      </div>
      <div class="content">
        <h3 class="title rr-title-anim">Alignement stratégique d’une communication</h3>
        <span class="date">// Projet confidentiel</span>
      </div>
    </div>

    <div class="portfolio__item wow fade-in-bottom span-2" data-wow-delay="600ms">
      <div class="thumb" data-cursor-text="Voir">
        <a href="#">
          <img src="assets/img/portfolio/portfolio-5.jpg" alt="image">
        </a>
        <ul class="tags">
          <li>Conseil stratégique  //</li>
          <li>Branding  //</li>
          <li>Transformation</li>
        </ul>
      </div>
      <div class="content">
        <h3 class="title rr-title-anim">
          Accompagnement global de marque
        </h3>
        <span class="date">// Projet confidentiel</span>
      </div>
    </div>

  </div>
</div>
  </div>
</section>
          <!-- portfolio area end  -->

          <!-- testimonial area start  -->
          <section class="testimonial theme-bg-gray section-space-top">
  <div class="container">
    <div class="section__wrapper">
      <div class="section-sub__wrapper">
        <h6>Témoignages</h6>
        <span></span>
      </div>
      <div class="section__wrap">
        <h2 class="section-title rr-title-anim">Ce que les gens</h2>
        <h2 class="section-title text-lg-end rr-title-anim">
          disent de nous
        </h2>
      </div>
    </div>

    <div class="testimonial__inner">
      <div class="testimonial__arrow">
        <div class="testimonial__prev">
          <i class="fa-solid fa-arrow-right"></i>
        </div>
        <div class="testimonial__next">
          <i class="fa-solid fa-arrow-left"></i>
        </div>
      </div>

      <div class="testimonial__wrapper testimonial__active">

        <div class="testimonial__item">
          <div class="testimonial__number">
            <span>01</span>
          </div>
          <div class="testimonial__content">
            <img src="assets/img/icon/quite.png" alt="image">
            <p class="des">
              Nemo enim ipsam voluptatem quia voluptas sit aspernatur
              aut odit consequuntur magni quie ratione voluptatem
              porro quisquam est quia dolor sit amet consectetu
            </p>

            <div class="testimonial__author">
              <div class="media">
                <img src="assets/img/testimonial/author.jpg" alt="image">
              </div>
              <div class="text">
                <h6 class="name">Ryan Anderson</h6>
                <p>PDG de Bit Weaver Studio</p>
              </div>
            </div>
          </div>
        </div>

        <div class="testimonial__item">
          <div class="testimonial__number">
            <span>02</span>
          </div>
          <div class="testimonial__content">
            <img src="assets/img/icon/quite.png" alt="image">
            <p class="des">
              Nemo enim ipsam voluptatem quia voluptas sit aspernatur
              aut odit consequuntur magni quie ratione voluptatem
              porro quisquam est quia dolor sit amet consectetu
            </p>

            <div class="testimonial__author">
              <div class="media">
                <img src="assets/img/testimonial/author.jpg" alt="image">
              </div>
              <div class="text">
                <h6>Ryan Anderson</h6>
                <p>PDG de Bit Weaver Studio</p>
              </div>
            </div>
          </div>
        </div>

        <div class="testimonial__item">
          <div class="testimonial__number">
            <span>03</span>
          </div>
          <div class="testimonial__content">
            <img src="assets/img/icon/quite.png" alt="image">
            <p class="des">
              Nemo enim ipsam voluptatem quia voluptas sit aspernatur
              aut odit consequuntur magni quie ratione voluptatem
              porro quisquam est quia dolor sit amet consectetu
            </p>

            <div class="testimonial__author">
              <div class="media">
                <img src="assets/img/testimonial/author.jpg" alt="image">
              </div>
              <div class="text">
                <h6>Ryan Anderson</h6>
                <p>PDG de Bit Weaver Studio</p>
              </div>
            </div>
          </div>
        </div>

        <div class="testimonial__item">
          <div class="testimonial__number">
            <span>04</span>
          </div>
          <div class="testimonial__content">
            <img src="assets/img/icon/quite.png" alt="image">
            <p class="des">
              Nemo enim ipsam voluptatem quia voluptas sit aspernatur
              aut odit consequuntur magni quie ratione voluptatem
              porro quisquam est quia dolor sit amet consectetu
            </p>

            <div class="testimonial__author">
              <div class="media">
                <img src="assets/img/testimonial/author.jpg" alt="image">
              </div>
              <div class="text">
                <h6>Ryan Anderson</h6>
                <p>PDG de Bit Weaver Studio</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
          <!-- testimonial area start  -->

          <!-- brand-slide area start  -->
          <section class="brand-slide theme-bg-gray section-space">
  <div class="container">
    <div class="brand-slide__wrapper">
      <h3 class="title">Approuvé par des équipes à travers le monde</h3>
      <div class="swiper brand-slide__active">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="brand-slide__item">
              <img
                src="assets/img/brand/brand-1.png"
                alt="image non trouvée"
             >
            </div>
          </div>
          <div class="swiper-slide">
            <div class="brand-slide__item">
              <img
                src="assets/img/brand/brand-2.png"
                alt="image non trouvée"
             >
            </div>
          </div>
          <div class="swiper-slide">
            <div class="brand-slide__item">
              <img
                src="assets/img/brand/brand-3.png"
                alt="image non trouvée"
             >
            </div>
          </div>
          <div class="swiper-slide">
            <div class="brand-slide__item">
              <img
                src="assets/img/brand/brand-4.png"
                alt="image non trouvée"
             >
            </div>
          </div>
          <div class="swiper-slide">
            <div class="brand-slide__item">
              <img
                src="assets/img/brand/brand-5.png"
                alt="image non trouvée"
             >
            </div>
          </div>
          <div class="swiper-slide">
            <div class="brand-slide__item">
              <img
                src="assets/img/brand/brand-6.png"
                alt="image non trouvée"
             >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
          <!-- brand-slide area end  -->

          <!-- blog area start  -->
          <section class="blog section-space">
  <div class="container">
    <div class="section__wrapper">
      <div class="section-sub__wrapper">
        <h6>dernières actualités & articles</h6>
        <span></span>
      </div>

      <div class="section__wrap">
        <h2 class="section-title rr-title-anim">ARTICLES</h2>
        <div class="section__content">
          <p>
            Duis aute irure dolor in reprehenderit in voluptate velit
            esse cillum dolore eu fugiat nulla pariatur. excepteur
            sint occaecat
          </p>

          <a href="blog-details" class="btn-black btn-white">
            VOIR TOUS LES ARTICLES
            <img
              src="assets/img/icon/star-black.png"
              alt="image"
           >
          </a>
        </div>
      </div>
    </div>

    <div class="row gutter-30 mb-minus-30">

      <div class="col-lg-6 col-xl-4">
        <div class="blog__item wow fade-in-bottom" data-wow-delay="600ms">
          <div class="blog-media">
            <a href="blog-details.html">
              <img src="{{ asset('assets/img/disign.jpg') }}" alt="image">
            </a>
          </div>
          <ul class="blog-meta__list">
            <li>analyse</li>
            <li>25 mars, 2025</li>
          </ul>
          <h4 class="blog-title rr-title-anim">
            <a href="blog-details">
              Transformer les concepts en réalité : l’art d’un design efficace
            </a>
          </h4>
          <a class="read-more" href="blog-details">
            Lire plus
            <span><i class="fa-solid fa-arrow-right"></i></span>
          </a>
        </div>
      </div>

      <div class="col-lg-6 col-xl-4">
        <div class="blog__item wow fade-in-bottom" data-wow-delay="600ms">
          <div class="blog-media">
            <a href="blog-details.html">
              <img src="{{ asset('assets/img/talent.jpg') }}" alt="image">
            </a>
          </div>
          <ul class="blog-meta__list">
            <li>analyse</li>
            <li>25 mars, 2025</li>
          </ul>
          <h4 class="blog-title rr-title-anim">
            <a href="blog-details">
              The Brave cherche à recruter les talents les plus brillants
            </a>
          </h4>
          <a class="read-more" href="blog-details">
            Lire plus
            <span><i class="fa-solid fa-arrow-right"></i></span>
          </a>
        </div>
      </div>

      <div class="col-lg-6 col-xl-4">
        <div class="blog__item wow fade-in-bottom" data-wow-delay="600ms">
          <div class="blog-media">
            <a href="blog-details.html">
              <img src="{{ asset('assets/img/conseil.jpg') }}" alt="image">
            </a>
          </div>
          <ul class="blog-meta__list">
            <li>analyse</li>
            <li>25 mars, 2025</li>
          </ul>
          <h4 class="blog-title rr-title-anim">
            <a href="blog-details">
              Hub des designers : conseils et astuces pour inspirer, innover et réussir
            </a>
          </h4>
          <a class="read-more" href="blog-details">
            Lire plus
            <span><i class="fa-solid fa-arrow-right"></i></span>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>
          <!-- blog area end  -->

          <!-- cta area start  -->
          <section class="cta theme-bg-gray">
            <div
                class="cta__inner section-space"
                data-background="assets/img/cta/cta-bg.png"
            >
                <div class="container">
                <div
                    class="cta__content wow fade-in-bottom"
                    data-wow-delay="600ms"
                >
                    <h2 class="title">
                    Prêt à <br>
                    <span>travailler</span> ensemble ? Téléchargez votre kit média.
                    </h2>

                    <a href="contact.html" class="btn-black">
                    Travaillons ensemble
                    <img src="assets/img/icon/star-white.png" alt="image">
                    </a>
                </div>
                </div>
            </div>
            </section>


@endsection

