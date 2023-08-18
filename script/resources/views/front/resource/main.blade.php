<!DOCTYPE html>
<html lang="en">
@include('front.resource.head')
<body style=" background-image: url('{{ asset('assets/front/img/logo-bg.png') }}'); background-repeat: repeat; background-size: auto 5rem;" >
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
      <div id="preloader-status">
        <div class="preloader-position loader"><span></span></div>
      </div>
    </div>
    <!-- Smoke Preloader -->
    <div class="cd-transition-layer visible opening">
      <div class="bg-layer"></div>
    </div>
    <!-- Cursor -->
    <div class="cursor js-cursor"></div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
      <svg
        class="progress-circle svg-content"
        width="100%"
        height="100%"
        viewBox="-1 -1 102 102"
      >
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>
    <header class="main-header style-two">
        {{-- @include('frontend.resource.top-head') --}}
        @include('front.resource.menu')
    </header>
        @yield('content')
        @include('front.resource.footer')
        <script src="jquery-3.6.1.min.js"></script>
        @include('sweetalert::alert')
        <audio autoplay loop>
            <source src="{{url('assets/front/music/bg-tone.mp3')}}" type="audio/mpeg" />
            Your browser does not support the audio element.
        </audio>
</body>

</html>
