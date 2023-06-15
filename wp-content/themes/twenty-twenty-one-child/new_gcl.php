<?php 

// Template Name: New GCL Template
//get_header();

 ?>
 <!doctype html>
<html lang="en-US" >
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- custom styles  -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Saira:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.css" integrity="sha512-UiVP2uTd2EwFRqPM4IzVXuSFAzw+Vo84jxICHVbOA1VZFUyr4a6giD9O3uvGPFIuB2p3iTnfDVLnkdY7D/SJJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.css" integrity="sha512-jxGmKjC/OykrTklkNK2NgnhNtKtUAADFY+rvSi3nA7dbaPRfjrSXYxHqX8iq5N6WTOntqEQZrEwW3L84sirfKQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel='stylesheet' id='twenty-twenty-one-print-style-css' href='https://globalchessleague.com/wp-content/themes/twentytwentyone/assets/css/print.css?ver=1.0.0' media='print' />
<link rel='stylesheet' id='yoast-seo-adminbar-css' href='https://globalchessleague.com/wp-content/plugins/wordpress-seo/css/dist/adminbar-2070.css' media='all' />
<link rel='stylesheet' id='bootstrap-style-css' href='https://globalchessleague.com/wp-content/themes/twenty-twenty-one-child/assets/bootstrap_5_2_3/css/bootstrap.min.css?ver=a9a422326f6da7fd27da4cb29c17b989' media='all' />
<link rel='stylesheet' id='gcl-child-style-css' href='https://globalchessleague.com/wp-content/themes/twenty-twenty-one-child/styles.css?ver=a9a422326f6da7fd27da4cb29c17b989' media='all' />
    <title>Global Chess League - World’s First and Largest Official Franchise Chess League</title>
    
    <style>
        #main{background: #000}
.swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: auto;
      object-fit: cover;
    }
    .Post-slider .swiper-slide img{
        height: 100%;
    }

    .swiper-horizontal > .swiper-scrollbar, .swiper-scrollbar.swiper-scrollbar-horizontal {
    position: absolute;
    left: 55%;
    bottom: 3px;
    z-index: 999x;
    height: 5px;
    width: 20%;
            opacity: 1 !important;
}
       .swiper-pagination.swiper-pagination-fraction.swiper-pagination-horizontal {
           color: #fff;
           left: 6%;
}
        .swiper-scrollbar-drag {
            background: #ffffffad;
}
        .swiper.mySwiper.swiper-initialized.swiper-horizontal.swiper-free-mode.swiper-watch-progress.swiper-backface-hidden {
    width: 25%;
    height: 15% !important;
    position: absolute;
    top: 85%;
    left: 80%;
}
        #timer{text-align: center;
        }
        #timer div {
    color: #fff;
    display: inline-block;
    padding: 20px;
  font-size: 150px;
            line-height: 160px;
    font-weight:600;
}
 #timer div span {
    display: block;
  font-size: 45px;
  color: white;
border: 1px solid #fff;
     line-height: 40px;

}
        h2, #format h2{ text-align: center;
      font-size: 50px;
    line-height: 90px;
    color: #FFFF68;
}
        p {
    font-size: 20px;
    line-height: 25px;
    color: #fff;
}
        .about-text{max-width: 1024px !important;}
         #format p, #format h3, #format .text-start{color: #fff;}
        .outline{border:2px solid #fff;}
        .outline-1{border-right:2px solid #fff}
        .outline-2{border-right:2px solid #fff;border-top:2px solid #fff}
        .hov-bg:hover { background: #ED00B8;}
        #teams img{width: 100%}
       #teams .col-sm-2.p-1:hover {
    box-shadow: 0px 0px 11px 3px #88888896;
}
.sponse-slider .swiper-button-prev, .sponse-slider .swiper-button-next{
    top:95%;
}
.sponse-slider .swiper-button-prev {
    left: auto;
    right: 70px;
}
.sponse-slider .swiper-button-next{
    left: auto;
    right: 170px;
}
.sponse-slider .swiper-button-next:after, .sponse-slider .swiper-rtl .swiper-button-prev:after, .sponse-slider .swiper-button-prev:after, .sponse-slider .swiper-rtl .swiper-button-next:after, .Post-slider .swiper-button-next:after, .Post-slider .swiper-rtl .swiper-button-prev:after, .Post-slider .swiper-button-prev:after, .Post-slider .swiper-rtl .swiper-button-next:after{
    display: none;
}
.per .swiper-button-next:after, .per .swiper-rtl .swiper-button-prev:after, .per .swiper-button-prev:after, .per .swiper-rtl .swiper-button-next:after, .super-star .swiper-button-next:after, .super-star .swiper-rtl .swiper-button-prev:after, .super-star .swiper-button-prev:after, .super-star .swiper-rtl .swiper-button-next:after, .icons .swiper-button-next:after, .icons .swiper-rtl .swiper-button-prev:after, .icons .swiper-button-prev:after, .icons .swiper-rtl .swiper-button-next:after{
    display:none;
}
.per .swiper-button-prev, .super-star .swiper-button-prev, .icons .swiper-button-prev  {
    left: auto;
    right: 55px;
}
.per .swiper-button-next, .super-star .swiper-button-next, .icons .swiper-button-next  {
    left: auto;
    right:16%;
}
.Post-slider .swiper-slide.swiper-slide-next, .Post-slider .swiper-slide.swiper-slide-active, .Post-slider .swiper-slide.swiper-slide-prev{
    border-right: 2px solid #fff;
    padding-right: 20px;
    padding-left: 20px;
    background: transparent;
}
.Post-slider .swiper-slide.swiper-slide-active{
     border-right: 2px solid #fff;
     border-left: 2px solid #fff;  
}
.Post-slider .swiper-slide {
    padding: 0 20px;
    background: transparent;
}
.Post-slider .swiper-button-prev, .Post-slider .swiper-button-next{
    top:100%;
}
.Post-slider .swiper-button-prev {
    left: auto;
    right: 85px;
}
.Post-slider .swiper-button-next {
    left:auto;
    right: 16%;
    transform: translate(50%);
}
.card{
    border:none;
    border-radius: 0;
}
.Post-slider .swiper-slide img{
    height: 320px;
}
.header-coloum-1{
border-right: 1px solid #707070; height: 100px;
}
.header-coloum-2{
    border-top: 1px solid #707070;
}
.header-coloum-3{
    border-left: 1px solid #707070; height: 100px;
}
.main-logo{
    width: 80%;
}
#timer div span{
    padding: 0 10px 10px;
}
.swiper-slide{
background: transparent;
}
.custom-logo{
    width:100%;
    height:100%;
}
.teams-tab-img{
    width: 10%;
}
.nav-pills .nav-link.active{
    background-color: transparent;
    font-weight: 800;
}
.f-swiper-button img{
       width: 70px; 
}
.post_slider .card-title {
    height:140px;
}

.b-tab {
    overflow:   hidden  ;
  padding: 20px;
  display: none;

}

.b-tab.active {
  display: block;
  height:auto;
  color:#fff;
}

.b-nav-tab {
  display: inline-block;
  padding: 20px 20px 24px 20px;
      font-size: 22px;
    text-decoration: none;
    color: #fff;
    font-weight: 500;
    line-height: 0px;
    text-transform: uppercase;
}

.b-nav-tab.active {
  color: #ffff;
    background: #ED00B8;
    border-radius: 20px;
}
.fts-instagram-scrollable{
    height:280px!important;
}

.r-1rnoaur::-webkit-scrollbar-track
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3)!important;
    background-color: #F5F5F5!important;
}

