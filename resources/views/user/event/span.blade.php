<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <style>

.menu-card {
  opacity: 0;
  transform: translateY(20px);
  transition: opacity 0.6s ease, transform 0.6s ease;
}


.menu-card.visible {
  opacity: 1;
  transform: translateY(0);
}


  </style>
  <!-- 
    - primary meta tags
  -->
  <title>NBR arways</title>
  <meta name="title" content="Grilli - Amazing & Delicious Food">
  <meta name="description" content="This is a Restaurant html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/landing.jpg">
  <link rel="preload" as="image" href="./assets/images/landing2 .jpg">
  <link rel="preload" as="image" href="./assets/images/landing1.jpg">

</head>

<body id="top">

  <!-- 
    - #PRELOADER
  -->

  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">NBR Airways</p>
  </div>





  <!-- 
    - #TOP BAR
  -->

  <div class="topbar">
    <div class="container">

      <span class="topbar-item">
        <div class="icon">
          <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">
          Plaza Mayor, Madrid 28012, Espagne
        </span>
      </span>

      <div class="separator"></div>

      <span class="topbar-item item-2">
        <div class="icon">
          <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">Dates de l'événement : 15 - 20 Octobre 2024</span>
      </span>

      <a href="tel:+34123456789" class="topbar-item link">
        <div class="icon">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">+34 123 456 789</span>
      </a>

      <div class="separator"></div>

      <a href="mailto:info@madrid-event.com" class="topbar-item link">
        <div class="icon">
          <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">info@madrid-event.com</span>
      </a>

    </div>
</div>

<header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/Assdet 3.png" width="160" height="50" alt="Événement de Madrid - Accueil">
      </a>

      <nav class="navbar" data-navbar>

        <button class="close-btn" aria-label="fermer le menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="./assets/images/Assdet 3.png" width="160" height="50" alt="Événement de Madrid - Accueil">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link hover-underline active">
              <div class="separator"></div>
              <span class="span">Accueil</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#event" class="navbar-link hover-underline">
              <div class="separator"></div>
              <span class="span">Événement</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link hover-underline">
              <div class="separator"></div>
              <span class="span">À Propos</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#program" class="navbar-link hover-underline">
              <div class="separator"></div>
              <span class="span">Programme</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#footer" class="navbar-link hover-underline">
              <div class="separator"></div>
              <span class="span">Contact</span>
            </a>
          </li>

        </ul>

        <div class="text-center">
          <p class="headline-1 navbar-title">Venez à Madrid</p>

          <address class="body-4">
            Plaza Mayor, Madrid, <br>
            Espagne 28012
          </address>

          <p class="body-4 navbar-text">Ouvert : 10h00 - 22h00</p>

          <a href="mailto:info@madrid-event.com" class="body-4 sidebar-link">info@madrid-event.com</a>

          <div class="separator"></div>

          <p class="contact-label">Demandes et Réservations</p>

          <a href="tel:+34123456789" class="body-1 contact-number hover-underline">
            +34 123 456 789
          </a>
        </div>

      </nav>

      <button class="nav-open-btn" aria-label="ouvrir le menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
