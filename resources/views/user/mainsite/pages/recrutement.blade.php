@extends('user.mainsite.pages.layout')

@section('user')



  

<section class="h-screen flex justify-center items-center relative bg-violet-700">
    <div class="slider">
      <div class="slide activer">
        <img src="{{ asset('img/image/rect/r1.png') }}" alt="Slide 1" style="width: 100%; height: 100%; object-fit: cover;">
        <div class="text-container">
          <p class="text-gray-50 text-7xl">Une carrière qui transforme votre vie !</p>
          <p class="text-gray-50 text-lg mt-9">Rejoignez-nous pour des défis passionnants et un avenir radieux!</p>
        </div>
      </div>
      <div class="slide inactive">
        <img src="{{ asset('img/image/rect/r2.png') }}" alt="Slide 2" style="width: 100%; height: 100%; object-fit: cover;">
        <div class="text-container">
          <p class="text-gray-50 text-7xl">Offres irrésistibles vous attendent!</p>
          <p class="text-gray-50 text-lg mt-9">Faites partie d'une équipe dynamique et innovante. Votre avenir commence ici!</p>
        </div>
      </div>
      <div class="slide inactive">
        <img src="{{ asset('img/image/rect/r3.png') }}" alt="Slide 3" style="width: 100%; height: 100%; object-fit: cover;">
        <div class="text-container">
          <p class="text-gray-50 text-7xl">Nous cherchons des talents comme le vôtre!</p>
          <p class="text-gray-50 text-lg mt-9">Bénéficiez d'une croissance personnelle et professionnelle dans un environnement collaboratif!</p>
        </div>
      </div>
    </div>
</section>


