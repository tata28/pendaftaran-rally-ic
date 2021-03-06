<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <!-- <meta name="keywords" content="ic, ic 2021, industrial competition, industrial, competition, industrial competition 2021, teknik industri, petra, ukp, petranesian, uk petra">
    <meta name="description" content="Industrial Competition (IC) merupakan salah satu acara tahunan yang dilaksanakan untuk memfasilitasi siswa-siswi SMA yang memiliki keinginan untuk mengetahui lebih lanjut lagi mengenai program studi teknik industri yang ada di Universitas Kristen Petra."> -->
    <meta name="author" content="Universitas Kristen Petra">
    <title>Industrial Competition 2021</title>
    <!-- preloader -->
    <style>
    .content{
      display:none;
    }
    #loader {
      position:absolute;
      width: 100%;
      height: 100%;
      overflow:hidden;
      background-color:#222021;
    }
    #loader svg {
      position: absolute;
      top: 50%;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
      left: 0;
      right: 0;
      margin: auto;
      width:20vw;
      height:20vw;
      background-image:url('assets/image/bg logo.jpg');
      background-size:cover;
      border-radius:500px;
    }
    @media screen and (max-width:538px) {
          #loader svg {
            width:50vw;
            height:50vw;
          }
    }
    </style>
    <!-- end of preloader -->

    <!--Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;1,600&display=swap" rel="stylesheet">

    <!-- icons -->
    <link href="assets/fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->

    <!-- gsap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js" integrity="sha512-UxP+UhJaGRWuMG2YC6LPWYpFQnsSgnor0VUF3BHdD83PS/pOpN+FYbZmrYN+ISX8jnvgVUciqP/fILOXDjZSwg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js" integrity="sha512-DlTk2PLUinhBupE89kHOJTt11QqbRMQVlbb26XVDvp4D1kt0fRvQJslvZnTelRJHq6yK0tIPCR7cul8+9Blz0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- favico -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favico/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="assets/favico/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/favico/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/favico/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/favico/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/favico/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/favico/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/favico/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favico/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="assets/favico/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/favico/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/favico/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/favico/favicon-16x16.png">
  <link rel="manifest" href="assets/favico/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="assets/favico/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
