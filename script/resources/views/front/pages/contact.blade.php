<?php $pages = DB::table('pages')->where("id","8")->first(); ?>
@section('title', $pages->title)
@extends('front.resource.main')
@section('content')

<!-- Header Banner -->
<section
class="banner-header full-height section-padding valign bg-img bg-fixed"
data-overlay-dark="4"
data-background="{{url('public/images/pages_manager/'.$pages->p_image)}}"
>
<div class="container">
  <div class="row">
    <div class="col-md-7 text-left caption mt-90">
      <h5 class="animate-box" data-animate-effect="fadeInUp">
        <a href="index.html">Home</a> / @yield('title')
      </h5>
      <h1 class="animate-box" data-animate-effect="fadeInUp">
        @yield('title')
      </h1>
      <hr class="animate-box" data-animate-effect="fadeInUp" />
      <p class="animate-box" data-animate-effect="fadeInUp">
        <?php echo $pages->desc; ?>
      </p>
    </div>
  </div>
</div>
</section>
<!-- hr -->
<hr class="line-vr-section" />
<!-- Contact -->
<section class="contact section-padding">
<div class="container">
  <div class="row">
    <?php $contactdtl = DB::table('contact_dtls')->where("id","1")->first(); ?>
    <div class="col-md-6 mb-30">
      <h5>{{$contactdtl->title}}</h5>
      <p class="mb-30">
        <?php echo $contactdtl->desc; ?>
      </p>
      <div class="item">
        <span class="icon ti-location-pin"></span>
        <div class="cont">
          <h6>Address</h6>
          <p>{{$settings->address}}</p>
        </div>
      </div>
      <div class="item">
        <span class="icon ti-mobile"></span>
        <div class="cont">
          <h6>Phone</h6>
          <p><a href="tel:{{$settings->phone}}">{{$settings->phone}}</a></p>
        </div>
      </div>
      <div class="item">
        <span class="icon ti-email"></span>
        <div class="cont">
          <h6>e-Mail</h6>
          <p>{{$settings->gmail}}</p>
        </div>
      </div>
    </div>
    <div class="col-md-5 offset-md-1">
      <h5>Contact Form</h5>
      <form method="post" action="{{url('/admin/addContact')}}" >
        {{ csrf_field() }}
        <!-- Form message -->
        <div class="row">
          <div class="col-12">
            <div class="alert alert-success contact__msg" style="display: none" role="alert">
              Your message was sent successfully.
            </div>
          </div>
        </div>
        <!-- Form elements -->
        <div class="row">
          <div class="col-md-12 form-group">
            <input name="name" type="text" placeholder="Your Name *" required/>
          </div>
          <div class="col-md-6 form-group">
            <input name="email" type="email" placeholder="Your Email *" required/>
          </div>
          <div class="col-md-6 form-group">
            <input name="phone" type="text" placeholder="Your Number *" required/>
          </div>
          <div class="col-md-12 form-group">
            <input name="subject" type="text" placeholder="Subject *" required/>
          </div>
          <div class="col-md-12 form-group">
            <textarea name="message" cols="30" rows="4" placeholder="Message*" required></textarea>
          </div>
          <div class="col-md-12">
            <input name="submit" type="submit" value="Send Message" />
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</section>

@endsection
