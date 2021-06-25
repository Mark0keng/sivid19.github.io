@extends('layout.main')

@section('home', 'active')

@section('title', 'Welcome')

@section('content')
	<div class="slide-atas">
		<div class="slidershow middle">
			<div class="slides">
				<input type="radio" name="r" id="r1" checked>
				<input type="radio" name="r" id="r2" >
				<input type="radio" name="r" id="r3" >
				<input type="radio" name="r" id="r4" >
				<input type="radio" name="r" id="r5" >
				<div class="slide s1">
					<img src="r1.jpeg">
				</div>
				<div class="slide">
					<img src="r2.jpg">
				</div>
				<div class="slide">
					<img src="r3.jpeg">
				</div>
				<div class="slide">
					<img src="r4.jpg">
				</div>
				<div class="slide">
					<img src="r5.jpg">
				</div>	
			</div>
		</div>

		<div class="navigation">
			<label for="r1" class="bar" style="border-radius: 10px"></label>
			<label for="r2" class="bar" style="border-radius: 10px"></label>
			<label for="r3" class="bar" style="border-radius: 10px"></label>
			<label for="r4" class="bar" style="border-radius: 10px"></label>
			<label for="r5" class="bar" style="border-radius: 10px"></label>
		</div>
	</div>

	<div class="layanan-home" id="service">
		<h1 style="text-align:center; font-size:40px;">Layanan</h1>
		<div class="slide-cards">
			<div class="card1">
				<img src="j1.jpg" alt="">
				<p>Layanan Tes Covid</p>
			</div>
			<div class="card2">
				<img src="j2.jpg" alt="">
				<p>Layanan Swab Test</p>
			</div>
			<div class="card3">
				<img src="j3.png" alt="">
				<p>Layanan Disinfektan</p>
			</div>
		</div>
	</div>

	<div class="aboutbar" style="margin-top:-2px; margin-bottom:-30px;">
	<div class="container-12" id="about">
            <div class="header">
                <h1 style="font-weight: bold; font-size: 45px; margin-bottom:40px;">About</h1>
            </div>
                <div class="sub-container">
					<div class="teams" style="width:40%;">
							<img src="fina.jpeg" alt="syahrul" style="border-radius: 50%;">
                            <div class="name">Fina Enno Rizki Oktavia Putri</div>
                            <div class="desig">Product Owner</div>
                	</div>
                    <div class="teams" style="width:40%;">
                        <img src="fathiya.jpeg" alt="gesti" style="border-radius: 50%;">
                        <div class="name">Fathiya Farahdilla Husna</div>
                        <div class="desig">Developer</div>
                    </div>
                    <div class="teams" style="width:40%;">
                            <img src="farras.png" alt="syahrul" style="border-radius: 50%;">
                            <div class="name">Farras Arkan Isnaini Josi</div>
                            <div class="desig">The Scrum Master</div>
                    </div>
                    <div class="teams" style="width:40%;">
							<img src="krisna.png" alt="krisna" style="border-radius: 50%;">
                            <div class="name">Krisna Sanjaya </div>
                            <div class="desig">Developer</div>
                	</div>
            	</div>
    </div>
	</div>
	@endsection



