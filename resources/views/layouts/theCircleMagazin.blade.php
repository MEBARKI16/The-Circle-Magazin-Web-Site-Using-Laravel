<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/acceuil.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">    



<head>
    <link href='https://fonts.googleapis.com/css?family=LinotypeBanjomanText' rel='stylesheet'>
  </head>
  
<title>THE CIRCLE MAGAZINE</title>
</head>
<body>
  
    <nav class="nav nav-pills nav-justified d-flex justify-content-center justify-content-lg-between p-2 border-bottom text-center">
      <a class="nav-link" style="margin:auto;" href="#">vide</a>
      <a class="nav-link" style="margin:auto;" href="{{route('welcome')}}"><img class="logo" src="{{asset('img/The-Circle-LOGO.svg')}}" alt=""></a>
      <a class="nav-link" style="margin:auto;" href="#"><button class="bouton bt">{{__('acceuil.My Circle')}}</button></a>
    </nav>
    <main>
     
            <div class="card ombre" style="width: 100%;">
                <div class="card bg-dark text-white img1" style="border:none;">
                 
                    <img class="card-img bg-i" src="{{asset('img/AI_Image.jpg')}}" alt="Card image">
                    <div class="card-img-overlay" style="width:100%;height:100%">
                        <nav class="nav nav-pills nav-fill navx p-1 nav-img text-center justify-content-center">
                            <div class="bt" ><button class="bouton" style="background-color:white;color:#1b1464;border:2px solid;border-color:#1b1464;font-weight: bold;">Archives</button></div>
                                  <div style="display:flex;justify-content:space-between;text-align:center;width:400px;font-weight: bold;">
                                  <a href="{{route('quiSommesNous')}}">Qui sommes-nous</a>
                                      <a href="{{route('contacterNous')}}">Nous contacter</a>
                                  </div>
                                  <div>
                                          <nav class="card-body">
                      
                                                  <ul style="font-weight: bold;">
                                                  <li><a href="{{ route('languageConverter','ar')}}">AR</a></li>
                                                    <li><a href="{{ route('languageConverter','en')}}">EN</a></li>
                                                    <li><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                                                  </ul>
                                                
                                              </nav>
                                  </div>
                          </nav>
                          <div class="card-body card-magazin" >
                              <h5 class="card-title p-t-h text-center" style="color:#1b1464;font-family: 'LinotypeBanjomanText Bold', sans-serif;">Fintech, la digitalisation
                                  au service de la finance</h5>
                                  <p class="card-text p-t-i text-center" style="color:#1b1464">Les technologies appliquées à la finance
                                      permettent de diversifier l’offre bancaire
                                      et de voir émerger de nouveaux acteurs.</p>
                                      <button class="bouton bouton-magazin" style="background-color:white;color:#1b1464;border:1px solid;border-color:#1b1464;margin-left:10%;"><i class="fa-sharp fa-solid fa-play"></i>   Je m’abonne</button>
                                    </div>
                        
                    </div>
                  </div>
       
                  
                          

            
                   
                                <nav class="nav nav-pills nav-fill navx p-5">
                                    <a class="nav-item nav-link" href="{{route('lemission')}}">L’EMISSION</a>
                                    <div class="separateur2"></div>
                                    <a class="nav-item nav-link" href="{{route('lesdossiers')}}">LES DOSSIERS</a>
                                    <div class="separateur2"></div>
                                    <a class="nav-item nav-link" href="#">L’ENTRETIEN</a>
                                    <div class="separateur2"></div>
                                    <a class="nav-item nav-link " href="#">LES NEWS</a>
                                    <div class="separateur2"></div>
                                    <a class="nav-item nav-link " href="#">LES PODCASTS</a>
                                    <div class="separateur2"></div>
                                    <a class="nav-item nav-link " href="#">MENA - WORLD</a>
                                  </nav>
                  </div>
                  <div class="card" style="width: 100%;border:none;background-color:#F5F5F5;">
                   @yield('content')
                      </div>
    </main>
  <!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">
      
      
        <!-- Section: Links  -->
        <section class="">
          <div class="container text-center text-md-start mt-5" >
            <!-- Grid row -->
            <div class="row mt-8" style="width:100%;">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 logo2">
                <!-- Content -->
              <img class='logo2' src="{{asset('img/The-Circle-LOGO.svg')}}" alt="">
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" style="color:#1b1464;">
                <!-- Links -->
                <p>+ 213 540 460 234 </p>
                <p>thecircle@gmail.com</p>
                <p>
                        Lorem Ipsum, Lorem Ipsum
                </p>
                <p>
                        Lorem Ipsum
                </p>
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4" style="color:#1b1464;">
                <!-- Links -->
                <!--<p>
                  <a href="#!" class="text-reset">Pricing</a>
                </p> -->
                <p>
                        Mentions légales
                </p>
                <p>
                        Politique de confidentialité
                </p>
                <p>
                        Conditions générales d'utilisation et de vente
                </p>
                <p>
                        Gestion des cookies
                </p>
                <p>
                        Aide (FAQ)
                </p>
                <p>
                        Publicité
                </p>
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
               <p style="color:#1b1464;">Newsletter "The Circle"</p>
                <div class="social-buttons">
                        <a href="" class="me-4">
                          <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="" class="me-4">
                          <i class="fab fa-twitter"></i>
                        </a>
                        <a href="" class="me-4">
                          <i class="fab fa-instagram"></i>
                        </a>
                        <a href="" class="me-4">
                            <i class="fa-brands fa-youtube"></i>
                          </a>
                          <a href="" class="me-4">
                              <i class="fab fa-linkedin"></i>
                            </a>
                     
                      </div>
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
        </section>
        <!-- Section: Links  -->
      
        <!-- Copyright -->
        <div class="text-center p-4">
                <div class="bt"> <button class="bouton">My Circle</button></div>
                <div class="separateur3"></div>
                <p style="color:#1b1464;">2021. Tous droits réservés.</p>
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->
</body>
</html>