</header>




  <main>
 
    <article>

      <!-- 
        - #HERO
      -->
    
      <section class="hero text-center" aria-label="home" id="home">

        <ul class="hero-slider" data-hero-slider>
        
          <li class="slider-item active" data-hero-slider-item>
        
            <div class="slider-bg">
              <img src="./assets/images/madrid/1.png" width="1880" height="950" alt="Événement de Madrid 2024" class="img-cover">
            </div>
        
            <p class="label-2 section-subtitle slider-reveal">Une Expérience Inoubliable</p>
        
            <h1 class="display-1 hero-title slider-reveal">
              Rejoignez-Nous à Madrid <br>
              pour l'Événement 2024
            </h1>
        
            <p class="body-2 hero-text slider-reveal">
              Plongez dans un monde de culture et d'émotion au cœur de Madrid. Profitez d'une expérience unique et célébrez avec nous dans cette grande ville.
            </p>
        
          </li>
        
          <li class="slider-item" data-hero-slider-item>
        
            <div class="slider-bg">
              <img src="./assets/images/madrid/2.png" width="1880" height="950" alt="Madrid Luxe Expérience" class="img-cover">
            </div>
        
            <p class="label-2 section-subtitle slider-reveal">Luxe et Confort</p>
        
            <h1 class="display-1 hero-title slider-reveal">
              Découvrez le Luxe <br>
              Comme Jamais Avant
            </h1>
        
            <p class="body-2 hero-text slider-reveal">
              Rejoignez-nous pour une journée de luxe et découvrez une nouvelle vision du divertissement à Madrid.
            </p>
        
          </li>
        
          <li class="slider-item" data-hero-slider-item>
        
            <div class="slider-bg">
              <img src="./assets/images/madrid/3.png" width="1880" height="950" alt="L'Avenir des Voyages à Madrid" class="img-cover">
            </div>
        
            <p class="label-2 section-subtitle slider-reveal">Innovation et Sécurité</p>
        
            <h1 class="display-1 hero-title slider-reveal">
              Où l'Avenir des Événements <br>
              Prend Vie
            </h1>
        
            <p class="body-2 hero-text slider-reveal">
              Faites partie de démonstrations exclusives et découvrez l'avenir des événements avec une technologie de pointe à Madrid.
            </p>
        
          </li>
        
        </ul>
        
        <button class="slider-btn prev" aria-label="faire défiler vers le précédent" data-prev-btn>
          <ion-icon name="chevron-back"></ion-icon>
        </button>
        
        <button class="slider-btn next" aria-label="faire défiler vers le suivant" data-next-btn>
          <ion-icon name="chevron-forward"></ion-icon>
        </button>
        
    </section>
    
    
    
    </article>



      <!-- 
        - #SERVICE
      -->
      <section class="section service bg-black-10 text-center" aria-label="service">
        <div class="container">
            <p class="section-subtitle label-2">Un Grand Merci à l'Événement de Madrid 2024</p>
    
            <h2 class="headline-1 section-title">Découvrez l'Excellence de l'Organisation d'Événements à Madrid</h2>
    
            <p class="section-text">
                L'Événement de Madrid 2024 est fier de vous offrir une expérience inoubliable. Profitez d'un service de restauration raffiné, d'une programmation musicale captivante et de conférences enrichissantes. Laissez notre équipe de professionnels organiser chaque détail pour vous offrir une soirée exceptionnelle.
            </p>
    
            <ul class="grid-list">
                <li>
                    <div class="service-card">
                        <a href="#" class="has-before hover:shine">
                            <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                                <img src="./assets/images/EVENT/d6.jpeg" width="285" height="336" loading="lazy" alt="Dîner Gastronomique" class="img-cover">
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
                                <img src="./assets/images/EVENT/full-shot-man-playing-piano_23-2150060709.jpg" width="285" height="336" loading="lazy" alt="Musique Folklorique" class="img-cover">
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
                                <img src="./assets/images/EVENT/Blog-dec-5.jpg" width="285" height="336" loading="lazy" alt="Grande Conférence" class="img-cover">
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
    
                <a href="#" class="btn btn-primary">
                    <span class="text text-1">Découvrez Notre Plan 2025</span>
                    <span class="text text-2" aria-hidden="true">Découvrez Notre Plan 2025</span>
                </a>
            </div>
    
            <figure class="about-banner">
                <img  style="margin-bottom: 15px; border-radius: 48px; height: 100%; width: 100%;" src="./assets/images/EVENT/bermuda-triangle-with-mystical-neon.jpg" width="570" height="570" loading="lazy" alt="bannière à propos"
                    class="w-100" data-parallax-item data-parallax-speed="1">

                
    
                
            </figure>
        </div>
    </section>
    
    



      <!-- 
        - #SPECIAL DISH
      -->
      <section class="special-dish text-center" aria-labelledby="dish-label">

        <div  class="special-dish-banner">
          <img src="./assets/images/EVENT/fr.jpg" width="320" height="100" loading="lazy" alt="NBR Airways New Route Presentation" class="img-cover">
        </div>
      
        <div class="special-dish-content bg-black-10">
          <div class="container">
      
            <img src="./assets/images/badge-1.png" width="28" height="41" loading="lazy" alt="badge" class="abs-img">
      
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
        style="background-image: url('./assets/images/EVENT/d47.png')" aria-label="testimonials">
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

      <section class="inscription">
        <div class="container">
      
          <div class="form inscription-form bg-black-10">
      
            <form action="" class="form-left">
      
              <h2 class="headline-1 text-center">Online Inscription</h2>
      
              <p class="form-text text-center">
                Registration request <a href="tel:+88123123456" class="link">+88-123-123456</a>
                or fill out the registration form
              </p>
      
              <div class="input-wrapper">
                <input type="text" name="name" placeholder="Your Name" autocomplete="off" class="input-field">
      
                <input type="tel" name="phone" placeholder="Phone Number" autocomplete="off" class="input-field">
              </div>
      
              <div class="input-wrapper">
      
                <div class="icon-wrapper">
                  <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
      
                  <select name="person" class="input-field">
                    <option value="1-person">1 Person</option>
                    <option value="2-person">2 Persons</option>
                    <option value="3-person">3 Persons</option>
                    <option value="4-person">4 Persons</option>
                    <option value="5-person">5 Persons</option>
                    <option value="6-person">6 Persons</option>
                    <option value="7-person">7 Persons</option>
                  </select>
      
                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>
      
                <div class="icon-wrapper">
                  <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>
      
                  <input type="date" name="inscription-date" class="input-field">
      
                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>
      
                <div class="icon-wrapper">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
      
                  <select name="time" class="input-field">
                    <option value="08:00am">08:00 am</option>
                    <option value="09:00am">09:00 am</option>
                    <option value="10:00am">10:00 am</option>
                    <option value="11:00am">11:00 am</option>
                    <option value="12:00pm">12:00 pm</option>
                    <option value="01:00pm">01:00 pm</option>
                    <option value="02:00pm">02:00 pm</option>
                    <option value="03:00pm">03:00 pm</option>
                    <option value="04:00pm">04:00 pm</option>
                    <option value="05:00pm">05:00 pm</option>
                    <option value="06:00pm">06:00 pm</option>
                    <option value="07:00pm">07:00 pm</option>
                    <option value="08:00pm">08:00 pm</option>
                    <option value="09:00pm">09:00 pm</option>
                    <option value="10:00pm">10:00 pm</option>
                  </select>
      
                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>
      
              </div>
      
              <textarea name="message" placeholder="Message" autocomplete="off" class="input-field"></textarea>
      
              <button type="submit" class="btn btn-secondary">
                <span class="text text-1">Register for Event</span>
                <span class="text text-2" aria-hidden="true">Register for Event</span>
              </button>
      
            </form>
      
            <div class="form-right text-center" style="background-image: url('./assets/images/form-pattern.png')">
      
              <h2 class="headline-1 text-center">Contact Us</h2>
      
              <p class="contact-label">Registration Request</p>
      
              <a href="tel:+88123123456" class="body-1 contact-number hover-underline">+88-123-123456</a>
      
              <div class="separator"></div>
      
              <p class="contact-label">Location</p>
      
              <address class="body-4">
                Event Street, Vibrant City, <br>
                London 9578, UK
              </address>
      
              <p class="contact-label">Event Time</p>
      
              <p class="body-4">
                Monday to Sunday <br>
                11:00 am - 10:00 pm
              </p>
      
            </div>
      
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
                  <img src="./assets/images/EVENT/vertical-shot-great-roman-coliseum-sunny-day.jpg" width="350" height="450" loading="lazy"
                    alt="Événement à venir à Dubaï" class="img-cover">
      
                  <time class="publish-date label-2" datetime="2024-11-05">05/1/2025</time>
                </div>
      
                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Rome, italy</p>
      
                  <h3 class="card-title title-2 text-center">
                    Rejoignez-nous pour un événement exclusif au cœur de Rome.
                  </h3>
                </div>
      
              </div>
            </li>
      
            <li>
              <div class="event-card has-before hover:shine">
      
                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="./assets/images/EVENT/event1.jpg" width="350" height="450" loading="lazy"
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
                  <img src="./assets/images/EVENT/event2.jpg" width="350" height="450" loading="lazy"
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





  <!-- 
    - #FOOTER
  -->

  <footer class="footer section has-bg-image text-center"
  style="background-image: url('./assets/images/footer/footer1.png')" id="footer">
