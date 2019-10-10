@extends('templates.app')

@section('content')
<section class="first-gallery-section">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="text-content">
                  <h2>Gallery</h2>
                  <div class="line-dec"></div>
                  <span>All about our work and play</span>
                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="send-to-home">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="back-to-home">
                  <span>Duis facilisis neque ut varius dictum. Phasellus et ultricies eros. Praesent commodo augue eget finibus feugiat.</span>
                  <div class="primary-button">
                    <a href="{{ route('home') }}">Go to homepage</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

  
        <div class="content-wrapper">
            <div class="inner-container container">
                <div class="projects-holder-3">
                    <div class="filter-categories">
                        <ul class="project-filter">
                            <li class="filter" data-filter="all"><span>All</span></li>
                            <li class="filter" data-filter="webdesign"><span>Web Design</span></li>
                            <li class="filter" data-filter="nature"><span>Nature</span></li>
                            <li class="filter" data-filter="responsive"><span>Responsive</span></li>
                            <li class="filter" data-filter="creative"><span>Creative</span></li>
                        </ul>
                    </div>
                    <div class="projects-holder">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 project-item mix nature">
                              <div class="image">
                                <a href="{{url('kopay/img/01-big-item.jpg')}}" data-lightbox="image-1"><img src="{{url('kopay/img/01-item.jpg')}}"></a>
                              </div>
                              <div class="text">
                               <span>Nature</span>                            
                               <h4> <a href="{{ route('robot') }}">Robotic Light</a> </h4>                              
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-6 project-item mix webdesign">
                              <div class="image">
                                <a href="{{url('kopay/img/02-big-item.jpg')}}" data-lightbox="image-1"><img src="{{url('kopay/img/02-item.jpg')}}"></a>
                              </div>
                              <div class="text">
                                <span>Web Design</span>
                                <h4> <a href="{{ route('rock') }}">Rock Solid</a> </h4>                              
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-6 project-item mix responsive">
                              <div class="image">
                                <a href="{{url('kopay/img/03-big-item.jpg')}}" data-lightbox="image-1"><img src="{{url('kopay/img/03-item.jpg')}}"></a>
                              </div>
                              <div class="text">
                                <span>Responsive</span>
                                <h4>Minimal Capture</h4>
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-6 project-item mix creative nature">
                              <div class="image">
                                <a href="{{url('kopay/img/04-big-item.jpg')}}" data-lightbox="image-1"><img src="{{url('kopay/img/04-item.jpg')}}"></a>
                              </div>
                              <div class="text">
                                <span>Creative / Nature</span>
                                <h4>Tattoo Lovers</h4>
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-6 project-item mix creative">
                              <div class="image">
                                <a href="{{url('kopay/img/05-big-item.jpg')}}" data-lightbox="image-1"><img src="{{url('kopay/img/05-item.jpg')}}"></a>
                              </div>
                              <div class="text">
                                <span>Creative</span>
                                <h4>Develope &amp; Coding</h4>
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-6 project-item mix responsive webdesign">
                              <div class="image">
                                <a href="{{url('kopay/img/06-big-item.jpg')}}" data-lightbox="image-1"><img src="{{url('kopay/img/06-item.jpg')}}"></a>
                              </div>
                              <div class="text">
                                <span>Responsive / Web Design</span>
                                <h4>Network Inspire</h4>
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-6 project-item mix webdesign">
                              <div class="image">
                                <a href="{{url('kopay/img/07-big-item.jpg')}}" data-lightbox="image-1"><img src="{{url('kopay/img/07-item.jpg')}}"></a>
                              </div>
                              <div class="text">
                                <span>Web Design</span>
                                <h4>Start From Scatch</h4>
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-6 project-item mix nature">
                              <div class="image">
                                <a href="{{url('kopay/img/08-big-item.jpg')}}" data-lightbox="image-1"><img src="{{url('kopay/img/08-item.jpg')}}"></a>
                              </div>
                              <div class="text">
                                <span>Nature</span>
                                <h4>Stay Safe Watch</h4>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        @endsection