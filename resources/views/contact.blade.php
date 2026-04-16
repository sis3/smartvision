@extends('layouts.app')




@section('content')

<!-- Header Banner -->
    <section class="banner-header section-padding bg-img bg-fixed bg-img-position-top" data-overlay-dark="5" data-background="{{ asset('assets/images/slider/2.jpg') }}">
        <div class="v-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center mt-60">
                        <h1>Contact</h1>
                        <ul class="breadcrumbs">
                            <li><a href="#">Accueil</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- divider line -->
    <div class="line-vr-section"></div>
    <!-- Contact  -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-60">
                    <div class="row mb-60">
                        <div class="col-md-12">
                            <h5>HQ Office</h5>
                            <p>Contactez-nous pour discuter de votre projet digital</p>

							Vous cherchez une agence digitale qui combine performance, engagement et expertise ? Vous êtes au bon endroit.
                            <div class="con">
                                <div class="icon"> <span class="fa-solid fa-phone"></span> </div>
                                <div class="con-content">
                                    <p class="text"><a href="tel:+237675430811">675 43 08 11</a></p>
                                </div>
                            </div>
                            <div class="con">
                                <div class="icon"> <span class="fa-solid fa-envelope"></span> </div>
                                <div class="con-content">
                                    <p class="text"><a href="mailto:hello@lagencex.fr">hello@lagencex.fr</a></p>
                                </div>
                            </div>
                            <div class="con">
                                <div class="icon"> <span class="fa-solid fa-location"></span> </div>
                                <div class="con-content">
                                    <p class="text">Spécial One (Kotto), Douala / CAMEROUN </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h5>Nos Horaires </h5>
                            <div class="opening-hours">
                                <ul>
                                    <li>
                                        <div class="tit">Lundi - Vendredi</div>
                                        <div class="dots"></div> <span>9:00 H - 17:00 H</span>
                                    </li>
                                 <li>
                                        <div class="tit">Samedi</div>
                                        <div class="dots"></div> <span>9:00 H - 15:00 H</span>
                                    </li>
                                    <li>
                                        <div class="tit">Dimanche</div>
                                        <div class="dots"></div> <span>Fermé</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <h5>Contactez nous!</h5>
                    <form method="post" class="contact__form" action="https://duruthemes.com/demo/html/acens/light/mail.php">
                        <!-- Form message -->
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
                            </div>
                        </div>
                        <!-- Form elements -->
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input name="name" type="text" placeholder="Votre Nom *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="email" type="email" placeholder="Email *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="phone" type="text" placeholder="Téléphone *" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <input name="subject" type="text" placeholder="Objet *" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea name="message" id="message" cols="30" rows="4" placeholder="Comment pouvons nous vous aider?
Nous sommes à l'écoute! *" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" value="Envoyer">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Maps -->
    <section id="map">
        <div class="full-width">
            <div class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1573147.7480448114!2d-74.84628175962355!3d41.04009641088412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25856139b3d33%3A0xb2739f33610a08ee!2s1616%20Broadway%2C%20New%20York%2C%20NY%2010019%2C%20Amerika%20Birle%C5%9Fik%20Devletleri!5e0!3m2!1str!2str!4v1646760525018!5m2!1str!2str" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
    <!-- divider line -->
    <div class="line-vr-section"></div>
  <!-- Lets Talk -->
  <section class="lets-talk background bg-img bg-fixed section-padding" data-overlay-dark="5" data-background="{{ asset('assets/images/banner2.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Vous avez un challenge de communication </br>que vous ne pouvez pas résoudre seul ? </h4>
					 <div class="row">
                </div>
                    <h5><span>Parlons</span> en</h5>
                    <a href="tel:++237675430811" class="btn-1 mt-30"> <i class="fa-solid fa-phone"></i> +237 675 43 08 11</a>
                    <a href="contact.html" class="btn-5 mt-30"> <i class="fa-solid fa-paper-plane"></i> hello@lagencex.fr</a>
                </div>
            </div>
        </div>
    </section>


@endsection