<article>
    <section class="min-h-screen bg-[#0E010C]">
        <div class="flex text-white flex-col items-center justify-start h-full text-center">
            <h2 class="text-4xl font-bold mt-8 mb-2 relative custom-after">Pourquoi Nous Rejoindre</h2>
            <p class="text-2xl mt-4">Rejoignez une équipe dynamique qui valorise votre talent et vos ambitions. <br> 
                Postulez dès maintenant et commencez votre voyage vers une carrière <br> enrichissante et épanouissante!</p>
         
          
    
      </div>

      <section class="py-20">
        <div class="container mx-auto text-center">
            <div class="flex flex-wrap justify-center gap-6">
                <!-- First Row -->
                <div class="card group bg-gradient-to-r from-gray-300 to-purple-900 p-6 rounded-lg shadow-md">
                    <div class="flex items-center">
                        <div class="icon-wrapper transition duration-300">
                            <i class="fas fa-user-plus text-4xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-semibold text-white ml-4">Rejoignez-Nous</h3>
                    </div>
                    <p class="mt-2 text-white">Nous cherchons des talents! Envoyez-nous votre CV et devenez membre de notre équipe.</p>
                </div>
                <div class="card group bg-gradient-to-r from-gray-300 to-purple-900 p-6 rounded-lg shadow-md">
                    <div class="flex items-center">
                        <div class="icon-wrapper transition duration-300">
                            <i class="fas fa-users text-4xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-semibold text-white ml-4">Travail d'Équipe</h3>
                    </div>
                    <p class="mt-2 text-white">Collaborez avec des professionnels passionnés et dynamiques.</p>
                </div>
                <div class="card group bg-gradient-to-r from-gray-300 to-purple-900 p-6 rounded-lg shadow-md">
                    <div class="flex items-center">
                        <div class="icon-wrapper transition duration-300">
                            <i class="fas fa-bullhorn text-4xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-semibold text-white ml-4">Opportunités</h3>
                    </div>
                    <p class="mt-2 text-white">Nous offrons des opportunités de carrière enrichissantes. Postulez dès maintenant!</p>
                </div>
                <!-- Second Row -->
                <div class="card group bg-gradient-to-r from-gray-300 to-purple-900 p-6 rounded-lg shadow-md">
                    <div class="flex items-center">
                        <div class="icon-wrapper transition duration-300">
                            <i class="fas fa-tools text-4xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-semibold text-white ml-4">Formation</h3>
                    </div>
                    <p class="mt-2 text-white">Profitez de programmes de formation et de développement pour améliorer vos compétences.</p>
                </div>
                <div class="card group bg-gradient-to-r from-gray-300 to-purple-900 p-6 rounded-lg shadow-md">
                    <div class="flex items-center">
                        <div class="icon-wrapper transition duration-300">
                            <i class="fas fa-shield-alt text-4xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-semibold text-white ml-4">Engagement</h3>
                    </div>
                    <p class="mt-2 text-white">Nous nous engageons à créer un environnement de travail sécurisé et inclusif.</p>
                </div>
                <div class="card group bg-gradient-to-r from-gray-300 to-purple-900 p-6 rounded-lg shadow-md">
                    <div class="flex items-center">
                        <div class="icon-wrapper transition duration-300">
                            <i class="fas fa-map-marked-alt text-4xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-semibold text-white ml-4">Accessibilité</h3>
                    </div>
                    <p class="mt-2 text-white">Nos offres d'emploi sont accessibles à tous. Rejoignez-nous, peu importe où vous êtes!</p>
                </div>
                <!-- Third Row -->
                <div class="card group bg-gradient-to-r from-gray-300 to-purple-900 p-6 rounded-lg shadow-md">
                    <div class="flex items-center">
                        <div class="icon-wrapper transition duration-300">
                            <i class="fas fa-lightbulb text-4xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-semibold text-white ml-4">Innovation</h3>
                    </div>
                    <p class="mt-2 text-white">Nous recherchons des idées nouvelles et créatives pour transformer notre entreprise.</p>
                </div>
                <div class="card group bg-gradient-to-r from-gray-300 to-purple-900 p-6 rounded-lg shadow-md">
                    <div class="flex items-center">
                        <div class="icon-wrapper transition duration-300">
                            <i class="fas fa-comments text-4xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-semibold text-white ml-4">Support</h3>
                    </div>
                    <p class="mt-2 text-white">Notre équipe est là pour vous aider à chaque étape de votre parcours.</p>
                </div>
                <div class="card group bg-gradient-to-r from-gray-300 to-purple-900 p-6 rounded-lg shadow-md">
                    <div class="flex items-center">
                        <div class="icon-wrapper transition duration-300">
                            <i class="fas fa-trophy text-4xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-semibold text-white ml-4">Réussite</h3>
                    </div>
                    <p class="mt-2 text-white">Ensemble, nous pouvons atteindre le succès. Postulez pour faire partie de notre histoire!</p>
                </div>
            </div>
        </div>
    </section>
    
      
      
      
      
    
    </section>
  
    
  </article>



  <section class="min-h-screen bg-white ">
    <div class="container mx-auto px-4 mb-5">
        <h1 class="text-3xl font-bold text-center mb-8">Offres d'emploi</h1>

            <!-- Additional Context Section -->
    <div class="text-center mb-5">
        <p class="text-gray-600 text-3xl mt-2">
            Nous recherchons des passionnés prêts à relever de nouveaux défis. Découvrez nos offres ci-dessous et envoyez-nous votre candidature!
        </p>
    </div>



    <div class="bg-[#0E010C] p-7  rounded  ">

        <!-- Filter Bar -->
        <div class="flex justify-center mb-6">
          <div class="flex justify-between w-full rounded-md space-x-4">
              <button id="allJobs" class="filter-button w-full px-4 py-2 text-white bg-purple-950 rounded-md hover:bg-purple-800 focus:outline-none">Tout</button>
              <button id="category1" class="filter-button w-full px-4 py-2 bg-white text-gray-800 rounded-md hover:bg-gray-100 focus:outline-none">Catégorie 1</button>
              <button id="category2" class="filter-button w-full px-4 py-2 bg-white text-gray-800 rounded-md hover:bg-gray-100 focus:outline-none">Catégorie 2</button>
              <button id="category3" class="filter-button w-full px-4 py-2 bg-white text-gray-800 rounded-md hover:bg-gray-100 focus:outline-none">Catégorie 3</button>
          </div>
      </div>
      


        <div id="job-list" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Job Card 1 -->
          <div class="job-card category1 bg-white shadow-lg rounded-lg overflow-hidden">
              <img class=" rounded " src="/image/jobs/1.jpg" alt="Job Image" class="w-full h-48 object-cover">
              <div class="p-6">
                  <h2 class="text-xl font-semibold">Directeur Général Adjoint</h2>
                  <p class="text-gray-600 mt-2 text-center">Rejoignez notre compagnie aérienne en tant que Directeur Général Adjoint,</p>
                  <button class="mt-4 inline-block text-blue-500 hover:underline" onclick="showPopup('job1')">En savoir plus</button>
              </div>
          </div>


            <!-- Job Card 2 -->
            <div class="job-card category2 bg-white shadow-lg rounded-lg overflow-hidden">
              <img src="/image/jobs/2.jpg" alt="Job Image" class="w-full h-48 object-cover">
              <div class="p-6">
                  <h2 class="text-xl font-semibold">COO (Directeur des Opérations)</h2>
                  <p class="text-gray-600 mt-2">Rejoignez notre compagnie aérienne en tant que COO, responsable de l’ensemble des opérations aériennes, garantissant efficacité, sécurité et qualité de service.</p>
                  <button class="mt-4 inline-block text-blue-500 hover:underline" onclick="showPopup('job2')">En savoir plus</button>
              </div>
          </div>

            <!-- Job Card 3 -->
            <div class="job-card category2 bg-white shadow-lg rounded-lg overflow-hidden hidden">
                <img src="/image/jobs/3.jpg" alt="Job Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold">Responsable des Opérations de Vol</h2>
                    <p class="text-gray-600 mt-2">Assurez l'efficacité et la sécurité des opérations de vol, supervisant toutes les opérations de vol et garantissant la conformité.</p>
                    <button class="mt-4 inline-block text-blue-500 hover:underline" onclick="showPopup('job4')">En savoir plus</button>
                </div>
            </div>

            <!-- Job Card 4 -->
            <div class="job-card category2 bg-white shadow-lg rounded-lg overflow-hidden hidden">
                <img src="/image/jobs/4.jpg" alt="Job Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold">Hôtesses de l'Air et Stewards</h2>
                    <p class="text-gray-600 mt-2">Rejoignez notre équipe pour offrir une expérience de voyage exceptionnelle à nos passagers tout en garantissant leur sécurité.</p>
                    <a href="#" class="mt-4 inline-block text-blue-500 hover:underline">En savoir plus</a>
                </div>
            </div>

            <!-- Job Card 5 -->
            <div class="job-card category3 bg-white shadow-lg rounded-lg overflow-hidden hidden">
                <img src="/image/jobs/5.jpg" alt="Job Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold">Pilote Capitaine de Bord</h2>
                    <p class="text-gray-600 mt-2">Nous recherchons des pilotes expérimentés pour garantir la sécurité des vols et le confort des passagers.</p>
                    <a href="#" class="mt-4 inline-block text-blue-500 hover:underline">En savoir plus</a>
                </div>
            </div>

            <!-- Job Card 6 -->
            <div class="job-card category1 bg-white shadow-lg rounded-lg overflow-hidden hidden">
                <img src="/image/jobs/7.jpg" alt="Job Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold">Directeur Marketing</h2>
                    <p class="text-gray-600 mt-2">Cherche un leader créatif pour diriger le marketing et les initiatives de croissance de l'entreprise.</p>
                    <a href="#" class="mt-4 inline-block text-blue-500 hover:underline">En savoir plus</a>
                </div>
            </div>

            <!-- Job Card 7 -->
            <div class="job-card category2 bg-white shadow-lg rounded-lg overflow-hidden hidden">
                <img src="/image/jobs/8.jpg" alt="Job Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold">Ingénieur de Maintenance Aéronautique</h2>
                    <p class="text-gray-600 mt-2">Assurez la maintenance et la sécurité des avions en travaillant avec des technologies de pointe.</p>
                    <button class="mt-4 inline-block text-blue-500 hover:underline" onclick="showPopup('job7')">En savoir plus</button>
                </div>
            </div>

            <!-- Job Card 8 -->
            <div class="job-card category3 bg-white shadow-lg rounded-lg overflow-hidden hidden">
                <img src="/image/jobs/9.jpg" alt="Job Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold">Contrôleur de Trafic Aérien</h2>
                    <p class="text-gray-600 mt-2">Supervisez le trafic aérien pour garantir la sécurité et l'efficacité des vols.</p>
                    <a href="#" class="mt-4 inline-block text-blue-500 hover:underline">En savoir plus</a>
                </div>
            </div>

            <!-- Job Card 9 -->
            <div class="job-card category1 bg-white shadow-lg rounded-lg overflow-hidden hidden">
                <img src="/image/jobs/10.jpg" alt="Job Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold">Analyste de Données</h2>
                    <p class="text-gray-600 mt-2">Rejoignez notre équipe pour analyser les données de l'industrie aéronautique et aider à la prise de décision stratégique.</p>
                    <a href="#" class="mt-4 inline-block text-blue-500 hover:underline">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>


