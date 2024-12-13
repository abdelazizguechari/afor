@extends('user.mainsite.pages.layout')

@section('user')


 <div class="landing ">
      <section class="hero text-center" aria-label="home" id="home">

       <div
          class="searching border rounded-lg shadow-md bg-white bg-opacity-80  mx-auto  z-10 "
        >
          <h2 class="text-2xl font-bold mb-4">Search Flights</h2>
          <form action="">
            <div class="flex mb-4">
              <div class="flex-grow mr-2 relative">
                <label
                  for="class-type"
                  class="block text-sm font-medium text-gray-700"
                  >Class Type</label
                >
                <select
                  id="class-type"
                  name="class-type"
                  class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500"
                >
                  <option value="economy">Economy</option>
                  <option value="business">Business</option>
                  <option value="first-class">First Class</option>
                </select>
              </div>
              <div class="flex-1 mx-2 relative">
                <label
                  for="departure"
                  class="block text-sm font-medium text-gray-700"
                  >Departure City</label
                >
                <input
                  type="text"
                  id="departure"
                  name="departure"
                  required
                  class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500"
                  placeholder="From (City or Airport)"
                />
              </div>
              <div class="flex-1 ml-2 relative">
                <label
                  for="arrival"
                  class="block text-sm font-medium text-gray-700"
                  >Arrival City</label
                >
                <input
                  type="text"
                  id="arrival"
                  name="arrival"
                  required
                  class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500"
                  placeholder="To (City or Airport)"
                />
              </div>
            </div>

            <div class="flex w-full mb-4">
              <div class="flex-1 mr-2 relative">
                <label
                  for="trip-dates"
                  class="block text-sm font-medium text-gray-700"
                  >Travel Dates</label
                >
                <input
                  type="text"
                  id="trip-dates"
                  name="trip-dates"
                  required
                  class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500"
                  placeholder="Select Dates"
                />
              </div>

              <div class="flex-auto mx-2 relative">
                <label
                  for="nbr-id"
                  class="block text-sm font-medium text-gray-700"
                  >Nbr ID</label
                >
                <input
                  type="text"
                  id="nbr-id"
                  name="nbr-id"
                  required
                  class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500"
                  placeholder="Your ID"
                />
              </div>
              <div class="flex-shrink mx-2 relative">
                <label
                  for="passengers"
                  class="block text-sm font-medium text-gray-700"
                  >Passengers</label
                >
                <select
                  id="passengers"
                  name="passengers"
                  class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500"
                >
                  <option value="1">1 Adult</option>
                  <option value="2">2 Adults</option>
                  <option value="3">3 Adults</option>
                  <option value="4">4 Adults</option>
                  <option value="5">5 Adults</option>
                </select>
              </div>
              <div class="flex-grow mx-2 relative">
                <label
                  for="trip-type"
                  class="block text-sm font-medium text-gray-700"
                  >Trip Type</label
                >
                <select
                  id="trip-type"
                  name="trip-type"
                  class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500"
                >
                  <option value="round-trip">Round Trip</option>
                  <option value="one-way">One Way</option>
                </select>
              </div>
            </div>

            <div class="text-right">
              <button
                type="button"
                class="bg-gray-200 text-gray-800 font-semibold py-2 px-4 rounded-md hover:bg-gray-300 transition duration-200"
              >
                Recherche
              </button>
            </div>
          </form>
        </div>

      </section>


</div>

   

<main>

  <div class="container">

  <div class="img">
    <img src="{{ asset('img/card.png') }}" alt="card">
  </div>

  


  <div class="text">

    
    <h1>Explorez le monde avec nos nouvelles cartes</h1>
    <p>La NBR Card vous permet de voyager sans limites, avec un accès simplifié à tous les trajets. Une seule carte pour explorer le monde, sans contrainte</p>

    <p> <a href="">get the card</a> </p>
     
  
  
  </div>