.r-1rnoaur::-webkit-scrollbar
{
    width:6px!important;
    background-color: #F5F5F5!important;
}

.r-1rnoaur::-webkit-scrollbar-thumb
{
    background-color: #000000!important;
}
.bg-timer{
    background-image: url('/wp-content/uploads/2023/06/GCL_PATTERNS_FULL.png');
    background-size: cover;
        background-position: 100% 100%;
        background-repeat: no-repeat;
}
.swiper-button-next:hover img, .swiper-button-prev:hover img {
    background-color: #ED00B8;
    border-radius: 10px;
}
.per .swiper-button-prev, .per .swiper-button-next, .super-star .swiper-button-prev, .super-star .swiper-button-next, .icons .swiper-button-prev, .icons .swiper-button-next 
 {

   top:100%;
}
.teambanner1, .teambanner2, .teambanner3, .teambanner4, .teambanner5, .teambanner6{
    display: none;
}
@media screen and (max-width: 1024px) {
    ul .menu-item a {
        padding: 5px;
    }
    .main-logo{
    width: 60%;
}
.Post-slider .swiper-button-prev {

    right: 50px;
}
.Post-slider .swiper-button-next {

    right: 52%;
    transform: translate(50%);
}
.fts-instagram-scrollable {
    height: 165px!important;
}
.per .swiper-button-next, .super-star .swiper-button-next, .icons .swiper-button-next {
    right: 25%;
}
}

