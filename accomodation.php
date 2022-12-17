<?php @include('header.php') ?>

<section class="banner-section h-[75vh] lg:h-1/2">
  <img src="assets/images/banner/accomodation-cover.png" class="w-full h-full object-cover">
  <div class="banner-options flex flex-col items-center !top-0">
    <h2 class="text-[58px] sm:text-[70px] md:text-[90px] 2xl:text-[128px] text-white font-cormorantMedium">Accomodations
    </h2>
    <p
      class="text-[16px] sm:text-[20px] 2xl:text-[25px] text-center text-white font-robotoRegular max-w-5xl px-12 lg:px-6">
      Vivamus a mattis lectus, id fringilla ex. Aliquam
      efficitur mollis porttitor. Integer lacinia, ex faucibus commodo tristique, metus enim accumsan ante, eu
      malesuada mauris orci sed ante.</p>
  </div>
</section>

<section class="introduction-section bg-section-cover">
  <div class="inner inner-section px-12 sm:px-24 xl:px-44">
    <h2 class="section-title text-blackgray font-cormorantMedium">Introduction</h2>
    <p class="my-6 text-[23px] text-center font-robotoRegular text-blackgray">Vivamus a mattis lectus, id fringilla ex.
      Aliquam efficitur mollis porttitor. Integer lacinia, ex faucibus commodo tristique, metus enim accumsan ante, eu
      malesuada mauris orci sed ante. Nam sed diam aliquet, gravida velit sit amet, facilisis risus. </p>
    <p class="my-6 text-[23px] text-center font-robotoRegular text-blackgray mb-0">Cras id eros sit amet elit fermentum
      iaculis
      ut sit amet nulla. Sed sit amet justo risus. Nunc varius varius ipsum, id luctus nisl mollis sit amet. Suspendisse
      cursus urna at felis feugiat vulputate. Nunc ac nisi at sem bibendum ultricies eu sed libero. Quisque a gravida
      orci.</p>
  </div>
</section>