</head>
<body>
  <!-- Preloader -->
  <div id="loader">
    <?php include 'assets/image/preloader.svg'; ?>
  </div>
  <!-- end of preloader -->
  <style>
    @font-face {
      font-family: "lemonmilk";
      src: url("assets/font/lemon_milk/LEMONMILK-Regular.otf") format("opentype");
    }
    body{
      background:#232122;
      color:white;
    }
    .container-main{
      background-size:cover;
      background-image:url('assets/image/bg.png');
      background-attachment:fixed;
      overflow-x:hidden;
    }
    h3, h2, h1{
      font-family: 'lemonmilk';
    }
    h5{
      font-family: 'Montserrat', sans-serif;
      font-size:11pt;
      text-transform:uppercase;
    }
    p{
      font-family: 'Montserrat', sans-serif;
      text-align:left;
      line-height:2em;
      font-weight:400;
      font-size:10pt;
    }
    .header-text{
      font-family: 'Montserrat', sans-serif;
      font-weight:bold;
      font-style:italic;
      color:#a19181;
      text-transform:uppercase;
      position:absolute;
      top:55%;
      left:30%;
      font-size:2.4vw;
    }
    .domain-text{
      width:40%;
      position:absolute;
      top:42%;
      left:30%;
    }
    .header-logo{
      width:18%;
      position:absolute;
      top:32%; 
      left:12%;
    }
    .header-svg{
      width:30%;
      right:0;
      top:0;
    }
    .bg-svg{
      width:30%;
    }
    #main-nav{
      background-color:rgb(35, 33, 34,0.9);
    }
    .navbar-collapse{
      z-index:99;
    }
    .navbar-nav{
      font-family: 'Montserrat', sans-serif;
      letter-spacing:0.3px;
    }
    .event{
      margin-bottom:3%;
      margin-right:3%;
    }
    .event h5{
      font-size:15pt;  
      color:#FDEAC4;
    }

    .header-img{
      width:100%;
      height:100vh;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
    #about-us{
      padding-top:10%;
      padding-left:10%;
      padding-right:10%;
    }
    #jadwal{
      padding-top:10%;
      padding-bottom:10%;
    }
    @media(min-width:992px){
      .quickLinks{
        padding-left:8%;
        
      }
      .contactPerson{
        padding-left:10%;
        
      }
    }
    @media (max-width:991px){
      .logo-home{
        left:48%;
        top:30%;
      }
      .header-logo{
        width:30%;
        position:absolute;
        top:20%; 
        left:37%;
      }
      .header-text{
        top:65%;
      }
      .domain-text{
        top:52%;
      }
      #main-nav{
        background-color:transparent;
        transition: background-color 1s;
      }
      #about-us, #jadwal{
        padding-top:20%;
      }
      .contactUs{
        margin-top:20%;
      }
      .about{
        text-align:center;
      }
      .about p{
        text-align:center;
      }
      .about img{
        margin-left:auto;
        margin-right:auto;
      }
      .quickLinks{
        margin-top:15%;
      }
      .contactUs{
        margin-top:15%;
      }
    }

    p.paragraph-1:first-letter {
      float: left;
      font-size: 45px;
      line-height: 1;
      font-weight: bold;
      margin-right: 9px;
    }
    .about-opt{
      color:#FDEAC4;
      text-align:left;
    }
    .about-opt h3{
      font-size:18pt;
      padding-top:5%;
    }
    .about-opt:hover{
      cursor:pointer;
      color:#232122;
      background:linear-gradient(-45deg, #a96f44, #f2ecb6);
    }
    .btn-back{
      border: 2px solid #FDEAC4;
      color:#FDEAC4;
      background-color:#222021;
      width:50%;
      text-align:center;
    }
    .btn-back:hover{
      cursor:pointer;
      color:#232122;
      background:linear-gradient(-45deg, #a96f44, #f2ecb6);
      border:none;
    }
    .jdl-2{
      font-size:5vw;
    }
    .jdl-ab{
      font-size:10vw;
      text-align:center;
      letter-spacing:2px;
      margin-bottom:0;
    }
    .jdl-us{
      font-size:10vw;
      letter-spacing:2px;
      text-align:center;
    }
    .jdl{
      font-size:10vw;
    }
    .sub-judul{
      font-size:7vw;
    }
    .lines{
      position:absolute;
      left:0;
      width:30%;
    }
    .juara img{
        width:20%;
        height:auto;
    }
    .juara{
      padding-left:10%;
      padding-right:10%;
    }
    .card{
        background-color:#232122;
        color:white;
        border:2px solid white;
        border-radius:5%;
    }
    .cardBorderColor{
        background-color:rgb(37, 150, 190);
    }
    .berita a{
      color:rgb(253,234,196);
    }
    .berita{
      height:100%;
    }
    .news{
      display:grid;
    }
    .gallery img{
      transition:1s;
      filter:grayscale(100%);
    }
    .gallery img:hover{
      filter:grayscale(0%);
      transform:scale(1.1);
    }
    footer{
      padding:5% 10%;
      display:flex;
      /* justify-content: space-between; */
      flex-wrap:wrap;
    }
    footer .sci{
      margin-top:20px;
      display:flex;
    }
    footer .sci li{
      list-style:none;
      color:white;
    }
    footer .sci li a{
      display:inline-block;
      width:40px;
      height:40px;
      display:flex;
      justify-content: center;
      align-items: center;
      margin-right: 10px;
      text-decoration: none;
      border-radius:4px;
    }
    .quickLinks ul li a{
      color:white;
      text-decoration:none;
      margin-bottom: 10px;
      display:inline-block;
    }
    .contact .info{
      position:relative;
    }
    .contact .info li{
      display:flex;
      margin-bottom:16px;
    }
    .contact .info li span{
      color:white;
    }
    @media(max-width:767px){
      .juara{
        padding-left:20%;
        padding-right:20%;
      }
      .jdl{
        font-size:15vw;
      }
      .jdl-2{
        font-size:10vw;
      }
      .sub-jdl{
        font-size:8vw;
      }
      .lines{
        display:none;
      }
      .jdl-ab{
        font-size:15vw;
      }
      .jdl-us{
        font-size:15vw;
      }
      .header-img{
        height:80vh;
      }
    }
    .navbar-toggler:focus, .navbar-toggler:active, .navbar-toggler-icon:focus {
      outline: none;
      box-shadow: none;
    }
    @media(max-height:539px){
      .header-logo{
        top:10%;
      }
      .domain-text{
        top:58%;
      }
      .header-text{
        top:70%;
      }
      .header-img{
        height:90vh;
      }
      #about-us, #jadwal{
        padding-top:10%;
      }
    }
    .timlin{
      border-left:1px solid white;
    }
    @media (max-width:576px){
      .navbar-brand{
        width:79%;
      }
      .header-logo{
        width:50%;
        left:30%;
      }
      .header-text{
        top:60%;
        left:20%;
        font-size:3.5vw;
      }
      .domain-text{
        width:60%;
        left:20%;
      }
    }
    @media(min-width:400px){
      .logoAtas{
        width:300px;
      }
    }
    @media(max-width:400px){
      .header-logo{
        width:60%;
        left:20%;
      }
      .header-text{
        top:65%;
        left:8%;
        font-size:5vw;
      }
      .domain-text{
        top:58%;
        width:80%;
        left:10%;
      }
      .juara{
        padding-left:8%;
        padding-right:8%;
      }
    }
    @media (max-width:400px){
      .navbar-brand{
        width:69%;
      }
      .logoAtas{
        width:200px;
      }
    }
    @media (max-width:264px){
      .navbar-brand{
        width:59%;
      }
    }
    ::-webkit-scrollbar {
        width: 12px;
    }
    ::-webkit-scrollbar-thumb {
        background-color:#fff;
    }
    .about-opt, .btn-back {
      transition: all 0.3s;
      position: relative;
    }
    .about-opt h3, .btn-back h5 {
      transition: all 0.3s;
    }
    .about-opt::before, .btn-back::before {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1;
      opacity: 0;
      transition: all 0.3s;
      border-top-width: 1px;
      border-bottom-width: 1px;
      border-top-style: solid;
      border-bottom-style: solid;
      border-top-color: rgba(255,255,255,0.5);
      border-bottom-color: rgba(255,255,255,0.5);
      transform: scale(0.1, 1);
    }
    .about-opt:hover h3, .about-opt:hover h5, .btn-back:hover h5 {
      letter-spacing: 2px;
    }
    .about-opt:hover::before, .btn-back:hover::before {
      opacity: 1; 
      transform: scale(1, 1); 
    }
    .about-opt::after, .btn-back::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1;
      transition: all 0.3s;
    }
    .about-opt:hover::after, .btn-back:hover::after {
      opacity: 0; 
      transform: scale(0.1, 1);
    }
    .scroll-arrow{
      margin-top:-10%;
      animation: bounce 1s infinite alternate;
      -webkit-animation: bounce 1s infinite alternate;
    }
    .scroll-arrow a{
      text-decoration:none;
      color:white;
    }
    @keyframes bounce {
      from {
        transform: translateY(0vh);
      }
      to {
        transform: translateY(-1.5vh);
      }
    }
    @-webkit-keyframes bounce {
      from {
        transform: translateY(0vh);
      }
      to {
        transform: translateY(-1.5vh);
      }
    }
    .navbar-dark .other:hover{
      transition:all 0.3s;
      letter-spacing:2px;
      background:#FDEAC4;
      color:#232122 !important;
      font-weight:bold;
    }
    .navbar-dark .other{
      transition:all 0.3s;
      border:2px solid #FDEAC4;
      font-weight:bold;
      border-radius:50px;
      background:#232122;
    }
    .navbar-dark .nav-link.active {
      font-weight:bold;
    }
    .navbar-dark .nav-link{
      color:#FDEAC4 !important;
    }
    .navbar-dark .nav-link:hover{
      font-weight:bold;
    }
    .dropdown-menu{
        background:#232122;
        font-style: normal; 
        text-align:center;
        width:92%;
        border:2px solid #FDEAC4;
        border-radius:15px;
    }
    .dropdown-menu>li>a{
        color:#FDEAC4;
        font-weight:bold;
    } 
    .dropdown-menu>li:hover{
        color:#232122;
        background:#FDEAC4;
    } 
    .dropdown-toggle::after{
        border-right: 7px solid transparent;
        border-top: 12px solid #FDEAC4;
        border-left: 7px solid transparent;
        vertical-align:0;
    }
    .dropdown-toggle:hover::after{
        border-right: 7px solid transparent;
        border-top: 12px solid #232122;
        border-left: 7px solid transparent;
    }
    .btn:focus,.btn:active {
        outline: none !important;
        box-shadow: none;
        color:#FDEAC4;
    }
    .dropdown-item:hover{
        background-color:transparent;
    }
    .toright {
      margin-left: 10px;
    }
    .zoom {
      transition: transform .7s;
    }
    .zoom:hover {
      -ms-transform: scale(1.2); /* IE 9 */
      -webkit-transform: scale(1.2); /* Safari 3-8 */
      transform: scale(1.2); 
      color:#FDEAC4;
    }
    </style>
    <div class="content">
    <nav id="main-nav" class="navbar navbar-dark fixed-top navbar-expand-lg">
    <div class="container-fluid">
    <a class="navbar-brand ml-xs-2 p-xs-3" href="#home"><img src="assets/image/logo navbar.jpg" style="width:50px;border-radius:100px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
            <ul class="nav navbar-nav text-center" id="top-menu">
                <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about-us">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="#jadwal">Timeline</a></li>
                <li class="nav-item"><a class="nav-link" href="#berita">News</a></li>
                <li class="nav-item"><a class="nav-link" href="#galeri">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact-us">Contact Us</a></li>
                <div class="dropdown mx-auto">
                  <button class="other nav-link btn dropdown-toggle px-4 ms-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Register / Login
                  </button>
                  <ul class="dropdown-menu dropdown-menu-sm-end mx-auto">
                    <li><a class="dropdown-item lain" href="login.php?to=register">Register</a></li>
                    <li><a class="dropdown-item lain" href="login.php?to=login">Login</a></li>
                  </ul>
                </div>
            </ul>
        </div>
    </div>
