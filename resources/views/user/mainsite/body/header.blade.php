
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


    
    </div>
  </div>
</header>