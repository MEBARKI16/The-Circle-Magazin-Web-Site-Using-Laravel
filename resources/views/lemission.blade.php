@extends('./layouts/theCircleMagazin')
@section('content')
<section class="section">
    <style>
  
    
        .swiper {
          width: 80%;
          height: 100%;
          margin:50px;
        }
    
        .swiper-slide {
          text-align: center;
          font-size: 18px;
          background-color:transparent;
          display: flex;
          justify-content: center;
          align-items: center;
        }
      </style>
    <h2
      class="section__title"
      style="  margin-top: 50px;
    color: #E63312;"
    >
      L’EMISSION
    </h2>
    <div
      style="  border-top: 1px solid #E63312;
    margin: 40px auto;
    width: 5%;"
    ></div>
    <div class="card" style="text-align:left;width:80%;border:none;background-color:transparent"><h2>Les plus récents</h2></div>
    <div class="swiper mySwiper-lemission1">
      <div class="swiper-wrapper">
        <div class="swiper-slide"> <iframe
          style="margin:auto"
          width="80%"
          height="280"
          src="https://www.youtube.com/embed/-EoNrg_DR3s"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
        ></iframe></div>
        <div class="swiper-slide"> <iframe
          style="margin:auto"
          width="80%"
          height="280"
          src="https://www.youtube.com/embed/-EoNrg_DR3s"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
        ></iframe></div>
        <div class="swiper-slide"> <iframe
          style="margin:auto"
          width="80%"
          height="280"
          src="https://www.youtube.com/embed/-EoNrg_DR3s"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
        ></iframe></div>
        <div class="swiper-slide"> <iframe
          style="margin:auto"
          width="80%"
          height="280"
          src="https://www.youtube.com/embed/-EoNrg_DR3s"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
        ></iframe></div>
        <div class="swiper-slide">  <iframe
          style="margin:auto"
          width="80%"
          height="280"
          src="https://www.youtube.com/embed/-EoNrg_DR3s"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
        ></iframe></div>
        <div class="swiper-slide"> <iframe
          style="margin:auto"
          width="80%"
          height="280"
          src="https://www.youtube.com/embed/-EoNrg_DR3s"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
        ></iframe></div>
        <div class="swiper-slide"> <iframe
          style="margin:auto"
          width="80%"
          height="280"
          src="https://www.youtube.com/embed/-EoNrg_DR3s"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
        ></iframe> </div>
        <div class="swiper-slide"> <iframe
          style="margin:auto"
          width="80%"
          height="280"
          src="https://www.youtube.com/embed/-EoNrg_DR3s"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
        ></iframe></div>
        <div class="swiper-slide"> <iframe
          style="margin:auto"
          width="80%"
          height="280"
          src="https://www.youtube.com/embed/-EoNrg_DR3s"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
        ></iframe></div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  
    <!-- Initialize Swiper -->
    <script>
      var swiperlemission = new Swiper(".mySwiper-lemission1", {
        slidesPerView: 3,
        spaceBetween: 0,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        },
        breakpoints: {
    768: {
      slidesPerView: 3,
      spaceBetween: 30
    },
    576: {
      slidesPerView: 2,
      spaceBetween: 0
    },
    200: {
      slidesPerView: 1,
      spaceBetween: 0
    }
  }
     
      });
    </script>
     <div class="card" style="text-align:left;width:80%;border:none;background-color:transparent"><h2>Les plus lus</h2></div>
     <div class="swiper mySwiper-lemission2">
        <div class="swiper-wrapper">
          <div class="swiper-slide"> <iframe
            style="margin:auto"
            width="80%"
            height="280"
            src="https://www.youtube.com/embed/-EoNrg_DR3s"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe></div>
          <div class="swiper-slide"> <iframe
            style="margin:auto"
            width="80%"
            height="280"
            src="https://www.youtube.com/embed/-EoNrg_DR3s"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe></div>
          <div class="swiper-slide"> <iframe
            style="margin:auto"
            width="80%"
            height="280"
            src="https://www.youtube.com/embed/-EoNrg_DR3s"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe></div>
          <div class="swiper-slide"> <iframe
            style="margin:auto"
            width="80%"
            height="280"
            src="https://www.youtube.com/embed/-EoNrg_DR3s"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe></div>
          <div class="swiper-slide">  <iframe
            style="margin:auto"
            width="80%"
            height="280"
            src="https://www.youtube.com/embed/-EoNrg_DR3s"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe></div>
          <div class="swiper-slide"> <iframe
            style="margin:auto"
            width="80%"
            height="280"
            src="https://www.youtube.com/embed/-EoNrg_DR3s"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe></div>
          <div class="swiper-slide"> <iframe
            style="margin:auto"
            width="80%"
            height="280"
            src="https://www.youtube.com/embed/-EoNrg_DR3s"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe> </div>
          <div class="swiper-slide"> <iframe
            style="margin:auto"
            width="80%"
            height="280"
            src="https://www.youtube.com/embed/-EoNrg_DR3s"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe></div>
          <div class="swiper-slide"> <iframe
            style="margin:auto"
            width="80%"
            height="280"
            src="https://www.youtube.com/embed/-EoNrg_DR3s"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    
      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    
      <!-- Initialize Swiper -->
      <script>
        var swiperlemission2 = new Swiper(".mySwiper-lemission2", {
          slidesPerView: 3,
          spaceBetween: 0,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
          },
          breakpoints: {
      768: {
        slidesPerView: 3,
        spaceBetween: 30
      },
      576: {
        slidesPerView: 2,
        spaceBetween: 0
      },
      200: {
        slidesPerView: 1,
        spaceBetween: 0
      }
    }
       
        });
      </script>
        <button type="button" class="btn btn-lg" style="width:30%;margin:50px 50px;background-color:#1b1464;color:white">Voir toutes les émissions</button>
  </section>

  <script src="{{asset('js/swiper-bundle.min.js')}}"></script>
  <link href="{{asset('css/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/lemission.css')}}" rel="stylesheet">
@endsection