</div>
</main>

    <!-- end event -->

    

    <div class="section1 py-6">
      <div class="container">
        <h1 class="ml-2 pb-1 font-black pt-4 text-2xl ">
          information
        </h1>

        <div class="mt-8 flex justify-between">
          <!-- Card 1 -->
          <div class="image flex-1 mx-2">
            <div class="border rounded-lg overflow-hidden h-full flex flex-col">
              <!-- Set a fixed height for the card -->
              <img
                src="{{ asset('img/image/info/info4.png') }}"
                alt=""
                class="w-full h-auto"
              />
              <div class="p-4 flex flex-col flex-grow">
                <h5 class="text-lg font-bold pb-3">
                  Vols charter 
                </h5>
                <p class="text-gray-600">
                  offre des vols charters sur mesure, incluant forfaits touristiques, billets individuels et services pour groupes.
                </p>
                <div class="mt-auto text-right">
                  <!-- Use mt-auto to push the button to the bottom -->
                  
                </div>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="image flex-1 mx-2">
            <div class="border rounded-lg overflow-hidden flex flex-col h-full">
              <!-- Set a fixed height for the card -->
              <img src="{{ asset('img/image/info/info8.png') }}" alt="" class="w-full h-auto" />
              <div class="p-4 flex flex-col flex-grow">
                <h5 class="text-lg font-bold pb-3">Voyages organiser </h5>
                <p class="text-gray-600">
                  organise des voyages sur mesure, couvrant affaires, loisirs et pèlerinages, avec une flotte moderneé
                </p>
                <div class="mt-auto text-right">
                  <!-- Use mt-auto to push the button to the bottom -->
                 
                </div>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="image flex-1 mx-2">
            <div class="border rounded-lg overflow-hidden flex flex-col h-full">
              <!-- Set a fixed height for the card -->
              <img src="{{ asset('img/image/info/info7.png') }}" alt="" class="w-full h-auto" />
              <div class="p-4 flex flex-col flex-grow">
                <h5 class="text-lg font-bold pb-3">Notre flotte</h5>
                <p class="text-gray-600">
                  dispose d'une flotte diversifiée comprenant avions commerciaux, jets privés et cargos, offrant confort
                </p>
                <div class="mt-auto text-right">
                  <!-- Use mt-auto to push the button to the bottom -->
                 
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="mb-8 mt-8 flex justify-between">
          <!-- Card 1 -->
          <div class="image flex-1 mx-2">
            <div class="border rounded-lg overflow-hidden h-full flex flex-col">
              <!-- Set a fixed height for the card -->
              <img
                src="{{ asset('img/image/info/info10.png') }}"
                alt=""
                class="w-full h-auto"
              />
              <div class="p-4 flex flex-col flex-grow">
                <h5 class="text-lg font-bold pb-3">
                  Types de vols VIP
                </h5>
                <p class="text-gray-600">
                  propose des vols VIP personnalisés, incluant jets privés et première classel
                </p>
                <div class="mt-auto text-right">
                  <!-- Use mt-auto to push the button to the bottom -->
                 
                </div>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="image flex-1 mx-2">
            <div class="border rounded-lg overflow-hidden flex flex-col h-full">
              <!-- Set a fixed height for the card -->
              <img src="{{ asset('img/image/info/info9.png') }}" alt="" class="w-full h-auto" />
              <div class="p-4 flex flex-col flex-grow">
                <h5 class="text-lg font-bold pb-3">transfère aéroport </h5>
                <p class="text-gray-600">
                  propose des transferts aéroport privés, partagés et pour groupes, alliant confort 
                </p>
                <div class="mt-auto text-right">
                  <!-- Use mt-auto to push the button to the bottom -->
                 
                </div>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="image flex-1 mx-2">
            <div class="border rounded-lg overflow-hidden flex flex-col h-full">
              <!-- Set a fixed height for the card -->
              <img src="{{ asset('img/image/info/info11.png') }}" alt="" class="w-full h-auto" />
              <div class="p-4 flex flex-col flex-grow">
                <h5 class="text-lg font-bold pb-3">Transport Fret aérien 
                </h5>
                <p class="text-gray-600">
                  offre des services de fret aérien fiables et rapides, adaptés aux besoins des entreprises et des particuliers
                </p>
                <div class="mt-auto text-right">
                  <!-- Use mt-auto to push the button to the bottom -->
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section2">
      <div class="container">


        <div class="pt-5">
          <h1>NBR Event 2025</h1>
          <p>Découvrez nos incroyables événements NBR et réservez votre place dès maintenant</p>
        </div>
      
      
        <div>

            <div>
            <a href=""><img src="" alt=""></a>
            </div>

            <div>
             <a href=""><img src="" alt=""></a>
            </div>


            <div>
            <a href=""><img src="" alt=""></a>
            </div>

            <div>
              <a href=""><img src="" alt=""></a>
            </div>
          </div>
      </div>
    </div>

    <div class="section3">
      <div class="container">
        <h4
          class="mt-3"
          style="color: rgb(25, 3, 55); margin: 20px; font-weight: bold"
        >
          Destinations tendance
        </h4>
        <!-- Translated "Trending destinations" -->

        <div class="row">
          <div class="col">
            <img src="{{ asset('img/image/photo20.png') }}" alt="" />
          </div>
          <div class="col">
            <img src="{{ asset('img/image/photo21.png') }}" alt="" />
          </div>
        </div>
        <div class="row">
          <div class="col">
            <img src="{{ asset('img/image/photo22.png') }}" alt="" />
          </div>
          <div class="col">
            <img src="{{ asset('img/image/photo23.png') }}" alt="" />
          </div>
          <div class="col">
            <img src="{{ asset('img/image/photo24.png') }}" alt="" />
          </div>
        </div>
      </div>
    </div>

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

@endsection
