@extends('./layouts/theCircleMagazin')
@section('content')
<section class="section">
    <style>
  
    
        .swiper {
          width: 80%;
          height: 370px;
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
    color: #009FE3;"
    >
    L’ENTRETIEN
    </h2>
    <div
      style="  border-top: 1px solid #009FE3;
    margin: 40px auto;
    width: 5%;"
    ></div>
    <div class="card" style="text-align:left;width:80%;border:none;background-color:transparent"><h2>Les plus récents</h2></div>
    <div class="swiper mySwiper-lemission1">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="height:100%">
                <div class="card dossier" style="width: 80%;height: 100%;">
                  <div class="card-image">
                    <img src="{{asset('img/download.jpg')}}" class="card-img-top" alt="..." />
                  </div>
    
                  <div class="card-body card-body-dossier">
                    <p>
                      Some quick example text to build on the card title and make up
                      the bulk of the card's content.
                    </p>
                    <div
                      class="btn xx"
                      style="color:white;border:2px solid;border-color:white;font-weight: bold;opacity: 1;"
                    >
                      en savoir plus
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide" style="height:100%">
                  <div class="card dossier" style="width: 80%;height: 100%;">
                    <div class="card-image">
                      <img src="{{asset('img/download.jpg')}}" class="card-img-top" alt="..." />
                    </div>
      
                    <div class="card-body card-body-dossier">
                      <p>
                        Some quick example text to build on the card title and make up
                        the bulk of the card's content.
                      </p>
                      <div
                        class="btn xx"
                        style="color:white;border:2px solid;border-color:white;font-weight: bold;opacity: 1;"
                      >
                        en savoir plus
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide" style="height:100%">
                    <div class="card dossier" style="width: 80%;height: 100%;">
                      <div class="card-image">
                        <img src="{{asset('img/download.jpg')}}" class="card-img-top" alt="..." />
                      </div>
        
                      <div class="card-body card-body-dossier">
                        <p>
                          Some quick example text to build on the card title and make up
                          the bulk of the card's content.
                        </p>
                        <div
                          class="btn xx"
                          style="color:white;border:2px solid;border-color:white;font-weight: bold;opacity: 1;"
                        >
                          en savoir plus
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide" style="height:100%">
                      <div class="card dossier" style="width: 80%;height: 100%;">
                        <div class="card-image">
                          <img src="{{asset('img/download.jpg')}}" class="card-img-top" alt="..." />
                        </div>
          
                        <div class="card-body card-body-dossier">
                          <p>
                            Some quick example text to build on the card title and make up
                            the bulk of the card's content.
                          </p>
                          <div
                            class="btn xx"
                            style="color:white;border:2px solid;border-color:white;font-weight: bold;opacity: 1;"
                          >
                            en savoir plus
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide" style="height:100%">
                        <div class="card dossier" style="width: 80%;height: 100%;">
                          <div class="card-image">
                            <img src="{{asset('img/download.jpg')}}" class="card-img-top" alt="..." />
                          </div>
            
                          <div class="card-body card-body-dossier">
                            <p>
                              Some quick example text to build on the card title and make up
                              the bulk of the card's content.
                            </p>
                            <div
                              class="btn xx"
                              style="color:white;border:2px solid;border-color:white;font-weight: bold;opacity: 1;"
                            >
                              en savoir plus
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide" style="height:100%">
                          <div class="card dossier" style="width: 80%;height: 100%;">
                            <div class="card-image">
                              <img src="{{asset('img/download.jpg')}}" class="card-img-top" alt="..." />
                            </div>
              
                            <div class="card-body card-body-dossier">
                              <p>
                                Some quick example text to build on the card title and make up
                                the bulk of the card's content.
                              </p>
                              <div
                                class="btn xx"
                                style="color:white;border:2px solid;border-color:white;font-weight: bold;opacity: 1;"
                              >
                                en savoir plus
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide" style="height:100%">
                            <div class="card dossier" style="width: 80%;height: 100%;">
                              <div class="card-image">
                                <img src="{{asset('img/download.jpg')}}" class="card-img-top" alt="..." />
                              </div>
                
                              <div class="card-body card-body-dossier">
                                <p>
                                  Some quick example text to build on the card title and make up
                                  the bulk of the card's content.
                                </p>
                                <div
                                  class="btn xx"
                                  style="color:white;border:2px solid;border-color:white;font-weight: bold;opacity: 1;"
                                >
                                  en savoir plus
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="swiper-slide" style="height:100%">
                              <div class="card dossier" style="width: 80%;height: 100%;">
                                <div class="card-image">
                                  <img src="{{asset('img/download.jpg')}}" class="card-img-top" alt="..." />
                                </div>
                  
                                <div class="card-body card-body-dossier">
                                  <p>
                                    Some quick example text to build on the card title and make up
                                    the bulk of the card's content.
                                  </p>
                                  <div
                                    class="btn xx"
                                    style="color:white;border:2px solid;border-color:white;font-weight: bold;opacity: 1;"
                                  >
                                    en savoir plus
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-slide" style="height:100%">
                                <div class="card dossier" style="width: 80%;height: 100%;">
                                  <div class="card-image">
                                    <img src="{{asset('img/download.jpg')}}" class="card-img-top" alt="..." />
                                  </div>
                    
                                  <div class="card-body card-body-dossier">
                                    <p>
                                      Some quick example text to build on the card title and make up
                                      the bulk of the card's content.
                                    </p>
                                    <div
                                      class="btn xx"
                                      style="color:white;border:2px solid;border-color:white;font-weight: bold;opacity: 1;"
                                    >
                                      en savoir plus
                                    </div>
                                  </div>
                                </div>
                              </div>
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
            <div class="swiper-slide" style="height:100%">
                <div class="card dossier" style="width: 80%;height: 100%;">
                  <div class="card-image">
                    <img src="{{asset('img/download.jpg')}}" class="card-img-top" alt="..." />
                  </div>
    
                  <div class="card-body card-body-dossier">
                    <p>
                      Some quick example text to build on the card title and make up
                      the bulk of the card's content.
                    </p>
                    <div
                      class="btn xx"
                      style="color:white;border:2px solid;border-color:white;font-weight: bold;opacity: 1;"
                    >
                      en savoir plus
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide" style="height:100%">
                  <div class="card dossier" style="width: 80%;height: 100%;">
                    <div class="card-image">
                      <img src="{{asset('img/download.jpg')}}" class="card-img-top" alt="..." />
                    </div>
      
                    <div class="card-body card-body-dossier">
                      <p>
                        Some quick example text to build on the card title and make up
                        the bulk of the card's content.
                      </p>
                      <div
                        class="btn xx"
                        style="color:white;border:2px solid;border-color:white;font-weight: bold;opacity: 1;"
                      >
                        en savoir plus
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide" style="height:100%">
                    <div class="card dossier" style="width: 80%;height: 100%;">
                      <div class="card-image">
                        <img src="{{asset('img/download.jpg')}}" class="card-img-top" alt="..." />
                      </div>
        
                      <div class="card-body card-body-dossier">
                        <p>
                          Some quick example text to build on the card title and make up
                          the bulk of the card's content.
                        </p>
                        <div
                          class="btn xx"
                          style="color:white;border:2px solid;border-color:white;font-weight: bold;opacity: 1;"
                        >
                          en savoir plus
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide" style="height:100%">
                      <div class="card dossier" style="width: 80%;height: 100%;">
                        <div class="card-image">
                          <img src="{{asset('img/download.jpg')}}" class="card-img-top" alt="..." />
                        </div>
          
                        <div class="card-body card-body-dossier">
                          <p>
                            Some quick example text to build on the card title and make up
                            the bulk of the card's content.
                          </p>
                          <div
                            class="btn xx"
                            style="color:white;border:2px solid;border-color:white;font-weight: bold;opacity: 1;"
                          >
                            en savoir plus
                          </div>
                        </div>
                      </div>
                    </div>
               
                    <div class="swiper-slide" style="height:100%">
                        <div class="card dossier" style="width: 80%;height: 100%;">
                          <div class="card-image">
                            <img src="{{asset('img/download.jpg')}}" class="card-img-top" alt="..." />
                          </div>
            
                          <div class="card-body card-body-dossier">
                            <p>
                              Some quick example text to build on the card title and make up
                              the bulk of the card's content.
                            </p>
                            <div
                              class="btn xx"
                              style="color:white;border:2px solid;border-color:white;font-weight: bold;opacity: 1;"
                            >
                              en savoir plus
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide" style="height:100%">
                          <div class="card dossier" style="width: 80%;height: 100%;">
                            <div class="card-image">
                              <img src="{{asset('img/download.jpg')}}" class="card-img-top" alt="..." />
                            </div>
              
                            <div class="card-body card-body-dossier">
                              <p>
                                Some quick example text to build on the card title and make up
                                the bulk of the card's content.
                              </p>
                              <div
                                class="btn xx"
                                style="color:white;border:2px solid;border-color:white;font-weight: bold;opacity: 1;"
                              >
                                en savoir plus
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide" style="height:100%">
                            <div class="card dossier" style="width: 80%;height: 100%;">
                              <div class="card-image">
                                <img src="{{asset('img/download.jpg')}}" class="card-img-top" alt="..." />
                              </div>
                
                              <div class="card-body card-body-dossier">
                                <p>
                                  Some quick example text to build on the card title and make up
                                  the bulk of the card's content.
                                </p>
                                <div
                                  class="btn xx"
                                  style="color:white;border:2px solid;border-color:white;font-weight: bold;opacity: 1;"
                                >
                                  en savoir plus
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="swiper-slide" style="height:100%">
                              <div class="card dossier" style="width: 80%;height: 100%;">
                                <div class="card-image">
                                  <img src="{{asset('img/download.jpg')}}" class="card-img-top" alt="..." />
                                </div>
                  
                                <div class="card-body card-body-dossier">
                                  <p>
                                    Some quick example text to build on the card title and make up
                                    the bulk of the card's content.
                                  </p>
                                  <div
                                    class="btn xx"
                                    style="color:white;border:2px solid;border-color:white;font-weight: bold;opacity: 1;"
                                  >
                                    en savoir plus
                                  </div>
                                </div>
                              </div>
                            </div>
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
        <button type="button" class="btn btn-lg" style="width:30%;margin:50px 50px;background-color:#1b1464;color:white">Voir tous les entretiens</button>
  </section>

  <script src="{{asset('js/swiper-bundle.min.js')}}"></script>
  <link href="{{asset('css/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/lentretien.css')}}" rel="stylesheet">
@endsection