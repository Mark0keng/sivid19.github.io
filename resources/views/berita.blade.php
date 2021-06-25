@extends('layout.guest-login.main')

@section('login', 'active')

@section('title', 'Login')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .mySlides {display:none}
        .w3-left, .w3-right, .w3-badge {cursor:pointer}
        .w3-badge {height:13px;width:13px;padding:0}
        </style>
</head>
<body>
    <div class="berita">
        <div class="header">
            <p class="sivid">Sivid-19</p>
            <p>News</p>
        </div>
    </div>

    <div class="w3-content w3-display-container" style="max-width:800px; margin-top:20px">
        <img class="mySlides" src="img/berita/berita1.jpg" style="width:100%; height:450px;">
        <img class="mySlides" src="img/berita/berita2.jpg" style="width:100%; height:450px;">
        <img class="mySlides" src="img/berita/berita3.jpg" style="width:100%; height:450px;">
        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
          <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
          <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
          <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
        </div>
      </div>

      <script>
        var slideIndex = 1;
        showDivs(slideIndex);
        
        function plusDivs(n) {
          showDivs(slideIndex += n);
        }
        
        function currentDiv(n) {
          showDivs(slideIndex = n);
        }
        
        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("demo");
          if (n > x.length) {slideIndex = 1}
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-white", "");
          }
          x[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " w3-white";
        }
        </script>
    <div class="titleHeadline">
        <hr id="left">
        <p>Berita Terbaru</p>
        <hr id="right">
    </div>
<div class="headline">

    <div class="h1">
        <img src="img/berita/h1.jpg" alt="" width="200" height="250">
        <p class="title">Headline</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>
    <div class="h2">
        <img src="img/berita/h2.jpg" alt="" width="200" height="250">
        <p class="title">Headline</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>
    <div class="h3">
        <img src="img/berita/h3.jpg" alt="" width="200" height="250">
        <p class="title">Headline</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>
    <div class="h4">
        <img src="img/berita/h4.jpg" alt="" width="200" height="250">
        <p class="title">Headline</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>
    <div class="h5">
        <img src="img/berita/h5.jpg" alt="" width="200" height="250">
        <p class="title">Headline</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>
    <div class="h6">
        <img src="img/berita/h6.jpg" alt="" width="200" height="250">
        <p class="title">Headline</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>

</div>
        
</body>
</html>


@endsection