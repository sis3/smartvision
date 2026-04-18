<div class="loader-wrap">
  <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
    <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
  </svg>

  <div class="loader-wrap-heading">
    <div class="load-text">
      <span>C</span>
      <span>r</span>
      <span>u</span>
      <span>v</span>
    </div>
  </div>
</div>

<!-- Retour en haut -->
<div class="progress-wrap">
  <svg
    class="progress-circle svg-content"
    width="100%"
    height="100%"
    viewBox="-1 -1 102 102"
  >
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
  </svg>
</div>

<!-- Début menu latéral -->
<aside class="fix">
  <div class="side-info">
    <div class="side-info-content">
      <div class="offset-widget offset-header">
        <div class="offset-logo">
          <a href="index.html">
            <img
              src="{{ asset('assets/img/logo/Smartvision logotype blanc.png') }}"
              class="normal-logo"
              alt="Logo du site"
           >
          </a>
        </div>
        <button id="side-info-close" class="side-info-close">x</button>
      </div>

      <div class="mobile-menu d-xl-none fix"></div>
      <div class="offset-button"></div>

      <div class="offset-widget-box">
        <h2 class="title">Contactez-nous</h2>
        <div class="contact-meta">
          <div class="contact-item">
            <span class="icon">
              <i class="fa-solid fa-location-dot"></i>
            </span>
            <span class="text">3891 Ranchview Dr. Richardson</span>
          </div>

          <div class="contact-item">
            <span class="icon">
              <i class="fa-solid fa-envelope"></i>
            </span>
            <span class="text">
              <a href="mailto:hello@cruvagency.com">
                hello@cruvagency.com
              </a>
            </span>
          </div>

          <div class="contact-item">
            <span class="icon">
              <i class="fa-solid fa-phone"></i>
            </span>
            <span class="text">
              <a href="tel:(505)555-0125">(505) 555-0125</a>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</aside>

<div class="offcanvas-overlay"></div>
<!-- Fin menu latéral -->

<!-- Début Header -->
<header class="header-area">
  <div class="header-main">
    <div class="container">
      <div class="header-area__inner">
        <div class="header__logo">
          <a href="index.html">
            <img
              src="{{ asset('assets/img/logo/Smartvision logotype rouge.png') }}"
              class="normal-logo"
              width="180"
              alt="Logo du site"
           >
          </a>
        </div>

        <div class="header__nav">
          <nav class="main-menu">
            <ul>
              <li class="menu-item-has-children">
                <a href="#">Accueil</a>
                <ul class="dp-menu">
                  <li><a href="index.html">Accueil</a></li>
                  <li><a href="index-2.html">Accueil 2</a></li>
                </ul>
              </li>

              <li><a href="about.html">À propos</a></li>

              <li class="menu-item-has-children">
                <a href="#">Services</a>
                <ul class="dp-menu">
                  <li><a href="services.html">Services</a></li>
                  <li>
                    <a href="services-details.html">Détails du service</a>
                  </li>
                </ul>
              </li>

              <li class="menu-item-has-children">
                <a href="#">Portfolio</a>
                <ul class="dp-menu">
                  <li><a href="portfolio-grid.html">Grille portfolio</a></li>
                  <li><a href="portfolio-list.html">Liste portfolio</a></li>
                  <li>
                    <a href="portfolio-details.html">Détails du portfolio</a>
                  </li>
                </ul>
              </li>

              <li class="menu-item-has-children">
                <a href="#">Pages</a>
                <ul class="dp-menu">
                  <li><a href="team.html">Équipe</a></li>
                  <li><a href="pricing.html">Tarifs</a></li>
                  <li><a href="faq.html">FAQ</a></li>
                  <li><a href="404.html">Page 404</a></li>
                </ul>
              </li>

              <li class="menu-item-has-children">
                <a href="#">Blog</a>
                <ul class="dp-menu">
                  <li><a href="blog-grid.html">Blog grille</a></li>
                  <li><a href="blog-list.html">Blog liste</a></li>
                  <li><a href="blog-details.html">Détails du blog</a></li>
                </ul>
              </li>

              <li><a href="contact-us.html">Contact</a></li>
            </ul>
          </nav>

          <div class="header__navicon">
            <button class="side-toggle">
              <span class="bar-icon">
                <span></span>
                <span></span>
              </span>
            </button>
          </div>
        </div>

      </div>
    </div>
  </div>
</header>
