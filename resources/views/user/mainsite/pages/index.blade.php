@extends('user.mainsite.pages.layout')

@section('user')


 <div class="landing ">
      <section class="hero text-center" aria-label="home" id="home">

       <div
          class="searching border p-6 rounded-lg shadow-md bg-white bg-opacity-80 w-4/5 mx-auto bottom-[55px] relative z-10 mt-56"
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

   


<div class=" bg-slate-400 h-full text-yellow-600 py-8">
<p class="text-red-200"> this is the end </p>
</div>


    <!-- end event -->

    

    <div class="section1 py-6">
      <div class="contain">
        <h1 class="ml-5 text-center pb-3 pt-4 text-2xl font-black">
          decoverier notre service
        </h1>
        <hr />
        <div class="mt-8 flex justify-between">
          <!-- Card 1 -->
          <div class="image flex-1 mx-2">
            <div class="border rounded-lg overflow-hidden h-full flex flex-col">
              <!-- Set a fixed height for the card -->
              <img
                src="{{ asset('img/image/Airlines Company Profile Presentation.png') }}"
                alt=""
                class="w-full h-auto"
              />
              <div class="p-4 flex flex-col flex-grow">
                <h5 class="text-lg font-bold">
                  Explorez nos options de transportation
                </h5>
                <p class="text-gray-600">
                  Recherchez les meilleures offres pour votre prochain vol
                </p>
                <div class="mt-auto text-right">
                  <!-- Use mt-auto to push the button to the bottom -->
                  <button
                    class="bg-violet-950 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-3 rounded"
                  >
                    next
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="image flex-1 mx-2">
            <div class="border rounded-lg overflow-hidden flex flex-col h-full">
              <!-- Set a fixed height for the card -->
              <img src="{{ asset('img/image/blue.jpg') }}" alt="" class="w-full h-auto" />
              <div class="p-4 flex flex-col flex-grow">
                <h5 class="text-lg font-bold">Formation Hotesse & steward</h5>
                <p class="text-gray-600">
                  Sièges ergonomiques, divertissement personnel, service
                  attentionné
                </p>
                <div class="mt-auto text-right">
                  <!-- Use mt-auto to push the button to the bottom -->
                  <button
                    class="bg-violet-950 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-3 rounded"
                  >
                    next
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="image flex-1 mx-2">
            <div class="border rounded-lg overflow-hidden flex flex-col h-full">
              <!-- Set a fixed height for the card -->
              <img src="{{ asset('img/image/tran (1).png') }}" alt="" class="w-full h-auto" />
              <div class="p-4 flex flex-col flex-grow">
                <h5 class="text-lg font-bold">Volez confortablement</h5>
                <p class="text-gray-600">
                  Assurant un confort adapté à vos besoins
                </p>
                <div class="mt-auto text-right">
                  <!-- Use mt-auto to push the button to the bottom -->
                  <button
                    class="bg-violet-950 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-3 rounded"
                  >
                    next
                  </button>
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
                src="{{ asset('img/image/Airlines Company Profile Presentation.png') }}"
                alt=""
                class="w-full h-auto"
              />
              <div class="p-4 flex flex-col flex-grow">
                <h5 class="text-lg font-bold">
                  Explorez nos options de transportation
                </h5>
                <p class="text-gray-600">
                  Recherchez les meilleures offres pour votre prochain vol
                </p>
                <div class="mt-auto text-right">
                  <!-- Use mt-auto to push the button to the bottom -->
                  <button
                    class="bg-violet-950 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-3 rounded"
                  >
                    next
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="image flex-1 mx-2">
            <div class="border rounded-lg overflow-hidden flex flex-col h-full">
              <!-- Set a fixed height for the card -->
              <img src="{{ asset('img/image/blue.jpg') }}" alt="" class="w-full h-auto" />
              <div class="p-4 flex flex-col flex-grow">
                <h5 class="text-lg font-bold">Formation Hotesse & steward</h5>
                <p class="text-gray-600">
                  Sièges ergonomiques, divertissement personnel, service
                  attentionné
                </p>
                <div class="mt-auto text-right">
                  <!-- Use mt-auto to push the button to the bottom -->
                  <button
                    class="bg-violet-950 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-3 rounded"
                  >
                    next
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="image flex-1 mx-2">
            <div class="border rounded-lg overflow-hidden flex flex-col h-full">
              <!-- Set a fixed height for the card -->
              <img src="{{ asset('img/image/tran (1).png') }}" alt="" class="w-full h-auto" />
              <div class="p-4 flex flex-col flex-grow">
                <h5 class="text-lg font-bold">Volez confortablement</h5>
                <p class="text-gray-600">
                  Assurant un confort adapté à vos besoins
                </p>
                <div class="mt-auto text-right">
                  <!-- Use mt-auto to push the button to the bottom -->
                  <button
                    class="bg-violet-950 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-3 rounded"
                  >
                    next
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section2">
      <div class="container">
         <h4 class="mb-6 text-center"  style="color: aliceblue">
                Faites votre choix avec nos forfaits
              </h4>
        <section class="container">
           
          <div class="card__container swiper">
            <div class="card__content">
            
              <div class="swiper-wrapper">
                <article class="card__article swiper-slide">
                  <div class="card__image">
                    <img
                      src="{{ asset('img/image/photo14.png') }}"
                      alt="image"
                      class="card__img"
                    />
                  </div>
                  <div class="card__data">
                    <h3 class="card__name">Couple</h3>
                    <p class="card__description">
                      Tarifs réduits pour les billets d'avion, embarquement
                      prioritaire et repas gratuits pour deux.
                    </p>
                    <a href="#" class="card__button">Voir plus</a>
                  </div>
                </article>

                <article class="card__article swiper-slide">
                  <div class="card__image">
                    <img
                      src="{{ asset('img/image/photo14.png') }}"
                      alt="image"
                      class="card__img"
                    />
                  </div>
                  <div class="card__data">
                    <h3 class="card__name">Famille</h3>
                    <p class="card__description">
                      Tarifs réduits pour les billets d'avion, embarquement
                      prioritaire et repas gratuits pour deux.
                    </p>
                    <a href="#" class="card__button">Voir plus</a>
                  </div>
                </article>
                <article class="card__article swiper-slide">
                  <div class="card__image">
                    <img
                      src="{{ asset('img/image/photo14.png') }}"
                      alt="image"
                      class="card__img"
                    />
                  </div>
                  <div class="card__data">
                    <h3 class="card__name">Ami</h3>
                    <!-- Translated "Friend" -->
                    <p class="card__description">
                      Tarifs réduits pour les billets d'avion, embarquement
                      prioritaire et repas gratuits pour deux.
                    </p>
                    <!-- Translated Description -->
                    <a href="#" class="card__button">Voir plus</a>
                    <!-- Translated "View More" -->
                  </div>
                </article>
              </div>

              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>

              <div class="swiper-pagination"></div>
            </div>
          </div>
        </section>
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
