<nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo -->
            <div class="logo-wrapper">
                <a class="nav-item " href="index.html"> <img src="{{ asset('assets/images/Smartvision logotype initial.png') }}" class="logo-img" alt=""> </a>

            </div>
            <!-- Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class="fa-regular fa-bars"></i></span> </button>
            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item "> <a class="nav-link active dropdown-toggle" href="#">
					Accueil  </a> </li>

						  <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
					Nos Offres <i class="fa-solid fa-caret-down"></i></a>


					<ul class="dropdown-menu">
						   <li><a href="strategie-digitale.html" class="dropdown-item"><span>Stratégie de Marque</span></a></li>
						    <li><a href="identite-branding.html" class="dropdown-item"><span>Identité de Marque et Branding</span></a></li>
                            <li><a href="gestion-rs.html" class="dropdown-item"><span>Gestion et Animation des Réseaux Sociaux</span></a></li>
                           <li><a href="motion-video.html" class="dropdown-item"><span>Motion & Vidéo de Contenu</span></a></li>
                            <li><a href="developpement-web.html" class="dropdown-item"><span> Développement  Web</span></a></li>
							<li><a href="packaging-edition.html" class="dropdown-item"><span>Packaging & Edition</span></a></li>



                        </ul>

                    <li class="nav-item"><a class="nav-link" href="portfolio.html">Portfolio</a></li>

                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
					L'Agence X <i class="fa-solid fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
						   <li><a href="lagencex.html" class="dropdown-item"><span>A Propos de Nous</span></a></li>

                            <li><a href="tarifs.html" class="dropdown-item"><span>Nos Tarifs</span></a></li>
							<li><a href="t%c3%83%c2%a9moignages.html" class="dropdown-item"><span>Témoignages</span></a></li>

                            <li><a href="faq.html" class="dropdown-item"><span>FAQ</span></a></li>


                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                </ul>
                <!-- Call -->
                <div class="navbar-right">
                    <div class="wrap">
                        <div class="icon"> <i class="fa-solid fa-phone"></i> </div>
                        <div class="text">
                            <p>Contactez-nous</p>
                           <h5><a href="tel:+237675430811">675 43 08 11</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
