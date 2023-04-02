@extends('./layouts/theCircleMagazin')
@section('content')
<section class="section">
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
  
    <div class="slide-container">
      <swiper-container id="emission-home">
        <div
          class="card swiper-slide"
          style="width:300px;height:350px;background-color:#F5F5F5;border:none"
        >
          <iframe
            style="margin:auto"
            width="80%"
            height="280"
            src="https://www.youtube.com/embed/-EoNrg_DR3s"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe>
        </div>
        <div
          class="card swiper-slide"
          style="width:300px;height:350px;background-color:#F5F5F5;border:none"
        >
          <iframe
            style="margin:auto"
            width="80%"
            height="280"
            src="https://www.youtube.com/embed/-EoNrg_DR3s"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe>
        </div>
        <div
          class="card swiper-slide"
          style="width:300px;height:350px;background-color:#F5F5F5;border:none"
        >
          <iframe
            style="margin:auto"
            width="80%"
            height="280"
            src="https://www.youtube.com/embed/-EoNrg_DR3s"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe>
        </div>
        <div
          class="card swiper-slide"
          style="width:300px;height:350px;background-color:#F5F5F5;border:none"
        >
          <iframe
            style="margin:auto"
            width="80%"
            height="280"
            src="https://www.youtube.com/embed/-EoNrg_DR3s"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe>
        </div>
        <div
          class="card swiper-slide"
          style="width:300px;height:350px;background-color:#F5F5F5;border:none"
        >
          <iframe
            style="margin:auto"
            width="80%"
            height="280"
            src="https://www.youtube.com/embed/-EoNrg_DR3s"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe>
        </div>
        <div
        class="card swiper-slide"
        style="width:300px;height:350px;background-color:#F5F5F5;border:none"
      >
        <iframe
          style="margin:auto"
          width="80%"
          height="280"
          src="https://www.youtube.com/embed/-EoNrg_DR3s"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
        ></iframe>
      </div>
      </swiper-container>
      <div class="swiper-pagination"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

    <script>
      let appendNumber = 600;
      let prependNumber = 1;

      const swiperElemission = document.getElementById("emission-home");

      Object.assign(swiperElemission, {
        slidesPerView: 3,
        slidesPerGroup: 1,
        centeredSlides: true,
        spaceBetween: 20,
        pagination: {},
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
      slidesPerView: 1,
      spaceBetween: 10
    }
  }
      });

      swiperElemission.initialize();
    </script>
       <div class="card" style="text-align:left;width:80%;border:none;background-color:transparent"><h2>Les plus lus</h2></div>
      <div class="slide-container">
        <swiper-container id="emission-lemission">
          <div
            class="card swiper-slide"
            style="width:300px;height:350px;background-color:#F5F5F5;border:none"
          >
            <iframe
              style="margin:auto"
              width="80%"
              height="280"
              src="https://www.youtube.com/embed/-EoNrg_DR3s"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen
            ></iframe>
          </div>
          <div
            class="card swiper-slide"
            style="width:300px;height:350px;background-color:#F5F5F5;border:none"
          >
            <iframe
              style="margin:auto"
              width="80%"
              height="280"
              src="https://www.youtube.com/embed/-EoNrg_DR3s"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen
            ></iframe>
          </div>
          <div
            class="card swiper-slide"
            style="width:300px;height:350px;background-color:#F5F5F5;border:none"
          >
            <iframe
              style="margin:auto"
              width="80%"
              height="280"
              src="https://www.youtube.com/embed/-EoNrg_DR3s"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen
            ></iframe>
          </div>
          <div
            class="card swiper-slide"
            style="width:300px;height:350px;background-color:#F5F5F5;border:none"
          >
            <iframe
              style="margin:auto"
              width="80%"
              height="280"
              src="https://www.youtube.com/embed/-EoNrg_DR3s"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen
            ></iframe>
          </div>
          <div
            class="card swiper-slide"
            style="width:300px;height:350px;background-color:#F5F5F5;border:none"
          >
            <iframe
              style="margin:auto"
              width="80%"
              height="280"
              src="https://www.youtube.com/embed/-EoNrg_DR3s"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen
            ></iframe>
          </div>
          <div
          class="card swiper-slide"
          style="width:300px;height:350px;background-color:#F5F5F5;border:none"
        >
          <iframe
            style="margin:auto"
            width="80%"
            height="280"
            src="https://www.youtube.com/embed/-EoNrg_DR3s"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe>
        </div>
        </swiper-container>
        <div class="swiper-pagination"></div>
      </div>
  
      <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
  
      <script>
        let appendNumber = 600;
        let prependNumber = 1;
  
        const swiperElemissionlemission = document.getElementById("emission-lemission");
  
        Object.assign(swiperElemissionlemission, {
          slidesPerView: 3,
          slidesPerGroup: 1,
          centeredSlides: true,
          spaceBetween: 20,
          pagination: {},
          navigation: {
            nextEl: ".swiper-button-next-lemission",
            prevEl: ".swiper-button-prev-lemission"
          },
          breakpoints: {
      768: {
        slidesPerView: 3,
        spaceBetween: 30
      },
      576: {
        slidesPerView: 1,
        spaceBetween: 10
      }
    }
        });
  
        swiperElemissionlemission.initialize();
      </script>
       <button type="button" class="btn btn-lg" style="width:30%;margin:50px 50px;background-color:#1b1464;color:white">Voir toutes les émissions</button>
  </section>

  <script src="{{asset('js/swiper-bundle.min.js')}}"></script>
  <link href="{{asset('css/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/lemission.css')}}" rel="stylesheet">
@endsection