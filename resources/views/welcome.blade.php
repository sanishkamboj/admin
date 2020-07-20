@extends('layouts.app')

@section('content')
 <!-- BANNER SECTION CODE START -->
    <div class="banner-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <h1>
              <span>Book your perfect </span>entertainment
            </h1>
            <p class="sub-text"> We are musicians and industry professionals that have been in the wedding entertainment business for over two decades </p>

            <div class="get_box">
             <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                   <ul class="nav nav-tabs">
                      <li class="active"><a class="active" href="#tab1default" data-toggle="tab"><img src="{{asset('frontend/assets/img/filter1.png')}}" alt=""> Search By Filters</a></li>
                      <li class=""><a href="#tab2default" data-toggle="tab"><img src="{{asset('frontend/assets/img/search-icon.png')}}" alt=""> Search By Keyword</a></li>
                   </ul>
                </div>

                
                <div class="panel-body">
                   <div class="tab-content">
                      <div id="tab1default" class="tab-pane tab_first fade active in">
                       <div class="row">
                          <div class="col-md-3">
                            <div class="select-box">
                              <h6><i class="fa fa-music" aria-hidden="true"></i> Music Style</h6>        
                              <select class="custom-select">
                                <option selected>Music Style</option>
                                <option value="1">Music Style1</option>
                                <option value="2">Music Style2</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="select-box">
                              <h6><i class="fa fa-calendar-o" aria-hidden="true"></i> Location of Event</h6>        
                              <select class="custom-select">
                                <option selected>Acapella Groups</option>
                                <option value="1">Acapella Groups1</option>
                                <option value="2">Acapella Groups2</option>
                              </select>
                            </div> 
                          </div>
                          <div class="col-md-3">
                            <div class="select-box">
                              <h6><i class="fa fa-calendar" aria-hidden="true"></i> Date of Event</h6>        
                              <select class="custom-select">
                                <option selected>Northamptonshire</option>
                                <option value="1">Northamptonshire1</option>
                                <option value="2">Northamptonshire2</option>
                              </select>
                            </div>  
                          </div>
                          <div class="col-md-3">
                            <div class="select-box">
                              <h6><i class="fa fa-gbp" aria-hidden="true"></i> Price</h6>        
                              <select class="custom-select">
                                <option selected>Up to £750</option>
                                <option value="1">Up to £752</option>
                                <option value="2">Up to £755</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="btn-wrap">
                          <button type="button" class="find-btn">Find your entertainment <span>&#10230;</span></button>
                        </div>
                      </div>
                      <div id="tab2default" class="tab-pane fade">
                         <div class="row">
                          <div class="col-md-3">
                            <div class="select-box">
                              <h6><i class="fa fa-music" aria-hidden="true"></i> Music Style</h6>        
                              <select class="custom-select">
                                <option selected>Music Style</option>
                                <option value="1">Music Style1</option>
                                <option value="2">Music Style2</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="select-box">
                              <h6><i class="fa fa-calendar-o" aria-hidden="true"></i> Location of Event</h6>        
                              <select class="custom-select">
                                <option selected>Acapella Groups</option>
                                <option value="1">Acapella Groups1</option>
                                <option value="2">Acapella Groups2</option>
                              </select>
                            </div> 
                          </div>
                          <div class="col-md-3">
                            <div class="select-box">
                              <h6><i class="fa fa-calendar" aria-hidden="true"></i> Date of Event</h6>        
                              <select class="custom-select">
                                <option selected>Northamptonshire</option>
                                <option value="1">Northamptonshire1</option>
                                <option value="2">Northamptonshire2</option>
                              </select>
                            </div>  
                          </div>
                          <div class="col-md-3">
                            <div class="select-box">
                              <h6><i class="fa fa-gbp" aria-hidden="true"></i> Price</h6>        
                              <select class="custom-select">
                                <option selected>Up to £750</option>
                                <option value="1">Up to £752</option>
                                <option value="2">Up to £755</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="btn-wrap">
                          <button type="button" class="find-btn">Find your entertainment <span>&#10230;</span></button>
                        </div>                        
                      </div>
                   </div>
                </div>
             </div>
            </div>

            <div class="contact-us">
              <p>Call Us Now : <a href="tel:0208 242 4774"> 0208 242 4774</a></p><span class="line"></span>
              <p>Email: <a href="mailto:Info@idomusic.co.uk">  Info@idomusic.co.uk</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- BANNER SECTION CODE END -->

    <!-- OUR MUSIC SECTION CODE START -->
    <div class="our-music">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="headings">
              <h2>Our Music Entertainment Agency: </h2>
            </div>
            <img src="{{asset('frontend/assets/img/our-logo.png')}}" alt="" class="img-fluid">
          </div>
          <div class="col-md-8">
            <div class="content-wrap">
              <p> Wedding entertainment is what I Do Music do. With over 20 years experience in the wedding entertainment industry, we have become renown for our high quality and diverse roster of wedding entertainment acts and wedding music bands. Unlike other live music booking agencies out there, I Do Music focus solely on wedding entertainment. </p>
              <p> We understand that every wedding should be perfect. It should be the most important and memorable day in a person's life. Therefore, it is absolutely vital that you choose a wedding act that you know is going to make your Big Day truly special and one to remember. Our interactive website allows you to easily sort and browse through the best wedding music acts throughout the UK (including Southern Ireland). </p>
              <a href="#" class="read-more"> Read More <img src="{{asset('frontend/assets/img/arrow-right.png')}}" alt="" class="img-fluid"> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- OUR MUSIC SECTION CODE START -->

    <!-- POPULAR SECTION CODE START -->
    <div class="popular-sec">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2 empty"></div>
          <div class="col-md-10">
            <div class="headings">
              <h2> <span> Popular Entertainment </span> </h2>
            </div>
            <div class="popular-slider">
              <div>
                <div class="media ftco-media d-block text-center mx-1">
                  <img src="{{asset('frontend/assets/img/img.jpg')}}" alt=" " class="img-fluid">
                  <div class="media-body">
                    <h5 class="h4">Wedding Music Simplified</h5>
                  </div>
                </div>
              </div>
              <div>   
                <div class="media ftco-media d-block text-center mx-1">
                  <img src="{{asset('frontend/assets/img/img1.jpg')}}" alt=" " class="img-fluid">
                  <div class="media-body">
                    <h5 class="h4">Pop & Rock</h5>
                  </div>
                </div>
              </div>
              <div>        
                <div class="media ftco-media d-block text-center mx-1">
                  <img src="{{asset('frontend/assets/img/img2.jpg')}}" alt=" " class="img-fluid">
                  <div class="media-body">
                    <h5 class="h4">Acoustic & Folk</h5>
                  </div>
                </div>
              </div>
              <div>      
                <div class="media ftco-media d-block text-center mx-1">
                  <img src="{{asset('frontend/assets/img/img3.jpg')}}" alt=" " class="img-fluid">
                  <div class="media-body">
                    <h5 class="h4">Soul & Motown</h5>
                  </div>
                </div>
              </div>
              <div>
                <div class="media ftco-media d-block text-center mx-1">
                  <img src="{{asset('frontend/assets/img/img.jpg')}}" alt=" " class="img-fluid">
                  <div class="media-body">
                    <h5 class="h4">Wedding Music Simplified</h5>
                  </div>
                </div>
              </div>
              <div>
                <div class="media ftco-media d-block text-center mx-1">
                  <img src="{{asset('frontend/assets/img/img1.jpg')}}" alt=" " class="img-fluid">
                  <div class="media-body">
                    <h5 class="h4">Pop & Rock</h5>
                  </div>
                </div>
              </div>
              <div>
                <div class="media ftco-media d-block text-center mx-1">
                  <img src="{{asset('frontend/assets/img/img2.jpg')}}" alt=" " class="img-fluid">
                  <div class="media-body">
                    <h5 class="h4">Acoustic & Folk</h5>
                  </div>
                </div>
              </div>
              <div>
                <div class="media ftco-media d-block text-center mx-1">
                  <img src="{{asset('frontend/assets/img/img3.jpg')}}" alt=" " class="img-fluid">
                  <div class="media-body">
                    <h5 class="h4">Soul & Motown</h5>
                  </div>
                </div>
              </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <!-- POPULAR SECTION CODE END -->

    <!-- FEATURE TOP SECTION CODE START -->
    <div class="feature-atc">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="headings">
              <h2> <span> Featured Acts </span> </h2>
            </div>
          </div>

          <div class="col-md-4 col-sm-6">
            <div class="feat-inner">
              <img src= "{{asset('frontend/assets/img/feat1.jpg')}}" alt="" class="img-fluid">
              <h5>2 Hot 2 Handle Band 29 (3 Piece Lineup)</h5>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="feat-inner">
              <img src="{{asset('frontend/assets/img/feat2.jpg')}}" alt="" class="img-fluid">
              <h5>A Soul Street Story</h5>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="feat-inner">
              <img src= "{{asset('frontend/assets/img/feat3.jpg')}}" alt="" class="img-fluid">
              <h5> A1 Disco And Karaoke Tel 07500 314151</h5>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="feat-inner">
              <img src="{{asset('frontend/assets/img/feat4.jpg')}}" alt="" class="img-fluid">
              <h5>2 Hot 2 Handle Band 29 (3 Piece Lineup)</h5>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="feat-inner">
              <img src="{{asset('frontend/assets/img/feat5.jpg')}}" alt="" class="img-fluid">
              <h5>A Soul Street Story</h5>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="feat-inner">
              <img src="{{asset('frontend/assets/img/feat6.jpg')}}" alt="" class="img-fluid">
              <h5> A1 Disco And Karaoke Tel 07500 314151</h5>
            </div>
          </div> 

        </div>
      </div>
    </div>
    <!-- FEATURE TOP SECTION CODE END -->

    <!-- VIDEO SECTION START HERE -->
    <div class="video-wrap">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-5">
            <div class="video-sec">
               <div class="video">
                  <img src="{{asset('frontend/assets/img/video-img.jpg')}}" alt="" class="img-fluid" />
                  <span data-toggle="modal" data-target="#homeVideo" class="video-icon" onclick="playVid()">
                    <i class="fa fa-play" aria-hidden="true"></i>
                    <a href="#">Play Now!</a>
                  </span>
                  <!-- Home Video Modal -->
                  <div class="modal fade" id="homeVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="pauseVid()">X</button>
                          <div class="embed-responsive embed-responsive-16by9">
                          <video id="gossVideo" class="embed-responsive-item" controls="controls" poster="http://www.gossettmktg.com/video/dangot.png">
                          <source src="http://www.gossettmktg.com/video/dangot.mp4" type="video/mp4">
                          <source src="http://www.gossettmktg.com/video/dangot.webm" type="video/webm">
                          <source src="http://www.gossettmktg.com/video/dangot.ogv" type="video/ogg">
                          <object type="application/x-shockwave-flash" data="https://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" width="353" height="190">
                          <param name="movie" value="https://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
                          <param name="allowFullScreen" value="true">   <param name="wmode" value="transparent">
                          <param name="flashVars" value="config={'playlist':['http%3A%2F%2Fwww.gossettmktg.com%2Fvideo%2Fdangot.png',{'url':'http%3A%2F%2Fwww.gossettmktg.com%2Fvideo%2Fdangot.mp4','autoPlay':false}]}">
                          <img alt="Big Buck Bunny" src="http://www.gossettmktg.com/video/dangot.png" width="353" height="190" title="No video playback capabilities, please download the video below"></object>
                        </video>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-7 rightsd">
            <div class="headings">
              <h2><span class="d-block">Why Hire A Band Through</span> I Do Music</h2>
            </div>
              <ul class="inline-list">
                <li><i class="fa fa-music" aria-hidden="true"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li><i class="fa fa-music" aria-hidden="true"></i> Curabitur sit amet leo hendrerit, laoreet felis id, cursus neque.</li>
                <li><i class="fa fa-music" aria-hidden="true"></i> Mauris pulvinar lorem at imperdiet aliquet.</li>
                <li><i class="fa fa-music" aria-hidden="true"></i> Curabitur vel augue eu ex condimentum dictum.</li>
                <li><i class="fa fa-music" aria-hidden="true"></i> Donec posuere urna nec lectus pellentesque faucibus.</li>
                <li><i class="fa fa-music" aria-hidden="true"></i> Curabitur sit amet leo hendrerit, laoreet felis id, cursus neque.</li>
              </ul>
          </div>
        </div>
      </div>
    </div>
    <!--VIDEO SECTION END HERE -->

    <!--------------FEATURE SECTION START HERE----------->
     <div class="feature-section">
       <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-12 col-12 left-sd">
              <h2><span>Featured</span> Acts</h2>
              <p>Wedding entertainment is what I Do Music do. With over 20 years 
                experience in the wedding entertainment industry.</p>
                
                <p><b>Learn how to look sharper!</b></p>

                <img src="{{asset('frontend/assets/img/right-sd.png')}}" alt="">
            </div>
            <div class="col-md-8 col-sm-12 col-12 right-sd">
              <div class="row" style="overflow: hidden;">
              <div class="col-md-4 col-sm-6 boxx">
              <img src="{{asset('frontend/assets/img/act1.png')}}" alt="">
              <span>BLACK CHERRY JAM</span>
              </div>
              <div class="col-md-4 col-sm-6 boxx">
                <img src="{{asset('frontend/assets/img/act2.png')}}" alt="">
                <span>BLACK CHERRY JAM</span>
              </div>
              <div class="col-md-4 col-sm-6 boxx">
                <img src="{{asset('frontend/assets/img/act3.png')}}" alt="">
                <span>BLACK CHERRY JAM</span>
              </div>
              <div class="col-md-4 col-sm-6 boxx">
                <img src="{{asset('frontend/assets/img/act4.png')}}" alt="">
                <span>BLACK CHERRY JAM</span>
              </div>
              <div class="col-md-4 col-sm-6 boxx">
                <img src="{{asset('frontend/assets/img/act5.png')}}" alt="">
                <span>BLACK CHERRY JAM</span>
              </div>
              <div class="col-md-4 col-sm-6 lst">
                <a href="#">Read More <img src="{{asset('frontend/assets/img/arrow-right.png')}}" alt=""></a>
              </div>
              </div>
            </div>
          </div>
       </div>
     </div>
    <!--------------FEATURE SECTION START HERE----------->

    <!-- REVIEWS SECTION START HERE -->
    <div class="reviews-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="headings">
              <h2>
                <span>Reviews from happy couples</span>
              </h2>
            </div>
            <div class="reviews-slider">
              <div>
                <div class="media ftco-media d-block text-center mx-1">
                  <p> We used your website to pick the band for our wedding breakfast and another band for the evening event. This was decided by committee since we could play live clips.. my Blackberry to family members thus allowing everyone had a say in the music we chose. Many thanks for your help </p>
                  <div class="media-body">
                    <img src="{{asset('frontend/assets/img/review1.png')}}" class="rounded-circle" alt="">
                    <div class="author">
                      <h5 class="h4">Wendy Gibson</h5>
                      <p>9 June 2013 </p>
                    </div>
                  </div>
                </div>
              </div>
              <div>   
                <div class="media ftco-media d-block text-center mx-1">
                  <p>Dear I Do Music. What a brilliant brilliant band!! Thank you so much Steve and please thank Bob and all the guys for providing excellent sets on Saturday evening..</p>
                  <div class="media-body">
                    <img src="{{asset('frontend/assets/img/review2.png')}}" class="rounded-circle" alt="">
                    <div class="author">
                      <h5 class="h4">Anne & Christopher Jackson</h5>
                      <p>30th June 2013</p>
                    </div>
                  </div>
                </div>
              </div>
              <div>        
                <div class="media ftco-media d-block text-center mx-1">
                  <p>Played at my wedding on Sunday and me and my new wife couldn't be happier. Every single song was perfection, the musicians were professional, funny, courteous..</p>
                  <div class="media-body">
                    <img src="{{asset('frontend/assets/img/review1.png')}}" class="rounded-circle" alt="">
                    <div class="author">
                      <h5 class="h4">Mark Smith</h5>
                      <p>12th May 2012</p>
                    </div>
                  </div>
                </div>
              </div>
              <div>      
                <div class="media ftco-media d-block text-center mx-1">
                  <p> We used your website to pick the band for our wedding breakfast and another band for the evening event. This was decided by committee since we could play live clips.. my Blackberry to family members thus allowing everyone had a say in the music we chose. Many thanks for your help </p>
                  <div class="media-body">
                    <img src="{{asset('frontend/assets/img/review2.png')}}" class="rounded-circle" alt="">
                    <div class="author">
                      <h5 class="h4">Wendy Gibson</h5>
                      <p>9 June 2013 </p>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="media ftco-media d-block text-center mx-1">
                  <p>Dear I Do Music. What a brilliant brilliant band!! Thank you so much Steve and please thank Bob and all the guys for providing excellent sets on Saturday evening..</p>
                  <div class="media-body">
                    <img src="{{asset('frontend/assets/img/review1.png')}}" class="rounded-circle" alt="">
                    <div class="author">
                      <h5 class="h4">Anne & Christopher Jackson</h5>
                      <p>30th June 2013</p>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="media ftco-media d-block text-center mx-1">
                  <p>Played at my wedding on Sunday and me and my new wife couldn't be happier. Every single song was perfection, the musicians were professional, funny, courteous..</p>
                  <div class="media-body">
                    <img src="{{asset('frontend/assets/img/review2.png')}}" class="rounded-circle" alt="">
                    <div class="author">
                      <h5 class="h4">Mark Smith</h5>
                      <p>12th May 2012</p>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="media ftco-media d-block text-center mx-1">
                  <p> We used your website to pick the band for our wedding breakfast and another band for the evening event. This was decided by committee since we could play live clips.. my Blackberry to family members thus allowing everyone had a say in the music we chose. Many thanks for your help </p>
                  <div class="media-body">
                    <img src="{{asset('frontend/assets/img/review1.png')}}" class="rounded-circle" alt="">
                    <div class="author">
                      <h5 class="h4">Wendy Gibson</h5>
                      <p>9 June 2013 </p>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="media ftco-media d-block text-center mx-1">
                  <p>Dear I Do Music. What a brilliant brilliant band!! Thank you so much Steve and please thank Bob and all the guys for providing excellent sets on Saturday evening..</p>
                  <div class="media-body">
                    <img src="{{asset('frontend/assets/img/review2.png')}}" class="rounded-circle" alt="">
                    <div class="author">
                      <h5 class="h4">Anne & Christopher Jackson</h5>
                      <p>30th June 2013</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- REVIEWS SECTION END HERE -->
@endsection