<div class="container">

  <div class="footer-top grid-list">

    <div class="footer-brand has-before has-after">

      <a href="#" class="logo">
        <img src="./assets/images/Assdet 3.png" width="160" height="50" loading="lazy" alt="nbr airways logo">
      </a>

      <address class="body-4">
        NBR Airways, Airline Hub, London 9578, UK
      </address>

      <a href="mailto:contact@nbrairways.com" class="body-4 contact-link">contact@nbrairways.com</a>

      <a href="tel:+880123123456" class="body-4 contact-link">Customer Support : +88-0123-123456</a>

      <p class="body-4">
        Available 24/7 for Your Convenience
      </p>

      <div class="wrapper">
        <div class="separator"></div>
        <div class="separator"></div>
        <div class="separator"></div>
      </div>

      <p class="title-1">Get the Latest Updates</p>

      <p class="label-1">
        Subscribe & Receive <span class="span">Exclusive Offers</span>
      </p>

      <form action="" class="input-wrapper">
        <div class="icon-wrapper">
          <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

          <input type="email" name="email_address" placeholder="Your email" autocomplete="off" class="input-field">
        </div>

        <button type="submit" class="btn btn-secondary">
          <span class="text text-1">Subscribe</span>
          <span class="text text-2" aria-hidden="true">Subscribe</span>
        </button>
      </form>

    </div>

    <ul class="footer-list">
      <li>
        <a href="#" class="label-2 footer-link hover-underline">Home</a>
      </li>
      <li>
        <a href="#" class="label-2 footer-link hover-underline">Destinations</a>
      </li>
      <li>
        <a href="#" class="label-2 footer-link hover-underline">About Us</a>
      </li>
      <li>
        <a href="#" class="label-2 footer-link hover-underline">Our Fleet</a>
      </li>
      <li>
        <a href="#" class="label-2 footer-link hover-underline">Contact</a>
      </li>
    </ul>

    <ul class="footer-list">
      <li>
        <a href="#" class="label-2 footer-link hover-underline">Facebook</a>
      </li>
      <li>
        <a href="#" class="label-2 footer-link hover-underline">Instagram</a>
      </li>
      <li>
        <a href="#" class="label-2 footer-link hover-underline">Twitter</a>
      </li>
      <li>
        <a href="#" class="label-2 footer-link hover-underline">LinkedIn</a>
      </li>
      <li>
        <a href="#" class="label-2 footer-link hover-underline">Google Map</a>
      </li>
    </ul>

  </div>

  <div class="footer-bottom">
    <p class="copyright">
      &copy; 2022 NBR Airways. All Rights Reserved 
      
    </p>
  </div>

</div>
</footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>