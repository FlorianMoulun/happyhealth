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
<body class="w-screen h-full lg:w-full lg:h-full">
    <main class="bg-[#200355] h-screen text-stone-50">
        
        <!--Nav-->
        <nav class="w-full flex lg:justify-between lg:items-center lg:h-24 h-20 font-bold"> 
            <div class="flex mt-5 lg:ml-32 md:ml-16 ">
                <img class="mt-1 ml-4 mr-16 h-7" src="../assets/media/logo.png">
                <h2  class="text-xl h2nav invisible md:visible lg:visible ">Happy health</h2>
            </div>

            <div class="flex mt-6 text-xl mr-14 md:ml-32">
				<a class="mr-10 text-sm font text-[#FEC505] lg:text-xl" href="#">Happy</a>
				<a class="text-sm hover:text-[#44b562] lg:text-xl" href="#">Health</a>
			</div>
        </nav> 
        <!-------------Fin du Nav---------------->

    <section class="h-full lg:w-1/2 lg:h-screen"> <!--SECTION 1-->
        <h1 class="text-center mt-6 text-2xl font-bold lg:hidden"><span class="text-[#FEC505]">H</span>appy</h1>
            <div class="w-full flex justify-center">
                <p class="text-xs mt-4 w-72 md:w-9/12 lg:hidden">Human <span class="font-bold">life expectancy</span> is one of the most widely used statistical indicators in 
                the field of demographic forecasting and projections, and to assess <span class="font-bold">the level of
                development</span> and the human development index of a state or region of the world.</p>
            </div> 
         <div class="w-full flex justify-center flex-col lg:ml-10 lg:mt-10 lg:block  hidden">
            <p class=" text-2xl font-bold">Discover <span class="text-[#FEC505]">Happiness</span> score and <span class="text-[#44B562]">Health</span> score (life expectancy)
            since 2015 in every country all around the world !</p>
            <p class="lg:mt-2"><span class="font-bold">Happiness</span> scored according to GDP per Capita, Family, <span class="font-bold">Life Expectancy</span>, Freedom, Generosity, Trust Government Corruption
            describe the extent to which these factors contribute in evaluating the happiness in each country.</p>
        </div>
        <button class="cursor-pointer bg-[#44B562] ml-8 mt-6 w-32 h-8 lg:h-12 lg:w-48 lg:ml-8 md:ml-24 rounded-3xl font-bold ">Health</button>
    </section> <!--Fin de SECTION 1-->


    </main>
    



    <script type="text/javascript" src="../js/advice.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script type="text/javascript" src="../js/chart.js"></script>
    <script src="../js/chart2.js"></script>
</body>
</html>