<?php $pages = DB::table('pages')->where("id","4")->first(); ?>
@section('title', $team_dtls->name)
@extends('front.resource.main')
@section('content')
<style>
    .desc ul li::before{
        content: "\2714";
        color:#904d30;
        padding-right: 20px;
    }
</style>
 <!-- Header Banner -->
 <section
 class="banner-header section-padding valign bg-img bg-fixed"
 data-overlay-dark="2"
 data-background="{{url('public/images/pages_manager/'.$pages->p_image)}}"
>
 <div class="container">
   <div class="row">
     <div class="col-md-6 caption mt-90">
       <h5 class="animate-box" data-animate-effect="fadeInUp">
         <a href="{{url('/')}}">Home</a> / @yield("title")
       </h5>
       <h1 class="animate-box" data-animate-effect="fadeInUp">
         {{$team_dtls->name}}
       </h1>
       <hr class="animate-box" data-animate-effect="fadeInUp" />
       <p class="animate-box" data-animate-effect="fadeInUp">
         Lorem arena nuam enim mi obortis esen the uctus accumsan golden
         isuame amen auctor orci done vitae vehicula risus duise nun sapien
         asuam.
       </p>
     </div>
   </div>
 </div>
</section>
<!-- hr -->
<hr class="line-vr-section" />
<!-- Team -->
<section class="team section-padding">
 <div class="container">
   <div class="row">
     <div class="col-md-12 mb-60 desc">
       <div class="item right">
         <figure>
           <img src="{{url("public/images/team/".$team_dtls->image)}}" alt="" class="img-fluid" />
         </figure>
         <div class="caption padding-left">
           <div class="name">{{$team_dtls->name}}</div>
           <div class="subname">{{$team_dtls->designation}}</div>
           <p>
             <?php echo $team_dtls->desc ?>
           </p>
           <p class="mb-0">
             <span class="white">Email:</span>
             <a href="mailto:{{$team_dtls->email}}">{{$team_dtls->email}}</a>
           </p>
           <p>
             <span class="white">Phone:</span>
             <a href="tel:{{$team_dtls->phone}}">{{$team_dtls->phone}}</a>
           </p>
           <div class="social-list">
             <a href="{{$team_dtls->insta}}"><i class="ti-instagram"></i></a>
             <a href="{{$team_dtls->twitter}}"><i class="ti-twitter"></i></a>
             <a href="{{$team_dtls->youtube}}"><i class="ti-youtube"></i></a>
             <a href="{{$team_dtls->facebook}}"><i class="ti-facebook"></i></a>
           </div>
         </div>
       </div>
     </div>
   </div>
   <div class="row">
     <div class="col-md-12 desc">
       <h2>About Me</h2>
       <p>
        <?php echo $team_dtls->about_me; ?>
       </p>
     </div>
   </div>
 </div>
</section>
<!-- Latest Work Gallery -->
<section class="gallery section-padding bg-blck">
 <div class="container">
   <div class="row">
     <div class="col-md-12">
       <h2>Latest Works</h2>
     </div>
     <div class="col-md-12">
       <div class="owl-carousel owl-theme">

        @foreach ($team_imgs as $team_img)

        <a href="{{url("public/images/team_work/".$team_img->team_work_image)}}" title="" class="img-zoom">
         <div class="gallery-item">
             <div class="gallery-box">
               <div class="gallery-img">
                 <img
                   src="{{url("public/images/team_work/".$team_img->team_work_image)}}"
                   class="img-fluid mx-auto d-block"
                   alt="work-img"
                 />
               </div>
             </div>
         </div>
        </a>

         @endforeach

       </div>
     </div>
   </div>
 </div>
</section>

@endsection