@media screen and (max-width: 767px) {
    .header-coloum-1{
border-right: 0; height: 0px;
}
.header-coloum-2{
    border-top: 0;
}
.header-coloum-3{
    border-left: 0; height: 0px;
}
.main-logo{
    width: 100%;
}
#timer div{
    font-size: 25px;
    line-height: 40px;
}
#timer div span{
    font-size: 25px;
    line-height: 30px;
    padding-bottom: 5px;
}
.outline{
    border: 0;
}
.outline-2{
    border: 0;
}
.outline-1  {
    border: 0;
}
h2{
    font-size: 30px!important;
    line-height: 35px!important;
}
.swiper.mySwiper.swiper-initialized.swiper-horizontal.swiper-free-mode.swiper-ios.swiper-watch-progress.swiper-backface-hidden.swiper-thumbs{
        left: 72%!important;
}
.f-swiper-button{
    z-index:9;

}
.f-swiper-button img{
       width: 50px; 
}
.sponse-slider .swiper-button-prev {
    right: 35px;
}
.sponse-slider .swiper-button-next {
    right: 110px;
}
.b-nav-tab {
    padding: 12px 12px 14px 12px;
    font-size: 14px;
}
.post_slider .card-title {
    font-size: 18px;
}
.swiper.mySwiper.swiper-initialized.swiper-horizontal.swiper-free-mode.swiper-watch-progress.swiper-backface-hidden {
    left:71%;
}
.Post-slider .swiper-button-prev {

    right: 50px;
}
.Post-slider .swiper-button-next {

    right: 54%;
    transform: translate(50%);
}
.per .swiper-button-next, .super-star .swiper-button-next, .icons .swiper-button-next {
    right: 32%;
}
.per .swiper-button-prev, .per .swiper-button-next, .super-star .swiper-button-prev, .super-star .swiper-button-next, .icons .swiper-button-prev, .icons .swiper-button-next 
 {
      z-index:9;
}
}

    </style>
    
    </head>
    
    <body class="home page-template page-template-homepage page-template-homepage-php page page-id-2 logged-in admin-bar no-customize-support custom-background wp-custom-logo wp-embed-responsive is-dark-theme no-js singular has-main-navigation no-widgets">
    <div class="container-fluid overflow-visible p-0 gcl-header-wrapper bg-dark  px-4 px-lg-0 py-0">
            <nav class="navbar navbar-expand-lg navbar-dark d-block py-0">
                <div class="row justify-content-between align-items-center py-4 py-md-0">
                    <div class="col-3 col-lg-2 col-md-3 px-2 px-lg-4 py-3 header-coloum-1 d-flex justify-content-center align-items-center">
                        <a href="/" class="main-logo"><?php echo get_custom_logo()?></a>
                        </div>
                        <div class="col-6 col-lg-8 col-md-6 px-2 px-lg-5 header-coloum-2">
                            <div class="d-flex justify-content-center d-block d-md-none">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavMobile" aria-controls="navbarNavMobile" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                            <ul class="navbar-nav flex-row align-items-center justify-content-center d-none d-md-flex" style="margin-bottom: -38px;">
                                <li class="nav-item menu-item">
                                    <a class="nav-link text-white" href="#about">ABOUT</a>
                                </li>
                                <li class="nav-item menu-item">
                                    <a class="nav-link text-white" href="#format">FORMAT</a>
                                </li>
                                <li class="nav-item menu-item">
                                    <a class="nav-link text-white" href="#players">PLAYERS</a>
                                </li>
                                <li class="nav-item menu-item">
                                    <a class="nav-link text-white" href="#teams">TEAMS</a>
                                </li>
                                <li class="nav-item menu-item">
                                    <a class="nav-link text-white" href="#news">NEWS</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-3 col-lg-2 col-md-3 px-2 px-lg-5 text-end d-flex justify-content-center align-items-center header-coloum-3">
                            <a class="navbar-brand navbar-brand-2 m-0" href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo1.png"
                            class="img-fluid header_logo_2" style="width: 60px;" /></a>
                        </div>
                        <div class="col-lg-12 d-block d-md-none">
                             <div class="collapse navbar-collapse justify-content-center" id="navbarNavMobile">
                            <ul class="navbar-nav align-items-center justify-content-center">
                                <li class="nav-item menu-item">
                                    <a class="nav-link text-white" href="#about">ABOUT</a>
                                </li>
                                <li class="nav-item menu-item">
                                    <a class="nav-link text-white" href="#format">FORMAT</a>
                                </li>
                                <li class="nav-item menu-item">
                                    <a class="nav-link text-white" href="#players">PLAYERS</a>
                                </li>
                                <li class="nav-item menu-item">
                                    <a class="nav-link text-white" href="#teams">TEAMS</a>
                                </li>
                                <li class="nav-item menu-item">
                                    <a class="nav-link text-white" href="#news">NEWS</a>
                                </li>
                            </ul>
                        </div>
                        </div>
                        </div>
                    </nav>
                </div>
