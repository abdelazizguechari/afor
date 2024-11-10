@extends('user.event.body.mainlayout')
@section('main')

  <main>
 
 <article>

    <!-- 
      - #HERO
    -->
  
    <section class="hero text-center" aria-label="home" id="home">

      <ul class="hero-slider" data-hero-slider>
  
          <li class="slider-item active" data-hero-slider-item>
  
              <div class="slider-bg">
                  <img src="{{ asset('img/event/EVENT/d3.png') }}" width="1880" height="950" alt="NBR Airways Dubai Event" class="img-cover">
              </div>
  
              <p class="label-2 section-subtitle slider-reveal">L'Expérience Ultime</p>
  
              <h1 class="display-1 hero-title slider-reveal">
                  Rejoignez-nous à Dubaï <br>
                  pour l'Événement NBR Airways 2024
              </h1>
  
              <p class="body-2 hero-text slider-reveal">
                  Plongez dans un univers d'élégance et d'innovation au cœur de Dubaï. Découvrez la nouvelle carte NBR Airways et vivez des expériences exclusives !
              </p>
  
          </li>
  
          <li class="slider-item" data-hero-slider-item>
  
              <div class="slider-bg">
                  <img src="{{ asset('img/event/EVENT/d2.png') }}" width="1880" height="950" alt="NBR Airways Luxe Experience" class="img-cover">
              </div>
  
              <p class="label-2 section-subtitle slider-reveal">Luxe et Confort</p>
  
              <h1 class="display-1 hero-title slider-reveal">
                  Découvrez Services de Luxe <br>
                  comme Jamais Auparavant
              </h1>
  
              <p class="body-2 hero-text slider-reveal">
                  Rejoignez-nous pour des révélations exclusives sur nos services de luxe et explorez la vision du voyage de NBR Airways.
              </p>
  
          </li>
  
          <li class="slider-item" data-hero-slider-item>
  
              <div class="slider-bg">
                  <img src="{{ asset('img/event/EVENT/d1.png') }}" width="1880" height="950" alt="NBR Airways Future of Travel" class="img-cover">
              </div>
  
              <p class="label-2 section-subtitle slider-reveal">Innovation & Sécurité</p>
  
              <h1 class="display-1 hero-title slider-reveal">
                  Où le Futur du Voyage <br>
                  Prend son Envol
              </h1>
  
              <p class="body-2 hero-text slider-reveal">
                  Assistez à des démonstrations de technologies de pointe et découvrez l'avenir des voyages sécurisés avec NBR Airways.
              </p>
  
          </li>
  
      </ul>
  
      <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
          <ion-icon name="chevron-back"></ion-icon>
      </button>
  
      <button class="slider-btn next" aria-label="slide to next" data-next-btn>
          <ion-icon name="chevron-forward"></ion-icon>
      </button>
  
  </section>
  