<section class="accomodation-section">
  <div class="inner inner-section px-0 py-0">

    <div
      class="accomodation-wrapper flex flex-row items-center flex-wrap xl:flex-nowrap w-full pt-0 pb-10 sm:py-20 px-0 sm:px-24 xl:px-44">
      <div class="basis-full xl:basis-5/12 pr-0 xl:pr-10 w-full xl:w-5/12">
        <div class="w-full relative">
          <div class="img-container z-10 relative flex flex-wrap w-full slick-me">
            <img src="assets/images/accomodation/havana.png" alt="" class="w-full h-auto">
            <img src="assets/images/accomodation/havana.png" alt="" class="w-full h-auto">
            <img src="assets/images/accomodation/havana.png" alt="" class="w-full h-auto">
          </div>
          <div class="floating-box bg-blackgray -top-6 -left-6 hidden xl:flex"></div>
        </div>
      </div>
      <div class="basis-full xl:basis-7/12">
        <h2 class="section-title text-blackgray font-cormorantMedium mt-6 xl:mt-0 mx-auto sm:mx-0">The Havana</h2>
        <p class="my-6 text-[23px] font-robotoRegular text-blackgray text-center lg:text-left px-12 sm:px-0">Vivamus a
          mattis lectus,
          id fringilla ex. Aliquam
          efficitur mollis porttitor. Integer lacinia, ex faucibus commodo tristique, metus enim accumsan ante, eu
          malesuada mauris orci sed ante.</p>
        <div class="room-info-container flex flex-wrap flex-row mt-10 px-6 sm:px-0">
          <div class="room-info basis-1/2 sm:basis-1/3 flex items-center">
            <div class="icon-wrapper w-6 h-6 rounded-full bg-blackgray mr-4"></div>
            <p class="text-[18px] text-[#2B2B2B] font-celiasMedium">Queen Size Bed</p>
          </div>
          <div class="room-info basis-1/2 sm:basis-1/3 flex items-center">
            <div class="icon-wrapper w-6 h-6 rounded-full bg-blackgray mr-4"></div>
            <p class="text-[18px] text-[#2B2B2B] font-celiasMedium">23 m²/248 ft²</p>
          </div>
          <div class="room-info basis-1/2 sm:basis-1/3 flex items-center mt-6 sm:mt-0">
            <div class="icon-wrapper w-6 h-6 rounded-full bg-blackgray mr-4"></div>
            <p class="text-[18px] text-[#2B2B2B] font-celiasMedium">Beach Front</p>
          </div>
          <div class="room-info basis-1/2 sm:basis-1/3 flex items-center mt-6">
            <div class="icon-wrapper w-6 h-6 rounded-full bg-blackgray mr-4"></div>
            <p class="text-[18px] text-[#2B2B2B] font-celiasMedium">Free Wi-Fi</p>
          </div>
          <div class="room-info basis-1/2 sm:basis-1/3 flex items-center mt-6">
            <div class="icon-wrapper w-6 h-6 rounded-full bg-blackgray mr-4"></div>
            <p class="text-[18px] text-[#2B2B2B] font-celiasMedium">23 m²/248 ft²</p>
          </div>
          <div class="room-info basis-1/2 sm:basis-1/3 flex items-center mt-6">
            <div class="icon-wrapper w-6 h-6 rounded-full bg-blackgray mr-4"></div>
            <p class="text-[18px] text-[#2B2B2B] font-celiasMedium">Beach Front</p>
          </div>
        </div>
        <div class="room-price mt-14 flex flex-col sm:flex-row items-center sm:items-start justify-between">
          <p class="price text-[30px] text-blackgray font-celiasMedium">2,500 Php/night</p>
          <button data-modal-toggle="book-modal"
            class="text-white bg-blackgray border border-white rounded-full px-12 py-2 hover:bg-white hover:border hover:border-black hover:text-blackgray transition-all font-celiasMedium text-[15px] mt-6 sm:mt-0">BOOK
            NOW</button>
        </div>
      </div>
    </div>

    <div
      class="accomodation-wrapper flex flex-col-reverse xl:flex-row items-center flex-wrap xl:flex-nowrap w-full pt-0 pb-10 sm:py-20 bg-blackgray px-0 sm:px-24 xl:px-44">
      <div class="basis-full xl:basis-7/12 pr-0 xl:pr-10">
        <h2 class="section-title text-white font-cormorantMedium mt-6 xl:mt-0 0 mx-auto sm:mx-0">The Havana</h2>
        <p class="my-6 text-[23px] font-robotoRegular text-white text-center lg:text-left px-12 sm:px-0">Vivamus a
          mattis lectus, id fringilla ex. Aliquam
          efficitur mollis porttitor. Integer lacinia, ex faucibus commodo tristique, metus enim accumsan ante, eu
          malesuada mauris orci sed ante.</p>
        <div class="room-info-container flex flex-wrap flex-row mt-10 px-6 sm:px-0">
          <div class="room-info basis-1/2 sm:basis-1/3 flex items-center">
            <div class="icon-wrapper w-6 h-6 rounded-full bg-[#EBE4CF] mr-4"></div>
            <p class="text-[18px] text-white font-celiasMedium">Queen Size Bed</p>
          </div>
          <div class="room-info basis-1/2 sm:basis-1/3 flex items-center">
            <div class="icon-wrapper w-6 h-6 rounded-full bg-[#EBE4CF] mr-4"></div>
            <p class="text-[18px] text-white font-celiasMedium">23 m²/248 ft²</p>
          </div>
          <div class="room-info basis-1/2 sm:basis-1/3 flex items-center mt-6 sm:mt-0">
            <div class="icon-wrapper w-6 h-6 rounded-full bg-[#EBE4CF] mr-4"></div>
            <p class="text-[18px] text-white font-celiasMedium">Beach Front</p>
          </div>
          <div class="room-info basis-1/2 sm:basis-1/3 flex items-center mt-6">
            <div class="icon-wrapper w-6 h-6 rounded-full bg-[#EBE4CF] mr-4"></div>
            <p class="text-[18px] text-white font-celiasMedium">Free Wi-Fi</p>
          </div>
          <div class="room-info basis-1/2 sm:basis-1/3 flex items-center mt-6">
            <div class="icon-wrapper w-6 h-6 rounded-full bg-[#EBE4CF] mr-4"></div>
            <p class="text-[18px] text-white font-celiasMedium">23 m²/248 ft²</p>
          </div>
          <div class="room-info basis-1/2 sm:basis-1/3 flex items-center mt-6">
            <div class="icon-wrapper w-6 h-6 rounded-full bg-[#EBE4CF] mr-4"></div>
            <p class="text-[18px] text-white font-celiasMedium">Beach Front</p>
          </div>
        </div>
        <div class="room-price mt-14 flex flex-col sm:flex-row items-center sm:items-start justify-between">
          <p class="price text-[30px] text-white font-celiasMedium">2,500 Php/night</p>
          <button data-modal-toggle="book-modal"
            class="text-blackgray bg-[#EBE4CF] border border-[#EBE4CF] rounded-full px-12 py-2 hover:bg-blackgray hover:border hover:border-[#EBE4CF] hover:text-[#EBE4CF] transition-all font-celiasMedium text-[15px] mt-6 sm:mt-0">BOOK
            NOW</button>
        </div>
      </div>
      <div class="basis-full xl:basis-5/12 w-full xl:w-5/12">
        <div class="w-full relative">
          <div class="img-container z-10 relative flex flex-wrap w-full slick-me">
            <img src="assets/images/accomodation/havana2.png" alt="" class="w-full h-auto">
            <img src="assets/images/accomodation/havana2.png" alt="" class="w-full h-auto">
            <img src="assets/images/accomodation/havana2.png" alt="" class="w-full h-auto">
          </div>
          <div class="floating-box bg-[#EBE4CF] -bottom-6 -right-6 hidden xl:flex"></div>
        </div>
      </div>
    </div>

    <div
      class="accomodation-wrapper flex flex-row items-center flex-wrap xl:flex-nowrap w-full pt-0 pb-10 sm:py-20 px-0 sm:px-24 xl:px-44">
      <div class="basis-full xl:basis-5/12 pr-0 xl:pr-10 w-full xl:w-5/12">
        <div class="w-full relative">
          <div class="img-container z-10 relative flex flex-wrap w-full slick-me">
            <img src="assets/images/accomodation/havana.png" alt="" class="w-full h-auto">
            <img src="assets/images/accomodation/havana.png" alt="" class="w-full h-auto">
            <img src="assets/images/accomodation/havana.png" alt="" class="w-full h-auto">
          </div>
          <div class="floating-box bg-blackgray -bottom-6 -left-6 hidden xl:flex"></div>
        </div>
      </div>
      <div class="basis-full xl:basis-7/12">
        <h2 class="section-title text-blackgray font-cormorantMedium mt-6 xl:mt-0 mx-auto sm:mx-0">The Havana</h2>
        <p class="my-6 text-[23px] font-robotoRegular text-blackgray text-center lg:text-left px-12 sm:px-0">Vivamus a
          mattis lectus,
          id fringilla ex. Aliquam
          efficitur mollis porttitor. Integer lacinia, ex faucibus commodo tristique, metus enim accumsan ante, eu
          malesuada mauris orci sed ante.</p>
        <div class="room-info-container flex flex-wrap flex-row mt-10 px-6 sm:px-0">
          <div class="room-info basis-1/2 sm:basis-1/3 flex items-center">
            <div class="icon-wrapper w-6 h-6 rounded-full bg-blackgray mr-4"></div>
            <p class="text-[18px] text-[#2B2B2B] font-celiasMedium">Queen Size Bed</p>
          </div>
          <div class="room-info basis-1/2 sm:basis-1/3 flex items-center">
            <div class="icon-wrapper w-6 h-6 rounded-full bg-blackgray mr-4"></div>
            <p class="text-[18px] text-[#2B2B2B] font-celiasMedium">23 m²/248 ft²</p>
          </div>
          <div class="room-info basis-1/2 sm:basis-1/3 flex items-center mt-6 sm:mt-0">
            <div class="icon-wrapper w-6 h-6 rounded-full bg-blackgray mr-4"></div>
            <p class="text-[18px] text-[#2B2B2B] font-celiasMedium">Beach Front</p>
          </div>
          <div class="room-info basis-1/2 sm:basis-1/3 flex items-center mt-6">
            <div class="icon-wrapper w-6 h-6 rounded-full bg-blackgray mr-4"></div>
            <p class="text-[18px] text-[#2B2B2B] font-celiasMedium">Free Wi-Fi</p>
          </div>
          <div class="room-info basis-1/2 sm:basis-1/3 flex items-center mt-6">
            <div class="icon-wrapper w-6 h-6 rounded-full bg-blackgray mr-4"></div>
            <p class="text-[18px] text-[#2B2B2B] font-celiasMedium">23 m²/248 ft²</p>
          </div>
          <div class="room-info basis-1/2 sm:basis-1/3 flex items-center mt-6">
            <div class="icon-wrapper w-6 h-6 rounded-full bg-blackgray mr-4"></div>
            <p class="text-[18px] text-[#2B2B2B] font-celiasMedium">Beach Front</p>
          </div>
        </div>
        <div class="room-price mt-14 flex flex-col sm:flex-row items-center sm:items-start justify-between">
          <p class="price text-[30px] text-blackgray font-celiasMedium">2,500 Php/night</p>
          <button data-modal-toggle="book-modal"
            class="text-white bg-blackgray border border-white rounded-full px-12 py-2 hover:bg-white hover:border hover:border-black hover:text-blackgray transition-all font-celiasMedium text-[15px] mt-6 sm:mt-0">BOOK
            NOW</button>
        </div>
      </div>
    </div>

    <div
      class="accomodation-wrapper flex flex-col-reverse xl:flex-row items-center flex-wrap xl:flex-nowrap w-full pt-0 pb-10 sm:py-20 px-0 sm:px-24 xl:px-44 bg-[#EBE4CF] ">
      <div class="basis-full xl:basis-7/12 pr-0 xl:pr-10">
        <h2 class="section-title text-blackgray font-cormorantMedium mt-6 xl:mt-0 0 mx-auto sm:mx-0">The Havana</h2>
        <p class="my-6 text-[23px] font-robotoRegular text-blackgray text-center lg:text-left px-12 sm:px-0">Vivamus a
          mattis lectus, id fringilla ex. Aliquam
          efficitur mollis porttitor. Integer lacinia, ex faucibus commodo tristique, metus enim accumsan ante, eu
          malesuada mauris orci sed ante.</p>
        <div class="room-info-container flex flex-wrap flex-row mt-10 px-6 sm:px-0">
          <div class="room-info basis-1/2 sm:basis-1/3 flex items-center">
            <div class="icon-wrapper w-6 h-6 rounded-full bg-blackgray mr-4"></div>
            <p class="text-[18px] text-[#2B2B2B] font-celiasMedium">Queen Size Bed</p>
          </div>
          <div class="room-info basis-1/2 sm:basis-1/3 flex items-center">
            <div class="icon-wrapper w-6 h-6 rounded-full bg-blackgray mr-4"></div>
            <p class="text-[18px] text-[#2B2B2B] font-celiasMedium">23 m²/248 ft²</p>
          </div>
          <div class="room-info basis-1/2 sm:basis-1/3 flex items-center mt-6 sm:mt-0">
            <div class="icon-wrapper w-6 h-6 rounded-full bg-blackgray mr-4"></div>
            <p class="text-[18px] text-[#2B2B2B] font-celiasMedium">Beach Front</p>
          </div>
          <div class="room-info basis-1/2 sm:basis-1/3 flex items-center mt-6">
            <div class="icon-wrapper w-6 h-6 rounded-full bg-blackgray mr-4"></div>
            <p class="text-[18px] text-[#2B2B2B] font-celiasMedium">Free Wi-Fi</p>
          </div>
          <div class="room-info basis-1/2 sm:basis-1/3 flex items-center mt-6">
            <div class="icon-wrapper w-6 h-6 rounded-full bg-blackgray mr-4"></div>
            <p class="text-[18px] text-[#2B2B2B] font-celiasMedium">23 m²/248 ft²</p>
          </div>
          <div class="room-info basis-1/2 sm:basis-1/3 flex items-center mt-6">
            <div class="icon-wrapper w-6 h-6 rounded-full bg-blackgray mr-4"></div>
            <p class="text-[18px] text-[#2B2B2B] font-celiasMedium">Beach Front</p>
          </div>
        </div>
        <div class="room-price mt-14 flex flex-col sm:flex-row items-center sm:items-start justify-between">
          <p class="price text-[30px] text-blackgray font-celiasMedium">2,500 Php/night</p>
          <button data-modal-toggle="book-modal"
            class="text-[#EBE4CF] bg-blackgray border border-[#EBE4CF] rounded-full px-12 py-2 hover:bg-[#EBE4CF] hover:border hover:border-black hover:text-blackgray transition-all font-celiasMedium text-[15px] mt-6 sm:mt-0">BOOK
            NOW</button>
        </div>
      </div>
      <div class="basis-full xl:basis-5/12 w-full xl:w-5/12">
        <div class="w-full relative">
          <div class="img-container z-10 relative flex flex-wrap w-full slick-me">
            <img src="assets/images/accomodation/havana4.png" alt="" class="w-full h-auto">
            <img src="assets/images/accomodation/havana4.png" alt="" class="w-full h-auto">
            <img src="assets/images/accomodation/havana4.png" alt="" class="w-full h-auto">
          </div>
          <div class="floating-box bg-blackgray -top-6 -right-6 hidden xl:flex"></div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Main modal -->
