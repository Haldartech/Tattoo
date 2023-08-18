<?php
$status = request()->segment(2);
?>
<div class="aside-menu flex-column-fluid">
  <!--begin::Aside Menu-->
  <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
    <!--begin::Menu-->
    <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">

    {{-- ENTRY MANAGER --}}
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{($status=='paydone-list-entry' || $status=='paydue-list-entry' || $status=='add-entry' || $status=='paydue-edit-entry' ||$status=='paydone-edit-entry')?'here show':''}}">
        <span class="menu-link">
          <span class="menu-icon">
            <i class="fa-solid fa-flag"></i>
          </span>
        <span class="menu-title">ENTRY MANAGER</span>
            <span class="menu-arrow"></span>
        </span>

        <div class="menu-sub menu-sub-accordion menu-active-bg">

            {{-- Add Entry --}}
            <div class="menu-item">
                <a class="menu-link {{($status=='add-entry')?'active':''}}" href="{{url("/admin/add-entry")}}">
                <span class="menu-bullet">
                    <i class="fa-solid fa-circle-plus"></i>
                </span>
                <span class="menu-title"> Add Entry </span>
                </a>
            </div>

            {{-- Pay Done List Entry --}}
            <div class="menu-item">
                <a class="menu-link {{($status=='paydone-list-entry' || $status=='paydone-edit-entry')?'active':''}}" href="{{url("/admin/paydone-list-entry")}}">
                  <span class="menu-bullet">
                    <i class="fa-solid fa-list"></i>
                  </span>
                  <span class="menu-title"> Pay Done List </span>
                </a>
            </div>

            {{-- Pay Due List Entry --}}
            <div class="menu-item">
                <a class="menu-link {{($status=='paydue-list-entry' || $status=='paydue-edit-entry')?'active':''}}" href="{{url("/admin/paydue-list-entry")}}">
                  <span class="menu-bullet">
                    <i class="fa-solid fa-list"></i>
                  </span>
                  <span class="menu-title"> Pay Due List </span>
                </a>
            </div>

        </div>
    </div>


    {{-- BANNER MANAGER --}}
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{($status=='list-banner' || $status=='add-banner' || $status=='edit-banner' || $status=='list-bannertitle' || $status=='add-bannertitle' || $status=='edit-bannertitle')?'here show':''}}">
        <span class="menu-link">
          <span class="menu-icon">
            <i class="fa-solid fa-flag"></i>
          </span>
        <span class="menu-title">BANNER MANAGER</span>
            <span class="menu-arrow"></span>
        </span>

        <div class="menu-sub menu-sub-accordion menu-active-bg">

            {{-- BANNER --}}
            <div class="menu-item">
                <a class="menu-link {{($status=='list-banner' || $status=='add-banner' || $status=='edit-banner')?'active':''}}" href="{{url("/admin/list-banner")}}">
                  <span class="menu-bullet">
                    <i class="fa-solid fa-images"></i>
                  </span>
                  <span class="menu-title"> Banner </span>
                </a>
            </div>

            {{-- BANNER --}}
            <div class="menu-item">
                <a class="menu-link {{($status=='list-bannertitle' || $status=='add-bannertitle' || $status=='edit-bannertitle')?'active':''}}" href="{{url("/admin/list-bannertitle")}}">
                  <span class="menu-bullet">
                    <i class="fa-solid fa-images"></i>
                  </span>
                  <span class="menu-title"> Banner Title </span>
                </a>
            </div>

        </div>
    </div>

    {{-- PAGES MANAGER --}}
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{($status=='list-pages' || $status=='add-pages' || $status=='edit-pages')?'here show':''}}">
        <span class="menu-link">
          <span class="menu-icon">
            <i class="fa fa-file-text"></i>
          </span>
        <span class="menu-title">PAGES MANAGER</span>
            <span class="menu-arrow"></span>
        </span>

        <div class="menu-sub menu-sub-accordion menu-active-bg">

            {{-- Pages --}}
            <div class="menu-item">
                <a class="menu-link {{($status=='list-pages' || $status=='add-pages' || $status=='edit-pages')?'active':''}}" href="{{url("/admin/list-pages")}}">
                  <span class="menu-bullet">
                    <i class="fa fa-file-text-o"></i>
                  </span>
                  <span class="menu-title"> Page </span>
                </a>
            </div>

        </div>
    </div>

    {{-- APPOINTEMENT MANAGER --}}
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{($status=='list-appointment' || $status=='add-appointment' || $status=='edit-appointment' || $status=='list-app' || $status=='add-app' || $status=='edit-app')?'here show':''}}">
        <span class="menu-link">
          <span class="menu-icon">
            <i class="fa-solid fa-flag"></i>
          </span>
        <span class="menu-title">APPOINTEMENT</span>
            <span class="menu-arrow"></span>
        </span>

        <div class="menu-sub menu-sub-accordion menu-active-bg">

        {{-- Appointment --}}
        <div class="menu-item">
            <a class="menu-link {{($status=='list-appointment' || $status=='add-appointment' || $status=='edit-appointment')?'active':''}}" href="{{url("/admin/list-appointment")}}">
              <span class="menu-bullet">
                <i class="fa-solid fa-list"></i>
              </span>
              <span class="menu-title"> Appointment List </span>
            </a>
        </div>

        {{-- Appointment --}}
        <div class="menu-item">
            <a class="menu-link {{($status=='list-app' || $status=='add-app' || $status=='edit-app')?'active':''}}" href="{{url("/admin/list-app")}}">
              <span class="menu-bullet">
                <i class="fa-solid fa-wrench"></i>
              </span>
              <span class="menu-title"> Service & Artist </span>
            </a>
        </div>

             </div>
        </div>

    {{-- GALLERY MANAGER --}}
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{($status=='list-gallery' || $status=='add-gallery' || $status=='edit-gallery' || $status=='list-subgallery' || $status=='add-subgallery' || $status=='edit-subgallery')?'here show':''}}">
        <span class="menu-link">
          <span class="menu-icon">
            <i class="fa-solid fa-image"></i>
          </span>
        <span class="menu-title">GALLERY MANAGER</span>
            <span class="menu-arrow"></span>
        </span>

        <div class="menu-sub menu-sub-accordion menu-active-bg">

            {{-- Gallery --}}
            <div class="menu-item">
                <a class="menu-link {{($status=='list-gallery' || $status=='add-gallery' || $status=='edit-gallery')?'active':''}}" href="{{url("/admin/list-gallery")}}">
                  <span class="menu-bullet">
                    <i class="fa-solid fa-images"></i>
                  </span>
                  <span class="menu-title"> Gallery </span>
                </a>
            </div>

            {{-- Subgallery --}}
            <div class="menu-item">
                <a class="menu-link {{($status=='list-subgallery' || $status=='add-subgallery' || $status=='edit-subgallery')?'active':''}}" href="{{url("/admin/list-subgallery")}}">
                  <span class="menu-bullet">
                    <i class="fa-solid fa-images"></i>
                  </span>
                  <span class="menu-title"> Subgallery </span>
                </a>
            </div>

        </div>
    </div>

    {{-- PORTFOLIO MANAGER --}}
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{($status=='list-portfolioimg' || $status=='add-portfolioimg' || $status=='edit-portfolioimg' || $status=='list-portfoliovid' || $status=='add-portfoliovid' || $status=='edit-portfoliovid')?'here show':''}}">
        <span class="menu-link">
          <span class="menu-icon">
            <i class="fa-solid fa-image"></i>
          </span>
        <span class="menu-title">PORTFOLIO MANAGER</span>
            <span class="menu-arrow"></span>
        </span>

        <div class="menu-sub menu-sub-accordion menu-active-bg">

            {{-- Portfolio Image --}}
            <div class="menu-item">
                <a class="menu-link {{($status=='list-portfolioimg' || $status=='add-portfolioimg' || $status=='edit-portfolioimg')?'active':''}}" href="{{url("/admin/list-portfolioimg")}}">
                  <span class="menu-bullet">
                    <i class="fa-solid fa-images"></i>
                  </span>
                  <span class="menu-title"> Portfolio Image </span>
                </a>
            </div>

            {{-- Portfolio Video --}}
            <div class="menu-item">
                <a class="menu-link {{($status=='list-portfoliovid' || $status=='add-portfoliovid' || $status=='edit-portfoliovid')?'active':''}}" href="{{url("/admin/list-portfoliovid")}}">
                  <span class="menu-bullet">
                    <i class="fa-solid fa-images"></i>
                  </span>
                  <span class="menu-title"> Portfolio Video </span>
                </a>
            </div>

        </div>
    </div>

    {{-- About --}}
    <div class="menu-item">
        <a class="menu-link {{($status=='list-about' || $status=='add-about' || $status=='edit-about')?'active':''}}" href="{{url("/admin/list-about")}}">
          <span class="menu-icon">
            <i class="fa-solid fa-address-card"></i>
          </span>
          <span class="menu-title"> About </span>
        </a>
    </div>

    {{-- Process --}}
    <div class="menu-item">
        <a class="menu-link {{($status=='list-process' || $status=='add-process' || $status=='edit-process')?'active':''}}" href="{{url("/admin/list-process")}}">
          <span class="menu-icon">
            <i class="fa-solid fa-spinner fa-spin fa-spin"></i>
          </span>
          <span class="menu-title"> Process </span>
        </a>
    </div>

    {{-- Pricing --}}
    {{-- <div class="menu-item">
        <a class="menu-link {{($status=='list-pricing' || $status=='add-pricing' || $status=='edit-pricing')?'active':''}}" href="{{url("/admin/list-pricing")}}">
          <span class="menu-icon">
            <i class="fa-solid fa-dollar-sign"></i>
          </span>
          <span class="menu-title"> Pricing </span>
        </a>
    </div> --}}

    {{-- Team --}}
    <div class="menu-item">
        <a class="menu-link {{($status=='list-team' || $status=='add-team' || $status=='edit-team')?'active':''}}" href="{{url("/admin/list-team")}}">
          <span class="menu-icon">
            <i class="fa-solid fa-people-group"></i>
          </span>
          <span class="menu-title"> Team </span>
        </a>
    </div>

    {{-- Aftercare --}}
    <div class="menu-item">
        <a class="menu-link {{($status=='list-aftercare' || $status=='add-aftercare' || $status=='edit-aftercare')?'active':''}}" href="{{url("/admin/list-aftercare")}}">
          <span class="menu-icon">
            <i class="fa-solid fa-hand-holding-hand"></i>
          </span>
          <span class="menu-title"> Aftercare </span>
        </a>
    </div>

    {{-- Faq --}}
    {{-- <div class="menu-item">
        <a class="menu-link {{($status=='list-faq' || $status=='add-faq' || $status=='edit-faq')?'active':''}}" href="{{url("/admin/list-faq")}}">
          <span class="menu-icon">
            <i class="fa-solid fa-circle-question"></i>
          </span>
          <span class="menu-title"> Faq </span>
        </a>
    </div> --}}

    {{-- Service --}}
    <div class="menu-item">
        <a class="menu-link {{($status=='list-service' || $status=='add-service' || $status=='edit-service')?'active':''}}" href="{{url("/admin/list-service")}}">
          <span class="menu-icon">
            <i class="fa-solid fa-headset"></i>
          </span>
          <span class="menu-title"> Service </span>
        </a>
    </div>

    {{-- Blog --}}
    <div class="menu-item">
        <a class="menu-link {{($status=='list-blog' || $status=='add-blog' || $status=='edit-blog')?'active':''}}" href="{{url("/admin/list-blog")}}">
          <span class="menu-icon">
            <i class="fa-solid fa-blog"></i>
          </span>
          <span class="menu-title"> Blog </span>
        </a>
    </div>

    {{-- Client --}}
    <div class="menu-item">
        <a class="menu-link {{($status=='list-client' || $status=='add-client' || $status=='edit-client')?'active':''}}" href="{{url("/admin/list-client")}}">
          <span class="menu-icon">
            <i class="fa-solid fa-user"></i>
          </span>
          <span class="menu-title"> Client </span>
        </a>
    </div>

    {{-- Testimonial --}}
    <div class="menu-item">
        <a class="menu-link {{($status=='list-testimonial' || $status=='add-testimonial' || $status=='edit-testimonial')?'active':''}}" href="{{url("/admin/list-testimonial")}}">
            <span class="menu-icon">
            <i class="fa-solid fa-quote-left"></i>
            </span>
            <span class="menu-title"> Testimonial </span>
        </a>
    </div>

