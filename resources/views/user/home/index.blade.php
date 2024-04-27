@extends('user.index')
@section('title','Trang chủ')

@section('style_page')
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/home.css')}}">
    <style>
        .col-12 {
            padding: 0;
        }
    </style>
@stop
{{--content of page--}}
@section('content')
    <div id="tbay-main-content">
        <section id="main-container" class="container" style="max-width: 1992px;padding: 0">
            <div class="row mx-0">
                <div id="main-content" class="main-page col-12">
                    <div id="main" class="site-main">
                        <div class="elementor elementor-145">
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-b3298dd elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div
                                        class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-33f3deb">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <section
                                                class="elementor-section elementor-inner-section elementor-element elementor-element-4e3b061 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div
                                                        class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3625d3c elementor-invisible">
                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                            <div
                                                                class="elementor-element elementor-element-89a5c58 elementor-widget elementor-widget-heading">
                                                                <div class="elementor-widget-container">
                                                                    <h4 class="elementor-heading-title elementor-size-default">
                                                                        Clinically Tested</h4>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-20eb3e7 elementor-widget elementor-widget-heading">
                                                                <div class="elementor-widget-container">
                                                                    <h3 class="elementor-heading-title elementor-size-default">
                                                                        Track activity, sleep & heart health—in
                                                                        style
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-60d499c elementor-widget elementor-widget-button">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-button-wrapper">
                                                                        <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                           href="" target="_blank">
                                          <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-icon elementor-align-icon-right">
                                              <i class="fa-solid fa-arrow-right"></i>
                                            </span>
                                            <span class="elementor-button-text">Buy Now</span>
                                          </span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9acc117 elementor-invisible">
                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                            <div
                                                                class="elementor-element elementor-element-f663b6e elementor-widget__width-initial elementor-mobile-position-top elementor-widget elementor-widget-tbay-feature-list-image">
                                                                <div class="elementor-widget-container">
                                                                    <div
                                                                        class="tbay-element tbay-element-feature-list-image">
                                                                        <div class="feature-list-img-wrapper">
                                                                            <div
                                                                                class="feature-image tb-effect effect-zoom-in-1">
                                                                                <img width="646" height="743"
                                                                                     src="https://sapa.thembaydev.com/wp-content/uploads/2023/06/banner-06.png"
                                                                                     class="attachment-full size-full"/>
                                                                                <noscript
                                                                                ><img width="646" height="743"
                                                                                      src="https://sapa.thembaydev.com/wp-content/uploads/2023/06/banner-06.png"
                                                                                      class="attachment-full size-full"/>
                                                                                </noscript>
                                                                            </div>
                                                                            <div class="list-items">
                                                                                <div class="item item-icon">
                                                                                    <div class="content">
                                                                                        <div
                                                                                            class="content-icon elementor-icon">
                                                                                            <i class="fa-solid fa-heart-pulse"></i>
                                                                                        </div>
                                                                                        <h3 class="content-title">
                                                                                            Heart Rate<br/>
                                                                                            Monitoring
                                                                                        </h3>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item item-icon">
                                                                                    <div class="content">
                                                                                        <div
                                                                                            class="content-icon elementor-icon">
                                                                                            <i class="fa-solid fa-person-running"></i>
                                                                                        </div>
                                                                                        <h3 class="content-title">
                                                                                            Activity <br/>Tracking
                                                                                        </h3>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item item-icon">
                                                                                    <div class="content">
                                                                                        <div
                                                                                            class="content-icon elementor-icon">
                                                                                            <i class="fa-regular fa-moon"></i>
                                                                                        </div>
                                                                                        <h3 class="content-title">
                                                                                            Sleep <br/>Monitoring
                                                                                        </h3>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item item-icon">
                                                                                    <div class="content">
                                                                                        <div
                                                                                            class="content-icon elementor-icon">
                                                                                            <i class="fa-solid fa-battery-three-quarters"></i>
                                                                                        </div>
                                                                                        <h3 class="content-title">
                                                                                            25 Day Battery <br/>Life
                                                                                        </h3>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item item-icon">
                                                                                    <div class="content">
                                                                                        <div
                                                                                            class="content-icon elementor-icon">
                                                                                            <i class="fa-solid fa-person-swimming"></i>
                                                                                        </div>
                                                                                        <h3 class="content-title">
                                                                                            Waterproof <br/>To 5 Atm
                                                                                        </h3>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-7035f9f elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div
                                        class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0ea68d2">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <section
                                                class="elementor-section elementor-inner-section elementor-element elementor-element-46edca9 elementor-section-boxed elementor-section-height-default elementor-section-height-default">
                                                <div class="elementor-container elementor-column-gap-no">
                                                    <div
                                                        class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-0dad3a5">
                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                            <section
                                                                class="elementor-section elementor-inner-section elementor-element elementor-element-4300d3b elementor-section-boxed elementor-section-height-default elementor-section-height-default">
                                                                <div
                                                                    class="elementor-container elementor-column-gap-default">
                                                                    <div
                                                                        class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-425e277 elementor-invisible">
                                                                        <div
                                                                            class="elementor-widget-wrap elementor-element-populated">
                                                                            <div
                                                                                class="elementor-element elementor-element-ea5a4ab elementor-widget elementor-widget-heading">
                                                                                <div class="elementor-widget-container">
                                                                                    <h4 class="elementor-heading-title elementor-size-default">
                                                                                        Sport monitoring
                                                                                    </h4>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="elementor-element elementor-element-5ce22cb elementor-widget__width-initial elementor-widget elementor-widget-heading">
                                                                                <div class="elementor-widget-container">
                                                                                    <h3 class="elementor-heading-title elementor-size-default">
                                                                                        What’s behind the tech
                                                                                    </h3>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="elementor-element elementor-element-4eb9612 elementor-widget elementor-widget-text-editor">
                                                                                <div class="elementor-widget-container">
                                                                                    <p>
                                                                                        Easily activate workout mode
                                                                                        right on your wrist by choosing
                                                                                        from over 30 sports. This will
                                                                                        activate a timer, continuous
                                                                                        heart rate connected GPS. Open
                                                                                        Health mate after your workout
                                                                                        to get duration, distance, and
                                                                                        your path map.
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="elementor-element elementor-element-d54682f elementor-widget elementor-widget-text-editor">
                                                                                <div class="elementor-widget-container">
                                                                                    Steel HR also features automatic
                                                                                    exercise recognition at all times
                                                                                    so you get credit for all your
                                                                                    moves. Our proprietary artificial
                                                                                    intelligence learns your specific
                                                                                    moves for each activity for even
                                                                                    more accurate &#038; personalized
                                                                                    tracking experience.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7ce5654">
                                                                        <div class="elementor-widget-wrap"></div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                            <section
                                                                class="elementor-section elementor-inner-section elementor-element elementor-element-d300f42 elementor-section-boxed elementor-section-height-default elementor-section-height-default">
                                                                <div
                                                                    class="elementor-container elementor-column-gap-default">
                                                                    <div
                                                                        class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-4096cde">
                                                                        <div
                                                                            class="elementor-widget-wrap elementor-element-populated">
                                                                            <div
                                                                                class="elementor-element elementor-element-a725544 elementor-mobile-position-top elementor-widget elementor-widget-tbay-feature-list">
                                                                                <div class="elementor-widget-container">
                                                                                    <div
                                                                                        class="tbay-element tbay-element-feature-list"
                                                                                    >
                                                                                        <div
                                                                                            class="feature-list-wrapper swiper mySwiper"
                                                                                        >
                                                                                            <div
                                                                                                class="feature-list rows-1 owl-carousel scroll-init list-items w-100 swiper-wrapper d-flex" style="flex-wrap: unset"
                                                                                            >
                                                                                                <div class="item item-icon swiper-slide">
                                                                                                    <div
                                                                                                        class="content">
                                                                                                        <div
                                                                                                            class="content-icon elementor-icon"
                                                                                                        >
                                                                                                            <i
                                                                                                                aria-hidden="true"
                                                                                                                class="tb-icon tb-icon-shuttlecock"
                                                                                                            ></i>
                                                                                                        </div>
                                                                                                        <h3
                                                                                                            class="content-title"
                                                                                                        >
                                                                                                            Badminton
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="item item-icon swiper-slide">
                                                                                                    <div
                                                                                                        class="content">
                                                                                                        <div
                                                                                                            class="content-icon elementor-icon"
                                                                                                        >
                                                                                                            <i class="fa-solid fa-baseball"></i>
                                                                                                        </div>
                                                                                                        <h3
                                                                                                            class="content-title"
                                                                                                        >
                                                                                                            Baseball
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="item item-icon swiper-slide">
                                                                                                    <div
                                                                                                        class="content">
                                                                                                        <div
                                                                                                            class="content-icon elementor-icon"
                                                                                                        >
                                                                                                            <i class="fa-solid fa-basketball"></i>
                                                                                                        </div>
                                                                                                        <h3
                                                                                                            class="content-title"
                                                                                                        >
                                                                                                            Basketball
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="item item-icon swiper-slide">
                                                                                                    <div
                                                                                                        class="content">
                                                                                                        <div
                                                                                                            class="content-icon elementor-icon"
                                                                                                        >
                                                                                                            <i class="fa-solid fa-person-biking"></i>
                                                                                                        </div>
                                                                                                        <h3
                                                                                                            class="content-title"
                                                                                                        >
                                                                                                            Bike
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="item item-icon swiper-slide">
                                                                                                    <div
                                                                                                        class="content">
                                                                                                        <div
                                                                                                            class="content-icon elementor-icon"
                                                                                                        >
                                                                                                            <i class="fa-brands fa-xbox"></i>
                                                                                                        </div>
                                                                                                        <h3
                                                                                                            class="content-title"
                                                                                                        >
                                                                                                            Boxing
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="item item-icon swiper-slide">
                                                                                                    <div
                                                                                                        class="content">
                                                                                                        <div
                                                                                                            class="content-icon elementor-icon"
                                                                                                        >
                                                                                                            <i class="fa-solid fa-people-robbery"></i>
                                                                                                        </div>
                                                                                                        <h3
                                                                                                            class="content-title"
                                                                                                        >
                                                                                                            Climing
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="item item-icon swiper-slide">
                                                                                                    <div
                                                                                                        class="content">
                                                                                                        <div
                                                                                                            class="content-icon elementor-icon"
                                                                                                        >
                                                                                                            <i class="fa-solid fa-dumbbell"></i>
                                                                                                        </div>
                                                                                                        <h3
                                                                                                            class="content-title"
                                                                                                        >
                                                                                                            Fitness
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-6e7547f elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default elementor-invisible"
                            >
                                <div class="elementor-container elementor-column-gap-no">
                                    <div
                                        class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7b06501"
                                    >
                                        <div
                                            class="elementor-widget-wrap elementor-element-populated"
                                        >
                                            <div
                                                class="elementor-element elementor-element-d028ae2 elementor-widget elementor-widget-video"
                                            >
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="elementor-wrapper elementor-open-lightbox"
                                                    >
                                                        <div
                                                            class="elementor-custom-embed-image-overlay"
                                                        >
                                                            <img
                                                                width="1920"
                                                                height="787"
                                                                src="https://sapa.thembaydev.com/wp-content/uploads/2023/06/bg-banner-02.jpg"
                                                                class="attachment-full size-full wp-image-5890"
                                                            />
                                                            <div
                                                                class="elementor-custom-embed-play"
                                                            >
                                                                <i class="fa-solid fa-play"></i>
                                                                <span class="elementor-screen-only"
                                                                >Play Video</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-cc203c7 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default"
                            >
                                <div class="elementor-background-overlay"></div>
                                <div
                                    class="elementor-container elementor-column-gap-default"
                                >
                                    <div
                                        class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-be9199f"
                                    >
                                        <div
                                            class="elementor-widget-wrap elementor-element-populated"
                                        >
                                            <section
                                                class="elementor-section elementor-inner-section elementor-element elementor-element-781962c elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
                                            >
                                                <div
                                                    class="elementor-container elementor-column-gap-default"
                                                >
                                                    <div
                                                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-24a591f"
                                                    >
                                                        <div class="elementor-widget-wrap"></div>
                                                    </div>
                                                    <div
                                                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-24dbe1f"
                                                    >
                                                        <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                        >
                                                            <div
                                                                class="elementor-element elementor-element-25767ce elementor-widget elementor-widget-heading"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <h4
                                                                        class="elementor-heading-title elementor-size-default"
                                                                    >
                                                                        Make it yours
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-37ff052 elementor-widget elementor-widget-heading"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <h3
                                                                        class="elementor-heading-title elementor-size-default"
                                                                    >
                                                                        Bespoke looks
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-a3759a5 elementor-widget elementor-widget-text-editor"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <p>
                                                                        Designed to provide you with the best
                                                                        experience of watching your health
                                                                        without compromising on style.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c0f303c"
                                                    >
                                                        <div class="elementor-widget-wrap"></div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section
                                                class="elementor-section elementor-inner-section elementor-element elementor-element-4f64e97 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
                                            >
                                                <div
                                                    class="elementor-container elementor-column-gap-default"
                                                >
                                                    <div
                                                        class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-c5e84db"
                                                    >
                                                        <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                        >
                                                            <div
                                                                class="elementor-element elementor-element-c9f5f4b tb-effect effect-zoom-in-1 elementor-widget elementor-widget-image"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <img
                                                                        width="1440"
                                                                        height="400"
                                                                        src="https://sapa.thembaydev.com/wp-content/uploads/2023/06/banner-01.png"
                                                                        class="attachment-full size-full wp-image-5884"/>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-88ee68f elementor-align-center elementor-widget elementor-widget-button"

                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-button-wrapper">
                                                                        <a
                                                                            class="elementor-button elementor-button-link elementor-size-sm"
                                                                            href="https://sapa.thembaydev.com/shop/"
                                                                            target="_blank"
                                                                        >
                                          <span
                                              class="elementor-button-content-wrapper"
                                          >
                                            <span
                                                class="elementor-button-icon elementor-align-icon-right"
                                            >
                                             <i class="fa-solid fa-arrow-right"></i>
                                            </span>
                                            <span class="elementor-button-text"
                                            >Shop Now</span
                                            >
                                          </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-67519de align-center elementor-widget elementor-widget-tbay-testimonials-tab"
                                                                data-id="67519de" data-element_type="widget"
                                                                data-widget_type="tbay-testimonials-tab.default">
                                                                <div class="elementor-widget-container">

                                                                    <div
                                                                        class="tbay-element tbay-element-testimonials-tab">


                                                                        <div class="tab-testimonials-wrapper">

                                                                            <div
                                                                                class="nav nav-tabs nav-testimonials-title"
                                                                                id="tab-nav-testimonials-67519de"
                                                                                role="tablist">

                                                                                <button class="nav-link active"
                                                                                        id="nav-tab-67519de-4b6d3f0"
                                                                                        data-bs-toggle="tab"
                                                                                        data-bs-target="#nav-67519de-4b6d3f0"
                                                                                        type="button" role="tab"
                                                                                        aria-controls="nav-67519de-4b6d3f0"
                                                                                        aria-selected="true"><span
                                                                                        class="name">Tech Advisor</span>
                                                                                </button>


                                                                                <button class="nav-link"
                                                                                        id="nav-tab-67519de-ddc5d5e"
                                                                                        data-bs-toggle="tab"
                                                                                        data-bs-target="#nav-67519de-ddc5d5e"
                                                                                        type="button" role="tab"
                                                                                        aria-controls="nav-67519de-ddc5d5e"
                                                                                        aria-selected="false"><span
                                                                                        class="name">The Guardian</span>
                                                                                </button>


                                                                                <button class="nav-link"
                                                                                        id="nav-tab-67519de-07754d2"
                                                                                        data-bs-toggle="tab"
                                                                                        data-bs-target="#nav-67519de-07754d2"
                                                                                        type="button" role="tab"
                                                                                        aria-controls="nav-67519de-07754d2"
                                                                                        aria-selected="false"><span
                                                                                        class="name">Gearbrain</span>
                                                                                </button>


                                                                                <button class="nav-link"
                                                                                        id="nav-tab-67519de-d6ca83f"
                                                                                        data-bs-toggle="tab"
                                                                                        data-bs-target="#nav-67519de-d6ca83f"
                                                                                        type="button" role="tab"
                                                                                        aria-controls="nav-67519de-d6ca83f"
                                                                                        aria-selected="false"><span
                                                                                        class="name">Women Love Tech</span>
                                                                                </button>


                                                                                <button class="nav-link"
                                                                                        id="nav-tab-67519de-6f4eed2"
                                                                                        data-bs-toggle="tab"
                                                                                        data-bs-target="#nav-67519de-6f4eed2"
                                                                                        type="button" role="tab"
                                                                                        aria-controls="nav-67519de-6f4eed2"
                                                                                        aria-selected="false"><span
                                                                                        class="name">Science Focus</span>
                                                                                </button>

                                                                            </div>
                                                                            <div
                                                                                class="tab-content nav-testimonials-content"
                                                                                id="nav-content-testimonials-67519de">

                                                                                <div class="tab-pane fade active show"
                                                                                     id="nav-67519de-4b6d3f0"
                                                                                     role="tabpanel"
                                                                                     aria-labelledby="nav-tab-67519de-4b6d3f0">
                                                                                    <div class="content">The appeal
                                                                                        should be obvious to anyone who
                                                                                        appreciates the classic design
                                                                                        and wants to stay on top of
                                                                                        their heart and sleep health.
                                                                                    </div>
                                                                                    <div
                                                                                        class="testimonial-icon elementor-icon">
                                                                                        <i class="fa-solid fa-quote-right"></i>
                                                                                    </div>
                                                                                </div>


                                                                                <div class="tab-pane fade"
                                                                                     id="nav-67519de-ddc5d5e"
                                                                                     role="tabpanel"
                                                                                     aria-labelledby="nav-tab-67519de-ddc5d5e">
                                                                                    <div class="content"><p>The appeal
                                                                                            be obvious to anyone who the
                                                                                            classic design and wants to
                                                                                            stay on top of their heart
                                                                                            and sleep health should
                                                                                            appreciates .</p></div>
                                                                                    <div
                                                                                        class="testimonial-icon elementor-icon">
                                                                                        <i class="fa-solid fa-quote-right"></i>
                                                                                    </div>
                                                                                </div>


                                                                                <div class="tab-pane fade"
                                                                                     id="nav-67519de-07754d2"
                                                                                     role="tabpanel"
                                                                                     aria-labelledby="nav-tab-67519de-07754d2">
                                                                                    <div class="content"><p>The appeal
                                                                                            should be obvious to anyone
                                                                                            who appreciates the classic
                                                                                            design and wants to stay on
                                                                                            top of their heart and sleep
                                                                                            health.</p></div>
                                                                                    <div
                                                                                        class="testimonial-icon elementor-icon">
                                                                                        <i class="fa-solid fa-quote-right"></i>
                                                                                    </div>
                                                                                </div>


                                                                                <div class="tab-pane fade"
                                                                                     id="nav-67519de-d6ca83f"
                                                                                     role="tabpanel"
                                                                                     aria-labelledby="nav-tab-67519de-d6ca83f">
                                                                                    <div class="content"><p>The appeal
                                                                                            should be obvious to anyone
                                                                                            who appreciates the classic
                                                                                            design and wants to stay on
                                                                                            top of their heart and sleep
                                                                                            health.</p></div>
                                                                                    <div
                                                                                        class="testimonial-icon elementor-icon">
                                                                                        <i class="fa-solid fa-quote-right"></i>
                                                                                    </div>
                                                                                </div>


                                                                                <div class="tab-pane fade"
                                                                                     id="nav-67519de-6f4eed2"
                                                                                     role="tabpanel"
                                                                                     aria-labelledby="nav-tab-67519de-6f4eed2">
                                                                                    <div class="content"><p>The appeal
                                                                                            should be obvious to anyone
                                                                                            who appreciates the classic
                                                                                            design and wants to stay on
                                                                                            top of their heart and sleep
                                                                                            health.</p></div>
                                                                                    <div
                                                                                        class="testimonial-icon elementor-icon">
                                                                                        <i class="fa-solid fa-quote-right"></i>
                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-166595c elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            >
                                <div
                                    class="elementor-container elementor-column-gap-default"
                                >
                                    <div
                                        class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1402ebc"
                                    >
                                        <div
                                            class="elementor-widget-wrap elementor-element-populated"
                                        >
                                            <section
                                                class="elementor-section elementor-inner-section elementor-element elementor-element-bbfd993 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
                                            >
                                                <div
                                                    class="elementor-container elementor-column-gap-default"
                                                >
                                                    <div
                                                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-bd86335"
                                                    >
                                                        <div class="elementor-widget-wrap"></div>
                                                    </div>
                                                    <div
                                                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-98dfebd"
                                                    >
                                                        <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                        >
                                                            <div
                                                                class="elementor-element elementor-element-6114915 elementor-widget elementor-widget-heading"

                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <h4
                                                                        class="elementor-heading-title elementor-size-default"
                                                                    >
                                                                        Activity Tracking
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-b9a5977 elementor-widget elementor-widget-heading"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <h3
                                                                        class="elementor-heading-title elementor-size-default"
                                                                    >
                                                                        Meet your fitness goals. Then surpass
                                                                        them.
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-15388fe"
                                                    >
                                                        <div class="elementor-widget-wrap"></div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section
                                                class="elementor-section elementor-inner-section elementor-element elementor-element-5dc4a60 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
                                            >
                                                <div
                                                    class="elementor-container elementor-column-gap-no"
                                                >
                                                    <div
                                                        class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-04f4c25"
                                                    >
                                                        <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                        >
                                                            <div
                                                                class="elementor-element elementor-element-9d81426 elementor-position-left elementor-vertical-align-bottom elementor-view-default elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                          <span
                                              class="elementor-icon elementor-animation-"
                                          >
                                           <i class="fa-solid fa-water"></i>
                                          </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title">
                                                                                <span> Water-resistant 5 Atm </span>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-5029c65"
                                                    >
                                                        <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                        >
                                                            <div
                                                                class="elementor-element elementor-element-7dcc3ff elementor-position-left elementor-vertical-align-bottom elementor-view-default elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                          <span
                                              class="elementor-icon elementor-animation-"
                                          >
                                            <i class="fa-solid fa-shoe-prints"></i>
                                          </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title">
                                                                                <span> Step Tracker </span>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-e50f2c3"
                                                    >
                                                        <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                        >
                                                            <div
                                                                class="elementor-element elementor-element-fa312ca elementor-position-left elementor-vertical-align-bottom elementor-view-default elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                          <span
                                              class="elementor-icon elementor-animation-"
                                          >
                                           <i class="fa-solid fa-person-running"></i>
                                          </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title">
                                                                                <span> Workout Mode </span>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-b23141c"
                                                    >
                                                        <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                        >
                                                            <div
                                                                class="elementor-element elementor-element-fd0d82a elementor-position-left elementor-vertical-align-bottom elementor-view-default elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                          <span
                                              class="elementor-icon elementor-animation-"
                                          >
                                          <i class="fa-brands fa-nfc-symbol"></i>
                                          </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title">
                                                                                <span> Connected Gps </span>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-b4f7b33 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            >
                                <div
                                    class="elementor-container elementor-column-gap-default"
                                >
                                    <div
                                        class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-50f3fd0 elementor-invisible"
                                    >
                                        <div
                                            class="elementor-widget-wrap elementor-element-populated"
                                        >
                                            <div
                                                class="elementor-element elementor-element-120ebe1 tb-effect effect-circle elementor-widget elementor-widget-image"
                                            >
                                                <div class="elementor-widget-container">
                                                    <img
                                                        width="920"
                                                        height="800"
                                                        src="https://sapa.thembaydev.com/wp-content/uploads/2023/06/banner-02.jpg"
                                                        class="attachment-full size-full wp-image-5885"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8f1c9ca"
                                    >
                                        <div
                                            class="elementor-widget-wrap elementor-element-populated"
                                        >
                                            <section
                                                class="elementor-section elementor-inner-section elementor-element elementor-element-bdac644 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            >
                                                <div
                                                    class="elementor-container elementor-column-gap-default"
                                                >
                                                    <div
                                                        class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-9a034b5 elementor-invisible"
                                                    >
                                                        <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                        >
                                                            <div
                                                                class="elementor-element elementor-element-8d270f5 elementor-widget elementor-widget-text-editor"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <p>
                                                                        <b style="color: #121216"
                                                                        >Workout Mode</b
                                                                        >
                                                                        harnesses the GPS in your phone to
                                                                        complement motion and heart rate data
                                                                        with route tracking.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-48d292b tb-effect effect-shine elementor-widget elementor-widget-image"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <img
                                                                        width="400"
                                                                        height="646"
                                                                        src="https://sapa.thembaydev.com/wp-content/uploads/2023/06/banner-03.png"
                                                                        class="attachment-full size-full wp-image-5886"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-b5854c9 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default">
                                <div
                                    class="elementor-container elementor-column-gap-default"
                                >
                                    <div
                                        class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ad30935 elementor-invisible">
                                        <div
                                            class="elementor-widget-wrap elementor-element-populated"
                                        >
                                            <div
                                                class="elementor-element elementor-element-1440688 elementor-widget elementor-widget-heading"
                                            >
                                                <div class="elementor-widget-container">
                                                    <h3
                                                        class="elementor-heading-title elementor-size-default"
                                                    >
                                                        High-tech Functionality
                                                    </h3>
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-element elementor-element-8a5eb26 elementor-widget elementor-widget-text-editor"
                                            >
                                                <div class="elementor-widget-container">
                                                    <p>
                                                        If you’re looking to buy the best activity
                                                        tracker or hybrid smartwatch, you want to make
                                                        sure you find one that works with your life. All
                                                        our fitness trackers and hybrid smartwatches
                                                        help you meet your goals by tracking steps,
                                                        runs, swim and sleep automatically, and feature
                                                        classic styles that work for your workouts and
                                                        for your everyday life.
                                                    </p>
                                                </div>
                                            </div>
                                            <section
                                                class="elementor-section elementor-inner-section elementor-element elementor-element-710047d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            >
                                                <div
                                                    class="elementor-container elementor-column-gap-no"
                                                >
                                                    <div
                                                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-0fd7431"
                                                    >
                                                        <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                        >
                                                            <div
                                                                class="elementor-element elementor-element-3a1e10d elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                          <span
                                              class="elementor-icon elementor-animation-"
                                          >
                                          <i class="fa-solid fa-battery-three-quarters"></i>
                                          </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title">
                                                                                <span> Battery for days </span>
                                                                            </h3>
                                                                            <p
                                                                                class="elementor-icon-box-description"
                                                                            >
                                                                                Up to 10, to be exact
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-d27bffc"
                                                    >
                                                        <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                        >
                                                            <div
                                                                class="elementor-element elementor-element-5d6a876 elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                          <span
                                              class="elementor-icon elementor-animation-"
                                          >
                                           <i class="fa-solid fa-water"></i>
                                          </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title">
                                                                                <span> Water Rating </span>
                                                                            </h3>
                                                                            <p
                                                                                class="elementor-icon-box-description"
                                                                            >
                                                                                Shower or spa day
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7ce3cbe"
                                                    >
                                                        <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                        >
                                                            <div
                                                                class="elementor-element elementor-element-2b1dd81 elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                          <span
                                              class="elementor-icon elementor-animation-"
                                          >
                                           <i class="fa-solid fa-person-running"></i>
                                          </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title">
                                                                                <span> Hydration Tracking </span>
                                                                            </h3>
                                                                            <p
                                                                                class="elementor-icon-box-description"
                                                                            >
                                                                                You sweat during activities
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section
                                                class="elementor-section elementor-inner-section elementor-element elementor-element-78da325 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            >
                                                <div
                                                    class="elementor-container elementor-column-gap-no"
                                                >
                                                    <div
                                                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-76bce64"
                                                    >
                                                        <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                        >
                                                            <div
                                                                class="elementor-element elementor-element-6a656ec elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                          <span
                                              class="elementor-icon elementor-animation-"
                                          >
                                           <i class="fa-solid fa-person"></i>
                                          </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title">
                                                                                <span> Garmin Coach </span>
                                                                            </h3>
                                                                            <p
                                                                                class="elementor-icon-box-description"
                                                                            >
                                                                                Coach on your wrist
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-18718e0"
                                                    >
                                                        <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                        >
                                                            <div
                                                                class="elementor-element elementor-element-572dae4 elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                          <span
                                              class="elementor-icon elementor-animation-"
                                          >
                                           <i class="fa-regular fa-bell"></i>
                                          </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title">
                                                                                <span> Smart Notifications </span>
                                                                            </h3>
                                                                            <p
                                                                                class="elementor-icon-box-description"
                                                                            >
                                                                                With Apple® or Android™
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-f794337"
                                                    >
                                                        <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                        >
                                                            <div
                                                                class="elementor-element elementor-element-e1e31e8 elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                          <span
                                              class="elementor-icon elementor-animation-"
                                          >
                                           <i class="fa-solid fa-file-invoice-dollar"></i>
                                          </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title">
                                                                                <span> Garmin Pay ™ </span>
                                                                            </h3>
                                                                            <p
                                                                                class="elementor-icon-box-description"
                                                                            >
                                                                                Breeze through checkout
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9dc8c2f elementor-invisible"
                                    >
                                        <div
                                            class="elementor-widget-wrap elementor-element-populated"
                                        >
                                            <div
                                                class="elementor-element elementor-element-b0d0355 elementor-widget__width-initial tb-effect effect-circle elementor-widget elementor-widget-image"
                                            >
                                                <div class="elementor-widget-container">
                                                    <img
                                                        width="676"
                                                        height="675"
                                                        src="https://sapa.thembaydev.com/wp-content/uploads/2023/06/banner-04.png"
                                                        class="attachment-full size-full wp-image-5887"
                                                        alt=""
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-1fc5f4c elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
                            >
                                <div
                                    class="elementor-container elementor-column-gap-default"
                                >
                                    <div
                                        class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6ede199"
                                    >
                                        <div
                                            class="elementor-widget-wrap elementor-element-populated"
                                        >
                                            <div
                                                class="elementor-element elementor-element-6c9d4d0 elementor-widget elementor-widget-heading"
                                            >
                                                <div class="elementor-widget-container">
                                                    <h4
                                                        class="elementor-heading-title elementor-size-default"
                                                    >
                                                        Activity Tracking
                                                    </h4>
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-element elementor-element-5ee2181 elementor-widget elementor-widget-heading"
                                            >
                                                <div class="elementor-widget-container">
                                                    <h3
                                                        class="elementor-heading-title elementor-size-default"
                                                    >
                                                        Our product
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-ea7cde9 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
                            >
                                <div
                                    class="elementor-container elementor-column-gap-default"
                                >
                                    <div
                                        class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4eb972e"
                                    >
                                        <div
                                            class="elementor-widget-wrap elementor-element-populated"
                                        >
                                            <div
                                                class="elementor-element elementor-element-1a7fb1e align-center elementor-product-inner elementor-widget elementor-widget-tbay-products"
                                            >
                                                <div class="elementor-widget-container">
                                                    <div class="tbay-element tbay-element-products swiper productSwiper">
                                                        <div
                                                            class="products rows-1 owl-carousel scroll-init products swiper-wrapper d-flex" style="flex-wrap: unset"
                                                        >
                                                            <div class="item swiper-slide">
                                                                <div
                                                                    class="products-grid product type-product post-47 status-publish first instock product_cat-aluminum product_cat-gaming product_tag-activity-tracker product_tag-digital-watch product_tag-fitness-tracker product_tag-health-monitoring product_tag-sleep-tracking product_tag-smart-watch product_tag-water-resistant has-post-thumbnail featured shipping-taxable purchasable product-type-simple"
                                                                >
                                                                    <div
                                                                        class="product-block grid product v1"
                                                                    >
                                                                        <div class="product-content">
                                                                            <div class="block-inner">
                                                                                <figure class="image">
                                                                                    <a
                                                                                        title="Hctaw tire neercS hot"
                                                                                        href="https://sapa.thembaydev.com/product/hctaw-tire-neercs-hot/"
                                                                                        class="product-image"
                                                                                    >
                                                                                        <img
                                                                                            width="480"
                                                                                            height="638"
                                                                                            src="https://sapa.thembaydev.com/wp-content/uploads/2022/01/product-01-480x638.jpg"
                                                                                            class="attachment-shop_catalog image-effect"
                                                                                            alt=""
                                                                                        />
                                                                                        <img
                                                                                            width="480"
                                                                                            height="638"
                                                                                            src="https://sapa.thembaydev.com/wp-content/uploads/2022/01/product-02-480x638.jpg"
                                                                                            class="image-hover"
                                                                                            alt=""
                                                                                        />
                                                                                    </a>
                                                                                </figure>

                                                                                <div class="group-buttons">
                                                                                    <div class="tbay-quick-view">
                                                                                        <a
                                                                                            href="#"
                                                                                            class="qview-button"
                                                                                            title="Quick View"
                                                                                        >
                                                                                            <i class="fa-solid fa-magnifying-glass"></i>
                                                                                            <span>Quick View</span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-wishlist shown-mobile"
                                                                                        title="Wishlist"
                                                                                    >
                                                                                        <div
                                                                                            class="yith-wcwl-add-to-wishlist add-to-wishlist-47 wishlist-fragment on-first-load"
                                                                                        >


                                                                                            <div
                                                                                                class="yith-wcwl-add-button"
                                                                                            >
                                                                                                <a
                                                                                                    href="?add_to_wishlist=47&#038;_wpnonce=95c687193d"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                >
                                                                                                    <i class="fa-regular fa-heart"></i>
                                                                                                    <span
                                                                                                    >Add to wishlist</span
                                                                                                    >
                                                                                                </a>
                                                                                            </div>

                                                                                            <!-- COUNT TEXT -->
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="yith-compare">
                                                                                        <a
                                                                                            href="/?action=yith-woocompare-add-product&#038;id=47&#038;_wpnonce=b33450bdd8"
                                                                                            title="Compare"
                                                                                            class="compare"
                                                                                        >
                                                                                            <span>Add to compare</span>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="group-add-to-cart">
                                                                                    <div class="add-cart">
                                                                                        <a
                                                                                            href="?add-to-cart=47"
                                                                                            class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                        ><i
                                                                                                class="tb-icon tb-icon-shopping-bag"
                                                                                            ></i
                                                                                            ><span class="title-cart"
                                                                                            >Add to cart</span
                                                                                            ></a
                                                                                        >
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <span class="only-featured onsale"
                                                                            ><span class="featured"
                                                                                >Featured</span
                                                                                ></span
                                                                            >

                                                                            <div class="caption">
                                                                                <h3 class="name">
                                                                                    <a
                                                                                        href="https://sapa.thembaydev.com/product/hctaw-tire-neercs-hot/"
                                                                                    >Hctaw tire neercS hot</a
                                                                                    >
                                                                                </h3>

                                                                                <span class="price"
                                                                                ><span
                                                                                        class="woocs_price_code"
                                                                                    ><span
                                                                                            class="woocommerce-Price-amount amount"
                                                                                        ><bdi
                                                                                            ><span
                                                                                                    class="woocommerce-Price-currencySymbol"
                                                                                                >&#36;</span
                                                                                                >320.00</bdi
                                                                                            ></span
                                                                                        ></span
                                                                                    ></span
                                                                                >

                                                                                <div class="group-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="item swiper-slide">
                                                                <div
                                                                    class="products-grid product type-product post-46 status-publish instock product_cat-barometer product_cat-gaming product_tag-gps-tracking product_tag-sleep-tracking product_tag-water-resistant has-post-thumbnail shipping-taxable purchasable product-type-simple"
                                                                >
                                                                    <div
                                                                        class="product-block grid product v1"
                                                                    >
                                                                        <div class="product-content">
                                                                            <div class="block-inner">
                                                                                <figure class="image">
                                                                                    <a
                                                                                        title="ORP 21Z rekcart sent trope"
                                                                                        href="https://sapa.thembaydev.com/product/orp-21z-rekcart-sent-trope/"
                                                                                        class="product-image"
                                                                                    >
                                                                                        <img
                                                                                            width="480"
                                                                                            height="638"
                                                                                            src="https://sapa.thembaydev.com/wp-content/uploads/2022/01/product-02-480x638.jpg"
                                                                                            class="attachment-shop_catalog image-effect"
                                                                                            alt=""
                                                                                        />

                                                                                        <img
                                                                                            width="480"
                                                                                            height="638"
                                                                                            src="https://sapa.thembaydev.com/wp-content/uploads/2022/01/product-03-480x638.jpg"
                                                                                            class="image-hover"
                                                                                            alt=""
                                                                                        />
                                                                                    </a>
                                                                                </figure>

                                                                                <div class="group-buttons">
                                                                                    <div class="tbay-quick-view">
                                                                                        <a
                                                                                            href="#"
                                                                                            class="qview-button"
                                                                                            title="Quick View"
                                                                                            data-effect="mfp-move-from-top"
                                                                                            data-product_id="46"
                                                                                        >
                                                                                            <i class="fa-solid fa-magnifying-glass"></i>
                                                                                            <span>Quick View</span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-wishlist shown-mobile"
                                                                                        title="Wishlist"
                                                                                    >
                                                                                        <div
                                                                                            class="yith-wcwl-add-to-wishlist add-to-wishlist-46 wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="46"
                                                                                            data-fragment-options='{"base_url":"","in_default_wishlist":false,"is_single":false,"show_exists":false,"product_id":46,"parent_product_id":46,"product_type":"simple","show_view":false,"browse_wishlist_text":"Browse wishlist","already_in_wishslist_text":"","product_added_text":"","heading_icon":"custom","available_multi_wishlist":false,"disable_wishlist":false,"show_count":false,"ajax_loading":false,"loop_position":"after_add_to_cart","item":"add_to_wishlist"}'
                                                                                        >
                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button"
                                                                                            >
                                                                                                <a
                                                                                                    href="?add_to_wishlist=46&#038;_wpnonce=95c687193d"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-product-id="46"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="46"
                                                                                                    data-title="Add to wishlist"
                                                                                                    rel="nofollow"
                                                                                                >
                                                                                                    <i class="fa-regular fa-heart"></i>
                                                                                                    <span
                                                                                                    >Add to wishlist</span
                                                                                                    >
                                                                                                </a>
                                                                                            </div>

                                                                                            <!-- COUNT TEXT -->
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="yith-compare">
                                                                                        <a
                                                                                            href="/?action=yith-woocompare-add-product&#038;id=46&#038;_wpnonce=b33450bdd8"
                                                                                            title="Compare"
                                                                                            class="compare"
                                                                                            data-product_id="46"
                                                                                        >
                                                                                            <span>Add to compare</span>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="group-add-to-cart">
                                                                                    <div class="add-cart">
                                                                                        <a
                                                                                            href="?add-to-cart=46"
                                                                                            data-quantity="1"
                                                                                            class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                            data-product_id="46"
                                                                                            data-product_sku="MEGA-JEWE-02"
                                                                                            aria-label="Add to cart: &ldquo;ORP 21Z rekcart sent trope&rdquo;"
                                                                                            aria-describedby=""
                                                                                            rel="nofollow"
                                                                                        ><i
                                                                                                class="tb-icon tb-icon-shopping-bag"
                                                                                            ></i
                                                                                            ><span class="title-cart"
                                                                                            >Add to cart</span
                                                                                            ></a
                                                                                        >
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="caption">
                                                                                <h3 class="name">
                                                                                    <a
                                                                                        href="https://sapa.thembaydev.com/product/orp-21z-rekcart-sent-trope/"
                                                                                    >ORP 21Z rekcart sent trope</a
                                                                                    >
                                                                                </h3>

                                                                                <span class="price"
                                                                                ><span
                                                                                        class="woocs_price_code"
                                                                                        data-currency=""
                                                                                        data-redraw-id="662c53e20433a"
                                                                                        data-product-id="46"
                                                                                    ><span
                                                                                            class="woocommerce-Price-amount amount"
                                                                                        ><bdi
                                                                                            ><span
                                                                                                    class="woocommerce-Price-currencySymbol"
                                                                                                >&#36;</span
                                                                                                >350.00</bdi
                                                                                            ></span
                                                                                        ></span
                                                                                    ></span
                                                                                >

                                                                                <div class="group-content">
                                                                                    <div class="rating">
                                                                                        <div
                                                                                            class="star-rating"
                                                                                            role="img"
                                                                                            aria-label="Rated 5.00 out of 5"
                                                                                        >
                                                  <span style="width: 100%"
                                                  >Rated
                                                    <strong class="rating"
                                                    >5.00</strong
                                                    >
                                                    out of 5</span
                                                  >
                                                                                        </div>
                                                                                        <div class="count">
                                                                                            <span>1</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="item swiper-slide">
                                                                <div
                                                                    class="products-grid product type-product post-45 status-publish last instock product_cat-barometer product_cat-dresses product_tag-fitness-tracker product_tag-smart-watch has-post-thumbnail featured shipping-taxable purchasable product-type-simple"
                                                                >
                                                                    <div
                                                                        class="product-block grid product v1"
                                                                        data-product-id="45"
                                                                    >
                                                                        <div class="product-content">
                                                                            <div class="block-inner">
                                                                                <figure class="image">
                                                                                    <a
                                                                                        title="Hctawtrams artlu 3202 sunork"
                                                                                        href="https://sapa.thembaydev.com/product/hctawtrams-artlu-3202-sunork/"
                                                                                        class="product-image"
                                                                                    >
                                                                                        <img
                                                                                            width="480"
                                                                                            height="638"
                                                                                            src="https://sapa.thembaydev.com/wp-content/uploads/2022/01/product-03-480x638.jpg"
                                                                                            class="attachment-shop_catalog image-effect"
                                                                                        />
                                                                                        <img
                                                                                            width="480"
                                                                                            height="638"
                                                                                            src="https://sapa.thembaydev.com/wp-content/uploads/2022/01/product-04-480x638.jpg"
                                                                                            class="image-hover"
                                                                                        />
                                                                                    </a>
                                                                                </figure>

                                                                                <div class="group-buttons">
                                                                                    <div class="tbay-quick-view">
                                                                                        <a
                                                                                            href="#"
                                                                                            class="qview-button"
                                                                                            title="Quick View"
                                                                                            data-effect="mfp-move-from-top"
                                                                                            data-product_id="45"
                                                                                        >
                                                                                            <i class="fa-solid fa-magnifying-glass"></i>
                                                                                            <span>Quick View</span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-wishlist shown-mobile"
                                                                                        title="Wishlist"
                                                                                    >
                                                                                        <div
                                                                                            class="yith-wcwl-add-to-wishlist add-to-wishlist-45 wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="45"
                                                                                            data-fragment-options='{"base_url":"","in_default_wishlist":false,"is_single":false,"show_exists":false,"product_id":45,"parent_product_id":45,"product_type":"simple","show_view":false,"browse_wishlist_text":"Browse wishlist","already_in_wishslist_text":"","product_added_text":"","heading_icon":"custom","available_multi_wishlist":false,"disable_wishlist":false,"show_count":false,"ajax_loading":false,"loop_position":"after_add_to_cart","item":"add_to_wishlist"}'
                                                                                        >
                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button"
                                                                                            >
                                                                                                <a
                                                                                                    href="?add_to_wishlist=45&#038;_wpnonce=95c687193d"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-product-id="45"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="45"
                                                                                                    data-title="Add to wishlist"
                                                                                                    rel="nofollow"
                                                                                                >
                                                                                                    <i class="fa-regular fa-heart"></i>
                                                                                                    <span
                                                                                                    >Add to wishlist</span
                                                                                                    >
                                                                                                </a>
                                                                                            </div>

                                                                                            <!-- COUNT TEXT -->
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="yith-compare">
                                                                                        <a
                                                                                            href="/?action=yith-woocompare-add-product&#038;id=45&#038;_wpnonce=b33450bdd8"
                                                                                            title="Compare"
                                                                                            class="compare"
                                                                                            data-product_id="45"
                                                                                        >
                                                                                            <span>Add to compare</span>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="group-add-to-cart">
                                                                                    <div class="add-cart">
                                                                                        <a
                                                                                            href="?add-to-cart=45"
                                                                                            data-quantity="1"
                                                                                            class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                            data-product_id="45"
                                                                                            data-product_sku="MEGA-JEWE-03"
                                                                                            aria-label="Add to cart: &ldquo;Hctawtrams artlu 3202 sunork&rdquo;"
                                                                                            aria-describedby=""
                                                                                            rel="nofollow"
                                                                                        ><i
                                                                                                class="tb-icon tb-icon-shopping-bag"
                                                                                            ></i
                                                                                            ><span class="title-cart"
                                                                                            >Add to cart</span
                                                                                            ></a
                                                                                        >
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <span class="only-featured onsale"
                                                                            ><span class="featured"
                                                                                >Featured</span
                                                                                ></span
                                                                            >

                                                                            <div class="caption">
                                                                                <h3 class="name">
                                                                                    <a
                                                                                        href="https://sapa.thembaydev.com/product/hctawtrams-artlu-3202-sunork/"
                                                                                    >Hctawtrams artlu 3202 sunork</a
                                                                                    >
                                                                                </h3>

                                                                                <span class="price"
                                                                                ><span
                                                                                        class="woocs_price_code"
                                                                                        data-currency=""
                                                                                        data-redraw-id="662c53e204e5d"
                                                                                        data-product-id="45"
                                                                                    ><span
                                                                                            class="woocommerce-Price-amount amount"
                                                                                        ><bdi
                                                                                            ><span
                                                                                                    class="woocommerce-Price-currencySymbol"
                                                                                                >&#36;</span
                                                                                                >360.00</bdi
                                                                                            ></span
                                                                                        ></span
                                                                                    ></span
                                                                                >

                                                                                <div class="group-content">
                                                                                    <div class="rating">
                                                                                        <div
                                                                                            class="star-rating"
                                                                                            role="img"
                                                                                            aria-label="Rated 5.00 out of 5"
                                                                                        >
                                                  <span style="width: 100%"
                                                  >Rated
                                                    <strong class="rating"
                                                    >5.00</strong
                                                    >
                                                    out of 5</span
                                                  >
                                                                                        </div>
                                                                                        <div class="count">
                                                                                            <span>1</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="item swiper-slide">
                                                                <div
                                                                    class="products-grid product type-product post-44 status-publish first instock product_cat-accelerometer product_cat-dresses has-post-thumbnail sale featured shipping-taxable purchasable product-type-simple"
                                                                >
                                                                    <div
                                                                        class="product-block grid product v1"
                                                                        data-product-id="44"
                                                                    >
                                                                        <div class="product-content">
                                                                            <div class="block-inner">
                                                                                <figure class="image">
                                                                                    <a
                                                                                        title="Artlu 8 seires sehctaw trams"
                                                                                        href="https://sapa.thembaydev.com/product/artlu-8-seires-sehctaw-trams/"
                                                                                        class="product-image"
                                                                                    >
                                                                                        <img
                                                                                            width="480"
                                                                                            height="638"
                                                                                            src="https://sapa.thembaydev.com/wp-content/uploads/2022/01/product-04-480x638.jpg"
                                                                                            class="attachment-shop_catalog image-effect"
                                                                                        />
                                                                                        <img
                                                                                            width="480"
                                                                                            height="638"
                                                                                            src="https://sapa.thembaydev.com/wp-content/uploads/2022/01/product-05-480x638.jpg"
                                                                                            class="image-hover"
                                                                                        />
                                                                                    </a>
                                                                                </figure>

                                                                                <div class="group-buttons">
                                                                                    <div class="tbay-quick-view">
                                                                                        <a
                                                                                            href="#"
                                                                                            class="qview-button"
                                                                                            title="Quick View"
                                                                                            data-effect="mfp-move-from-top"
                                                                                            data-product_id="44"
                                                                                        >
                                                                                            <i class="fa-solid fa-magnifying-glass"></i>
                                                                                            <span>Quick View</span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-wishlist shown-mobile"
                                                                                        title="Wishlist"
                                                                                    >
                                                                                        <div
                                                                                            class="yith-wcwl-add-to-wishlist add-to-wishlist-44 wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="44"
                                                                                            data-fragment-options='{"base_url":"","in_default_wishlist":false,"is_single":false,"show_exists":false,"product_id":44,"parent_product_id":44,"product_type":"simple","show_view":false,"browse_wishlist_text":"Browse wishlist","already_in_wishslist_text":"","product_added_text":"","heading_icon":"custom","available_multi_wishlist":false,"disable_wishlist":false,"show_count":false,"ajax_loading":false,"loop_position":"after_add_to_cart","item":"add_to_wishlist"}'
                                                                                        >
                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button"
                                                                                            >
                                                                                                <a
                                                                                                    href="?add_to_wishlist=44&#038;_wpnonce=95c687193d"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-product-id="44"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="44"
                                                                                                    data-title="Add to wishlist"
                                                                                                    rel="nofollow"
                                                                                                >
                                                                                                    <i class="fa-regular fa-heart"></i>
                                                                                                    <span
                                                                                                    >Add to wishlist</span
                                                                                                    >
                                                                                                </a>
                                                                                            </div>

                                                                                            <!-- COUNT TEXT -->
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="yith-compare">
                                                                                        <a
                                                                                            href="/?action=yith-woocompare-add-product&#038;id=44&#038;_wpnonce=b33450bdd8"
                                                                                            title="Compare"
                                                                                            class="compare"
                                                                                            data-product_id="44"
                                                                                        >
                                                                                            <span>Add to compare</span>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="group-add-to-cart">
                                                                                    <div class="add-cart">
                                                                                        <a
                                                                                            href="?add-to-cart=44"
                                                                                            data-quantity="1"
                                                                                            class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                            data-product_id="44"
                                                                                            data-product_sku="MEGA-JEWE-04"
                                                                                            aria-label="Add to cart: &ldquo;Artlu 8 seires sehctaw trams&rdquo;"
                                                                                            aria-describedby=""
                                                                                            rel="nofollow"
                                                                                        ><i
                                                                                                class="tb-icon tb-icon-shopping-bag"
                                                                                            ></i
                                                                                            ><span class="title-cart"
                                                                                            >Add to cart</span
                                                                                            ></a
                                                                                        >
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <span
                                                                                class="wrapper-onsale-featured onsale"
                                                                            ><span class="saled">-13%</span
                                                                                ><span class="featured"
                                                                                >Featured</span
                                                                                ></span
                                                                            >

                                                                            <div class="caption">
                                                                                <h3 class="name">
                                                                                    <a
                                                                                        href="https://sapa.thembaydev.com/product/artlu-8-seires-sehctaw-trams/"
                                                                                    >Artlu 8 seires sehctaw trams</a
                                                                                    >
                                                                                </h3>

                                                                                <span class="price"
                                                                                ><span
                                                                                        class="woocs_price_code"
                                                                                        data-currency=""
                                                                                        data-redraw-id="662c53e205bc4"
                                                                                        data-product-id="44"
                                                                                    ><ins
                                                                                        ><span
                                                                                                class="woocommerce-Price-amount amount"
                                                                                            ><bdi
                                                                                                ><span
                                                                                                        class="woocommerce-Price-currencySymbol"
                                                                                                    >&#36;</span
                                                                                                    >400.00</bdi
                                                                                                ></span
                                                                                            ></ins
                                                                                        >
                                                <del aria-hidden="true"
                                                ><span
                                                        class="woocommerce-Price-amount amount"
                                                    ><bdi
                                                        ><span
                                                                class="woocommerce-Price-currencySymbol"
                                                            >&#36;</span
                                                            >460.00</bdi
                                                        ></span
                                                    ></del
                                                ></span
                                                                                    ></span
                                                                                >

                                                                                <div class="group-content">
                                                                                    <div class="rating">
                                                                                        <div
                                                                                            class="star-rating"
                                                                                            role="img"
                                                                                            aria-label="Rated 5.00 out of 5"
                                                                                        >
                                                  <span style="width: 100%"
                                                  >Rated
                                                    <strong class="rating"
                                                    >5.00</strong
                                                    >
                                                    out of 5</span
                                                  >
                                                                                        </div>
                                                                                        <div class="count">
                                                                                            <span>3</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="item swiper-slide">
                                                                <div
                                                                    class="products-grid product type-product post-43 status-publish instock product_cat-accelerometer product_cat-thermometer product_tag-smart-watch has-post-thumbnail shipping-taxable purchasable product-type-simple"
                                                                >
                                                                    <div
                                                                        class="product-block grid product v1"
                                                                        data-product-id="43"
                                                                    >
                                                                        <div class="product-content">
                                                                            <div class="block-inner">
                                                                                <figure class="image">
                                                                                    <a
                                                                                        title="Hctawtrams repapllaw mots"
                                                                                        href="https://sapa.thembaydev.com/product/hctawtrams-repapllaw-mots/"
                                                                                        class="product-image"
                                                                                    >
                                                                                        <img
                                                                                            width="480"
                                                                                            height="638"
                                                                                            src="https://sapa.thembaydev.com/wp-content/uploads/2022/01/product-05-480x638.jpg"
                                                                                            class="attachment-shop_catalog image-effect"
                                                                                        />
                                                                                        <img
                                                                                            width="480"
                                                                                            height="638"
                                                                                            class="image-hover"
                                                                                            alt=""
                                                                                            src="https://sapa.thembaydev.com/wp-content/uploads/2022/01/product-06-480x638.jpg"
                                                                                        />
                                                                                    </a>
                                                                                </figure>

                                                                                <div class="group-buttons">
                                                                                    <div class="tbay-quick-view">
                                                                                        <a
                                                                                            href="#"
                                                                                            class="qview-button"
                                                                                            title="Quick View"
                                                                                            data-effect="mfp-move-from-top"
                                                                                            data-product_id="43"
                                                                                        >
                                                                                            <i class="fa-solid fa-magnifying-glass"></i>
                                                                                            <span>Quick View</span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-wishlist shown-mobile"
                                                                                        title="Wishlist"
                                                                                    >
                                                                                        <div
                                                                                            class="yith-wcwl-add-to-wishlist add-to-wishlist-43 wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="43"
                                                                                            data-fragment-options='{"base_url":"","in_default_wishlist":false,"is_single":false,"show_exists":false,"product_id":43,"parent_product_id":43,"product_type":"simple","show_view":false,"browse_wishlist_text":"Browse wishlist","already_in_wishslist_text":"","product_added_text":"","heading_icon":"custom","available_multi_wishlist":false,"disable_wishlist":false,"show_count":false,"ajax_loading":false,"loop_position":"after_add_to_cart","item":"add_to_wishlist"}'
                                                                                        >
                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button"
                                                                                            >
                                                                                                <a
                                                                                                    href="?add_to_wishlist=43&#038;_wpnonce=95c687193d"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-product-id="43"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="43"
                                                                                                    data-title="Add to wishlist"
                                                                                                    rel="nofollow"
                                                                                                >
                                                                                                    <i class="fa-regular fa-heart"></i>
                                                                                                    <span
                                                                                                    >Add to wishlist</span
                                                                                                    >
                                                                                                </a>
                                                                                            </div>

                                                                                            <!-- COUNT TEXT -->
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="yith-compare">
                                                                                        <a
                                                                                            href="/?action=yith-woocompare-add-product&#038;id=43&#038;_wpnonce=b33450bdd8"
                                                                                            title="Compare"
                                                                                            class="compare"
                                                                                            data-product_id="43"
                                                                                        >
                                                                                            <span>Add to compare</span>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="group-add-to-cart">
                                                                                    <div class="add-cart">
                                                                                        <a
                                                                                            href="?add-to-cart=43"
                                                                                            data-quantity="1"
                                                                                            class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                            data-product_id="43"
                                                                                            data-product_sku="MEGA-JEWE-05"
                                                                                            aria-label="Add to cart: &ldquo;Hctawtrams repapllaw mots&rdquo;"
                                                                                            aria-describedby=""
                                                                                            rel="nofollow"
                                                                                        ><i
                                                                                                class="tb-icon tb-icon-shopping-bag"
                                                                                            ></i
                                                                                            ><span class="title-cart"
                                                                                            >Add to cart</span
                                                                                            ></a
                                                                                        >
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="caption">
                                                                                <h3 class="name">
                                                                                    <a
                                                                                        href="https://sapa.thembaydev.com/product/hctawtrams-repapllaw-mots/"
                                                                                    >Hctawtrams repapllaw mots</a
                                                                                    >
                                                                                </h3>

                                                                                <span class="price"
                                                                                ><span
                                                                                        class="woocs_price_code"
                                                                                        data-currency=""
                                                                                        data-redraw-id="662c53e206952"
                                                                                        data-product-id="43"
                                                                                    ><span
                                                                                            class="woocommerce-Price-amount amount"
                                                                                        ><bdi
                                                                                            ><span
                                                                                                    class="woocommerce-Price-currencySymbol"
                                                                                                >&#36;</span
                                                                                                >300.00</bdi
                                                                                            ></span
                                                                                        ></span
                                                                                    ></span
                                                                                >

                                                                                <div class="group-content">
                                                                                    <div class="rating">
                                                                                        <div
                                                                                            class="star-rating"
                                                                                            role="img"
                                                                                            aria-label="Rated 5.00 out of 5"
                                                                                        >
                                                  <span style="width: 100%"
                                                  >Rated
                                                    <strong class="rating"
                                                    >5.00</strong
                                                    >
                                                    out of 5</span
                                                  >
                                                                                        </div>
                                                                                        <div class="count">
                                                                                            <span>1</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="item swiper-slide">
                                                                <div
                                                                    class="products-grid product type-product post-42 status-publish last instock product_cat-fitness product_cat-thermometer product_tag-activity-tracker product_tag-digital-watch product_tag-gps-tracking product_tag-sleep-tracking product_tag-water-resistant has-post-thumbnail featured shipping-taxable purchasable product-type-simple"
                                                                >
                                                                    <div
                                                                        class="product-block grid product v1"
                                                                        data-product-id="42"
                                                                    >
                                                                        <div class="product-content">
                                                                            <div class="block-inner">
                                                                                <figure class="image">
                                                                                    <a
                                                                                        title="Trash double strops"
                                                                                        href="https://sapa.thembaydev.com/product/trash-double-strops/"
                                                                                        class="product-image"
                                                                                    >
                                                                                        <img
                                                                                            width="480"
                                                                                            height="638"
                                                                                            class="attachment-shop_catalog image-effect"
                                                                                            alt=""
                                                                                            src="https://sapa.thembaydev.com/wp-content/uploads/2022/01/product-07-480x638.jpg"
                                                                                        />

                                                                                        <img
                                                                                            width="480"
                                                                                            height="638"
                                                                                            class="image-hover"
                                                                                            alt=""
                                                                                            src="https://sapa.thembaydev.com/wp-content/uploads/2022/01/product-08-480x638.jpg"
                                                                                        />

                                                                                    </a>
                                                                                </figure>

                                                                                <div class="group-buttons">
                                                                                    <div class="tbay-quick-view">
                                                                                        <a
                                                                                            href="#"
                                                                                            class="qview-button"
                                                                                            title="Quick View"
                                                                                            data-effect="mfp-move-from-top"
                                                                                            data-product_id="42"
                                                                                        >
                                                                                            <i class="fa-solid fa-magnifying-glass"></i>
                                                                                            <span>Quick View</span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-wishlist shown-mobile"
                                                                                        title="Wishlist"
                                                                                    >
                                                                                        <div
                                                                                            class="yith-wcwl-add-to-wishlist add-to-wishlist-42 wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="42"
                                                                                            data-fragment-options='{"base_url":"","in_default_wishlist":false,"is_single":false,"show_exists":false,"product_id":42,"parent_product_id":42,"product_type":"simple","show_view":false,"browse_wishlist_text":"Browse wishlist","already_in_wishslist_text":"","product_added_text":"","heading_icon":"custom","available_multi_wishlist":false,"disable_wishlist":false,"show_count":false,"ajax_loading":false,"loop_position":"after_add_to_cart","item":"add_to_wishlist"}'
                                                                                        >
                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button"
                                                                                            >
                                                                                                <a
                                                                                                    href="?add_to_wishlist=42&#038;_wpnonce=95c687193d"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-product-id="42"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="42"
                                                                                                    data-title="Add to wishlist"
                                                                                                    rel="nofollow"
                                                                                                >
                                                                                                    <i class="fa-regular fa-heart"></i>
                                                                                                    <span
                                                                                                    >Add to wishlist</span
                                                                                                    >
                                                                                                </a>
                                                                                            </div>

                                                                                            <!-- COUNT TEXT -->
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="yith-compare">
                                                                                        <a
                                                                                            href="/?action=yith-woocompare-add-product&#038;id=42&#038;_wpnonce=b33450bdd8"
                                                                                            title="Compare"
                                                                                            class="compare"
                                                                                            data-product_id="42"
                                                                                        >
                                                                                            <span>Add to compare</span>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="group-add-to-cart">
                                                                                    <div class="add-cart">
                                                                                        <a
                                                                                            href="?add-to-cart=42"
                                                                                            data-quantity="1"
                                                                                            class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                            data-product_id="42"
                                                                                            data-product_sku="MEGA-JEWE-06"
                                                                                            aria-label="Add to cart: &ldquo;Trash double strops&rdquo;"
                                                                                            aria-describedby=""
                                                                                            rel="nofollow"
                                                                                        ><i
                                                                                                class="tb-icon tb-icon-shopping-bag"
                                                                                            ></i
                                                                                            ><span class="title-cart"
                                                                                            >Add to cart</span
                                                                                            ></a
                                                                                        >
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <span class="only-featured onsale"
                                                                            ><span class="featured"
                                                                                >Featured</span
                                                                                ></span
                                                                            >

                                                                            <div class="caption">
                                                                                <h3 class="name">
                                                                                    <a
                                                                                        href="https://sapa.thembaydev.com/product/trash-double-strops/"
                                                                                    >Trash double strops</a
                                                                                    >
                                                                                </h3>

                                                                                <span class="price"
                                                                                ><span
                                                                                        class="woocs_price_code"
                                                                                        data-currency=""
                                                                                        data-redraw-id="662c53e2075aa"
                                                                                        data-product-id="42"
                                                                                    ><span
                                                                                            class="woocommerce-Price-amount amount"
                                                                                        ><bdi
                                                                                            ><span
                                                                                                    class="woocommerce-Price-currencySymbol"
                                                                                                >&#36;</span
                                                                                                >260.00</bdi
                                                                                            ></span
                                                                                        ></span
                                                                                    ></span
                                                                                >

                                                                                <div class="group-content">
                                                                                    <div class="rating">
                                                                                        <div
                                                                                            class="star-rating"
                                                                                            role="img"
                                                                                            aria-label="Rated 4.67 out of 5"
                                                                                        >
                                                  <span style="width: 93.4%"
                                                  >Rated
                                                    <strong class="rating"
                                                    >4.67</strong
                                                    >
                                                    out of 5</span
                                                  >
                                                                                        </div>
                                                                                        <div class="count">
                                                                                            <span>3</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="item swiper-slide">
                                                                <div
                                                                    class="products-grid product type-product post-41 status-publish first instock product_cat-fitness product_cat-titanium product_tag-digital-watch product_tag-sleep-tracking product_tag-water-resistant has-post-thumbnail sale featured shipping-taxable purchasable product-type-simple"
                                                                >
                                                                    <div
                                                                        class="product-block grid product v1"
                                                                        data-product-id="41"
                                                                    >
                                                                        <div class="product-content">
                                                                            <div class="block-inner">
                                                                                <figure class="image">
                                                                                    <a
                                                                                        title="Ygolonhcet kcalb gniR trams"
                                                                                        href="https://sapa.thembaydev.com/product/ygolonhcet-kcalb-gnir-trams/"
                                                                                        class="product-image"
                                                                                    >
                                                                                        <img
                                                                                            width="480"
                                                                                            height="638"
                                                                                            class="attachment-shop_catalog image-effect"
                                                                                            src="https://sapa.thembaydev.com/wp-content/uploads/2022/01/product-08-480x638.jpg"
                                                                                        />
                                                                                        <img
                                                                                            width="480"
                                                                                            height="638"
                                                                                            class="image-hover"
                                                                                            alt=""
                                                                                            src="https://sapa.thembaydev.com/wp-content/uploads/2022/01/product-09-480x638.jpg"
                                                                                        />
                                                                                    </a>
                                                                                </figure>

                                                                                <div class="group-buttons">
                                                                                    <div class="tbay-quick-view">
                                                                                        <a
                                                                                            href="#"
                                                                                            class="qview-button"
                                                                                            title="Quick View"
                                                                                            data-effect="mfp-move-from-top"
                                                                                            data-product_id="41"
                                                                                        >
                                                                                            <i class="fa-solid fa-magnifying-glass"></i>
                                                                                            <span>Quick View</span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-wishlist shown-mobile"
                                                                                        title="Wishlist"
                                                                                    >
                                                                                        <div
                                                                                            class="yith-wcwl-add-to-wishlist add-to-wishlist-41 wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="41"
                                                                                            data-fragment-options='{"base_url":"","in_default_wishlist":false,"is_single":false,"show_exists":false,"product_id":41,"parent_product_id":41,"product_type":"simple","show_view":false,"browse_wishlist_text":"Browse wishlist","already_in_wishslist_text":"","product_added_text":"","heading_icon":"custom","available_multi_wishlist":false,"disable_wishlist":false,"show_count":false,"ajax_loading":false,"loop_position":"after_add_to_cart","item":"add_to_wishlist"}'
                                                                                        >
                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button"
                                                                                            >
                                                                                                <a
                                                                                                    href="?add_to_wishlist=41&#038;_wpnonce=95c687193d"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-product-id="41"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="41"
                                                                                                    data-title="Add to wishlist"
                                                                                                    rel="nofollow"
                                                                                                >
                                                                                                    <i class="fa-regular fa-heart"></i>
                                                                                                    <span
                                                                                                    >Add to wishlist</span
                                                                                                    >
                                                                                                </a>
                                                                                            </div>

                                                                                            <!-- COUNT TEXT -->
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="yith-compare">
                                                                                        <a
                                                                                            href="/?action=yith-woocompare-add-product&#038;id=41&#038;_wpnonce=b33450bdd8"
                                                                                            title="Compare"
                                                                                            class="compare"
                                                                                            data-product_id="41"
                                                                                        >
                                                                                            <span>Add to compare</span>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="group-add-to-cart">
                                                                                    <div class="add-cart">
                                                                                        <a
                                                                                            href="?add-to-cart=41"
                                                                                            data-quantity="1"
                                                                                            class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                            data-product_id="41"
                                                                                            data-product_sku="MEGA-JEWE-07"
                                                                                            aria-label="Add to cart: &ldquo;Ygolonhcet kcalb gniR trams&rdquo;"
                                                                                            aria-describedby=""
                                                                                            rel="nofollow"
                                                                                        ><i
                                                                                                class="tb-icon tb-icon-shopping-bag"
                                                                                            ></i
                                                                                            ><span class="title-cart"
                                                                                            >Add to cart</span
                                                                                            ></a
                                                                                        >
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <span
                                                                                class="wrapper-onsale-featured onsale"
                                                                            ><span class="saled">-15%</span
                                                                                ><span class="featured"
                                                                                >Featured</span
                                                                                ></span
                                                                            >

                                                                            <div class="caption">
                                                                                <h3 class="name">
                                                                                    <a
                                                                                        href="https://sapa.thembaydev.com/product/ygolonhcet-kcalb-gnir-trams/"
                                                                                    >Ygolonhcet kcalb gniR trams</a
                                                                                    >
                                                                                </h3>

                                                                                <span class="price"
                                                                                ><span
                                                                                        class="woocs_price_code"
                                                                                        data-currency=""
                                                                                        data-redraw-id="662c53e2083b7"
                                                                                        data-product-id="41"
                                                                                    ><ins
                                                                                        ><span
                                                                                                class="woocommerce-Price-amount amount"
                                                                                            ><bdi
                                                                                                ><span
                                                                                                        class="woocommerce-Price-currencySymbol"
                                                                                                    >&#36;</span
                                                                                                    >220.00</bdi
                                                                                                ></span
                                                                                            ></ins
                                                                                        >
                                                <del aria-hidden="true"
                                                ><span
                                                        class="woocommerce-Price-amount amount"
                                                    ><bdi
                                                        ><span
                                                                class="woocommerce-Price-currencySymbol"
                                                            >&#36;</span
                                                            >260.00</bdi
                                                        ></span
                                                    ></del
                                                ></span
                                                                                    ></span
                                                                                >

                                                                                <div class="group-content"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="item swiper-slide">
                                                                <div
                                                                    class="products-grid product type-product post-40 status-publish instock product_cat-aluminum product_cat-titanium product_tag-gps-tracking product_tag-sleep-tracking product_tag-smart-watch product_tag-water-resistant has-post-thumbnail shipping-taxable purchasable product-type-simple"
                                                                >
                                                                    <div
                                                                        class="product-block grid product v1"
                                                                        data-product-id="40"
                                                                    >
                                                                        <div class="product-content">
                                                                            <div class="block-inner">
                                                                                <figure class="image">
                                                                                    <a
                                                                                        title="Never egraL sunork"
                                                                                        href="https://sapa.thembaydev.com/product/never-egral-sunork/"
                                                                                        class="product-image"
                                                                                    >
                                                                                        <img
                                                                                            width="480"
                                                                                            height="638"
                                                                                            class="attachment-shop_catalog image-effect"
                                                                                            src="https://sapa.thembaydev.com/wp-content/uploads/2022/01/product-09-480x638.jpg"
                                                                                        />
                                                                                        <img
                                                                                            width="480"
                                                                                            height="638"
                                                                                            class="image-hover"
                                                                                            alt=""
                                                                                            src="https://sapa.thembaydev.com/wp-content/uploads/2022/01/product-10-480x638.jpg"
                                                                                        />

                                                                                    </a>
                                                                                </figure>

                                                                                <div class="group-buttons">
                                                                                    <div class="tbay-quick-view">
                                                                                        <a
                                                                                            href="#"
                                                                                            class="qview-button"
                                                                                            title="Quick View"
                                                                                            data-effect="mfp-move-from-top"
                                                                                            data-product_id="40"
                                                                                        >
                                                                                            <i class="fa-solid fa-magnifying-glass"></i>
                                                                                            <span>Quick View</span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div
                                                                                        class="button-wishlist shown-mobile"
                                                                                        title="Wishlist"
                                                                                    >
                                                                                        <div
                                                                                            class="yith-wcwl-add-to-wishlist add-to-wishlist-40 wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="40"
                                                                                            data-fragment-options='{"base_url":"","in_default_wishlist":false,"is_single":false,"show_exists":false,"product_id":40,"parent_product_id":40,"product_type":"simple","show_view":false,"browse_wishlist_text":"Browse wishlist","already_in_wishslist_text":"","product_added_text":"","heading_icon":"custom","available_multi_wishlist":false,"disable_wishlist":false,"show_count":false,"ajax_loading":false,"loop_position":"after_add_to_cart","item":"add_to_wishlist"}'
                                                                                        >
                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button"
                                                                                            >
                                                                                                <a
                                                                                                    href="?add_to_wishlist=40&#038;_wpnonce=95c687193d"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-product-id="40"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="40"
                                                                                                    data-title="Add to wishlist"
                                                                                                    rel="nofollow"
                                                                                                >
                                                                                                    <i class="fa-regular fa-heart"></i>
                                                                                                    <span
                                                                                                    >Add to wishlist</span
                                                                                                    >
                                                                                                </a>
                                                                                            </div>

                                                                                            <!-- COUNT TEXT -->
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="yith-compare">
                                                                                        <a
                                                                                            href="/?action=yith-woocompare-add-product&#038;id=40&#038;_wpnonce=b33450bdd8"
                                                                                            title="Compare"
                                                                                            class="compare"
                                                                                            data-product_id="40"
                                                                                        >
                                                                                            <span>Add to compare</span>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="group-add-to-cart">
                                                                                    <div class="add-cart">
                                                                                        <a
                                                                                            href="?add-to-cart=40"
                                                                                            data-quantity="1"
                                                                                            class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                            data-product_id="40"
                                                                                            data-product_sku="MEGA-JEWE-08"
                                                                                            aria-label="Add to cart: &ldquo;Never egraL sunork&rdquo;"
                                                                                            aria-describedby=""
                                                                                            rel="nofollow"
                                                                                        ><i
                                                                                                class="tb-icon tb-icon-shopping-bag"
                                                                                            ></i
                                                                                            ><span class="title-cart"
                                                                                            >Add to cart</span
                                                                                            ></a
                                                                                        >
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="caption">
                                                                                <h3 class="name">
                                                                                    <a
                                                                                        href="https://sapa.thembaydev.com/product/never-egral-sunork/"
                                                                                    >Never egraL sunork</a
                                                                                    >
                                                                                </h3>

                                                                                <span class="price"
                                                                                ><span
                                                                                        class="woocs_price_code"
                                                                                        data-currency=""
                                                                                        data-redraw-id="662c53e208fff"
                                                                                        data-product-id="40"
                                                                                    ><span
                                                                                            class="woocommerce-Price-amount amount"
                                                                                        ><bdi
                                                                                            ><span
                                                                                                    class="woocommerce-Price-currencySymbol"
                                                                                                >&#36;</span
                                                                                                >320.00</bdi
                                                                                            ></span
                                                                                        ></span
                                                                                    ></span
                                                                                >

                                                                                <div class="group-content">
                                                                                    <div class="rating">
                                                                                        <div
                                                                                            class="star-rating"
                                                                                            role="img"
                                                                                            aria-label="Rated 5.00 out of 5"
                                                                                        >
                                                  <span style="width: 100%"
                                                  >Rated
                                                    <strong class="rating"
                                                    >5.00</strong
                                                    >
                                                    out of 5</span
                                                  >
                                                                                        </div>
                                                                                        <div class="count">
                                                                                            <span>1</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-6d1dfd3 elementor-section-content-middle elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
                                data-id="6d1dfd3"
                                data-element_type="section"
                                data-settings='{"stretch_section":"section-stretched","background_background":"classic","animation":"fadeInUp"}'
                            >
                                <div
                                    class="elementor-container elementor-column-gap-default"
                                >
                                    <div
                                        class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2febccd"
                                        data-id="2febccd"
                                        data-element_type="column"
                                        data-settings='{"background_background":"classic"}'
                                    >
                                        <div
                                            class="elementor-widget-wrap elementor-element-populated"
                                        >
                                            <section
                                                class="elementor-section elementor-inner-section elementor-element elementor-element-2499ca2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                data-id="2499ca2"
                                                data-element_type="section"
                                            >
                                                <div
                                                    class="elementor-container elementor-column-gap-default"
                                                >
                                                    <div
                                                        class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ca24e72"
                                                        data-id="ca24e72"
                                                        data-element_type="column"
                                                    >
                                                        <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                        >
                                                            <div
                                                                class="elementor-element elementor-element-66752f6 elementor-widget elementor-widget-heading"
                                                                data-id="66752f6"
                                                                data-element_type="widget"
                                                                data-widget_type="heading.default"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <h3
                                                                        class="elementor-heading-title elementor-size-default"
                                                                    >
                                                                        Access to exclusive discounts and
                                                                        upcoming events information.
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-element elementor-element-65608f0 elementor-widget elementor-widget-tbay-newsletter"
                                                                data-id="65608f0"
                                                                data-element_type="widget"
                                                                data-widget_type="tbay-newsletter.default"
                                                            >
                                                                <div class="elementor-widget-container">
                                                                    <div
                                                                        class="tbay-element tbay-element-newsletter"
                                                                    >
                                                                        <script>
                                                                            (function () {
                                                                                window.mc4wp = window.mc4wp || {
                                                                                    listeners: [],
                                                                                    forms: {
                                                                                        on: function (evt, cb) {
                                                                                            window.mc4wp.listeners.push({
                                                                                                event: evt,
                                                                                                callback: cb,
                                                                                            });
                                                                                        },
                                                                                    },
                                                                                };
                                                                            })();
                                                                        </script>
                                                                        <!-- Mailchimp for WordPress v4.9.11 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                                                                        <form
                                                                            id="mc4wp-form-1"
                                                                            class="mc4wp-form mc4wp-form-1023"
                                                                            method="post"
                                                                            data-id="1023"
                                                                            data-name="Newsletter"
                                                                        >
                                                                            <div class="mc4wp-form-fields">
                                                                                <input
                                                                                    class="form-control input-newletter mc4wp_email"
                                                                                    name="EMAIL"
                                                                                    required=""
                                                                                    type="email"
                                                                                    placeholder="Enter your email..."
                                                                                />
                                                                                <button
                                                                                    type="submit"
                                                                                    value="Submit"
                                                                                >
                                                                                    Subscribe
                                                                                </button>
                                                                            </div>
                                                                            <label
                                                                                style="display: none !important"
                                                                            >Leave this field empty if you're
                                                                                human:
                                                                                <input
                                                                                    type="text"
                                                                                    name="_mc4wp_honeypot"
                                                                                    value=""
                                                                                    tabindex="-1"
                                                                                    autocomplete="off"/></label
                                                                            ><input
                                                                                type="hidden"
                                                                                name="_mc4wp_timestamp"
                                                                                value="1714181090"
                                                                            /><input
                                                                                type="hidden"
                                                                                name="_mc4wp_form_id"
                                                                                value="1023"
                                                                            /><input
                                                                                type="hidden"
                                                                                name="_mc4wp_form_element_id"
                                                                                value="mc4wp-form-1"
                                                                            />
                                                                            <div class="mc4wp-response"></div>
                                                                        </form>
                                                                        <!-- / Mailchimp for WordPress Plugin -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-55296b3"
                                                        data-id="55296b3"
                                                        data-element_type="column"
                                                    >
                                                        <div class="elementor-widget-wrap"></div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!-- .site-main -->
                </div>
                <!-- .content-area -->
            </div>
        </section>
    </div>

@stop
@section('script_page')
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 10,
            autoplay: {
                delay: 2000,
            },
            speed: 2000,
            breakpoints: {
                992: {
                    slidesPerView: 5,
                },
                768: {
                    slidesPerView: 3,
                },
                300: {
                    slidesPerView: 2,
                },
            },
        });
        var swiper = new Swiper(".productSwiper", {
            spaceBetween: 10,
            autoplay: {
                delay: 2000,
            },
            speed: 2000,
            breakpoints: {
                992: {
                    slidesPerView: 4,
                },
                768: {
                    slidesPerView: 3,
                },
                300: {
                    slidesPerView: 2,
                },
            },
        });
    </script>

@stop
