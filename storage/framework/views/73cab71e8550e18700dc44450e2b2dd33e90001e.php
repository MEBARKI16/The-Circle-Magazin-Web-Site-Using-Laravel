
<?php $__env->startSection('content'); ?>
<section class="section">
    <h2
    class="section__title"
    style="  margin-top: 50px;
  color: #009FE3;"
  >
    LES DOSSIERS
  </h2>
  <div
    style="  border-top: 1px solid #009FE3;
margin: 40px auto;
width: 5%;"
  ></div>
        <div class="card" style="text-align:left;width:80%;border:none;background-color:transparent"><h2>Les plus récents</h2></div>
        <div class="slide-container">
            <swiper-container id="dossier-home">
              <div class="swiper-slide">  <div class="card" style="width: 80%;">
                <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div></div>
                    <div class="swiper-slide">  <div class="card" style="width: 80%">
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
                              </div></div>
            </swiper-container>
      
            <div class="swiper-pagination"></div>
          </div>
      
          <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
      
          <script>
            const swiperEldossier = document.getElementById("dossier-home");
      
            Object.assign(swiperEldossier, {
              slidesPerView: 4,
              slidesPerGroup: 1,
              centeredSlides: true,
              spaceBetween: 10,
              pagination: {},
              navigation: {
                nextEl: ".swiper-button-next-dossier",
                prevEl: ".swiper-button-prev-dossier"
              },
              breakpoints: {
          768: {
            slidesPerView: 4,
            spaceBetween: 5
          },
          576: {
            slidesPerView: 1,
            spaceBetween: 0
          }
        }
            });
      
            swiperEldossier.initialize();
          </script>
       <div class="card" style="text-align:left;width:80%;border:none;background-color:transparent"><h2>Les plus lus</h2></div>
       <div class="slide-container">
        <swiper-container id="dossier-lesdossiers">
          <div class="swiper-slide">  <div class="card" style="width: 80%;">
            <img src="<?php echo e(asset('img/download.jpg')); ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div></div>
                <div class="swiper-slide">  <div class="card" style="width: 80%">
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
                          </div></div>
        </swiper-container>
  
        <div class="swiper-pagination"></div>
      </div>
  
      <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
  
      <script>
        const swiperEldossierlesdossiers = document.getElementById("dossier-lesdossiers");
  
        Object.assign(swiperEldossierlesdossiers, {
          slidesPerView: 4,
          slidesPerGroup: 1,
          centeredSlides: true,
          spaceBetween: 10,
          pagination: {},
          navigation: {
            nextEl: ".swiper-button-next-dossier-lesdossiers",
            prevEl: ".swiper-button-prev-dossier-lesdossiers"
          },
          breakpoints: {
      768: {
        slidesPerView: 4,
        spaceBetween: 5
      },
      576: {
        slidesPerView: 1,
        spaceBetween: 0
      }
    }
        });
  
        swiperEldossierlesdossiers.initialize();
      </script>
       <button type="button" class="btn btn-lg" style="width:30%;margin:50px 50px;background-color:#1b1464;color:white">Voir tous les dossiers</button>
  </section>

  <script src="<?php echo e(asset('js/swiper-bundle.min.js')); ?>"></script>
  <link href="<?php echo e(asset('css/swiper-bundle.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('css/lemission.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('./layouts/theCircleMagazin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\the-circle-magazin-project\resources\views/lesdossiers.blade.php ENDPATH**/ ?>