<div id="content" class="site-contents">
<div i d="primary" class="content-area">
<main id="main" class="site-main">
<div class="gcl-homepage">
<section id="banner" class="container-fluid">
    <div class="row">
        <div class="col-lg-8 p-0">
             <div class="container-fluid p-md-0 ps-lg-4">



        
        <div class="swiper mySwiper2">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner.png" alt=""></div>
     <div class="swiper-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner.png" alt=""></div>
     <div class="swiper-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner.png" alt=""></div>
     <div class="swiper-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner.png" alt=""></div>
      
    </div>
           
    <div class="swiper-scrollbar"></div>
            <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
             <div class="swiper-pagination"></div>
  </div>
       <div thumbsSlider="" class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner.png" />
      </div>
      <div class="swiper-slide">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner.png" />
      </div>
      <div class="swiper-slide">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner.png" />
      </div>
      <div class="swiper-slide">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner.png" />
      </div>
           </div></div>
            </div>
        </div>
        <div class="col-lg-4 pe-md-5" >
           <div class="container px-md-5 px-3" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bg-teb.png');background-color: #070116;" >
               <div class="py-3 py-md-4 pb-md-5 pb-4">
                   <ul class="nav nav-pills" id="pills-tab" role="tablist">
  <li class="nav-item d-none" role="presentation">
    <button class="nav-link text-dark active bg-white my-3 me-4" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true" style="font-size: 20px;letter-spacing: 1px;">Standing</button>
  </li>
  <li class="nav-item d-none" role="presentation">
    <button class="nav-link text-dark bg-white my-3 " id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" style="font-size: 20px;letter-spacing: 1px;">Profile</button>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <div class="row" >
    <div class="col-12 text-white">
        <div class="row p-2">
            <div class="col-8" style="letter-spacing: 1px; color: #a9e75d;"><b>TEAMS</b></div>
            <div class="col-1" style="letter-spacing: 1px; color: #a9e75d;"><b>P</b></div>
            <div class="col-1" style="letter-spacing: 1px; color: #a9e75d;"><b>W</b></div>
            <div class="col-1" style="letter-spacing: 1px; color: #a9e75d;"><b>L</b></div>
            <div class="col-1" style="letter-spacing: 1px; color: #a9e75d;"><b>Pts</b></div>
        </div>
    </div>
    <div class="col-12 text-white mt-3">
        <div class="row p-2" style="border: 1px solid #34A994;border-radius: 10px;">
            <div class="col-8 fw-900"><img src="/wp-content/uploads/2023/06/BAK.jpg" class="teams-tab-img"> Balan Alaskan Knights</div>
            <div class="col-1 fw-900">0</div>
            <div class="col-1 fw-900">0</div>
            <div class="col-1 fw-900">0</div>
            <div class="col-1 fw-900">0</div>
        </div>
    </div>
    <div class="col-12 text-white mt-3">
        <div class="row p-2" style="border: 1px solid #B95099;border-radius: 10px;">
            <div class="col-8 fw-900"><img src="/wp-content/uploads/2023/06/CGT.jpg" class="teams-tab-img"> Chingari Gulf Titans </div>
            <div class="col-1 fw-900">0</div>
            <div class="col-1 fw-900">0</div>
            <div class="col-1 fw-900">0</div>
            <div class="col-1 fw-900">0</div>
        </div>
    </div>
    <div class="col-12 text-white mt-3">
        <div class="row p-2" style="border: 1px solid #F2880B;border-radius: 10px;">
            <div class="col-8 fw-900"><img src="/wp-content/uploads/2023/06/GG.jpg" class="teams-tab-img"> Ganges Grandmasters</div>
            <div class="col-1 fw-900">0</div>
            <div class="col-1 fw-900">0</div>
            <div class="col-1 fw-900">0</div>
            <div class="col-1 fw-900">0</div>
        </div>
    </div>
    <div class="col-12 text-white mt-3">
        <div class="row p-2" style="border: 1px solid #34A994;border-radius: 10px;">
            <div class="col-8 fw-900"><img src="/wp-content/uploads/2023/06/SG-2.jpg" class="teams-tab-img"> SG Alpine Warriors</div>
            <div class="col-1 fw-900">0</div>
            <div class="col-1 fw-900">0</div>
            <div class="col-1 fw-900">0</div>
            <div class="col-1 fw-900">0</div>
        </div>
    </div>
    <div class="col-12 text-white mt-3">
        <div class="row p-2" style="border: 1px solid #B95099;border-radius: 10px;">
            <div class="col-8"><img src="/wp-content/uploads/2023/06/TCK-3.jpg" class="teams-tab-img"> Triveni Continental Kings</div>
            <div class="col-1 fw-900">0</div>
            <div class="col-1 fw-900">0</div>
            <div class="col-1 fw-900">0</div>
            <div class="col-1 fw-900">0</div>
        </div>
    </div>
    <div class="col-12 text-white mt-3">
        <div class="row p-2" style="border: 1px solid #F2880B;border-radius: 10px;">
            <div class="col-8"><img src="/wp-content/uploads/2023/06/MM-1.jpg" class="teams-tab-img"> UpGrad Mumba Masters</div>
            <div class="col-1">0</div>
            <div class="col-1">0</div>
            <div class="col-1">0</div>
            <div class="col-1">0</div>
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
<div class="bg-timer">
<section id="timer" class="d-flex pt-md-4">
            <div class="container-fluid g-0 p-0 py-4 ">
                <h2> STARTS IN </h2>
                <div id="timer" class="p-0 pb-3">
    <div id="days" class="pt-0"></div>
    <div id="hours"  class="pt-0"></div>
    <div id="minutes"  class="pt-0"></div>
    <div id="seconds"  class="pt-0"></div>
</div>
                
                </div>
        </section>
<section id="about" class="d-flex">
            <div class="container-md px-4 px-lg-0 g-0 text-center about-text ">
               
                <h2 class="pb-4 mb-3"> ABOUT THE LEGUE </h2>
                <p> Global Chess League (GCL) is the world’s first and largest official franchise chess league bringing fans together to witness the game in a never-seen-before avatar. GCL is the only league in pro sports with a joint team format, featuring both men and women players in the same team, competing for the ultimate prize. The league aims to take the game to millions of fans with new and innovative formats, bringing in a new perspective to the game of chess.</p>
                <p>FIDE and Tech Mahindra have joined hands to promote the game of chess through interactive technology-enabled platforms by leveraging next-gen technologies.</p>
            </div>
        </section>
        </div>
<section id="format" class="d-flex">
            <div class="container-md g-0  about-text">
               
                <h2 class="text-center py-4 mb-4"> Format </h2>
                <div class="row outline m-0" style="max-width: 100%;">
                    <div class="col-md-4 outline-1 p-3 ">
                    <div class=" d-flex hov-bg">
                        <div style="width:100%" class="px-2">
                            <h2 class="text-start">6</h2>
                            <h3>Teams</h3>
                            <p>Double Round Robin</p>
                        </div>
                        <div class="p-3">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon.png" width="55px">
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4 p-3">
                    <div class=" d-flex hov-bg">
                        <div style="width:100%" class="px-1">
                            <h2 class="text-start">6</h2>
                            <h3>Boards</h3>
                            <p>Best of Boards</p>
                        </div>
                        <div class="p-3" >
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon1.png"  width="55px">
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4 p-3">
                    <div class=" d-flex hov-bg">
                        <div style="width:100%" class="px-1">
                            <h2 class="text-start">36</h2>
                            <h3>Players</h3>
                            <p>6 Players in Every Team</p>
                        </div>
                        <div class="p-3">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon2.png" width="55px">
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-4 outline-2 p-3">
                    <div class=" d-flex hov-bg">
                        <div style="width:100%" class="px-1">
                            <h2 class="text-start">2</h2>
                            <h3>Women</h3>
                            <p>In Every Team</p>
                        </div>
                        <div class="p-3">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon3.png" width="55px">
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4 outline-2 p-3">
                    <div class=" d-flex hov-bg">
                        <div style="width:100%" class="px-1">
                            <h2 class="text-start">2.5</h2>
                            <h3>Hours</h3>
                            <p>Rapid Format</p>
                        </div>
                        <div class="p-3" >
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon4.png"  width="55px">
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4 p-3">
                    <div class=" d-flex hov-bg">
                        <div style="width:100%" class="px-1">
                            <h2 class="text-start">10</h2>
                            <h3>Machtes</h3>
                            <p>Each Team</p>
                        </div>
                        <div class="p-3">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon5.png" width="55px">
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>


