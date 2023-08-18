<?php $pages = DB::table('pages')->where("id","7")->first(); ?>
@section('title', $pages->title)
@extends('front.resource.main')
@section('content')

<section
class="banner-header section-padding valign bg-img bg-fixed"
data-overlay-dark="2"
data-background="{{url('public/images/pages_manager/'.$pages->p_image)}}"
>
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-left caption mt-90">
            <h5 class="animate-box" data-animate-effect="fadeInUp">
              <a href="{{url('/')}}">Home</a> / @yield('title')
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
    <!-- Blog -->

    <section class="blog2 section-padding bg-blck">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">

                <?php
                // require '/script/vendor/autoload.php';
                $banners = DB::table("blogs")
                ->where(function($query) use($request){
                  if(!empty($request->search)) $query->whereRaw("blog_title LIKE '%".$request->search."%'");
                  })
                ->orderBy("id","desc")->get();
                foreach ($banners as $banner) {
                    //$date = Carbon::parse($banner);
                ?>

              <div class="col-md-12">
                <div class="item">
                  <div class="post-img">
                    <a href="{{url('b/'.$banner->slug)}}">
                      <img src="{{url('public/images/blog/'.$banner->blog_image)}}" alt="" />
                    </a>
                    <div class="date">
                      <a href="{{url('b/'.$banner->slug)}}"> <span>{{date('F', strtotime($banner->date))}}</span> <i>{{date('d', strtotime($banner->date))}}</i> </a>
                    </div>
                  </div>
                  <div class="post-cont">
                    <a href="blog.html"><span class="tag">Blog</span></a>
                    <h5><a href="{{url('b/'.$banner->slug)}}">{{$banner->blog_title}}</a></h5>
                    <p> <?php echo $banner->shrt_desc ?> </p>
                    <a href="{{url('b/'.$banner->slug)}}" class="btn-curve btn-1"
                      ><span>Read More</span></a>
                  </div>
                </div>
              </div>

              <?php } ?>

              <?php

            ?>

              {{-- <div class="col-md-12">
                <!-- Pagination -->
                <ul class="pagination-wrap align-center mb-30 mt-30">
                  <li>
                    <a href="blog.html#"><i class="ti-angle-left"></i></a>
                  </li>
                  <li><a href="blog.html#">1</a></li>
                  <li><a href="blog.html#" class="active">2</a></li>
                  <li><a href="blog.html#">3</a></li>
                  <li>
                    <a href="blog.html#"><i class="ti-angle-right"></i></a>
                  </li>
                </ul>
              </div> --}}

            </div>
          </div>
          <div class="col-md-4">
            <div class="blog2-sidebar row">
              <div class="col-md-12">
                <div class="widget search">
                  <form action="">
                    <input type="text" name="search" placeholder="Type here ..." />
                    <button type="submit">
                      <i class="ti-search" aria-hidden="true"></i>
                    </button>
                  </form>
                  <?php
              ?>
                </div>
              </div>
              <div class="col-md-12">
                <div class="widget">
                  <div class="widget-title">
                    <h6>Recent Posts</h6>
                  </div>
                  <ul class="recent">
                    <?php $banners = DB::table("blogs")->orderBy("id","desc")->take(3)->get();
                    foreach ($banners as $banner) {
                    ?>
                    <li>
                      <div class="thum">
                        <img src="{{url('public/images/blog/'.$banner->blog_image)}}" alt="" />
                      </div>
                      <a href="{{url('b/'.$banner->slug)}}">{{$banner->blog_title}}</a>
                    </li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
              <div class="col-md-12">
                <div class="widget">
                  <div class="widget-title">
                    <h6>Archives</h6>
                  </div>
                  <?php $archives = DB::table('categories')->orderBy("id","desc")->get(); ?>
                  <ul>
                    @foreach ($archives as $arch)
                    <li><a href="{{ url('/gallerysearchimage') }}?date=<?php echo date('Y', strtotime($arch->date)) ?>">{{ date('F', strtotime($arch->date)) }} {{ date('Y', strtotime($arch->date)) }}</a></li>
                    @endforeach
                  </ul>
                </div>
              </div>
              <div class="col-md-12">
                <div class="widget">
                  <div class="widget-title">
                    <h6>Categories</h6>
                  </div>
                  <ul>
                    <?php $category = DB::table('categories')->orderBy("title","asc")->get(); ?>
                    @foreach ($category as $cat)
                    <li>
                      <a href="{{ url('/gallerysearchimage') }}?title=<?php echo $cat->title; ?>"><i class="ti-angle-right"></i>{{$cat->title}}</a>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
              {{-- <div class="col-md-12">
                <div class="widget">
                  <div class="widget-title">
                    <h6>Tags</h6>
                  </div> --}}

                  <?php
// $tags = DB::table('galleries')->orderBy("tag", "desc")->get();
// $objects = [];

// foreach ($tags as $tag) {
//     $arrval = json_decode($tag->tag, true);
//     if (is_array($arrval)) {
//         $cut = count($arrval);
//         for ($i = 0; $i < $cut; $i++) {
//             if (is_array($arrval[$i])) {
//                 $objects[] = implode(', ', $arrval[$i]); // Add a space after the comma
//             } else {
//                 $objects[] = $arrval[$i];
//             }
//         }
//     }
// }
?>

{{-- <ul class="tags"> --}}
    <?php //foreach ($objects as $obj) : ?>
        <?php
        // $result = explode(", ", $obj); // Split by ", " instead of " "
        // $count = count($result);
        // for ($i = 0; $i < $count; $i++) {
        //     $text = str_replace(',', '', $result[$i]);
        //     $encodedTag = urlencode($result[$i]); // Encode the URL parameter
        //     echo '<li><a href="' . url('/gallerysearchimage') . '?tag=' .  $encodedTag . '">' . $text . '</a></li>';
        // }
        ?>
    <?php //endforeach; ?>
{{-- </ul> --}}



                 </div>
              </div>
           {{-- </div>
          </div>
        </div>
      </div>
    </section> --}}


@endsection