</article>

  



      <!-- 
        - #SERVICE
      -->
 <section class="section service bg-black-10 text-center" aria-label="service">
    <div class="container">
      
        <p class="section-subtitle label-2">Un Grand Merci au Sheikh Zayed Hotel</p>
  
        <h2 class="headline-1 section-title">Découvrez l'Excellence de l'Organisation d'Événements à l'Hôtel</h2>
  
        <p class="section-text">
            Sheikh Zayed Hotel est fier de vous offrir une expérience inoubliable en accueillant cet événement spécial. Profitez d'un service de restauration raffiné, d'une programmation musicale captivante et de conférences enrichissantes. Laissez notre équipe de professionnels organiser chaque détail pour vous offrir une soirée exceptionnelle.
        </p>
  
        <ul class="grid-list">
            <li>
                <div class="service-card">
                    <a href="#" class="has-before hover:shine">
                        <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                            <img src="{{ asset('img/event/EVENT/d6.jpeg') }}" width="285" height="336" loading="lazy" alt="Dîner Gastronomique" class="img-cover">
                        </figure>
                    </a>
                    <div class="card-content">
                        <h3 class="title-4 card-title">
                            <a href="#">Cuisine Gastronomique</a>
                        </h3>
                        <a href="#" class="btn-text hover-underline label-2">Découvrez Notre Menu</a>
                    </div>
                </div>
            </li>
  
            <li>
                <div class="service-card">
                    <a href="#" class="has-before hover:shine">
                        <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                            <img src="{{ asset('img/event/EVENT/full-shot-man-playing-piano_23-2150060709.jpg') }}" width="285" height="336" loading="lazy" alt="Musique Folklorique" class="img-cover">
                        </figure>
                    </a>
                    <div class="card-content">
                        <h3 class="title-4 card-title">
                            <a href="#">Ambiance Musicale</a>
                        </h3>
                        <a href="#" class="btn-text hover-underline label-2">Explorez le Programme</a>
                    </div>
                </div>
            </li>
  
            <li>
                <div class="service-card">
                    <a href="#" class="has-before hover:shine">
                        <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                            <img src="{{ asset('img/event/fot/interior-national-art-museum-bucharest-romania-golden-details-marble-painting-min.jpg') }}" width="285" height="336" loading="lazy" alt="Grande Conférence" class="img-cover">
                        </figure>
                    </a>
                    <div class="card-content">
                        <h3 class="title-4 card-title">
                            <a href="#">Conférence Inspirante</a>
                        </h3>
                        <a href="#" class="btn-text hover-underline label-2">Réservez Votre Place</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>



      <!-- 
        - #ABOUT
      -->

   <section class="section about text-center" aria-labelledby="about-label" id="about">
    <div class="container">
        <div class="about-content">
            <p class="label-2 section-subtitle" id="about-label">Notre Vision 2025</p>

            <h2 class="headline-1 section-title">Vers un Futur Brillant</h2>

            <p class="section-text">
                En 2025, nous ne nous contenterons pas de suivre notre trajectoire; nous la redéfinirons. Notre entreprise vise à repousser les limites, à relever des défis audacieux, 
            </p>

            <p class="section-text">
               d'innover sans relâche, et de construire des expériences inégalées pour nos clients. Ce chemin ne sera pas facile, mais chaque défi est une chance de nous surpasser et de réaffirmer notre engagement à l'excellence.
            </p>

            <p class="section-text">
                 Ensemble, nous faisons face aux défis et visons à transformer notre vision en réalité. C'est l'année où nos rêves prennent vie, et où chaque étape nous rapproche de notre idéal.
            </p>

            <div class="contact-label">Joignez-vous à Notre Vision</div>

            <a href="tel:+804001234567" class="body-1 contact-number hover-underline">+80 (400) 123 4567</a>
        </div>

        <figure class="about-banner">
            <img style="margin-bottom: 15px; border-radius: 48px; height: 100%; width: 100%;" src="{{ asset('img/event/EVENT/bermuda-triangle-with-mystical-neon-min.jpg') }}" width="570" height="570" loading="lazy" alt="bannière à propos"
                class="w-100" data-parallax-item data-parallax-speed="1">
        </figure>
    </div>
</section>

    



      <!-- 
        - #SPECIAL DISH
      -->
    
      <section class="special-dish text-center" aria-labelledby="dish-label">

    <div class="special-dish-banner">
        <img src="{{ asset('img/event/EVENT/fr.jpg') }}" width="320" height="100" loading="lazy" alt="NBR Airways New Route Presentation" class="img-cover">
    </div>

    <div class="special-dish-content bg-black-10">
        <div class="container">

            <img src="{{ asset('img/event/badge-1.png') }}" width="28" height="41" loading="lazy" alt="badge" class="abs-img">

            <p class="section-subtitle label-2">Lancement de l'Événement Majeur</p>

            <h2 class="headline-1 section-title">Nouvelle Route NBR Airways : De la Chine à la France</h2>

            <p class="section-text">
                Nous sommes ravis d'annoncer l'ouverture d'une nouvelle liaison entre la Chine et la France, marquant un tournant dans notre expansion internationale. Cette route permet à nos passagers de découvrir de nouvelles cultures, de renforcer les liens d'affaires et d'explorer le monde avec un confort inégalé.
            </p>

            <div class="wrapper">
                <span class="span body-1">Voyagez de l'Asie à l'Europe avec NBR Airways!</span>
            </div>

            <a href="inscription.html" class="btn btn-primary">
                <span class="text text-1">Réservez Votre Vol</span>
                <span class="text text-2" aria-hidden="true">Réservez Votre Vol</span>
            </a>

        </div>
    </div>

