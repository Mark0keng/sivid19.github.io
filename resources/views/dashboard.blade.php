@extends('layout.guest-login.main')

@section('title', 'Dashboard')

@section('content')

<link rel="stylesheet" href="../css/dashboard.css">

<!-- content -->

	<p class="welcome">Selamat Datang</p>
  <p class="user">User</p>

  <a href="/berita"><button class="btn-berita">Cek Berita</button></a>

  <!-- Slideshow container -->
  <div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="slide_1.png" style="width:100%">
    <div class="text">Massive Covid Demo</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="slide_2.png" style="width:100%">
    <div class="text">Massive Vaccination Already Begin</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="slide_3.png" style="width:100%">
    <div class="text">Various Types of Vaccines Covid Start Prevalent</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>

  <!-- The dots/circles -->
  <div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  </div>


  <!-- ImgButton Menu -->
  <div class="card">
    <div class="imgbtn-1">
      <a href="/berita">
        <img src="tes_covid.png" alt="btn_tes" class="btTxtsubmit">
      </a>
      <p class="tescovid">Layanan Test<br>Covid</p>
    </div>

    <div class="imgbtn-2">
      <a href="">
      <img src="vaksin_covid.png" alt="btn_tes" class="btTxtsubmit">
      </a>
      <p class="tescovid">Layanan Vaksin<br>Covid</p>
    </div>

    <div class="imgbtn-3">
    <a href="">
      <img src="alat_kesehatan.png" alt="btn_tes" class="btTxtsubmit">
    </a>
      <p class="tescovid">Alat Kesehatan</p>
    </div>
  </div>


  <!-- script slideshow -->
  <script>
    var slideIndex = 1;

    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName    ("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace ("   active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
    }
  </script>
  

@endsection
