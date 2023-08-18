<?php $pages = DB::table('pages')->where("id","7")->first(); ?>
@section('title', $blog_dtls->blog_title)
@extends('front.resource.main')
@section('content')

<!-- Header Banner -->
<section
class="banner-header section-padding valign bg-img bg-fixed"
data-overlay-dark="2"
data-background="{{url('public/images/pages_manager/'.$pages->p_image)}}"
>
<div class="container">
  <div class="row">
    <div class="col-md-8 text-left caption mt-90">
      <h5 class="animate-box" data-animate-effect="fadeInUp">
        <a href="{{url('/')}}">Home</a> / @yield('title')
      </h5>
      <h1 class="animate-box" data-animate-effect="fadeInUp">
        @yield('title')
      </h1>
      <hr class="animate-box" data-animate-effect="fadeInUp" />
      <p class="animate-box" data-animate-effect="fadeInUp">
        Quisque pretium fermentum quam, sit amet cursus ante sollicitudin
        vel. Morbi consequat risus consequat, porttitor orci sit amet,
        iaculis nisl. Integer quis sapien nec elit ultrices euismod sit
        amet id lacus.
      </p>
    </div>
  </div>
</div>
</section>
<!-- hr -->
<hr class="line-vr-section" />
<!-- Post -->
<section class="section-padding">
<div class="container">
  <div class="row">
    <div class="col-md-12 mb-15">
      <p class="mb-30">
        <?php echo $blog_dtls->long_desc ?>
      </p>
      <img src="{{url('public/images/blog/'.$blog_dtls->blog_image)}}" class="mb-30" alt="" />
    </div>

    @foreach ($blog_imgs as $blog_img)
    <div class="col-md-6">
        <img src="{{url('public/images/blogmul/'.$blog_img->blog_mul_image)}}" class="mb-30" alt="" />
    </div>
    @endforeach

  </div>


  {{-- <div class="artefact-comment-section">
    <div class="row">
      <!-- Comment -->
      <div class="col-md-6">
        <div class="artefact-post-comment-wrap">
          <div class="artefact-user-comment">
            <img src="img/team/1.jpg" alt="" />
          </div>
          <div class="artefact-user-content">
            <h6>Robert Misse<span> 29 October 2023</span></h6>
            <p>
              Photography ultricies nibh non dolor maximus scee the inte
              molliser faubs neque nec tincidunte aliquam erat volutpat.
              Praeser tem malade.
            </p>
            <a class="artefact-repay" href="#"
              >Reply<i class="ti-back-left"></i
            ></a>
          </div>
        </div>
      </div>
      <!-- Contact Form -->
      <div class="col-md-5 offset-md-1">
        <h6>Leave a Reply</h6>
        <form
          method="post"
          class="contact__form"
          action="https://duruthemes.com/demo/html/artefact/multipage-dark-slideshow/mail.php"
        >
          <!-- Form message -->
          <div class="row">
            <div class="col-12">
              <div
                class="alert alert-success contact__msg"
                style="display: none"
                role="alert"
              >
                Your message was sent successfully.
              </div>
            </div>
          </div>
          <!-- Form elements -->
          <div class="row">
            <div class="col-md-12 form-group">
              <input
                name="name"
                type="text"
                placeholder="Full Name *"
                required
              />
            </div>
            <div class="col-md-12 form-group">
              <input
                name="email"
                type="email"
                placeholder="Email Address *"
                required
              />
            </div>
            <div class="col-md-12 form-group">
              <textarea
                name="message"
                id="message"
                cols="30"
                rows="4"
                placeholder="Your Comment *"
                required
              ></textarea>
            </div>
            <div class="col-md-12">
              <input name="submit" type="submit" value="Send Comment" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div> --}}


</div>
</section>
<!-- Prev-Next Post -->
<section class="artefact-post-prev-next">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="d-sm-flex align-items-center justify-content-between">
        <div class="artefact-post-prev-next-left">
            <?php $prv = DB::table('blogs')->where('slug', '<', $blog_dtls->slug)->max('slug');  ?>
            @if(!empty($prv))
            <a href="{{url('b/'.$prv)}}">
            <i class="ti-arrow-left"></i> Previous Post</a>
            @endif
        </div>
        <a href="{{url('/blog')}}"><i class="ti-layout-grid3-alt"></i></a>
        <div class="artefact-post-prev-next-right">
            <?php $nxt = DB::table('blogs')->where('slug', '>', $blog_dtls->slug)->max('slug');  ?>
            @if(!empty($nxt))
            <a href="{{url('b/'.$nxt)}}">
            Next Post <i class="ti-arrow-right"></i></a>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
</section>


@endsection