<section id="sponser" class="sponse-slider container-fluid position-relative px-4 px-md-0 pb-4 pb-md-0">
    <h2 class="pt-4 pt-md-5 pb-5 pb-md-4">Making Moves</h2>
    <div class="swiper sponser_slider pt-md-2">
    <div class="swiper-wrapper pb-4 pb-md-5">
      <div class="swiper-slide"><img src="/wp-content/uploads/2023/06/CP-Gurnani-4.jpg" alt="" class="d-none d-md-block">
        <img src="/wp-content/uploads/2023/06/CD-2.jpg" alt="" class="d-block d-md-none">
      </div>
     <div class="swiper-slide"><img src="/wp-content/uploads/2023/06/Viswanathan-Anand-2.jpg" class="d-none d-md-block">
     <img src="/wp-content/uploads/2023/06/ad-3.jpg" alt="" class="d-block d-md-none">
 </div>
     <div class="swiper-slide"><img src="/wp-content/uploads/2023/06/Arkady-Dvorkovich-2.jpg" class="d-none d-md-block">
     <img src="/wp-content/uploads/2023/06/VA-3.jpg" alt="" class="d-block d-md-none">
 </div>
    </div>
</div>
<div class="f-swiper-button swiper-button-next"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/right-slider-arrow.png"></div>
  <div class="f-swiper-button swiper-button-prev "><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/left-slider-arrow.png"></div>
 
</section>

<section id="players pt-5 mt-5">
<div class="justify-content-center d-flex">
<h2>Players</h2>
</div>
<div class="d-flex justify-content-center py-4 m-2">
<a href="#tab_1" data-tab="tab_1" class="b-nav-tab active">
 Icons
</a>
<a href="#tab_2" data-tab="tab_2" class="b-nav-tab">
 Superstars
</a>
<a href="#tab_3" data-tab="tab_3" class="b-nav-tab">
 Prodigies
</a>
</div>
<div id="tab_1" class="b-tab active">
        <?php

        $args = array(
            'post_type'      => 'icon-player',
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'ASC',
            'posts_per_page' =>   -1,
            
           
           
        );
        $the_query = new WP_Query($args);
        ?>
        <!-- Listing -->
        <?php if ($the_query->have_posts()) : ?>
 <div class="swiper-container icons position-relative">
    <div class="swiper-wrapper">
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <div class="swiper-slide py-4"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="w-100 img-fluid"></div>
       <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); endif; ?>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <div class="f-swiper-button swiper-button-next"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/right-slider-arrow.png"></div>
  <div class="f-swiper-button swiper-button-prev "><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/left-slider-arrow.png"></div>
  </div>
</div>
<div id="tab_2" class="b-tab">
        <?php

        $args = array(
            'post_type'      => 'super-star',
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'ASC',
            'posts_per_page' =>   -1,
           
           
        );
        $the_query = new WP_Query($args);
        ?>
        <!-- Listing -->
        <?php if ($the_query->have_posts()) : ?>
 <div class="swiper-container super-star position-relative">
    <div class="swiper-wrapper">
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <div class="swiper-slide py-4"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="w-100 img-fluid"></div>
       <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); endif; ?>
    <!-- Add Pagination -->
    <div class="f-swiper-button swiper-button-next"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/right-slider-arrow.png"></div>
  <div class="f-swiper-button swiper-button-prev "><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/left-slider-arrow.png"></div>
    <div class="swiper-pagination"></div>
  </div>
</div>
<div id="tab_3" class="b-tab">
        <?php

        $args = array(
            'post_type'      => 'prodigy',
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'ASC',
            'posts_per_page' =>   -1,
           
           
        );
        $the_query = new WP_Query($args);
        ?>
        <!-- Listing -->
        <?php if ($the_query->have_posts()) : ?>
 <div class="swiper-container per position-relative">
    <div class="swiper-wrapper">
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <div class="swiper-slide py-4"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="w-100 img-fluid"></div>
       <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); endif; ?>
   <div class="f-swiper-button swiper-button-next"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/right-slider-arrow.png"></div>
  <div class="f-swiper-button swiper-button-prev "><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/left-slider-arrow.png"></div>
  </div>
</div>

</section>


<section id="teams" class="d-flex">
            <div class="container-fluid p-3 p-md-4 bg-line">
                <h2 class="text-center"> Teams </h2>
                <div class="swiper team_slider">
                    <div class="swiper-wrapper">
                <div class="swiper-slide px-3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/BAK.jpg" class="image-fluid team1">
                </div>
                <div class="swiper-slide px-3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/CGT.jpg" class="image-fluid team2">
                </div>
                    <div class="swiper-slide px-3">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/GG.jpg" class="image-fluid team3">
                </div>
                    <div class="swiper-slide px-3">
                    <img src="/wp-content/uploads/2023/06/TCK-3.jpg" class="image-fluid team4">
                </div>
                    <div class="swiper-slide px-3">
                    <img src="/wp-content/uploads/2023/06/SG-2.jpg" class="image-fluid team5">
                </div>
                    <div class="swiper-slide px-3">
                    <img src="/wp-content/uploads/2023/06/MM-1-1.jpg" class="image-fluid team6">
                </div>

                    
                </div>
                
    </div>
    
    
    </section>