{{-- CONTACT MANAGER --}}
<div data-kt-menu-trigger="click" class="menu-item menu-accordion {{($status=='contact_list' || $status=='list-contactdtl' || $status=='add-contactdtl' || $status=='edit-contactdtl')?'here show':''}}">
    <span class="menu-link">
      <span class="menu-icon">
        <i class="fa-solid fa-flag"></i>
      </span>
    <span class="menu-title">CONTACT MANAGER</span>
        <span class="menu-arrow"></span>
    </span>

    <div class="menu-sub menu-sub-accordion menu-active-bg">

        {{-- Contact List --}}
        <div class="menu-item">
            <a class="menu-link {{($status=='contact_list')?'active':''}}" href="{{url("/admin/contact_list")}}">
            <span class="menu-bullet">
                <i class="fa-solid fa-phone-volume"></i>
            </span>
            <span class="menu-title"> List Contact </span>
            </a>
        </div>

        {{-- Contact details --}}
        <div class="menu-item">
            <a class="menu-link {{($status=='list-contactdtl' || $status=='add-contactdtl' || $status=='edit-contactdtl')?'active':''}}" href="{{url("/admin/list-contactdtl")}}">
            <span class="menu-bullet">
                <i class="fa-solid fa-phone-volume"></i>
            </span>
            <span class="menu-title"> Contact Content </span>
            </a>
        </div>

    </div>
</div>


    {{-- Setting --}}
    <div class="menu-item">
        <a class="menu-link {{($status=='setting')?'active':''}}" href="{{url("/admin/setting")}}">
          <span class="menu-icon">
            <i class="fa-solid fa-gear"></i>
          </span>
          <span class="menu-title"> Setting </span>
        </a>
    </div>

</div>

    </div>
    <!--end::Menu-->
  </div>
  <!--end::Aside Menu-->
</div>
