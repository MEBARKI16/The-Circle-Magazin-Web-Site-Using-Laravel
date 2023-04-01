@extends('./layouts/theCircleMagazin')
@section('content')
      <section class="">
                <h2 class='text-center' style="margin:auto; margin-top: 50px;
        color: #1b1464;">NOUS CONTACTER</h2>
      <div  style="  border-top: 1px solid #1b1464;
      margin: 40px auto; width: 5%;"></div>
      <div class="cont-form">
                <div class="container contact-form">
                                <form method="post">
                                   <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                                            </div>
                                            <div class="form-group">
                                                        <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                                                    </div>
                                        </div>
                                        
                        
                                    </div>
                                </form>
                    </div>
                        <div class="container text-center text-md-start mt-5 marg-elem" >
                          <!-- Grid row -->
                          <div class="row mt-8">
                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                              <!-- Content -->
                              <div class="item1">
                                <span class="circle-icon">
                                  <i class="fas fa-map-marker-alt fa-2x  "></i
                                ></span>
                      
                                <p><small>New York, NY 10012, USA</small></p>
                              </div>
                            </div>
                            <!-- Grid column -->
                    
                            <!-- Grid column -->
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" style="color:#1b1464;">
                              <!-- Links -->
                              <div class="item2">
                                <span class="circle-icon"
                                  ><i class="fas fa-phone fa-2x "></i
                                ></span>
                                <p><small>+ 01 234 567 89</small></p>
                              </div>
                            </div>
                            <!-- Grid column -->
                    
                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4" style="color:#1b1464;">
                              <!-- Links -->
                              <!--<p>
                                <a href="#!" class="text-reset">Pricing</a>
                              </p> -->
                              <div class="item3">
                                <span class="circle-icon"
                                  ><i class="fas fa-envelope fa-2x "></i
                                ></span>
                                <p><small>contact@gmail.com</small></p>
                              </div>
                            </div>
                            <!-- Grid column -->
                    
                        
                          </div>
                          <!-- Grid row -->
                        </div>
                         <!-- Map -->
                         <div class="container-fluid">
                                      
                                       <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    
                                    </div>
            <!-- /Map -->
      </div>
     
      </section>
      <link rel="stylesheet" type="text/css" href="{{asset('css/contacterNous.css')}}">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      

@endsection