<section id="teams-banner">
            <div class="container-fluid">
               <div class="row mt-3 justify-content-center">
                <div class="col-md-7">
                <h2 class="teambanner1 mt-3"> Balan Alaskan Knights</h2>
                <img src="/wp-content/uploads/2023/06/balan-alaskan-knights.jpg" class="image-fluid w-100 teambanner1">
            </div>
            <div class="col-md-7 ">
                <h2 class="teambanner2 mt-3">Chingari Gulf Titans </h2>
                <img src="/wp-content/uploads/2023/06/chingari-gulf-titans.jpg" class="image-fluid w-100 teambanner2">
            </div>
            <div class="col-md-7">
                <h2 class="teambanner3 mt-3">Ganges Grandmasters</h2>
                <img src="/wp-content/uploads/2023/06/gangs-grandsmaster.jpg" class="image-fluid w-100 teambanner3">
            </div>
            <div class="col-md-7">
                <h2 class="teambanner4 mt-3"> Triveni Continental Kings</h2>
                <img src="/wp-content/uploads/2023/06/triveni-contitental.jpg" class="image-fluid w-100 teambanner4">
            </div>
            <div class="col-md-7 ">
               <h2 class="teambanner5 mt-3">SG Alpine Warriors</h2>
                <img src="/wp-content/uploads/2023/06/alpine-warriors.jpg" class="image-fluid w-100 teambanner5">
            </div>
            
            <div class="col-md-7 ">
                <h2 class="teambanner6 mt-3"> UpGrad Mumba Masters</h2>
                <img src="/wp-content/uploads/2023/06/mumba-masters.jpg" class="image-fluid w-100 teambanner6">
            </div>
            
        </div>
                
    </div>
    
    
    </section>
   
    
<section id="social" class="d-flex">
<div class="container-fluid px-md-5 pt-5 px-3 ">
    <div class="row">
        <div class="col-sm-8 p-0">
        <h2 class="text-center">Hall of Fame</h2>
        <video src="/wp-content/uploads/2023/06/4mb-2-.mp4" autoplay loop muted width="100%" height="70%" class="pt-5" ></video>
        <!--<p class="text-white text-center"> Draw inspiration from the legends of 3D Hall of Fame </p>-->
        <!--<div class="d-flex justify-content-center">-->
        <!--<a href="#"><button class="py-2 px-3" style="border:1px solid #fff;color:#FFFF68;background-color:#000;border-radius: 15px;">Download Meta App</button></a>-->
        <!--</div>-->
        </div>
        <div class="col-sm-4">
            <h2 class="text-center pb-md-5 pb-4"> Twitter </h2>
           <a class="twitter-timeline" data-width="100%" data-height="500" data-theme="dark" href="https://twitter.com/GCLlive?ref_src=twsrc%5Etfw">Tweets by GCLlive</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        
        </div>
    
    </div>
    
    </div>
    </section>
    <section id="app" class="d-flex pt-5 pt-md-0">
<div class="container-fluid p-0">
    <div class="row">
        <div class="col-sm-4 py-md-5 py-3" >
        <div class="d-flex justify-content-center" style="border-right:1px solid #fff">
        <img src="/wp-content/uploads/2023/06/iphone13.png" class="image-fluid" style="width:47%"></div>
        <!--<p class="text-white text-center"> Draw inspiration from the legends of 3D Hall of Fame </p>-->
        <div class="d-flex justify-content-center px-2">
        <a href="#" class="pt-4 text-decoration-none"><button class="py-2 px-5 d-flex align-items-center" style="border:0;color:#FFF;background-color:#ED00B8;border-radius: 15px;"><b><img src="/wp-content/uploads/2023/06/Group.png" style="width:15%">&nbsp Fan Engagement App</b></button></a>
        </div>
        </div>
        <div class="col-sm-8 p-md-5 p-3">
            <div class="d-flex justify-content-center">
           <img src="/wp-content/uploads/2023/06/Frame-30.png" class="image-fluid w-100"></div>
         <div class="d-flex justify-content-center">
        <a href="#"  class="pt-4 text-decoration-none"><button class="py-2 px-5 d-flex align-items-center" style="border:0;color:#FFF;background-color:#ED00B8;border-radius: 15px;"><b><img src="/wp-content/uploads/2023/06/Group.png" style="width:25%">&nbsp Meta App</b></button></a>
        </div>
        </div>
    
    </div>
    
    </div>
    </section>
    
    <section id="news pb-5 pt-4 pt-md-0">
         <div class="p-0 pb-5">
            <h2 class="text-center">News & media</h2>
        <div class="Post-slider container position-relative">
                        <?php

                            $args = array(
                                'post_type'      => 'post',
                                'post_status'    => 'publish',
                                'orderby'        => 'date',
                                'order'          => 'DESC',
                                'posts_per_page' =>   -1,
                            );
                            $the_query = new WP_Query($args);
                            ?>
                            <!-- Listing -->
                            <?php if ($the_query->have_posts()) : ?>
    <div class="swiper post_slider">
    <div class="swiper-wrapper py-5">
         <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <div class="swiper-slide">
<div class="card bg-dark">
  
  <div class="card-body p-0 ">
    <div class="position-relative card-title">
    <h5 class="   pb-4 text-white text-start position-absolute" style="bottom:0"><?php echo get_the_title(); ?></div>
    <div class="d-flex justify-content-end">
        <a href="<?php the_field('news_link'); ?>" class="pb-4 d-flex justify-content-end">
        <img src="http://gcl.turninon.in/wp-content/uploads/2023/06/left-slider-arrow.png" class="image-fluid" style="height:100%;width:60%"></a>
    </div>
    <img class="image-fluid" img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Card image">
  </div>
</div>
      </div>
             <?php endwhile; ?>

 </div>
