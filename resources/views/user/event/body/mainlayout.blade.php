<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Primary Meta Tags -->
  <title>NBR Airways</title>
  <meta name="title" content="NBR Airways">
  <meta name="description" content="This is a restaurant HTML template made by codewithsadee">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
 <link rel="stylesheet" href="{{ asset('backend/assets/css/main/event.css') }}">

  <!-- Preload Images -->
  <link rel="preload" as="image" href="{{ asset('assets/images/landing.jpg') }}">
  <link rel="preload" as="image" href="{{ asset('assets/images/landing2.jpg') }}">
  <link rel="preload" as="image" href="{{ asset('assets/images/landing1.jpg') }}">

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
</head>

<body id="top">

  <!-- Preload Animation -->


  <!-- Top Bar -->
  @include('user.event.body.topbar')

  <!-- Header Section -->
  @include('user.event.body.header')

  <!-- Main Content -->
  <main>
    @yield('main')
  </main>

  <!-- Footer Section -->
  @include('user.event.body.footer')

  <!-- Back to Top Button -->
  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>

  <!-- Custom JavaScript -->
  <script src="{{ asset('assets/js/script.js') }}"></script>

  <!-- Ionicon Script -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script src="{{ asset('backend/assets/js/main/event.js') }}"></script>

</body>
</html>
