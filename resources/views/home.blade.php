@extends('templates.app')

@section('content')
<section class="first-section">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="text-content">
                  <h2>KOPAY</h2>
                  <div class="line-dec"></div>
                  <span>feel the sensation</span>
                </div>
              </div>
            </div>
          </div>
        </section>

<section class="second-section">
          <div class="container">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="service-item">
                  <div class="icon">
                    <img src="{{url('kopay/img/first-icon.png')}}" alt="">
                  </div>
                  <h4>coffee</h4>
                  <p>utuk anda yang paham rasa kopi</p>
                  
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="service-item">
                  <div class="icon">
                    <img src="{{url('kopay/img/second-icon.png')}}" alt="">
                  </div>
                  <h4>non-coffee</h4>
                  <p></p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="service-item">
                  <div class="icon">
                    <img src="{{url('kopay/img/third-icon.png')}}" alt="">
                  </div>
                  <h4>Quick Support</h4>
                  <p>Aliquam ex velit, viverra eu tristique vel, rhoncus nec ligula. In vel massa sed dolor pharetra interdum vitae posuere.</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="service-item">
                  <div class="icon">
                    <img src="{{url('kopay/img/fourth-icon.png')}}" alt="">
                  </div>
                  <h4>Voice Chat</h4>
                  <p>Sed pulvinar ipsum id leo volutpat, in convallis lectus molestie. Aliquam nisi sapien, faucibus eu consequat id, egestas vitae augue.</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="third-section">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="left-image col-md-4">
                  <img src="{{url('kopay/img/left-image.png')}}" alt="">
                </div>
                <div class="right-text col-md-8">
                  <h4><em>Integer suscipit</em><br>Nullam volutpat mi vel</h4>
                  <p>Nulla tempor lectus at mauris bibendum porttitor. Aenean ultrices orci id nibh sodales, vel suscipit arcu vulputate. Pellentesque hendrerit diam quis leo dignissim, lacinia interdum nunc volutpat. Morbi lobortis mattis lectus, a dictum augue lobortis non. Fusce eu nulla sagittis, scelerisque eros fringilla, commodo dolor.</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="fourth-section">
          <div class="container">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="portfolio-item first-item">
                  <div class="image">
                    <a href="{{url('kopay/img/01-big-item.jpg')}}" data-lightbox="image-1"><img src="{{url('kopay/img/first-item.jpg')}}"></a>
                  </div>
                  <div class="text">
                    <span>Nature</span>
                    <h4>Robotic Light</h4>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="portfolio-item second-item">
                  <div class="image">
                    <a href="{{url('kopay/img/02-big-item.jpg')}}" data-lightbox="image-1"><img src="{{url('kopay/img/second-item.jpg')}}"></a>
                  </div>
                  <div class="text">
                    <span>Architect</span>
                    <h4>Rock Solid</h4>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="portfolio-item third-item">
                  <div class="image">
                    <a href="{{url('kopay/img/03-big-item.jpg')}}" data-lightbox="image-1"><img src="{{url('kopay/img/third-item.jpg')}}"></a>
                  </div>
                  <div class="text">
                    <span>Focus</span>
                    <h4>Clean Design</h4>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="send-to-portfolio">
                  <span>Do you want to see more?</span>
                  <div class="primary-button">
                    <a href="{{ route('gallery') }}">Visit gallery</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="fivth-section">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1"> 
                <div class="left-text col-md-8">
                  <h4><em>Aliquam efficitur</em><br>augue et libero vulputate feugiat</h4>
                  <p>Mauris eget orci porta, aliquam neque sit amet, porttitor dui. Donec efficitur vehicula justo quis varius. Vivamus pharetra lorem eget turpis ornare tempus. Vivamus ac sodales lectus. Morbi rhoncus feugiat neque ultrices rhoncus. Maecenas ultrices, nisl pellentesque hendrerit dignissim, ante purus hendrerit urna, eu tristique est massa quis risus.</p>
                </div>
                <div class="right-image col-md-4">
                  <img src="{{url('kopay/img/right-image.png')}}" alt="">
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="sixth-section">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <form id="contact" action="" method="post">
                    <div class="col-md-6">
                      <fieldset>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required>
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required></textarea>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="btn">Send Message</button>
                      </fieldset>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-md-5">
                <div class="right-info">
                  <ul>
                    <li><a href="#"><i class="fa fa-envelope"></i>hello@company.com</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>050 060 0780 / 050 060 0110</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i>1186 New Street, ST 10990</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        @endsection