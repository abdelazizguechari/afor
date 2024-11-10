
<header>
  <div class="container">
    <div class="logo">
    <img
    style="outline: none; background-color: transparent"
    src="{{ asset('img/image/1.png') }}"
    alt="Logo"
/>
    </div>

    <div class="menu-toggle" onclick="toggleMenu()">
      <i class="fa-solid fa-bars"></i>
    </div>

<nav>
    <ul>
        <li><a class="{{ request()->routeIs('index.user') ? 'active' : '' }}" href="{{ route('index.user') }}">Accueil</a></li>
        <li><a class="{{ request()->is('programme') ? 'active' : '' }}" href="">Programme</a></li>
        <li><a class="{{ request()->routeIs('recrutement.user') ? 'active' : '' }}" href="{{ route('recrutement.user') }}">Recrutement</a></li>
        <li><a class="{{ request()->is('destination') ? 'active' : '' }}" href="">Destination</a></li>
        <li><a class="{{ request()->is('contact') ? 'active' : '' }}" href="">Contact</a></li>
    </ul>
</nav>


    <div class="menu">
      <div class="language-dropdown">
        <button onclick="toggleLanguageDropdown()">
          Fr <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div id="language-dropdown-menu" class="dropdown-content">
          <a href="#" onclick="changeLanguage('ar')">Arabe</a>
          <a href="#" onclick="changeLanguage('fr')">Français</a>
          <a href="#" onclick="changeLanguage('es')">Español</a>
          <a href="#" onclick="changeLanguage('en')">English</a>
        </div>
      </div>

      <div class="language-dropdown">
        <button onclick="toggleLoginDropdown()">
          Se connecter <i class="fa-solid fa-user"></i>
        </button>
        <div id="login-dropdown-menu" class="dropdown-content">
          <a href="#" onclick="handleLogin()">Se connecter</a>
          <a href="#" onclick="handleSignUp()">Créer un compte</a>
        </div>
      </div>
    </div>
  </div>
</header>