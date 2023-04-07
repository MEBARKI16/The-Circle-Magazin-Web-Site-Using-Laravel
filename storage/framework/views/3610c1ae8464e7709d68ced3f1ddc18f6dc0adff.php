<?php $__env->startSection('content'); ?>
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
    color: #E63312;"
    >
      L’EMISSION
    </h2>
    <div
      style="  border-top: 1px solid #E63312;
    margin: 40px auto;
    width: 5%;"
    ></div>
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
      </swiper-container>
      <div class="swiper-pagination"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

    <script>
      let appendNumber = 600;
      let prependNumber = 1;

      const swiperElemission = document.getElementById("emission-home");

      Object.assign(swiperElemission, {
        slidesPerView: 1,
        slidesPerGroup: 1,
        centeredSlides: true,
        spaceBetween: 5,
        pagination: {},
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        }
      });

      swiperElemission.initialize();
    </script>
    <div class="card" style="width:60%;height:300px;margin-top:50px;margin-bottom:50px">
    <img src="<?php echo e(asset('img/pubhome1.jpg')); ?>" class="card-img homepub1" alt="...">
    </div>
  </section>
  <section>
    <h2
      class="section__title"
      style="  margin-top: 50px;
    color: #FF0066;"
    >
      LES NEWS
    </h2>
    <div
      style="border-top: 1px solid #FF0066;
    margin: 40px auto;
    width: 5%;"
    ></div>
    <div class="swiper mySwiper-lemission1">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="height:100%;width:70%">
          <div class="card dossier" style="width: 70%;height: 100%;">
            <div class="card-image">
              <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="..." />
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
              <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="..." />
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
              <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="..." />
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
              <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="..." />
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
              <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="..." />
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
              <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="..." />
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
              <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="..." />
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
              <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="..." />
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
              <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="..." />
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
  </section>
  <section>
    <h2
      class="section__title"
      style="  margin-top: 50px;
    color: #009933;"
    >
      LES DOSSIERS
    </h2>
    <div
      style="  border-top: 1px solid #009933;
  margin: 40px auto;
  width: 5%;"
    ></div>
    <div class="swiper mySwiper-home-dossier">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="height:100%">
            <div class="card dossier" style="width: 80%;height: 100%;">
              <div class="card-image">
                <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="..." />
              </div>

              <div class="card-body card-body-dossier color-dossier">
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
                  <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="..." />
                </div>
  
                <div class="card-body card-body-dossier color-dossier">
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
                    <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="..." />
                  </div>
    
                  <div class="card-body card-body-dossier color-dossier">
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
                      <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="..." />
                    </div>
      
                    <div class="card-body card-body-dossier color-dossier">
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
                        <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="..." />
                      </div>
        
                      <div class="card-body card-body-dossier color-dossier">
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
                          <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="..." />
                        </div>
          
                        <div class="card-body card-body-dossier color-dossier">
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
                            <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="..." />
                          </div>
            
                          <div class="card-body card-body-dossier color-dossier">
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
                              <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="..." />
                            </div>
              
                            <div class="card-body card-body-dossier color-dossier">
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
                                <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="..." />
                              </div>
                
                              <div class="card-body card-body-dossier color-dossier">
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
        var swiperhomenews = new Swiper(".mySwiper-home-dossier", {
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
    <div class="card" style="width:60%;height:300px;margin-top:50px;margin-bottom:50px">
      <img src="<?php echo e(asset('img/pubhome2.png')); ?>" class="card-img homepub1" alt="...">
      </div>
  </section>
  <section style="margin-bottom:50px">
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
    <div class="swiper mySwiper-home-lentretien">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="height:100%">
            <div class="card dossier" style="width: 80%;height: 100%;">
              <div class="card-image">
                <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="..." />
              </div>

              <div class="card-body card-body-dossier color-entretien">
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
                  <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="..." />
                </div>
  
                <div class="card-body card-body-dossier color-entretien">
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
                    <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="..." />
                  </div>
    
                  <div class="card-body card-body-dossier color-entretien">
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
                      <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="..." />
                    </div>
      
                    <div class="card-body card-body-dossier color-entretien">
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
                        <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="..." />
                      </div>
        
                      <div class="card-body card-body-dossier color-entretien">
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
                          <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="..." />
                        </div>
          
                        <div class="card-body card-body-dossier color-entretien">
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
                            <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="..." />
                          </div>
            
                          <div class="card-body card-body-dossier color-entretien">
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
                              <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="..." />
                            </div>
              
                            <div class="card-body card-body-dossier color-entretien">
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
                                <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="..." />
                              </div>
                
                              <div class="card-body card-body-dossier color-entretien">
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
        var swiperhomenews = new Swiper(".mySwiper-home-lentretien", {
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
    <nav class="nav navhome nav-pills flex-column flex-sm-row" style="width:60%;margin:auto">
      <a class="flex-sm-fill text-sm-center nav-link " href="#">FinTech</a>
      <a class="flex-sm-fill text-sm-center nav-link" href="#">InsurTech</a>
      <a class="flex-sm-fill text-sm-center nav-link" href="#">RegTech</a>
      <a class="flex-sm-fill text-sm-center nav-link" href="#">Marchés</a>
      <a class="flex-sm-fill text-sm-center nav-link" href="#">En Politique</a>
    </nav>
    <div class="conthome" style="height:600px;display:flex;border:none">
      <div class="card publeft" style="height:100%;width:15%">
        <img src="<?php echo e(asset('img/lrpub.jpg')); ?>" class="card-img" style="width:100%;height:100%" alt="..."></div>
        <div class="swiper mySwiper-home-pubmilieu">
            <div class="swiper-wrapper">
              <div class="swiper-slide"> <div class="card" style="width: 80%;">
                  <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div></div>
              <div class="swiper-slide">  <div class="card" style="width: 80%;">
                  <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div></div>
              <div class="swiper-slide"> <div class="card" style="width: 80%;">
                  <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div></div>
              <div class="swiper-slide">  <div class="card" style="width: 80%;">
                  <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div></div>
              <div class="swiper-slide">  <div class="card" style="width: 80%;">
                  <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div></div>
              <div class="swiper-slide">  <div class="card" style="width: 80%;">
                  <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div></div>
              <div class="swiper-slide">  <div class="card" style="width: 80%;">
                  <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div> </div>
              <div class="swiper-slide">  <div class="card" style="width: 80%;">
                  <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div></div>
              <div class="swiper-slide"> <div class="card" style="width: 80%;">
                  <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
          </div>
        
          <!-- Swiper JS -->
          <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        
          <!-- Initialize Swiper -->
          <script>
            var swiperhomenews = new Swiper(".mySwiper-home-pubmilieu", {
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
      <div class="card pubright" style="height:100%;width:15%">
        <img src="<?php echo e(asset('img/lrpub.jpg')); ?>" class="card-img" style="width:100%;height:100%" alt="..."></div></div>

    </div>
    <div class="card" style="width:60%;height:300px;margin-top:50px;margin-bottom:50px">
      <img src="<?php echo e(asset('img/pubhome2.png')); ?>" class="card-img homepub1" alt="...">
      </div>
  </section>
  <script src="<?php echo e(asset('js/swiper-bundle.min.js')); ?>"></script>
  <link href="<?php echo e(asset('css/swiper-bundle.min.css')); ?>" rel="stylesheet">
              <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/welcome.css')); ?>">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('./layouts/theCircleMagazin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\the-circle-magazin-project\resources\views/welcome.blade.php ENDPATH**/ ?>