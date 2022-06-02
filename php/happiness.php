<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://cdn.tailwindcss.com"></script>
	<script src="https://kit.fontawesome.com/75892227ad.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" href="../css/happiness.css">

	<title>Happy Health</title>
</head>

<body>
	<main class="bg-[#200355] w-screen h-screen text-stone-50"> <!--Main-->

		<nav class="w-full flex justify-between items-center h-24 font-bold">
			<div class="flex ml-32">
				<img class="mr-16" src="../assets/media/logo.png">
				<h2 class="text-xl h2nav">Happy health</h2>
			</div>
			<div class="text-xl mr-32">
				<a class="mr-16 text-[#FEC505]" href="#">Happy</a>
				<a class="hover:text-[#44b562]" href="#">Health</a>
			</div>
		</nav>

		<div class="flex w-full"> <!---Display flex Width 100% -->
			<section class="w-1/2 ml-32 mt-16">
				<div>
					<p class="text-2xl font-bold text-justify">Discover <span class="text-[#FEC505]">Happiness</span> score and <span class="text-[#14D654]">Health</span> score <span class="font-medium">(life expectancy)</span> since 2015 in every country all around the world !</p>
					<p class="text-base font-light mt-5"><span class="font-bold">Happiness</span> scored according to GDP per Capita, Family, <span class="font-bold">Life Expectancy</span>, Freedom, Generosity, Trust Government Corruption describe the extent to which these factors contribute in evaluating the happiness in each country.</p>
					<button class="bg-[#14D654] rounded-3xl w-1/3 h-12 mt-12 ml-5 font-bold">Health</button>
				</div>
				<div class=" mt-5 bg-[#1A0245] rounded-xl" id="chart">
					<h2 class="mb-20">Average World Hapiness Score over time</h2>
					<div class="w-5/6">
		  				<canvas id="myChart"></canvas>
					</div>
				</div>
			</section>

			<section class="w-2/3 mt-10">
				<div class="placecont mb-11"> <!--Placer le container au centre du bloc-->
					<div class="cont bg-[#1a0245] "> <!--Container d'information I-->

					<div class="placei flex justify-center"> <!--Placer le i-->
						<div class="circle pl-4 text-[#FEC505]"><i class="fa-solid fa-info"></i></div>
					</div>

							<div class="placeconti mt-9">
							<h3 class="text-[#FEC505] text-center font-bold mt-3">International Day of Hapiness</h3>
								<p class="intertxt text-4xl text-center font-bold">20th March 2022</p>
								<a href="https://www.dayofhappiness.net/" target="_blank"><i class="share fa-solid fa-up-right-from-square mt-5 w-full h-2.5 text-center text-[#FEC505]"></i></a>
							</div>
					</div>
				</div> <!--Fin du bloc information-->

				<div class="flex justify-center">

					<div class="bg-[#1A0245] mr-10 w-96 px-10"> <!--Bloc Happin Score-->
						<h3 class="text-[#FEC505] text-center font-bold mt-3">Happiness Score per country</h3>
						<div class="flex item-center mt-10">
							<!--REMPLIR LE CHAMPS-->
						</div>
					</div>

					<div class="bg-[#1A0245] mr-10 w-96 px-10"> <!--Bloc Champion of happin.-->
						<div class="flex justify-center"><div class="circle"><i class="fa-solid fa-trophy text-[#FEC505]"></i></div></div>
						<h3 class="text-[#FEC505] text-center font-bold mt-3">Champion of Happiness</h3>
						<div class="flex item-center mt-10">
							<img class="w-24" src="https://countryflagsapi.com/svg/Switzerland">
							<h2 class="ml-10 mt-10 font-bold">Switzerland</h2>

						</div>
						<div class="flex justify-between mt-10">
							<i class="fa-solid fa-arrow-left text-[#FEC505] text-2xl"></i>
							<p>2022</p>
							<i class="fa-solid fa-arrow-right text-[#FEC505] text-2xl"></i>
						</div>
					</div>
				</div>


				<div class="bg-[#1A0245] w-auto mt-10 ml-24 mr-20"> <!--Container podium-->
					<div class="container">
	        			<div class="text-[#EE6355] font-bold flex justify-center mb-5" id="result2"></div>
	       				<div class="font-bold flex justify-center mb-5" id="result"></div>
	                	<button id ="getData">
	                   	 	<i class="fa-solid fa-shuffle"></i>
	               		 </button>
    				</div>
				</div>

			</section>
		</div>

	</main>

	<script type="text/javascript" src="../js/advice.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script type="text/javascript" src="../js/chart.js"></script>
</body>
</html>