</section>






      <!-- 
        - #MENU
      -->
      <section class="section menu" aria-label="menu-label" id="menu">
        <div class="container">
    
            <p class="section-subtitle text-center label-2">Programme de l'Événement à Dubai</p>
    
            <h2 class="headline-1 section-title text-center">Activités et Sessions du Plus Grand Événement à Dubai</h2>
    
            <ul class="grid-list">
    
                <li>
                    <div class="menu-card hover:card">
                        <div>
                            <div class="title-wrapper">
                                <h3 class="title-3">
                                    <a href="#" class="card-title">Cérémonie d'Ouverture</a>
                                </h3>
                                <span class="span title-2">9:00 AM - 10:00 AM</span>
                            </div>
                            <p class="card-text label-1">
                                Participez à la cérémonie d'ouverture officielle avec des discours inspirants et des performances
                                culturelles.
                            </p>
                        </div>
                    </div>
                </li>
    
                <li>
                    <div class="menu-card hover:card">
                        <div>
                            <div class="title-wrapper">
                                <h3 class="title-3">
                                    <a href="#" class="card-title">Innovation et Technologie</a>
                                </h3>
                                <span class="span title-2">11:00 AM - 12:30 PM</span>
                            </div>
                            <p class="card-text label-1">
                                Plongez dans les dernières innovations dans divers secteurs tels que l'aviation, la technologie et
                                l'énergie durable.
                            </p>
                        </div>
                    </div>
                </li>
    
                <li>
                    <div class="menu-card hover:card">
                        <div>
                            <div class="title-wrapper">
                                <h3 class="title-3">
                                    <a href="#" class="card-title">Forum des Investisseurs</a>
                                </h3>
                                <span class="span title-2">2:00 PM - 3:30 PM</span>
                            </div>
                            <p class="card-text label-1">
                                Un forum interactif où les investisseurs et les leaders de l'industrie explorent de nouvelles
                                opportunités de croissance.
                            </p>
                        </div>
                    </div>
                </li>
    
                <li>
                    <div class="menu-card hover:card">
                        <div>
                            <div class="title-wrapper">
                                <h3 class="title-3">
                                    <a href="#" class="card-title">Exposition Mondiale</a>
                                </h3>
                                <span class="span title-2">4:00 PM - 6:00 PM</span>
                            </div>
                            <p class="card-text label-1">
                                Explorez des pavillons et des stands des principales entreprises du monde entier, présentant leurs
                                produits et services innovants.
                            </p>
                        </div>
                    </div>
                </li>
    
                <li>
                    <div class="menu-card hover:card">
                        <div>
                            <div class="title-wrapper">
                                <h3 class="title-3">
                                    <a href="#" class="card-title">Soirée Culturelle</a>
                                </h3>
                                <span class="span title-2">7:00 PM - 9:00 PM</span>
                            </div>
                            <p class="card-text label-1">
                                Profitez d'une soirée inoubliable avec des spectacles culturels, de la musique live et des danses
                                traditionnelles.
                            </p>
                        </div>
                    </div>
                </li>
    
                <li>
                    <div class="menu-card hover:card">
                        <div>
                            <div class="title-wrapper">
                                <h3 class="title-3">
                                    <a href="#" class="card-title">Gala de Clôture</a>
                                </h3>
                                <span class="span title-2">9:30 PM - Minuit</span>
                            </div>
                            <p class="card-text label-1">
                                Terminez cet événement exceptionnel avec un dîner de gala exclusif, des allocutions et des prix pour
                                célébrer les réussites.
                            </p>
                        </div>
                    </div>
                </li>
    
            </ul>
    
            <p class="menu-text text-center">
                Ne manquez pas cette occasion unique de faire partie du plus grand événement à Dubai. Réservez votre place dès
                maintenant!
            </p>
    
            <a href="inscription.html" class="btn btn-primary">
                <span class="text text-1">Inscrivez-vous Maintenant</span>
                <span class="text text-2" aria-hidden="true">Inscrivez-vous Maintenant</span>
            </a>
    
            <!-- <img src="./assets/images/assets/1x/Asset 4.png" width="921" height="1036" loading="lazy" alt="shape" class="shape shape-2 move-anim"> -->
        </div>
    </section>
    




      <!-- 
        - #TESTIMONIALS
      -->

      <section class="section testi text-center has-bg-image"
        style="background-image: url('{{ asset('img/event/fot/young-caucasian-man-travel-with-luggage-airport-min.jpg') }}');" aria-label="testimonials">


        
        <div class="container">

          <div class="quote">”</div>

          <p class="headline-2 testi-text">
            Vivez des voyages extraordinaires avec nous—où chaque voyage crée des souvenirs inoubliables.
        </p>
        

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

          

        </div>
      </section>



      <section class="section event bg-black-10" aria-label="event" id="event">
    <div class="container">
  
        <p class="section-subtitle label-2 text-center">Mises à jour récentes</p>
  
        <h2 class="section-title headline-1 text-center">Prochains Événements</h2>
  
        <ul class="grid-list">
  
            <li>
                <div class="event-card has-before hover:shine">
  
                    <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                        <img src="{{ asset('img/event/EVENT/vertical-shot-great-roman-coliseum-sunny-day-min.jpg') }}" width="350" height="450" loading="lazy"


                       

                        
                            alt="Événement à venir à Dubaï" class="img-cover">

                       
  
                        <time class="publish-date label-2" datetime="2024-11-05">05/1/2025</time>
                    </div>
  
                    <div class="card-content">
                        <p class="card-subtitle label-2 text-center">Rome, Italy</p>
  
                        <h3 class="card-title title-2 text-center">
                            Rejoignez-nous pour un événement exclusif au cœur de Rome.
                        </h3>
                    </div>
  
                </div>
            </li>
  
            <li>
                <div class="event-card has-before hover:shine">
  
                    <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                        <img src="{{ asset('img/event/EVENT/event1.jpg') }}" width="350" height="450" loading="lazy"
                            alt="Événement à venir en France" class="img-cover">
  
                        <time class="publish-date label-2" datetime="2024-12-10">10/3/2025</time>
                    </div>
  
                    <div class="card-content">
                        <p class="card-subtitle label-2 text-center">Paris, France</p>
  
                        <h3 class="card-title title-2 text-center">
                            Découvrez les dernières innovations en aviation lors de notre événement à Paris.
                        </h3>
                    </div>
  
                </div>
            </li>
  
            <li>
                <div class="event-card has-before hover:shine">
  
                    <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                        <img src="{{ asset('img/event/EVENT/event2.jpg') }}" width="350" height="450" loading="lazy"
                            alt="Événement à venir en Espagne" class="img-cover">
  
                        <time class="publish-date label-2" datetime="2025-01-15">15/04/2025</time>
                    </div>
  
                    <div class="card-content">
                        <p class="card-subtitle label-2 text-center">Madrid, Espagne</p>
  
                        <h3 class="card-title title-2 text-center">
                            Explorez de nouveaux horizons avec nous à Madrid.
                        </h3>
                    </div>
  
                </div>
            </li>
  
        </ul>
  
        <a href="#" class="btn btn-primary">
            <span class="text text-1">Voir tous les événements</span>
            <span class="text text-2" aria-hidden="true">Voir tous les événements</span>
        </a>
  
    </div>
</section>



     
      

    </article>
  </main>
  



  @endsection