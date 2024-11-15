<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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
    <meta name="title" content="Grilli - Amazing & Delicious Food" />
    <meta
      name="description"
      content="This is a Restaurant html template made by codewithsadee"
    />

    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml" />

    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap"
      rel="stylesheet"
    />

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="./assets/css/style.css" />

    <!-- 
    - preload images
  -->
    <link rel="preload" as="image" href="./assets/images/landing.jpg" />
    <link rel="preload" as="image" href="./assets/images/landing2 .jpg" />
    <link rel="preload" as="image" href="./assets/images/landing1.jpg" />
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
        <address class="topbar-item">
          <div class="icon">
            <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
          </div>

          <span class="span"> Via Roma, 1, 00184 Roma RM, Italia </span>
        </address>

        <div class="separator"></div>

        <div class="topbar-item item-2">
          <div class="icon">
            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
          </div>

          <span class="span">Lun-Ven : 9.00 - 18.00</span>
        </div>

        <a href="tel:+391234567890" class="topbar-item link">
          <div class="icon">
            <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
          </div>

          <span class="span">+39 123 456 7890</span>
        </a>

        <div class="separator"></div>

        <a href="mailto:info@eventinitaly.com" class="topbar-item link">
          <div class="icon">
            <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
          </div>

          <span class="span">info@eventinitaly.com</span>
        </a>
      </div>
    </div>

    <!-- 
    - #HEADER
  -->

    <header class="header" data-header>
      <div class="container">
        <a href="#" class="logo">
          <img
            src="./assets/images/Assdet 3.png"
            width="160"
            height="50"
            alt="NBR Airways"
          />
        </a>
        <nav class="navbar" data-navbar>
          <button
            class="close-btn"
            aria-label="fermer le menu"
            data-nav-toggler
          >
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
          <ul class="navbar-list">
            <li class="navbar-item">
              <a href="#home" class="navbar-link hover-underline active"
                ><span class="span">Accueil</span></a
              >
            </li>
            <li class="navbar-item">
              <a href="#menu" class="navbar-link hover-underline"
                ><span class="span">Événement</span></a
              >
            </li>
            <li class="navbar-item">
              <a href="#about" class="navbar-link hover-underline"
                ><span class="span">À Propos</span></a
              >
            </li>
            <li class="navbar-item">
              <a href="#contact" class="navbar-link hover-underline"
                ><span class="span">Contact</span></a
              >
            </li>
          </ul>
          <div class="text-center">
            <p class="headline-1 navbar-title">Nous Visiter</p>
            <address class="body-4">Via del Corso, Rome, Italie</address>
            <p class="body-4 navbar-text">Ouvert : 10h00 - 23h00</p>
            <a
              href="mailto:reservation@nbrairways.com"
              class="body-4 sidebar-link"
              >reservation@nbrairways.com</a
            >
            <p class="contact-label">Demande de Réservation</p>
            <a
              href="tel:+39123456789"
              class="body-1 contact-number hover-underline"
              >+39 123 456 789</a
            >
          </div>
        </nav>
        <button
          class="nav-open-btn"
          aria-label="ouvrir le menu"
          data-nav-toggler
        >
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

        <article>
          <!-- 
          - #HERO
        -->

          <section class="hero text-center" aria-label="home" id="home">
            <ul class="hero-slider" data-hero-slider>
              <!-- Slide 1 (English) -->
              <li class="slider-item active" data-hero-slider-item>
                <div class="slider-bg">
                  <img
                    src="./assets/images/italy/i1.png"
                    width="1880"
                    height="950"
                    alt="NBR Airways Italy Event"
                    class="img-cover"
                  />
                </div>

                <p class="label-2 section-subtitle slider-reveal">
                  The Ultimate Experience
                </p>

                <h1 class="display-1 hero-title slider-reveal">
                  Join Us in Italy <br />
                  for the NBR Airways Event 2024
                </h1>

                <p class="body-2 hero-text slider-reveal">
                  Immerse yourself in a world of elegance and innovation in the
                  heart of Italy. Discover the new NBR Airways experience and
                  enjoy exclusive moments!
                </p>
              </li>

              <!-- Slide 2 (Italian) -->
              <li class="slider-item" data-hero-slider-item>
                <div class="slider-bg">
                  <img
                    src="./assets/images/italy/i2.png"
                    width="1880"
                    height="950"
                    alt="NBR Airways Italian Luxury"
                    class="img-cover"
                  />
                </div>

                <p class="label-2 section-subtitle slider-reveal">
                  Lusso e Comfort
                </p>

                <h1 class="display-1 hero-title slider-reveal">
                  Scopri il Lusso Autentico <br />
                  Come Mai Prima
                </h1>

                <p class="body-2 hero-text slider-reveal">
                  Vivi un'esperienza unica di luxury e comfort. Esplora
                  l'approccio di NBR Airways per un viaggio all'insegna del
                  lusso.
                </p>
              </li>

              <!-- Slide 3 (Italian) -->
              <li class="slider-item" data-hero-slider-item>
                <div class="slider-bg">
                  <img
                    src="./assets/images/italy/i3.png"
                    width="1880"
                    height="950"
                    alt="NBR Airways Italian Future"
                    class="img-cover"
                  />
                </div>

                <p class="label-2 section-subtitle slider-reveal">
                  Innovazione e Sicurezza
                </p>

                <h1 class="display-1 hero-title slider-reveal">
                  Dove il Futuro del Viaggio <br />
                  Incontra la Tradizione
                </h1>

                <p class="body-2 hero-text slider-reveal">
                  Scopri le ultime tecnologie e le tradizioni italiane. Vivi il
                  futuro del viaggio sicuro con NBR Airways.
                </p>
              </li>
            </ul>

            <button
              class="slider-btn prev"
              aria-label="slide to previous"
              data-prev-btn
            >
              <ion-icon name="chevron-back"></ion-icon>
            </button>

            <button
              class="slider-btn next"
              aria-label="slide to next"
              data-next-btn
            >
              <ion-icon name="chevron-forward"></ion-icon>
            </button>
          </section>
        </article>

        <!-- 
        - #SERVICE
      -->
        <section
          class="section service bg-black-10 text-center"
          aria-label="service"
        >
          <div class="container">
            <p class="section-subtitle label-2">
              Un Grand Merci all'Hotel Bella Notte
            </p>

            <h2 class="headline-1 section-title">
              Découvrez l'Excellence de l'Organizzazione d'Événements à l'Hôtel
            </h2>

            <p class="section-text">
              L'Hôtel est fier de vous offrir une esperienza indimenticabile en
              accueillant cet événement spécial. Profitez d'un service de
              restauration raffinato, d'une programmation musicale captivante et
              de conférences enrichissantes. Laissez notre équipe de
              professionnels organiser chaque dettaglio pour vous offrir une
              soirée exceptionnelle.
            </p>

            <ul class="grid-list">
              <li>
                <div class="service-card">
                  <a href="#" class="has-before hover:shine">
                    <figure
                      class="card-banner img-holder"
                      style="--width: 285; --height: 336"
                    >
                      <img
                        src="./assets/images/italy/th.jpg"
                        width="285"
                        height="336"
                        loading="lazy"
                        alt="Dîner Gastronomique"
                        class="img-cover"
                      />
                    </figure>
                  </a>
                  <div class="card-content">
                    <h3 class="title-4 card-title">
                      <a href="#">Cuisine Gastronomica</a>
                    </h3>
                    <a href="#" class="btn-text hover-underline label-2"
                      >Découvrez Notre Menu</a
                    >
                  </div>
                </div>
              </li>

              <li>
                <div class="service-card">
                  <a href="#" class="has-before hover:shine">
                    <figure
                      class="card-banner img-holder"
                      style="--width: 285; --height: 336"
                    >
                      <img
                        src="./assets/images/italy/crop_7168_6014.jpg"
                        width="285"
                        height="336"
                        loading="lazy"
                        alt="Musique Folklorique"
                        class="img-cover"
                      />
                    </figure>
                  </a>
                  <div class="card-content">
                    <h3 class="title-4 card-title">
                      <a href="#">Ambiance Musicale</a>
                    </h3>
                    <a href="#" class="btn-text hover-underline label-2"
                      >Explorez le Programme</a
                    >
                  </div>
                </div>
              </li>

              <li>
                <div class="service-card">
                  <a href="#" class="has-before hover:shine">
                    <figure
                      class="card-banner img-holder"
                      style="--width: 285; --height: 336"
                    >
                      <img
                        src="./assets/images/italy/i5.jpg"
                        width="285"
                        height="336"
                        loading="lazy"
                        alt="Grande Conférence"
                        class="img-cover"
                      />
                    </figure>
                  </a>
                  <div class="card-content">
                    <h3 class="title-4 card-title">
                      <a href="#">Conférence Inspirante</a>
                    </h3>
                    <a href="#" class="btn-text hover-underline label-2"
                      >Réservez Votre Place</a
                    >
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>

        <!-- 
        - #ABOUT
      -->

        <section
          class="section about text-center"
          aria-labelledby="about-label"
          id="about"
        >
          <div class="container">
            <div class="about-content">
              <p class="label-2 section-subtitle" id="about-label">
                Notre Investissement dans l'Aviation Italienne
              </p>

              <h2 class="headline-1 section-title">
                Un Leader dans le Ciel Italien
              </h2>

              <p class="section-text">
                Grâce à notre investissement stratégique, nous avons redéfini
                les standards de l'aviation en Italie. Nous ne nous contentons
                pas de suivre notre trajectoire; nous avons transformé notre
                entreprise en un pilier majeur du transport aérien,
              </p>

              <p class="section-text">
                en relevant des défis audacieux, d'innover sans relâche, et en
                créant des expériences inégalées pour nos passagers. Chaque
                étape que nous avons franchie
              </p>

              <p class="section-text">
                Ensemble, nous faisons face aux défis du marché et visons à
                transformer notre vision en réalité. C'est l'année où notre rêve
                devient réalité, et où chaque vol nous rapproche de notre idéal
                d'excellence dans le ciel.
              </p>
            </div>

            <figure class="about-banner">
              <img
                style="
                  margin-bottom: 15px;
                  border-radius: 48px;
                  height: 49%;
                  width: 100%;
                "
                src="./assets/images/italy/airplane-7116299.png"
                width="570"
                height="570"
                loading="lazy"
                alt="bannière à propos"
                class="w-100"
                data-parallax-item
                data-parallax-speed="1"
              />
              <img
                style="
                  margin-bottom: 15px;
                  border-radius: 48px;
                  height: 49%;
                  width: 100%;
                "
                src="./assets/images/italy/i6.png"
                width="570"
                height="570"
                loading="lazy"
                alt="bannière à propos"
                class="w-100"
                data-parallax-item
                data-parallax-speed="1"
              />
            </figure>
          </div>
        </section>

        <!-- 
        - #SPECIAL DISH
      -->
        <section class="special-dish text-center" aria-labelledby="dish-label">
          <div class="special-dish-banner">
            <img
              src="./assets/images/italy/pexels-pascalr-108ee9306.png"
              width="320"
              height="100"
              loading="lazy"
              alt="NBR Airways Nouvel Itinéraire - Chine à France"
              class="img-cover"
            />
          </div>

          <div class="special-dish-content bg-black-10">
            <div class="container">
              <img
                src="./assets/images/badge-1.png"
                width="28"
                height="41"
                loading="lazy"
                alt="badge"
                class="abs-img"
              />

              <p class="section-subtitle label-2">
                Lancement de l'Événement Majeur
              </p>

              <h2 class="headline-1 section-title">
                Offre Spéciale : Pack Famille NBR Airways
              </h2>

              <p class="section-text">
                À l'occasion de l'ouverture de notre nouvelle route entre la
                Chine et la France, nous sommes ravis de proposer une offre
                spéciale pour les familles ! Profitez de tarifs réduits lorsque
                vous voyagez avec vos proches, avec des avantages exclusifs tels
                qu'un supplément de bagages, des repas enfants, et des
                divertissements à bord adaptés à toute la famille.
              </p>

              <div class="wrapper">
                <span class="span body-1"
                  >Voyagez en famille de l'Asie à l'Europe avec NBR Airways
                  !</span
                >
              </div>

              <a href="inscription.html" class="btn btn-primary">
                <span class="text text-1">Réservez Votre Pack Famille</span>
                <span class="text text-2" aria-hidden="true"
                  >Réservez Votre Pack Famille</span
                >
              </a>
            </div>
          </div>
        </section>

        <!-- 
        - #MENU
      -->

        <section class="section menu" aria-label="menu-label" id="menu">
          <div class="container">
            <p class="section-subtitle text-center label-2">
              Programme de l'Événement en Italie
            </p>

            <h2 class="headline-1 section-title text-center">
              Activités du Grand Événement
            </h2>

            <ul class="grid-list">
              <li>
                <div class="menu-card hover:card">
                  <div>
                    <div class="title-wrapper">
                      <h3 class="title-3">
                        <a href="#" class="card-title">Cérémonie d'Ouverture</a>
                      </h3>
                      <span class="span title-2">7:00 PM - 7:30 PM</span>
                    </div>
                    <p class="card-text label-1">
                      Participez à la cérémonie d'ouverture avec des discours
                      inspirants et des performances culturelles.
                    </p>
                  </div>
                </div>
              </li>

              <li>
                <div class="menu-card hover:card">
                  <div>
                    <div class="title-wrapper">
                      <h3 class="title-3">
                        <a href="#" class="card-title"
                          >Dégustation de Cuisine Italienne</a
                        >
                      </h3>
                      <span class="span title-2">7:30 PM - 8:15 PM</span>
                    </div>
                    <p class="card-text label-1">
                      Savourez des plats traditionnels italiens préparés par des
                      chefs renommés et découvrez des recettes authentiques.
                    </p>
                  </div>
                </div>
              </li>

              <li>
                <div class="menu-card hover:card">
                  <div>
                    <div class="title-wrapper">
                      <h3 class="title-3">
                        <a href="#" class="card-title"
                          >Musique et Danse Italiennes</a
                        >
                      </h3>
                      <span class="span title-2">8:15 PM - 9:00 PM</span>
                    </div>
                    <p class="card-text label-1">
                      Profitez d'une performance musicale live avec des danses
                      traditionnelles italiennes et apprenez les mouvements!
                    </p>
                  </div>
                </div>
              </li>

              <li>
                <div class="menu-card hover:card">
                  <div>
                    <div class="title-wrapper">
                      <h3 class="title-3">
                        <a href="#" class="card-title">Forum de Discussion</a>
                      </h3>
                      <span class="span title-2">9:00 PM - 9:30 PM</span>
                    </div>
                    <p class="card-text label-1">
                      Participez à un forum interactif pour échanger des idées
                      sur le Pack Famille et les avantages associés.
                    </p>
                  </div>
                </div>
              </li>

              <li>
                <div class="menu-card hover:card">
                  <div style="text-align: center">
                    <div class="title-wrapper">
                      <h3 class="title-3">
                        <a href="#" class="card-title"
                          >Lancement du Pack Famille</a
                        >
                      </h3>
                      <span class="span title-2">9:30 PM - 11:00 PM</span>
                    </div>
                    <p class="card-text label-1">
                      Rejoignez-nous pour le lancement officiel du Pack Famille
                      avec des offres spéciales, des surprises et des activités
                      pour toute la famille!
                    </p>
                  </div>
                </div>
              </li>
            </ul>

            <p class="menu-text text-center">
              Ne manquez pas cette occasion unique de célébrer la culture
              italienne et le lancement du Pack Famille. Réservez votre place
              dès maintenant!
            </p>

            <a href="inscription.html" class="btn btn-primary">
              <span class="text text-1">Inscrivez-vous Maintenant</span>
              <span class="text text-2" aria-hidden="true"
                >Inscrivez-vous Maintenant</span
              >
            </a>
          </div>
        </section>

        <!-- 
        - #TESTIMONIALS
      -->

        <section
          class="section testi text-center has-bg-image"
          style="background-image: url('./assets/images/EVENT/d47.png')"
          aria-label="testimonials"
        >
          <div class="container">
            <div class="quote">”</div>

            <p class="headline-2 testi-text">
              Vivez des voyages extraordinaires avec nous—où chaque voyage crée
              des souvenirs inoubliables.
            </p>

            <div class="wrapper">
              <div class="separator"></div>
              <div class="separator"></div>
              <div class="separator"></div>
            </div>
          </div>
        </section>

        <!-- 
        - #RESERVATION
      -->
        <!-- 
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
      </section> -->

        <!-- 
        - #FEATURES
      -->
        <!-- <section class="section features text-center" aria-label="features">
        <div class="container">
      
          <p class="section-subtitle label-2">Why Choose Us</p>
      
          <h2 class="headline-1 section-title">Our Commitment to Excellence</h2>
      
          <ul class="grid-list">
      
            <li class="feature-item">
              <div class="feature-card">
      
                <div class="card-icon">
                  <img src="./assets/images/icons/prise.png" width="100" height="80" loading="lazy" alt="Affordable Prices Icon">
                </div>
      
                <h3 class="title-2 card-title">Affordable Prices</h3>
      
                <p class="label-1 card-text">
                  We offer competitive pricing without compromising on quality, ensuring you get exceptional value for your money.
                </p>
      
              </div>
            </li>
      
            <li class="feature-item">
              <div class="feature-card">
      
                <div class="card-icon">
                  <img src="./assets/images/icons/save.png" width="100" height="80" loading="lazy" alt="Premium Service Icon">
                </div>
      
                <h3 class="title-2 card-title">Premium Service</h3>
      
                <p class="label-1 card-text">
                  Our dedicated team provides top-notch customer service, tailored to meet your needs and ensure a seamless experience.
                </p>
      
              </div>
            </li>
      
            <li class="feature-item">
              <div class="feature-card">
      
                <div class="card-icon">
                  <img src="./assets/images/icons/icons8-atterrissage-d'avion-100.png" width="100" height="80" loading="lazy" alt="Comfort Guaranteed Icon">
                </div>
      
                <h3 class="title-2 card-title">Comfort Guaranteed</h3>
      
                <p class="label-1 card-text">
                  Experience superior comfort with our thoughtfully designed spaces and amenities, making your journey as relaxing as possible.
                </p>
      
              </div>
            </li>
      
            <li class="feature-item">
              <div class="feature-card">
      
                <div class="card-icon">
                  <img src="./assets/images/icons/icons8-siège-auto-bébé-100.png" width="100" height="80" loading="lazy" alt="Safety Focused Icon">
                </div>
      
                <h3 class="title-2 card-title">Safety Focused</h3>
      
                <p class="label-1 card-text">
                  Your safety is our top priority. We follow rigorous safety standards and protocols, ensuring a secure and worry-free journey.
                </p>
      
              </div>
            </li>
      
          </ul>
      
        </div>
      </section>
       -->
        <!-- 
        - #EVENT
      -->

        <section
          class="section event bg-black-10"
          aria-label="event"
          id="event"
        >
          <div class="container">
            <p class="section-subtitle label-2 text-center">
              Mises à jour récentes
            </p>

            <h2 class="section-title headline-1 text-center">
              Nous Événements
            </h2>

            <ul class="grid-list">
              <li>
                <div class="event-card has-before hover:shine">
                  <div
                    class="card-banner img-holder"
                    style="--width: 350; --height: 450"
                  >
                    <img
                      src="./assets/images/EVENT/d3.jpg"
                      width="350"
                      height="450"
                      loading="lazy"
                      alt="Événement à venir à Dubaï"
                      class="img-cover"
                    />

                    <time class="publish-date label-2" datetime="2024-11-05"
                      >05/1/2025</time
                    >
                  </div>

                  <div class="card-content">
                    <p class="card-subtitle label-2 text-center">Dubai, UEA</p>

                    <h3 class="card-title title-2 text-center">
                      Rejoignez-nous pour un événement exclusif au cœur de
                      Dubai.
                    </h3>
                  </div>
                </div>
              </li>

              <li>
                <div class="event-card has-before hover:shine">
                  <div
                    class="card-banner img-holder"
                    style="--width: 350; --height: 450"
                  >
                    <img
                      src="./assets/images/EVENT/event1.jpg"
                      width="350"
                      height="450"
                      loading="lazy"
                      alt="Événement à venir en France"
                      class="img-cover"
                    />

                    <time class="publish-date label-2" datetime="2024-12-10"
                      >10/3/2025</time
                    >
                  </div>

                  <div class="card-content">
                    <p class="card-subtitle label-2 text-center">
                      Paris, France
                    </p>

                    <h3 class="card-title title-2 text-center">
                      Découvrez les dernières innovations en aviation lors de
                      notre événement à Paris.
                    </h3>
                  </div>
                </div>
              </li>

              <li>
                <div class="event-card has-before hover:shine">
                  <div
                    class="card-banner img-holder"
                    style="--width: 350; --height: 450"
                  >
                    <img
                      src="./assets/images/EVENT/event2.jpg"
                      width="350"
                      height="450"
                      loading="lazy"
                      alt="Événement à venir en Espagne"
                      class="img-cover"
                    />

                    <time class="publish-date label-2" datetime="2025-01-15"
                      >15/04/2025</time
                    >
                  </div>

                  <div class="card-content">
                    <p class="card-subtitle label-2 text-center">
                      Madrid, Espagne
                    </p>

                    <h3 class="card-title title-2 text-center">
                      Explorez de nouveaux horizons avec nous à Madrid.
                    </h3>
                  </div>
                </div>
              </li>
            </ul>

            <a href="#" class="btn btn-primary">
              <span class="text text-1">Voir tous les événements</span>
              <span class="text text-2" aria-hidden="true"
                >Voir tous les événements</span
              >
            </a>
          </div>
        </section>
      </article>
    </main>

    <!-- 
    - #FOOTER
  -->

    <footer
      class="footer section has-bg-image text-center"
      style="background-image: url('./assets/images/footer/footer1.png')"
      id="footer"
    >
      <div class="container">
        <div class="footer-top grid-list">
          <div class="footer-brand has-before has-after">
            <a href="#" class="logo">
              <img
                src="./assets/images/Assdet 3.png"
                width="160"
                height="50"
                loading="lazy"
                alt="nbr airways logo"
              />
            </a>

            <address class="body-4">
              NBR Airways, Airline Hub, London 9578, UK
            </address>

            <a href="mailto:contact@nbrairways.com" class="body-4 contact-link"
              >contact@nbrairways.com</a
            >

            <a href="tel:+880123123456" class="body-4 contact-link"
              >Customer Support : +88-0123-123456</a
            >

            <p class="body-4">Available 24/7 for Your Convenience</p>

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

                <input
                  type="email"
                  name="email_address"
                  placeholder="Your email"
                  autocomplete="off"
                  class="input-field"
                />
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
              <a href="#" class="label-2 footer-link hover-underline"
                >Destinations</a
              >
            </li>
            <li>
              <a href="#" class="label-2 footer-link hover-underline"
                >About Us</a
              >
            </li>
            <li>
              <a href="#" class="label-2 footer-link hover-underline"
                >Our Fleet</a
              >
            </li>
            <li>
              <a href="#" class="label-2 footer-link hover-underline"
                >Contact</a
              >
            </li>
          </ul>

          <ul class="footer-list">
            <li>
              <a href="#" class="label-2 footer-link hover-underline"
                >Facebook</a
              >
            </li>
            <li>
              <a href="#" class="label-2 footer-link hover-underline"
                >Instagram</a
              >
            </li>
            <li>
              <a href="#" class="label-2 footer-link hover-underline"
                >Twitter</a
              >
            </li>
            <li>
              <a href="#" class="label-2 footer-link hover-underline"
                >LinkedIn</a
              >
            </li>
            <li>
              <a href="#" class="label-2 footer-link hover-underline"
                >Google Map</a
              >
            </li>
          </ul>
        </div>

        <div class="footer-bottom">
          <p class="copyright">&copy; 2022 NBR Airways. All Rights Reserved</p>
        </div>
      </div>
    </footer>

    <!-- 
    - #BACK TO TOP
  -->

    <a
      href="#top"
      class="back-top-btn active"
      aria-label="back to top"
      data-back-top-btn
    >
      <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
    </a>

    <!-- 
    - custom js link
  -->
    <script src="./assets/js/script.js"></script>

    <!-- 
    - ionicon link
  -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