</nav>
  <div class="container-fluid container-main p-0">
    <!-- SVG CIRCUIT -->
    <?php include 'assets/image/lines.svg'; ?>

    <!-- END OF SVG CIRCUIT -->
    <section id="home" class="pt-5" style="height:100vh;">
      <img src="assets/image/bg header.png" alt="header" class="header-img">

      <!-- SVG LINES FLIP -->
      <?php include 'assets/image/lines flipped.svg'; ?>

      <!-- END OF SVG LINES FLIP -->
      <img src="assets/image/ic logo.svg" alt="logo ic" class="header-logo">
      <img src="assets/image/domain.png" alt="domain" class="domain-text">
      <h1 class="header-text">industrial competition 2021</h1>
      <div class="scroll-arrow"><a href="#about-us">
        <h5 style="text-align:center;">scroll for more</h5>
        <svg xmlns="http://www.w3.org/2000/svg" width="50" fill="white" viewBox="0 0 16 16" style="display:block;margin:auto;">
          <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
        </svg>
      </a></div>
    </section>
    <section id="about-us">
      <div class="row justify-content-center abt-content">
          <div class="col-12 col-xs-9 col-md-12 px-0">
          <h3 class="jdl-ab">About</h3>
          </div>
          <div class="col-12 col-xs-3 col-md-3 px-0">
          <h3 class="jdl-us">Us</h3>
          </div>
          <div class="col-6 col-md-3 px-0 pt-4" style="">
          <div class="row about-opt opt-1" onclick="opt1()">
            <h3 style="margin-bottom:0;line-height:1.2em;">Program Studi Teknik Industri</h3>
            <h5 class="mt-2">read more <i class="fas fa-arrow-right"></i></h5>
            </div>
            <div class="row about-opt opt-2 mt-3" onclick="opt2()">
            <h3 style="margin-bottom:0;line-height:1.2em;">Industrial Competition 2021</h3>
            <h5 class="mt-2">read more <i class="fas fa-arrow-right"></i></h5>
          </div>
          </div>
          <script>
            $(function(){
              gsap.from(".jdl-ab",{
      scrollTrigger:{
        trigger:".jdl-ab",
        toggleActions:"restart none restart none"
      },
      y:200,
      opacity:0,
      duration:1
    });
    gsap.from(".jdl-us",{
      scrollTrigger:{
        trigger:".jdl-us",
        toggleActions:"restart none restart reset"
      },
      y:200,
      opacity:0,
      duration:1
    });
    gsap.from(".opt-1",{
      scrollTrigger:{
        trigger:".opt-1",
        toggleActions:"restart none restart pause"
      },
      y:200,
      opacity:0,
      duration:1
    });
    gsap.from(".opt-2",{
      scrollTrigger:{
        trigger:".opt-2",
        toggleActions:"restart none restart pause"
      },
      y:200,
      opacity:0,
      duration:1
    });
            });
          </script>
      </div>
    </section>
    <section id="jadwal">
      <div class="container-fluid justify-content-center px-5">
      <div class="row justify-content-center">
        <div class="col-12 col-md-4">
          <h1 class="jdl" style="text-align:center;letter-spacing:2px;padding-right:8%;">Time<br>line</h1>
        </div>
        <div class="col-11 col-md-3 timlin" style="padding-left:3%;">
          <div class="row event p-3 event-1">
            <h3 style="font-size:23pt;margin-bottom:0;">06 Sept - <br>23 Okt 2021</h3>
            <h5>Open Registration</h5>
          </div>
          <div class="row event p-3 event-2">
            <h3 style="font-size:23pt;margin-bottom:0;">09 Nov 2021</h3>
            <h5>technical meeting</h5>
          </div>
          <div class="row event p-3 event-3">
            <h3 style="font-size:23pt;margin-bottom:0;">11 nov 2021</h3>
            <h5>babak 1<br>(Rally Games Online)</h5>
          </div>
        
          <div class="row event p-3 event-4">
            <h3 style="font-size:23pt;margin-bottom:0;">12 nov 2021</h3>
            <h5>babak 2<br>(simulasi bisnis)</h5>
          </div>
          <div class="row event p-3 event-5">
            <h3 style="font-size:23pt;margin-bottom:0;">13 nov 2021</h3>
            <h5>babak 3<br>(studi kasus & presentasi)</h5>
          </div>
        </div>
      </div>
      </div>
    </section>
    <section id="berita" class="pt-5" style="padding-top:10%;padding-bottom:8%;">
        <h3 class="pt-3 mb-3 jdl" style="text-align:center;letter-spacing:2px;">news</h3>
        <h2 class="pt-3 mb-3" style="text-align:center;letter-spacing:2px;color:#FDEAC4;">hadiah</h2>
        <!--Container juara-->
        <div class="container">
          <div class="row pt-2 juara justify-content-center row-cols-1 row-cols-md-2 row-cols-lg-3">
            <div class="col mb-4">
              <div class="card juara1">
                <div class="card-body">
                    <img src="assets/image/medal.png" class="mx-auto d-block" alt="Juara 1">
                    <hr class="mx-auto">
                    <h2 class="card-title text-center">JUARA 1</h2>
                    <hr class="mx-auto">
                    <h5 class="card-text text-center">Uang Tunai sebesar Rp 4.000.000,00 + 100% Beasiswa Universitas Kristen Petra</h5>
                </div>
                <div class="card-footer text-center">
                    <small class="text-muted">Khusus Program Studi Teknik Industri</small>
                </div>
            </div>
              
              </div>
              <div class="col mb-4">
              <div class="card juara2">         
              <div class="card-body">
                  <img src="assets/image/medal2.png" class="mx-auto d-block" alt="Juara2">
                  <hr class="mx-auto">
                  <h2 class="card-title text-center">JUARA 2</h2>
                  <hr class="mx-auto">
                  <h5 class="card-text text-center">Uang Tunai sebesar Rp 2.500.000,00 + 50% Beasiswa Universitas Kristen Petra</h5>
              </div>
              <div class="card-footer text-center">
                  <small class="text-muted">Khusus Program Studi Teknik Industri</small>
              </div>
              </div>
          </div>
          <div class="col mb-4">
              <div class="card juara3">      
              <div class="card-body">
                  <img src="assets/image/medal3.png" class="mx-auto d-block" alt="Juara3">
                  <hr class="mx-auto">
                  <h2 class="card-title text-center">JUARA 3</h2>
                  <hr class="mx-auto"> 
                  <h5 class="card-text text-center">Uang Tunai sebesar Rp 1.500.000,00 + 25% Beasiswa Universitas Kristen Petra</h5>
              </div>
              <div class="card-footer text-center">
                  <small class="text-muted">Khusus Program Studi Teknik Industri</small>
              </div>
              </div>
          </div>
          </div>
        </div> <!--end container juara-->

        <h2 class="pt-5 mb-3 px-3" style="text-align:center;letter-spacing:2px;color:#FDEAC4;">berita dan pengumuman terbaru</h2>
        <!-- container berita dan pengumuman terbaru -->
        <div class="container-fluid justify-content-center">
          <div class="row pt-2 juara justify-content-center row-cols-1 row-cols-md-2 row-cols-lg-3 ">
            
            <div class="col mb-4 d-grid">
              <div class="card berita">
                  <div class="card-body">
                      <hr class="mx-auto d-block">
                      <h3 class="card-title text-center">Tanggal </h3>
                      <h3 class="card-title text-center">Pendaftaran</h3>
                      <hr class="mx-auto">
                      <p class="card-text text-center">06 September - 23 Oktober 2021</p>
                      <p class="card-text text-center" style="font-weight: bold;">(1 tim terdiri dari 4 anak SMA atau sederajat) </p>
                      <p class="card-text text-center"><a href="https://ic.petra.ac.id/pendaftaran">REGISTER NOW</a></p>
                  </div>
              </div>
            </div>
            <div class="col mb-4 d-grid">
              <div class="card berita">
                  <div class="card-body">
                      <hr class="mx-auto d-block">
                      <h3 class="card-title text-center">Biaya </h3>
                      <h3 class="card-title text-center">Pendaftaran</h3>
                      <hr class="mx-auto">
                      <p class="card-text text-center">Early Bird : Rp30.000,00 (10 tim pertama)</p>
                      <p class="card-text text-center">Normal Price : Rp50.000,00</p>
                      <br>
                  </div>
              </div>
            </div>
            <div class="col mb-4 d-grid">
              <div class="card berita">
                  <div class="card-body">
                      <hr class="mx-auto">
                      <h3 class="card-title text-center">Peraturan</h3>
                      <h3 class="card-title text-center">Pendaftaran</h3>
                      <hr class="mx-auto">
                      <p class="card-text text-center">Klik link di bawah ini untuk melihat peraturan pendaftaran</p>
                      <a href="https://ic.petra.ac.id/assets/documents/PERATURAN PENDAFTARAN INDUSTRIAL COMPETITION 2021.pdf" target="_blank"><p class="text-center">Peraturan Pendaftaran IC 2021</p></a>
                  </div>
              </div>
            </div>
              <div class="col mb-4 d-grid">
                <div class="card berita">
                    <div class="card-body">
                        <hr class="mx-auto">
                        <h3 class="card-title text-center">Tutorial</h3>
                        <h3 class="card-title text-center">Pendaftaran</h3>
                        <hr class="mx-auto">
                        <p class="card-text text-center">Klik link di bawah ini untuk melihat tutorial pendaftaran IC 2021</p>
                        <a href="https://ic.petra.ac.id/assets/documents/CARA PENDAFTARAN.pdf" target="_blank"><p class="text-center">Tutorial Pendaftaran</p></a>
                    </div>
                </div>
              </div>
              <div class="col mb-4 d-grid">
                <div class="card berita">
                    <div class="card-body">
                        <hr class="mx-auto">
                        <h3 class="card-title text-center">Peraturan </h3>
                        <h3 class="card-title text-center">Lomba </h3>
                        <hr class="mx-auto">
                        <p class="card-text text-center">Klik link di bawah ini untuk melihat peraturan IC 2021</p>
                        <a href="https://ic.petra.ac.id/assets/documents/PERATURAN LOMBA INDUSTRIAL COMPETITION 2021.pdf"  target="_blank"><p class="text-center mt-4" target="_blank">Klik untuk membaca</p></a>
                    </div>
                </div>
              </div>
              <div class="col mb-4 d-grid">
                <div class="card berita">
                    <div class="card-body">
                        <hr class="mx-auto">
                        <h3 class="card-title text-center">Materi IC</h3>
                        <h3 class="card-title text-center">2021</h3>
                        <hr class="mx-auto">
                        <p class="card-text text-center">Klik link di bawah ini untuk melihat materi IC 2021</p>
                        <a href="https://ic.petra.ac.id/assets/documents/MATERI INDUSTRIAL COMPETITION 2021.pdf" target="_blank"><p class="text-center">Materi IC</p></a>
                    </div>
                </div>
              </div>
          </div>
        </div> <!--end container berita-->
    </section>
    <section id="galeri" class="pt-5" style="padding-top:10%;">
        <h3 class="pt-3 mb-4 jdl-2" style="text-align:center;letter-spacing:2px;">gallery</h3>
        <div class="gallery row row-cols-1 row-cols-md-3 px-5 mb-4">
          <div class="col mb-4 d-flex justify-content-center">
            <img src="assets/image/DOKUMENTASI 20/1.png" class="img-fluid">
          </div>
          <div class="col mb-4 d-flex justify-content-center">
            <img src="assets/image/DOKUMENTASI 20/2.png" class="img-fluid">
          </div> 
          <div class="col mb-4 d-flex justify-content-center">
            <img src="assets/image/DOKUMENTASI 20/3.png" class="img-fluid">
          </div> 
          <div class="col mb-4 d-flex justify-content-center">
            <img src="assets/image/DOKUMENTASI 20/4.png" class="img-fluid">
          </div>  
          <div class="col mb-4 d-flex justify-content-center">
            <img src="assets/image/DOKUMENTASI 20/5.png" class="img-fluid">
          </div>  
          <div class="col mb-4 d-flex justify-content-center">
            <img src="assets/image/DOKUMENTASI 20/6.png" class="img-fluid">
          </div> 
          <div class="col mb-4 d-flex justify-content-center">
            <img src="assets/image/DOKUMENTASI 20/7.png" class="img-fluid">
          </div>  
          <div class="col mb-4 d-flex justify-content-center">
            <img src="assets/image/DOKUMENTASI 20/8.png" class="img-fluid">
          </div> 
          <div class="col mb-4 d-flex justify-content-center">
            <img src="assets/image/DOKUMENTASI 20/9.png" class="img-fluid">
          </div>  
          <div class="col mb-4 d-flex justify-content-center">
            <img src="assets/image/DOKUMENTASI 20/10.png" class="img-fluid">
          </div>  
          <div class="col mb-4 d-flex justify-content-center">
            <img src="assets/image/DOKUMENTASI 20/11.png" class="img-fluid">
          </div>  
          <div class="col mb-4 d-flex justify-content-center">
            <img src="assets/image/DOKUMENTASI 20/12.png" class="img-fluid">
          </div>
        </div>			
    </section>
    <section id="contact-us" class="pt-5 justify-content-center" style="padding-top:10%;background:url('assets/image/bg header.png');background-repeat:repeat;background-size:cover;">
    <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="about col-12 col-lg-4 col-md-12 mb-2 mt-5 text-lg-left text-md-justify text-sm-justify text-justify ">
                        <img src="assets/image/logoAtas1.png" class="logoAtas d-block">
                        <div class="left-text " style="color : #d2d1d1">
                            <h2>Industrial Competition 2021</h2>
                            <p>Petra Christian University</p>
                            <p>Industrial Engineering Departement</p>
                            <p>All rights reserved.</p>
                            <p> &copy 2021</p>
                        </div>
                        <img src="assets/image/logoBawah.png" class="col-lg-2 col-md-12 col-sm-12 col-12 my-2 d-block" style="width:100px;">
                    </div>
                   
                    <style>
                      .ql{
                        margin-bottom:-5px;
                      }
                      .toright a{
                        color:white;
                      }
                      .ql a:hover{
                        color:#FDEAC4;
                        -ms-transform: scale(1.2); /* IE 9 */
                        -webkit-transform: scale(1.2); /* Safari 3-8 */
                        transform: scale(1.2); 
                      }
                      .toright a:hover{
                        color:#FDEAC4;
                        font-size:1.1em;
                        -ms-transform: scale(1.2); /* IE 9 */
                        -webkit-transform: scale(1.2); /* Safari 3-8 */
                        transform: scale(1.2); 
                      }
                    </style>
                    <div class="col-12 col-lg-4 quickLinks  mt-5 mb-lg-0 text-center">
                        <h2>Quick Links</h2>
                        <ul class="nav navbar-nav py-0" id="top-menu" >
                            <li class="nav-item ql"><a class="nav-link active" href="#home">Home</a></li>
                            <li class="nav-item ql"><a class="nav-link" href="#about-us">About Us</a></li>
                            <li class="nav-item ql"><a class="nav-link" href="#jadwal">Timeline</a></li>
                            <li class="nav-item ql"><a class="nav-link" href="#berita">News</a></li>
                            <li class="nav-item ql"><a class="nav-link" href="#galeri">Gallery</a></li>
                            <li class="nav-item ql"><a class="nav-link" href="#contact-us">Contact Us</a></li>
                        </ul>
                        <ul class="socialLinks sci ps-0 d-flex justify-content-center">
                            <li class="zoom">
                              <a href="https://www.instagram.com/icpetra2021" target="_blank">
                                <i class="fab fa-instagram fa-2x"></i>
                              </a>
                            </li>
                            <li class="zoom">
                              <a href="https://line.me/ti/p/~@598wsles"><i class="fab fa-line fa-2x" target="_blank"></i></a>
                            </li>
                            <li class="zoom">
                              <a href="https://www.youtube.com/channel/UC-k9wrqoJdGNGwIhRcltaew" target="_blank"><i class="fab fa-youtube fa-2x"></i></a>
                            </li>
                            <li class="ms-2 zoom">
                              <a href="mailto:IndustrialCompetitionUKP@gmail.com" target="_blank"><i class="fas fa-envelope fa-2x"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="contactPerson col-12 col-lg-4 mb-lg-0 mt-5">
                       <h2 class="text-center">Contact Us</h2>
                        <div class="info mt-2 text-center">
                          <li class="mt-2" style="list-style:none">
                            <span><h4 class="text-center">Silvia Anastasia</h4></span>
                            
                            <span class="toright"><i class="fab fa-line fa-sm"></i>&nbsp <a href="https://line.me/ti/p/~silviaanastasia_" target="_blank" style="text-decoration:none;">silviaanastasia_</a></span><br>
                            
                            <span class="toright" style="margin-left:8px"><i class="fas fa-phone-square-alt fa-sm"></i>&nbsp 081217266768</span>
                          </li>                    
                          <li class="mt-3" style="list-style:none">
                            <span><h4 class="text-center">Clairine Athalia</h4></span>
                            
                            <span class="toright" style="margin-left:1px"><i class="fab fa-line fa-sm"></i>&nbsp <a href="https://line.me/ti/p/~clairineathalia" target="_blank" style="text-decoration:none;">clairineathalia</a></span><br>
                            
                            <span class="toright" style="margin-left:8px"><i class="fas fa-phone-square-alt fa-sm"></i>&nbsp 082335493497</span>
                          </li>              
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
  </div>
  </div>

  <script>
    $(window).on('load',function(){
      $("#loader").fadeOut('slow');
      $('.content').fadeIn('slow');
      $('body').append($(`
      <script>
      gsap.from(".header-img",{
      scrollTrigger:{
        trigger:".header-img",
        toggleActions:"restart none restart pause"
      },
      y:-300,
      opacity:0,
      duration:1.5
    });

    gsap.from(".header-logo",{
      scrollTrigger:{
        trigger:".header-logo",
        toggleActions:"restart none restart pause"
      },
      y:300,
      opacity:0,
      duration:1.5
    });

    gsap.from(".domain-text",{
      scrollTrigger:{
        trigger:".domain-text",
        toggleActions:"restart none restart pause"
      },
      x:-300,
      opacity:0,
      duration:1.5
    });

    gsap.from(".header-text",{
      scrollTrigger:{
        trigger:".header-text",
        toggleActions:"restart none restart pause"
      },
      x:300,
      opacity:0,
      duration:1.5
    });

    gsap.from(".jdl",{
      scrollTrigger:{
        trigger:".jdl",
        toggleActions:"restart none restart none"
      },
      y:200,
      opacity:0,
      duration:1
    });
    gsap.from(".event-1",{
      scrollTrigger:{
        trigger:".event-1",
        toggleActions:"restart none restart pause"
      },
      y:200,
      opacity:0,
      duration:1
    });
    gsap.from(".event-2",{
      scrollTrigger:{
        trigger:".event-2",
        toggleActions:"restart none restart pause"
      },
      y:200,
      opacity:0,
      duration:1
    });
    gsap.from(".event-3",{
      scrollTrigger:{
        trigger:".event-3",
        toggleActions:"restart none restart pause"
      },
      y:200,
      opacity:0,
      duration:1
    });
    gsap.from(".event-4",{
      scrollTrigger:{
        trigger:".event-4",
        toggleActions:"restart none restart pause"
      },
      y:200,
      opacity:0,
      duration:1
    });
    gsap.from(".event-5",{
      scrollTrigger:{
        trigger:".event-5",
        toggleActions:"restart none restart pause"
      },
      y:200,
      opacity:0,
      duration:1
    });
    <\/script>
      `)[0]);
    });
    function back() {
          $(".abt-content").html(`
          <div class="col-12 col-xs-9 col-md-12 px-0">
          <h3 class="jdl-ab">About</h3>
          </div>
          <div class="col-12 col-xs-3 col-md-3 px-0">
          <h3 class="jdl-us">Us</h3>
          </div>
          <div class="col-6 col-md-3 px-0 pt-4" style="">
          <div class="row about-opt opt-1" onclick="opt1()">
            <h3 style="margin-bottom:0;line-height:1.2em;">Program Studi Teknik Industri</h3>
            <h5 class="mt-2">read more <i class="fas fa-arrow-right"></i></h5>
            </div>
            <div class="row about-opt opt-2 mt-3" onclick="opt2()">
            <h3 style="margin-bottom:0;line-height:1.2em;">Industrial Competition 2021</h3>
            <h5 class="mt-2">read more <i class="fas fa-arrow-right"></i></h5>
          </div>
          </div>
          `);
          $(".abt-content").append($(` <script>
            $(function(){
              gsap.from(".jdl-ab",{
      scrollTrigger:{
        trigger:".jdl-ab",
        toggleActions:"restart none restart none"
      },
      y:200,
      opacity:0,
      duration:1
    });
    gsap.from(".jdl-us",{
      scrollTrigger:{
        trigger:".jdl-us",
        toggleActions:"restart none restart reset"
      },
      y:200,
      opacity:0,
      duration:1
    });
    gsap.from(".opt-1",{
      scrollTrigger:{
        trigger:".opt-1",
        toggleActions:"restart none restart pause"
      },
      y:200,
      opacity:0,
      duration:1
    });
    gsap.from(".opt-2",{
      scrollTrigger:{
        trigger:".opt-2",
        toggleActions:"restart none restart pause"
      },
      y:200,
      opacity:0,
      duration:1
    });
            });<\/script>`)[0]);
        }
        function opt1() {
          $(".abt-content").html(`
          <div class="col-12 col-12 p-4">
        <div class="row">
          <div class="col-lg-6">
          <h5 class="about">about us</h5>
          <h2 class="mb-4 mt-2 jdl-2">Program Studi<br>Teknik Industri</h2>
          <div class="btn-back p-2 mb-3" onclick="back()"><i class="fas fa-arrow-left" style="margin-left:-10%;"></i><h5 style="display:inline-block;margin-left:10%;margin-bottom:0;">Back</h5></div>
          </div>
          <div class="col-12 col-lg-6">
          <p class="px-2 mt-4 prgf-1">
            Program Studi Teknik Industri Universitas Kristen Petra didirikan tahun 1992 dan terakreditasi A oleh Badan Akreditasi Nasional Perguruan Tinggi. Hanya TI-UKP yang memiliki kerjasama dengan PT. Schneider Electric, PT. Astra Otoparts, PT. Phillips Indonesia, PT. Ecogreen Oleochemicals, PT. Santos Jaya Abadi (Kapal Api group), PT. Smart Tbk, dan masih banyak industri lainnya. Program Studi Teknik Industri yang dimiliki oleh Universitas Kristen Petra mengajarkan mahasiswanya banyak hal, mulai dari segi teknis maupun segi manajerial di bidang rekayasa industri. Dosen yang ada di teknik industri juga memiliki metode pengajaran yang menarik dan melatih mahasiswa untuk mengembangkan baik hard skill maupun soft skillnya sehingga mahasiswa tidak akan bosan dengan pelajaran yang diberikan. Selain itu lulusan dari teknik industri diharapkan untuk dapat bekerja dengan profesional dan mengatasi semua permasalahan yang ada terkait perkembangan zaman dan teknologi dalam sektor manufaktur maupun dari segi jasa.
          </p>
          <p class="px-2 prgf-2">
            Teknik Industri merupakan salah satu program studi yang sangat menarik. Terutama untuk siswa-siswi yang memiliki keinginan untuk mempelajari dan mendalami berbagai bidang. Lulusan TI-UKP adalah lulusan yang mampu menjadi problem solver masalah industri, memiliki kemampuan manajerial sumber daya dan interpersonal skill, memiliki integritas, mampu bersaing di era global melalui kemampuan IT dan bahasa Inggris, serta memiliki jiwa kewirausahaan. Dalam menghasilkan lulusan TI-UKP yang mampu menjadi problem solver, TI-UKP mengajarkan cara berpikir kritis. Tujuan lain dari pengajaran tersebut adalah agar lulusan TI-UKP juga mampu menciptakan suatu sistem yang efektif dan efisien.
          </p>
          </div>
          </div>
        </div>
          `);
          $(".abt-content").append($(` <script>
            $(function(){
              let tl=gsap.timeline({
      scrollTrigger:{
        trigger:".about",
        toggleActions:"restart none none none"
      }
    });
    tl.from(".about",{
      y:300,
      opacity:0,
      duration:1.5
    }).from(".jdl-2",{
      y:300,
      opacity:0,
      duration:1.5
    },"-=1").from(".btn-back",{
      y:300,
      opacity:0,
      duration:1.5
    },"-=1").from(".prgf-1",{
      y:300,
      opacity:0,
      duration:1.5
    },"-=1").from(".prgf-2",{
      y:300,
      opacity:0,
      duration:1.5
    },"-=1");
            });<\/script>`)[0]);
        }
        function opt2() {
          $(".abt-content").html(`
          <div class="col-12 col-12 p-4">
        <div class="row">
          <div class="col-lg-6">
          <h5 class="about">about us</h5>
          <h2 class="mb-4 mt-2 jdl-2">Industrial Competition<br>2021</h2>
          <div class="btn-back p-2 mb-3" onclick="back()"><i class="fas fa-arrow-left" style="margin-left:-10%;"></i><h5 style="display:inline-block;margin-left:10%;margin-bottom:0;">Back</h5></div>
          </div>
          <div class="col-12 col-lg-6">
          <p class="px-2 prgf-1">
            Industrial Competition (IC) merupakan salah satu acara tahunan yang dilaksanakan untuk memfasilitasi siswa-siswi SMA yang memiliki keinginan untuk mengetahui lebih lanjut lagi mengenai program studi teknik industri yang ada di Universitas Kristen Petra. Setiap tahun IC dilaksanakan dengan mengangkat tema yang berbeda-beda. IC 2021 mengangkat tema ???Digitalization of Manufacturing Industry???. Tema ini diangkat karena ingin mengenalkan lebih dalam mengenai digitalisasi dalam dunia industri. Hal ini dapat terjadi karena ingin menyesuaikan dengan kondisi saat ini yang memiliki perkembangan teknologi yang sangat pesat.
          </p>
          <p class="px-2 prgf-2">
            Bentuk lomba yang digunakan dalam IC berupa games, simulasi, dan studi kasus, sehingga siswa-siswi SMA bisa belajar sambil bermain. Games, simulasi dan studi kasus yang diberikan juga tentunya sangat menarik dan tidak membosankan karena sudah disesuaikan dengan kemampuan dan minat peserta. Lomba ini tidak hanya bagi siswa-siswi yang tertarik di bidang industri saja, karena tema yang diangkat adalah masalah yang general, sehingga pengalaman dan pengetahuan yang didapatkan setelah mengikuti lomba ini bisa diterapkan di semua jurusan yang ingin dimasuki oleh siswa-siswi kedepannya.
          </p>
          </div>
          </div>
        </div>
          `);
          $(".abt-content").append($(` <script>
            $(function(){
    let tl=gsap.timeline({
      scrollTrigger:{
        trigger:".about",
        toggleActions:"restart none none none"
      }
    });
    tl.from(".about",{
      y:300,
      opacity:0,
      duration:1.5
    }).from(".jdl-2",{
      y:300,
      opacity:0,
      duration:1.5
    },"-=1").from(".btn-back",{
      y:300,
      opacity:0,
      duration:1.5
    },"-=1").from(".prgf-1",{
      y:300,
      opacity:0,
      duration:1.5
    },"-=1").from(".prgf-2",{
      y:300,
      opacity:0,
      duration:1.5
    },"-=1");
            });<\/script>`)[0]);
        }
    $(function () {
      $(".nav-link").click(function() {
        $(".nav-link").removeClass("active");
        $(this).addClass("active");
      });
      $(document).on("scroll", onScroll);

      //smoothscroll
      $('a[href^="#"]').on('click', function (e) {
          e.preventDefault();
          $(document).off("scroll");

          $('a').each(function () {
              $(this).removeClass('active');
          })
          $(this).addClass('active');

          var target = this.hash,
              menu = target;
          $target = $(target);
          $('html, body').stop().animate({
              'scrollTop': $target.offset().top
          }, 100, 'swing', function () {
              window.location.hash = target;
              $(document).on("scroll", onScroll);
          });
      });

      gsap.to(".bg-svg",{
        scrollTrigger:{
          trigger:"#galeri",
          toggleActions:"restart none reverse reverse"
        },
        y:200,
        opacity:0,
        duration:1
      });

      gsap.from("#berita",{
        scrollTrigger:{
          trigger:"#berita",
          toggleActions:"restart none none none"
        },
        y:200,
        opacity:0,
        duration:1
      });

      gsap.from("#galeri",{
        scrollTrigger:{
          trigger:"#galeri",
          toggleActions:"restart none none none"
        },
        y:200,
        opacity:0,
        duration:1
      });

      gsap.from("#contact-us",{
      scrollTrigger:{
        trigger:"#contact-us",
        toggleActions:"restart none restart pause"
      },
      x:200,
      opacity:0,
      duration:1
    })

      $('#navbarContent').on('hidden.bs.collapse', function () {
        $('#main-nav').css('background-color','rgb(35,33,34, 0)');
      });
      $('#navbarContent').on('show.bs.collapse', function () {
        $('#main-nav').css('background-color','rgb(35, 33, 34,0.8)');
      });

    });

    function onScroll(event){
      
        var scrollPos = $(document).scrollTop();
        $('#navbarContent a').each(function () {
          if($(this).hasClass('lain')==false){
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                $('#menu-center ul li a').removeClass("active");
                currLink.addClass("active");
            }
            else{
                currLink.removeClass("active");
            }
          }
        });
    }

  </script>
  </body>
  </html>