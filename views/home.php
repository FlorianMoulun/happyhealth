<?php
	
?>

	<!DOCTYPE html>
	<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://cdn.tailwindcss.com"></script>
		<script src="https://kit.fontawesome.com/75892227ad.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Happy Health</title>
	</head>
	<body>
		<main class="bg-[#200355] h-full text-stone-50">
			<nav class=" h-24 font-bold flex justify-around items-center lg:justify-between">
				<div class="lg:flex lg:ml-10">
					<img class="lg:mr-10" src="assets/media/logo.png">
					<h2 class="hidden lg:flex lg:text-2xl">Happy health </h2>
				</div>
				<div class="lg:mr-10">
					<a class="mr-5 md:mr-12 lg:text-2xl hover:text-[#FCC306] hover:underline" href="happiness">Happy</a>
					<a class="lg:text-2xl lg:ml-10 hover:text-[#4CBA69] hover:underline" href="health">Health</a>
				</div>
			</nav>

			<div class="lg:flex">
				<section class="mx-5 lg:w-1/2 lg:mx-20">
					<h1 class="mt-10 text-center font-bold text-2xl lg:hidden"><span class="text-[#FEC505]">H</span>appy <span class="text-[#44B562]">H</span>ealth</h1>
					<div class="mt-5">
						<p class="text-sm md:text-base lg:text-3xl font-bold text-justify">Discover <span class="text-[#FEC505]">Happiness</span> score and <span class="text-[#14D654]">Health</span> score <span class="font-medium">(life expectancy)</span> since 2015 in every country all around the world !</p>
						<p class="text-justify text-xs  md:text-sm font-light mt-5 lg:text-xl"><span class="font-bold">Happiness</span> scored according to GDP per Capita, Family, <span class="font-bold">Life Expectancy</span>, Freedom, Generosity, Trust Government Corruption describe the extent to which these factors contribute in evaluating the happiness in each country.</p>
						<div class="flex justify-around lg:w-1/2">
							<a href="happiness"><button class="mt-5 bg-[#FEC505] font-bold w-24 h-8 text-sm md:text-base lg:h-12 lg:w-48 btnhappy">Happiness</button></a>
							<a href="health"><button class="mt-5 bg-[#14D654] font-bold w-24 h-8 text-sm md:text-base lg:h-12 lg:w-48 btnhealth" >Health</button></a>
						</div>
					</div>
					<div class="mt-5 bg-[#1A0245] rounded-xl" id="chart">
						<p class="text-[10px] md:text-base text-center">Average World Hapiness Score over time</p>
						<div class="lg:w-full lg:h-full">
			  				<canvas id="myChart"></canvas>
						</div>
					</div>
				</section>
				<section class="lg:mr-20">
					<div class="hidden lg:flex lg:justify-center lg:mt-5">
						<img class="w-10/12" src="assets/media/picture_right.svg">
					</div>
	 <!--carousel champions happiness-->
					<div class="mt-20 flex justify-around md:mx-5 lg:mt-5">
						<div class="bg-[#1A0245] divboxshadow w-1/2 ">
							<div class="flex justify-center"><div class="circle"><i class="fa-solid fa-trophy text-[#FEC505]"></i></div></div>
							<h3 class="text-[#FEC505] text-center font-bold text-[10px] md:text-base">Champion of Happiness</h3>
							<div class="flex mt-5">
								<img id="flag_happy" class="w-1/5 ml-5 md:ml-10" src=" ">
								<div class="ml-5">
									<h2 id="country_happy" class="text-sm md:text-base font-bold md:ml-5"> </h2>
									<p id="value_happy" class="text-sm  md:text-base text-[#787878] text-center"> </p>
								</div>
								

							</div>
							<div class="flex justify-around mt-10">
								<i id="arrow_happy_left" class="fa-solid fa-arrow-left text-[#FEC505] text-2xl"></i>
								<p id="year_happy" class="text-sm text-[#787878] md:text-base"> </p>
								<i id="arrow_happy_right" class="fa-solid fa-arrow-right text-[#FEC505] text-2xl"></i>
							</div>
						</div>
  <!--carousel champions health-->
						<div class="bg-[#1A0245] divboxshadow w-1/2">
							<div class="flex justify-center"><div class="circle"><i class="fa-solid fa-trophy text-[#14D654] "></i></div></div>
							
							<h3  class="text-[#14D654] text-center font-bold text-[10px] md:text-base">Champion of Health</h3>
							<div class="flex mt-5">
								<img id="flag_health" class="w-1/5 ml-5 md:ml-10" src=" ">
								<div class="ml-5">
									<h2 id="country_health" class="text-sm font-bold md:text-base md:ml-5"> </h2>
									<p id="value_health" class="text-sm text-[#787878] text-center md:text-base"> </p>
								</div>
							</div>
							<div class="flex justify-around mt-10">
								<i id="arrow_health_left" class="fa-solid fa-arrow-left text-[#14D654] text-2xl md:mt-5"></i>
								<p id="year_health" class="text-sm text-[#787878] md:text-base md:mt-5"> </p>
								<i id="arrow_health_right" class="fa-solid fa-arrow-right text-[#14D654] text-2xl md:mt-5"></i>
							</div>
						</div>
					</div>
					<div class="bg-[#1A0245] w-auto mt-12 mx-5 lg:py-5" id="advice">
						<div class="container flex flex-col items-center">
		        			<div class="text-[#EE6355] font-bold flex justify-center pt-3" id="result2"></div>
		       				<div class="font-bold flex text-justify mt-5 mx-5 lg:my-5" id="result"></div>
		       				<div class="flex justify-between">
		       					<hr class="w-[150px] mt-2">
		       					<img class="mx-2" src="assets/media/quote.svg">
		       					<hr class="w-[150px] mt-2">
		       				</div>
		       				
		                	<button class="mt-5" id ="getData">
		                   	 	<i class="fa-solid fa-shuffle"></i>
		               		 </button>
	    				</div>
	    


					</div>
				</section>
			</div>
			<footer class="mt-12 mx-5">
				<hr>
				<p class="text-sm text-[#787878] mt-5">&copy; 2022 Floriane Simmet - Made with &#9829; </p>
			</footer>
		</main>
		<script type="text/javascript" src="js/happy_champion.js"></script>
		<script type="text/javascript" src="js/health_champion.js"></script>
		<script type="text/javascript" src="js/advice.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
		<script type="text/javascript" src="js/chart.js"></script>
	</body>
	</html>