</div>


    <div id="job-popup" class="fixed inset-0 z-50 hidden bg-gray-800 bg-opacity-75 flex items-center justify-center">
      <div class="bg-white rounded-lg max-w-lg mx-auto overflow-hidden shadow-lg">
          <div class="bg-gray-200 p-4">
              <h2 id="popup-title" class="text-xl font-semibold"></h2>
          </div>
          <div class="p-6 max-h-96 overflow-y-auto">
              <p id="popup-description" class="text-gray-600 mt-2"></p>
          </div>
          <div class="bg-gray-200 p-4 flex justify-end">
              <button onclick="closePopup()" class="text-red-500 hover:underline">Fermer</button>
          </div>
      </div>
  </div>



  <section class="min-h-screen bg-[#0E010C] bg-[url('/image/i5.png')] bg-cover bg-center py-10 flex justify-center items-center">
    <div class="container">
        <div class="text-center">
            <h1 class="text-red-50 text-3xl font-bold">
                Soumettez vos documents à l'adresse e-mail suivante
            </h1>
            <p class="text-red-50 text-lg mt-2">
                Veuillez inclure votre CV, vos diplômes et votre lettre de motivation.
            </p>
            <div class="mt-6 border border-white rounded-lg shadow-lg p-6">
                <h2 class="text-red-50 text-xl font-semibold">
                    contact@nbrairways.com
                </h2>
            </div>
        </div>
    </div>
</section>




<script>
    
const slides = document.querySelectorAll(".slide"); // Select all slides
let currentIndex = 0;

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.remove("activer"); // Hide all slides
        slide.classList.add("inactive"); // Mark all as inactive
        const textContainer = slide.querySelector(".text-container");
        if (i === index) {
            slide.classList.add("activer"); // Show the current slide
            slide.classList.remove("inactive"); // Make it visible
            textContainer.style.animationDelay = "0s"; // Start animation immediately
            textContainer.style.opacity = "1"; // Ensure text is visible
        } else {
            textContainer.style.animationDelay = "0.5s"; // Delay for non-active text
            textContainer.style.opacity = "0"; // Keep text hidden
        }
    });
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length; // Loop back to first slide
    showSlide(currentIndex);
}

setInterval(nextSlide, 5000); // Change slide every 5 seconds

</script>












@endsection