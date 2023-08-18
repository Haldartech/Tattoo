<?php
$settings=DB::table('settings')->where('id','1')->first();
?>
<!-- Promo video - Testiominals -->
<section class="testimonials video-wrapper video">
    <div
      class="background bg-img bg-fixed section-padding pb-0"
      data-background="{{url('assets/front/img/slider/2.jpg')}}"
      data-overlay-dark="3"
    >
      <div class="container">
        <div class="row">
          <!-- Promo video -->
          <div class="col-md-7 mb-30">
            <div class="vid-area valign">
              <a class="vid" href="{{$settings->promo}}">
                <span class="icon"> <i class="ti-control-play"></i> </span>
              </a>
              <div class="cont">
                <h5>Promo Video</h5>
              </div>
            </div>
          </div>

          <!-- Testiominals -->
          <div class="col-md-5 animate-box" data-animate-effect="fadeInUp">
            <div class="testimonials-box">
              <div class="owl-carousel owl-theme">
                <?php $testimonials = DB::table('testimonials')->orderBy("id","desc")->get();
                foreach ($testimonials as $testimonial) {
                ?>
                <div class="item">
                  <span class="quote"><img src="{{url('assets/front/img/quot.png')}}" alt="" /></span>
                    <span style="border-left: 1px solid #904d30; padding-left: 20px;"> <?php echo $testimonial->testimonial; ?>
                    </span>
                  <div class="info">
                    <div class="author-img">
                      <img src="{{url('public/images/testimonial/'.$testimonial->t_image)}}" alt="" />
                    </div>
                    <div class="cont">
                      <h6>{{$testimonial->name}}</h6>
                      <span>Customer Review</span>
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Clients -->
  <section class="clients">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="owl-carousel owl-theme">

            <?php $clients = DB::table('clients')->orderBy("id","desc")->get(); ?>
            @foreach ($clients as $client)
            <div class="clients-logo">
              <a href="{{url("$client->link")}}" target="_blank"><img src="{{url('public/images/client/'.$client->c_image)}}" alt="c_image" /></a>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </section>

<!-- Footer -->
<footer class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="footer-column footer-contact">
              <h3 class="footer-title">Contact</h3>
              <p class="footer-contact-text">
                @if(!empty($settings->sec_address))
                {{$settings->sec_address}}
                @else
                {{$settings->address}}
                @endif
              </p>
              <div class="footer-contact-info">
                <p class="footer-contact-phone">{{$settings->phone}}</p>
                <p class="footer-contact-mail">{{$settings->gmail}}</p>
              </div>
              <div class="footer-about-social-list">
                <a href="{{$settings->insta}}"><i class="ti-instagram"></i></a>
                <a href="{{$settings->twitter}}"><i class="ti-twitter"></i></a>
                <a href="{{$settings->youtube}}"><i class="ti-youtube"></i></a>
                <a href="{{$settings->facebook}}"><i class="ti-facebook"></i></a>
                <a href="{{$settings->pinterest}}"><i class="ti-pinterest"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-3 offset-md-1">
            <div class="item opening">
              <h3 class="footer-title">Work Time</h3>
              <ul>
                <li>
                  <div class="tit">Monday</div>
                  <div class="dots"></div>
                  <span>{{$settings->mon}}</span>
                </li>
                <li>
                  <div class="tit">Tuesday</div>
                  <div class="dots"></div>
                  <span>{{$settings->tue}}</span>
                </li>
                <li>
                  <div class="tit">Wednesday</div>
                  <div class="dots"></div>
                  <span>{{$settings->wed}}</span>
                </li>
                <li>
                  <div class="tit">Thursday</div>
                  <div class="dots"></div>
                  <span>{{$settings->thu}}</span>
                  </li>
                <li>
                  <div class="tit">Friday</div>
                  <div class="dots"></div>
                  <span>{{$settings->fri}}</span>
                </li>
                <li>
                  <div class="tit">Saturday</div>
                  <div class="dots"></div>
                  <span>{{$settings->sat}}</span>
                </li>
                <li>
                  <div class="tit">Weekend</div>
                  <div class="dots"></div>
                  <span>{{$settings->weekend}}</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 offset-md-1">
            <div class="footer-column footer-explore clearfix">
              <h3 class="footer-title">Subscribe</h3>
              <div class="row subscribe">
                <div class="col-md-12">
                  <p>
                    Subscribe to take advantage of our campaigns and gift
                    certificates.
                  </p>
                  <form>
                    <input
                      type="text"
                      name="search"
                      placeholder="Your email"
                      required
                    />
                    <button>Subscribe</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-bottom-inner">
              <p class="footer-bottom-copy-right">
                2023 © All rights reserved by Creators Tattoo Studio. Designed by
                <a href="www.webcaresolutions.co.in" target="_blank"
                  >Webcare Solutions</a
                >
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
