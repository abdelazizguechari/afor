<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 

<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

 

       <link rel="stylesheet" href="{{ asset('backend/assets/css/main/app.css') }}">
       <link rel="stylesheet" href="{{ asset('backend/assets/css/main/swiper-bundle.min.css') }}">



    <title>Document</title>
</head>
<body>

    @include('user.mainsite.body.header')

    @yield('user')

    @include('user.mainsite.body.footer')

</body>

 <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodul  src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" ></script>

    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="assets/js/main.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  
  <script src="{{ asset('backend/assets/js/main/main.js') }}"></script>
    <script src="{{ asset('backend/assets/js/main/swiper-bundle.min.js') }}"></script>


  

</html>