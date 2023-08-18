<!-- Required meta tags -->
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!-- bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<!-- fancybox -->
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css'>
<!-- font-awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- JS Links -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Mixitup -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.2.2/mixitup.min.js'></script>
<!-- fancybox -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js'></script>
<!-- font family -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700&amp;family=Oswald:wght@300;400;500;600;700&amp;display=swap"/>

<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@300;400;500;700;900&amp;display=swap">
<link rel="stylesheet" href="{{url('assets/front/css/plugins.css')}}" />
<link rel="stylesheet" href="{{url('assets/front/css/style.css')}}" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

{{-- script tag --}}
<script type="text/javascript" src="{{url('assets/vendor/sweetalert/sweetalert.all.js')}}"></script>
<!-- jQuery -->
<script src="{{url('assets/front/js/jquery-3.6.3.min.js')}}"></script>
<script src="{{url('assets/front/js/jquery-migrate-3.0.0.min.js')}}"></script>
<script src="{{url('assets/front/js/modernizr-2.6.2.min.js')}}"></script>
<script src="{{url('assets/front/js/popper.min.js')}}"></script>
<script src="{{url('assets/front/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets/front/js/scrollIt.min.js')}}"></script>
<script src="{{url('assets/front/js/jquery.waypoints.min.js')}}"></script>
<script src="{{url('assets/front/js/owl.carousel.min.js')}}"></script>
<script src="{{url('assets/front/js/jquery.stellar.min.js')}}"></script>
<script src="{{url('assets/front/js/jquery.magnific-popup.js')}}"></script>
<script src="{{url('assets/front/js/YouTubePopUp.js')}}"></script>
<script src="{{url('assets/front/js/select2.js')}}"></script>
<script src="{{url('assets/front/js/datepicker.js')}}"></script>
<script src="{{url('assets/front/js/vegas.slider.min.js')}}"></script>
<script src="{{url('assets/front/js/custom.js')}}"></script>

<script>
var containerEl = document.querySelector(".portfolio-item");
var mixer = mixitup(containerEl, {
animation: {
  effects: "fade translateZ(-100px)",
  effectsIn: "fade translateY(-100%)",
  easing: "cubic-bezier(0.645, 0.045, 0.355, 1)"
}
});
$("[data-fancybox]").fancybox({
loop: true,
hash: true,
transitionEffect: "slide",
clickContent: function(current, event) {
  return current.type === "image" ? "next" : false;
}
});
</script>

<title>{{'Tattoo'}} || @yield('title')</title>