<div id="book-modal" tabindex="-1" aria-hidden="true"
  class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
  <div class="relative w-full lg:!w-[944px] h-full lg:h-auto ">
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow">
      <button type="button"
        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
        data-modal-toggle="book-modal">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
            clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Close modal</span>
      </button>
      <div class="p-10">
        <h3 class="text-[18px] lg:text-[30px] font-celiasMedium text-blackgray text-center">You're about to book this
          property.</h3>
        <h2
          class="mt-0 lg:-mt-4 section-title font-cormorantMedium text-blackgray text-center border-b border-[#C2C2C2] pb-6">
          The
          Havana</h2>

        <form class="mt-10" action="#">
          <div class="flex flex-wrap flex-row">
            <div class="basis-full lg:basis-1/2 pr-0 lg:pr-6">
              <label for="fname" class="text-[17px] text-[#090909] font-celiasMedium mb-1 inline-block">FIRST
                NAME</label>
              <input type="text" name="fname" class="border border-[#707070] text-blackgray text-sm w-full" required>
            </div>
            <div class="basis-full lg:basis-1/2 pt-6 lg:pt-0">
              <label for="lname" class="text-[17px] text-[#090909] font-celiasMedium mb-1 inline-block">LAST
                NAME</label>
              <input type="text" name="lname" class="border border-[#707070] text-blackgray text-sm w-full" required>
            </div>
            <div class="basis-full lg:basis-1/2 pt-6 pr-0 lg:pr-6">
              <label for="contactNo" class="text-[17px] text-[#090909] font-celiasMedium mb-1 inline-block">CONTACT
                NO.</label>
              <input type="text" name="contactNo" class="border border-[#707070] text-blackgray text-sm w-full"
                required>
            </div>
            <div class="basis-full lg:basis-1/2 pt-6">
              <label for="email" class="text-[17px] text-[#090909] font-celiasMedium mb-1 inline-block">EMAIL</label>
              <input type="email" name="email" class="border border-[#707070] text-blackgray text-sm w-full" required>
            </div>
            <div class="flex flex-row pt-6 w-full flex-wrap lg:flex-nowrap">
              <div date-rangepicker
                class="basis-full lg:basis-8/12 flex items-center mr-0 lg:mr-6 flex-wrap lg:flex-nowrap">
                <div
                  class="basis-full lg:basis-1/2 mr-0 lg:mr-6 flex flex-row items-center border border-[#707070] p-4">
                  <svg aria-hidden="true" class="w-10 h-10 text-[#B8B8B8]" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                      clip-rule="evenodd"></path>
                  </svg>
                  <div class="flex flex-col ml-4">
                    <label for="start" class="text-[13px] text-[#303030] font-montserratMedium mb-1 inline-block">CHECK
                      IN DATE</label>
                    <input name="start" type="text"
                      class="!border-0 !shadow-none !outline-0 !ring-0 p-0 text-[18px] text-sm font-montserratSemiBold"
                      placeholder="CHECK IN DATE">
                  </div>
                </div>
                <div
                  class="basis-full lg:basis-1/2 mt-6 lg:mt-0 flex flex-row items-center border border-[#707070] p-4">
                  <svg aria-hidden="true" class="w-10 h-10 text-[#B8B8B8]" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                      clip-rule="evenodd"></path>
                  </svg>
                  <div class="flex flex-col ml-4">
                    <label for="start" class="text-[13px] text-[#303030] font-montserratMedium mb-1 inline-block">CHECK
                      OUT DATE</label>
                    <input name="end" type="text"
                      class="!border-0 !shadow-none !outline-0 !ring-0 p-0 text-[18px] text-sm font-montserratSemiBold"
                      placeholder="CHECK OUT DATE">
                  </div>
                </div>
              </div>
              <div class="basis-full lg:basis-4/12 mt-6 lg:mt-0 flex flex-row items-center border border-[#707070] p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-10 h-10 text-[#B8B8B8]">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                </svg>

                <div class="flex flex-col ml-4">
                  <label for="start" class="text-[13px] text-[#303030] font-montserratMedium mb-1 inline-block">NO. OF
                    GUEST</label>
                  <input name="noOfGuest" type="number"
                    class="!border-0 !shadow-none !outline-0 !ring-0 p-0 text-[18px] text-sm font-montserratSemiBold"
                    placeholder="NO. OF GUEST">
                </div>
              </div>

            </div>
            <div class="bottom-content flex flex-col lg:flex-row items-center justify-between w-full mt-6">
              <p class="text-[23px] font-robotoRegular text-blackgray text-center lg:text-left">Please wait for our
                representative to contact you if the selected date is available to book.
              </p>
              <a href="#"
                class="border-2 border-black bg-blackgray text-white rounded-full px-20 py-2 hover:bg-white hover:text-blackgray transition-all font-celiasMedium text-[15px] mt-4">BOOK</a>
            </div>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>

<?php @include('footer.php') ?>