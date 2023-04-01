@extends('./layouts/theCircleMagazin')
@section('content')
<section class='section'>
    <h2 class='section__title' style="  margin-top: 50px;
    color: #E63312;">L’EMISSION</h2>
    <div style="  border-top: 1px solid #E63312;
    margin: 40px auto;
    width: 5%;"></div>
    <div class="slide-container"> 

      <swiper-container>
          <div class="card swiper-slide" style="width:300px;height:350px;background-color:#F5F5F5;border:none">      
                 <iframe style="margin:auto" width="80%" height="280" src="https://www.youtube.com/embed/qOO6lVMhmGc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
         </div>
         <div class="card swiper-slide" style="width:300px;height:350px;background-color:#F5F5F5;border:none">      
            <iframe style="margin:auto"  width="80%" height="280" src="https://www.youtube.com/embed/qOO6lVMhmGc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="card swiper-slide" style="width:300px;height:350px;background-color:#F5F5F5;border:none">      
        <iframe style="margin:auto" width="80%" height="280" src="https://www.youtube.com/embed/qOO6lVMhmGc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
<div class="card swiper-slide" style="width:300px;height:350px;background-color:#F5F5F5;border:none">      
    <iframe style="margin:auto" width="80%" height="280" src="https://www.youtube.com/embed/qOO6lVMhmGc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
<div class="card swiper-slide" style="width:300px;height:350px;background-color:#F5F5F5;border:none">      
    <iframe style="margin:auto" width="80%" height="280" src="https://www.youtube.com/embed/qOO6lVMhmGc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
     
         
      
    </swiper-container>

    <div class="swiper-pagination"></div>
  </div>
  

  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

  <script>
    let appendNumber = 600;
    let prependNumber = 1;

    const swiperEl = document.querySelector('swiper-container')

    Object.assign(swiperEl, {
      slidesPerView: 1,
      slidesPerGroup:1,
      centeredSlides: true,
      spaceBetween: 25,
      pagination: {
       
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      } ,
     
    });

    swiperEl.initialize();

    const swiper = swiperEl.swiper;

  </script>
  </section>
  <section>
        <h2 class='section__title' style="  margin-top: 50px;
        color: #FF0066;">LES NEWS</h2>
        <div style="border-top: 1px solid #FF0066;
        margin: 40px auto;
        width: 5%;"></div>
        <div class=''>
    </div>
      </section>
      <section>
            <h2 class='section__title' style="  margin-top: 50px;
            color: #009933;">LES DOSSIERS</h2>
            <div style="  border-top: 1px solid #009933;
            margin: 40px auto;
            width: 5%;"></div>
            <div class=''>
        </div>
          </section>
          <section class=''>
                <h2 class='section__title' style="  margin-top: 50px;
                color: #009FE3;">L’ENTRETIEN</h2>
              <div style="  border-top: 1px solid #009FE3;
              margin: 40px auto;
              width: 5%;"></div>
                <div class=''>

            </div>
              </section>
              <script src="
              {{asset('js/swiper-bundle.min.js')}}
              "></script>
              <link href="
                {{asset('css/swiper-bundle.min.css')}}
              " rel="stylesheet">
              
@endsection