</div>
<div class="g-swiper-button swiper-button-next"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/right-slider-arrow.png"></div>
  <div class="g-swiper-button swiper-button-prev "><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/left-slider-arrow.png"></div>
 <?php //echo do_shortcode('[insta-gallery-id="0"]') ;?>
 <?php wp_reset_postdata(); endif; ?>
</div>

        </div>
    </section>
    
    <section id="insta" class="d-flex pt-5 pt-md-0">
    
<div class="container-fluid">
    <div class="row">
        
         <?php echo do_shortcode( '[feed_them_social cpt_id=772]' ); ?> 
    
    </div>
    
    </div>
    </section>
    
    <div class="d-flex justify-content-center">
        <h2 class="pb-5 pt-5 pt-md-0">Sponsors</h2>
    </div>
    <section id="sponsors-footer" class="all-sponsors container">
       <div class="row justify-content-center">
           <div class="col-md-9">
             <img src="/wp-content/uploads/2023/06/Sponsors.png" class="image-fluid w-100">  
           </div>

       </div>
       
       <div class="row justify-content-center py-5">
           <div class="col-md-6 pt-3">
             <img src="/wp-content/uploads/2023/06/footer_logos-1.png" class="image-fluid w-100">  
           </div>

       </div>
    </section>
</div>
</main>
</div>
</div>
<section class="footer_client bg-dark pt-4" id="footer_client" style="border-top: 1px solid #fff;">
                        <div class="container">
                           <div class="row pb-4 pt-4 pt-md-0 justify-content-center">
                            <div class="col-md-2 d-flex justify-content-center">
                                <div class="row justify-content-center pb-4 pb-md-0">
                                    <div class="col-3"><a href="https://www.facebook.com/OfficialGlobalChessLeague"><img src="/wp-content/uploads/2023/06/fb7png.png" class="image-fluid"></a></div>
                                    <div class="col-3"><a href="https://www.instagram.com/officialglobalchessleague/"><img src="/wp-content/uploads/2023/06/insta.png" class="image-fluid"></a></div>
                                    <div class="col-3"><a href="https://twitter.com/GCLlive"><img src="/wp-content/uploads/2023/06/twiter.png" class="image-fluid"></a></div>
                                    <div class="col-3"><a href="https://www.linkedin.com/company/officialglobalchessleague/?viewAsMember=true"><img src="/wp-content/uploads/2023/06/in9.png" class="image-fluid"></a></div>
                                    
                                </div>
                            </div>
                                <div class="col-md-8 text-white text-center"><p>&copy; 2023, Global Chess League. All Rights Reserved.</p></div>
                                <div class="col-md-2">
                                    <p class="d-flex justify-content-center"><a href="https://globalchessleague.com/privacy-policy/" class="footer-links text-white" style="text-decoration:none;">PRIVACY POLICY</a></p>
                                </div>
                            </div>
                            
                        </div>
                    </section>
    
   <script>document.body.classList.remove("no-js");</script>
    <script>
    if ( -1 !== navigator.userAgent.indexOf( 'MSIE' ) || -1 !== navigator.appVersion.indexOf( 'Trident/' ) ) {
        document.body.classList.add( 'is-IE' );
    }
    </script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src='https://globalchessleague.com/wp-includes/js/hoverintent-js.min.js?ver=2.2.1' id='hoverintent-js-js'></script>
