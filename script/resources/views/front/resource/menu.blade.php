<?php
$settings = DB::table('settings')->where("id","1")->first();
$page1 = request()->segment(1);
?>

<!-- Navbar -->
<nav class="navbar navbar-expand-md">
    <div class="container">
      <!-- Logo -->
      <div class="logo-wrapper">
        <div id="navbar-logo">
          <a class="logo" href="{{url("/")}}">
            <img src="{{url("public/images/logo/".$settings->logo)}}" class="logo-img" alt="img" style="height: 4rem; width: 4rem; margin-right: 1rem" />
          </a>
          <a class="logo" href="{{url("/")}}">
            <h2>{{$settings->title}} <span class="text-white">{{$settings->subtitle}}</span></h2>
          </a>
        </div>
      </div>
      <!-- Button -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="ti-menu"></i></span>
      </button>
      <!-- Menu -->
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{($page1=='')?'active':''}}" href="{{url("/")}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($page1=='about')?'active':''}}" href="{{url("/about")}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($page1=='service')?'active':''}}" href="{{url("/service")}}">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($page1=='portfolio')?'active':''}}" href="{{url("/portfolio")}}">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($page1=='gallery')?'active':''}}" href="{{url("/gallery")}}">Gallery</a>
          </li>
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{($page1=='pricing' || $page1=='team' || $page1=='faq' || $page1=='aftercare')?'active':''}}" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"> Artist <i class="ti-angle-down"> </i>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="{{url("/team")}}" class="dropdown-item {{($page1=='team')?'active':''}}">
                  <span>Team</span></a>
              </li>
              <li>
               <a href="{{url("/aftercare")}}" class="dropdown-item {{($page1=='aftercare')?'active':''}}"><span>Aftercare</span></a>
              </li>
            </ul>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link {{($page1=='team')?'active':''}}" href="{{url("/team")}}">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($page1=='aftercare')?'active':''}}" href="{{url("/aftercare")}}">Aftercare</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($page1=='blog')?'active':''}}" href="{{url("/blog")}}">Blog</a>
          </li>
          <li class="nav-item" style="margin-right: -5px;">
            <a class="nav-link {{($page1=='contact')?'active':''}}" href="{{url("/contact")}}">Contact</a>
          </li>
          <li class="nav-item" style="margin-right: -10px;">
            <a class="nav-link" href="{{$settings->insta}}"><i class="ti-instagram"></i></a>
          </li>
          <li class="nav-item" style="margin-right: -10px;">
            <a class="nav-link" href="{{$settings->twitter}}"><i class="ti-twitter"></i></a>
          </li>
          <li class="nav-item" style="margin-right: -10px;">
            <a class="nav-link" href="{{$settings->youtube}}"><i class="ti-youtube"></i></a>
          </li>
          <li class="nav-item" style="margin-right: -10px;">
            <a class="nav-link" href="{{$settings->facebook}}"><i class="ti-facebook"></i></a>
          </li>
          <li class="nav-item" style="margin-right: -10px;">
            <a class="nav-link" href="{{$settings->pinterest}}"><i class="ti-pinterest"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- main-header end -->