<script src='https://globalchessleague.com/wp-includes/js/admin-bar.min.js?ver=a9a422326f6da7fd27da4cb29c17b989' id='admin-bar-js'></script>
<script id='twenty-twenty-one-ie11-polyfills-js-after'>
( Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach ) || document.write( '<script src="https://globalchessleague.com/wp-content/themes/twentytwentyone/assets/js/polyfills.js?ver=1.0.0"></scr' + 'ipt>' );
</script>
<script src='https://globalchessleague.com/wp-content/themes/twentytwentyone/assets/js/primary-navigation.js?ver=1.0.0' id='twenty-twenty-one-primary-navigation-script-js'></script>
<script src='https://globalchessleague.com/wp-content/themes/twentytwentyone/assets/js/responsive-embeds.js?ver=1.0.0' id='twenty-twenty-one-responsive-embeds-script-js'></script>
        <script>
        /(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",(function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())}),!1);
        </script>
        
<!-- custom script  -->
<link rel="stylesheet" type="text/javascript" href="https://globalchessleague.com/wp-content/themes/twenty-twenty-one-child/assets/bootstrap_5_2_3/js/bootstrap.bundle.min.js">


     <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
         <script>
             $(document).ready(function () {
    function makeTimer() {

                   var endTime = new Date("21 June 2023 9:56:00 GMT+01:00");            
            endTime = (Date.parse(endTime) / 1000);

            var now = new Date();
            now = (Date.parse(now) / 1000);

            var timeLeft = endTime - now;

            var days = Math.floor(timeLeft / 86400); 
            var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
            var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
            var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
            if (days < "10") { days = "0" + days; }
            if (hours < "10") { hours = "0" + hours; }
            if (minutes < "10") { minutes = "0" + minutes; }
            if (seconds < "10") { seconds = "0" + seconds; }

            $("#days").html(days + "<span>Days</span>");
            $("#hours").html(hours + "<span>Hours</span>");
            $("#minutes").html(minutes + "<span>Minutes</span>");
            $("#seconds").html(seconds + "<span>Seconds</span>");       

    }

    setInterval(function() { makeTimer(); }, 1000);
});

             // Banner slider
             var swiper = new Swiper(".mySwiper", {
      loop: true,
      spaceBetween: 10,
      slidesPerView: 2,
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper = new Swiper(".mySwiper2", {
            loop: false,
      scrollbar: {
        el: ".swiper-scrollbar",
        hide: true,
      },
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
        pagination: {
        el: ".swiper-pagination",
        type: "fraction",
      },
        thumbs: {
        swiper: swiper,
      },
    });
// timer



// sponser-slider

    var swiper_team = new Swiper('.sponser_slider', {
     slidesPerView: 1,
     spaceBetween: 30,
     loop: true,
     speed: 1000,
     navigation: {
      nextEl: ".f-swiper-button.swiper-button-next",
      prevEl: ".f-swiper-button.swiper-button-prev",
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 1,
      },
      1024: {
        slidesPerView: 1,
      },
    },
  });



    // blog-slider

    var swiper_team = new Swiper('.post_slider', {
     slidesPerView: 1,
     spaceBetween: 0,
     loop: true,
     speed: 1000,
      autoplay: {
    delay: 5000,
                 },
     navigation: {
      nextEl: ".g-swiper-button.swiper-button-next",
      prevEl: ".g-swiper-button.swiper-button-prev",
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });


    // team_slider

    var swiper_team = new Swiper('.team_slider', {
     slidesPerView: 2,
     spaceBetween: 0,
     loop: false,
     speed: 1000,
     navigation: {
      nextEl: ".g-swiper-button.swiper-button-next",
      prevEl: ".g-swiper-button.swiper-button-prev",
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 6,
      },
    },
  });

<!--players-sliders-->

 'use strict';

function Tabs() {
  var bindAll = function() {
    var menuElements = document.querySelectorAll('[data-tab]');
    for(var i = 0; i < menuElements.length ; i++) {
      menuElements[i].addEventListener('click', change, false);
    }
  }

  var clear = function() {
    var menuElements = document.querySelectorAll('[data-tab]');
    for(var i = 0; i < menuElements.length ; i++) {
      menuElements[i].classList.remove('active');
      var id = menuElements[i].getAttribute('data-tab');
      document.getElementById(id).classList.remove('active');
    }
  }

  var change = function(e) {
    clear();
    e.target.classList.add('active');
    var id = e.currentTarget.getAttribute('data-tab');
    document.getElementById(id).classList.add('active');
  }

  bindAll();
}

var connectTabs = new Tabs();

var swiper = new Swiper('.icons', {
      slidesPerView: 1,
      spaceBetween: 30,
      freeMode: true,
      loop: true,
     speed: 1000,
      autoplay:true,
       navigation: {
      nextEl: ".f-swiper-button.swiper-button-next",
      prevEl: ".f-swiper-button.swiper-button-prev",
    },
       breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
      
    });
var swiper = new Swiper('.super-star', {
      slidesPerView: 1,
      spaceBetween: 30,
      freeMode: true,
      autoplay:true,
      loop: true,
     speed: 1000,
      navigation: {
      nextEl: ".f-swiper-button.swiper-button-next",
      prevEl: ".f-swiper-button.swiper-button-prev",
    },
       breakpoints: {
      640: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 4,
      },
    },
      
    });
var swiper = new Swiper('.per', {
      slidesPerView: 1,
      spaceBetween: 30,
      freeMode: true,
      autoplay:true,
      loop: true,
     speed: 1000,
      navigation: {
      nextEl: ".f-swiper-button.swiper-button-next",
      prevEl: ".f-swiper-button.swiper-button-prev",
    },
       breakpoints: {
      640: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 4,
      },
    },
      
    });


// Teams Tabs


$(document).ready(function(){  
    $(".team1").click(function(){  
        $(".teambanner1").show();
        $(".teambanner2, .teambanner3, .teambanner4, .teambanner5, .teambanner6").hide();
    });
     $(".team2").click(function(){  
        $(".teambanner2").show();
        $(".teambanner1, .teambanner3, .teambanner4, .teambanner5, .teambanner6").hide();  
    });
     $(".team3").click(function(){  
        $(".teambanner3").show();
        $(".teambanner2, .teambanner1, .teambanner4, .teambanner5, .teambanner6").hide();  
    });  
      $(".team4").click(function(){  
        $(".teambanner4").show();
        $(".teambanner2, .teambanner3, .teambanner1, .teambanner5, .teambanner6").hide(); 
    });
       $(".team5").click(function(){  
        $(".teambanner5").show();
        $(".teambanner2, .teambanner3, .teambanner4, .teambanner1, .teambanner6").hide(); 
    });
        $(".team6").click(function(){  
        $(".teambanner6").show();
        $(".teambanner2, .teambanner3, .teambanner4, .teambanner5, .teambanner1").hide();  
    });
})




  </script>

<!--<script type="text/javascript" src="https://globalchessleague.com/wp-content/themes/twenty-twenty-one-child/scripts.js"></script>-->
    <link rel='stylesheet' id='fts-feed-styles-css'  href='https://gcl.turninon.in/wp-content/plugins/feed-them-social/includes/feeds/css/styles.css?ver=4.1.5' media='all' />
    <script src='https://gcl.turninon.in/wp-content/plugins/feed-them-social/includes/feeds/js/fts-global.js?ver=4.1.5' id='fts-global-js-js'></script>
<script src='https://gcl.turninon.in/wp-content/plugins/feed-them-social/includes/feeds/js/powered-by.js?ver=4.1.5' id='fts-powered-by-js-js'></script>
<script src='https://gcl.turninon.in/wp-content/plugins/feed-them-social/admin/js/admin.js?ver=4.1.5' id='fts_clear_cache_script-js'></script>
    </body>
</html>