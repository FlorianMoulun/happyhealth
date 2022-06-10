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
    <main class="bg-[#200355]  h-full text-stone-50 flex flex-wrap">
    
        <!--Nav-->
        <nav class="w-full flex lg:justify-between lg:items-center lg:h-24 h-20 font-bold"> 
            <div class="flex mt-5 lg:ml-32 md:ml-16 ">
                <img class="mt-1 ml-4 mr-16 h-7" src="../assets/media/logo.png">
                <h2  class="text-xl h2nav invisible md:visible lg:visible ">Happy health</h2>
            </div>

            <div class="flex mt-6 text-xl mr-14 md:ml-32">
				<a class="mr-10 text-sm  lg:text-xl" href="#">Happy</a>
				<a class="text-sm text-[#44b562] lg:text-xl" href="#">Health</a>
			</div>
        </nav> 
        <!-------------Fin du Nav---------------->

        <!----------------------------------SECTION 1------------------------------->
        <section class=" lg:w-1/2 sm:w-full md:w-full"> 
            <h1 class="text-center mt-6 text-2xl font-bold lg:hidden"><span class="text-[#44b562]">H</span>ealth</h1>
                <div class="w-full flex justify-center">
                    <p class="text-xs mt-4 w-72 md:w-9/12 lg:hidden 2-xl:hidden xl:hidden">Human <span class="font-bold">life expectancy</span> is one of the most widely used statistical indicators in 
                    the field of demographic forecasting and projections, and to assess <span class="font-bold">the level of
                    development</span> and the human development index of a state or region of the world.</p>
                </div> 
            <div class="w-full flex justify-center flex-col lg:ml-10 lg:mt-10 2-xl:block xl:block lg:block  hidden">
                <p class=" text-2xl font-bold xl:w-3/4">Discover <span class="text-[#FEC505]">Happiness</span> score and <span class="text-[#44B562]">Health</span> score (life expectancy)
                since 2015 in every country all around the world !</p>
                <p class="lg:mt-2 xl:w-3/4"><span class="font-bold">Happiness</span> scored according to GDP per Capita, Family, <span class="font-bold">Life Expectancy</span>, Freedom, Generosity, Trust Government Corruption
                describe the extent to which these factors contribute in evaluating the happiness in each country.</p>
            </div>
            <button id="btnhappy" class="cursor-pointer bg-[#FEC505] mb-8 ml-8 mt-6 w-32 h-8 lg:h-12 lg:w-48 lg:ml-8 md:ml-24 rounded-3xl font-bold ">Happy</button>


            <!--2 BLOC-->
            <div class=" flex justify-around xl:mt-20 lg:mt-20 md:mt-20 md:mx-5 lg:mt-5">
                <div class="bg-[#1A0245] divboxshadow w-1/2">
                    <div class="flex justify-center"><div class="circle"><i class="fa-solid fa-info flex justify-center text-[#44B562]"></i></div></div>
                        <div class="placei flex justify-center"> <!--Placer le i-->
						    <div class="circle h-8 w-8 text-[#44B562] rounded-full"><i class="fa-solid fa-info flex justify-center "></i></div>
					    </div>
							<div class="placeconti mt-9">
							<h3 class="text-[#44b562] text-center font-bold lg:mt-3 2xl:mt-3 xl:mt-3 sm:text-xs md:text-xs">World Health Day</h3>
								<p class="intertxt xl:text-4xl 2xl:text-4xl lg:text-4xl text-center font-bold">7 April 2022</p>
								<a href="https://www.dayofhappiness.net/" target="_blank"><i class="share fa-solid fa-up-right-from-square mt-5 w-full h-2.5 text-center text-[#44b562]"></i></a>
							</div>
                    </div>

                    <div class="bg-[#1A0245] divboxshadow w-1/2">
                        <div class="flex justify-center"><div class="circle"><i class="fa-solid fa-trophy text-[#14D654] "></i></div></div>
                        
                        <h3 class="text-[#14D654] text-center font-bold text-[10px] md:text-base">Champion of Health</h3>
                        <div class="flex mt-5">
                            <img class="w-1/5 ml-5 md:ml-10" src="https://countryflagsapi.com/svg/Iceland">
                            <div class="ml-5">
                                <h2 class="text-sm font-bold md:text-base md:ml-5">Iceland</h2>
                                <p class="text-sm text-[#787878] text-center md:text-base">0,95</p>
                            </div>
                        </div>
                        <div class="flex justify-around mt-10">
                            <i class="fa-solid fa-arrow-left text-[#14D654] text-xs lg:text-lg md:mt-5"></i>
                            <p class="text-sm text-[#787878] md:text-base md:mt-5">2022</p>
                            <i class="fa-solid fa-arrow-right text-[#14D654] text-xs lg:text-lg md:mt-5"></i>
                        </div>
                    </div>
            </div> <!--Fin des 2 BLOCS-->

            <!--GRAPHIQUE 1-->
            <div class=" mt-8 bg-[#1A0245] rounded-xl" id="chart">
                <h2 class="mb-10 text-xs lg:text-xl xl:text-xl text-center font-bold">Average World Health Score over time</h2>
                <div class=" blocdate flex justify-evenly mt-3"> 
                        <i class="fa-solid fa-arrow-left text-[#44b562] text-xs lg:text-lg"></i>
                        <p class="text-[#787878]">2022</p>
                        <i class="fa-solid fa-arrow-right text-[#44b562] text-xs lg:text-lg"></i>
				</div>
                <div class="w-5/6">
                    <canvas id="myChart"></canvas>
                </div>
			</div>
        </section> <!----------Fin de SECTION 1----------->

        <!-------------------------------------SECTION 2-------------------------------------->

        <section class="lg:w-1/2 sm:w-full md:w-full"> 

            <div class=" mt-8 bg-[#1A0245] rounded-xl w-full lg:hidden xl:hidden 2xl:hidden " id="chart2">
                <h2 class="mb-5 text-center text-sm lg:text-xl xl:text-xl 2xl:text-xl font-bold text-[#44b562]">Health Score per country</h2>
                <p class="text-xs font-bold text-center">Switzerland<i class=" ml-4 fa-solid fa-angle-down text-[#44b562]"></i></p>
                <div class="w-full flex justify-center">
                    <canvas id="myChart2"></canvas>
                </div>
			</div>

        <!--Bloc info-->
            <div class="placecont mb-11 hidden lg:block xl:block 2xl:block"> <!--Placer le container au centre du bloc-->
					<div class="cont bg-[#1a0245] "> <!--Container d'information I-->
					<div class="placei flex justify-center"> <!--Placer le i-->
						<div class="circle h-8 w-8 text-[#FEC505] rounded-full"><i class="fa-solid fa-info flex justify-center "></i></div>
					</div>
							<div class="placeconti mt-9">
							<h3 class="text-[#FEC505] text-center font-bold mt-3">International Day of Hapiness</h3>
								<p class="intertxt text-4xl text-center font-bold">20th March 2022</p>
								<a href="https://www.dayofhappiness.net/" target="_blank"><i class="share fa-solid fa-up-right-from-square mt-5 w-full h-2.5 text-center text-[#FEC505]"></i></a>
							</div>
					</div>
				</div>
        <!--Fin du bloc info-->

             <!--ALIGNER DEUX BLOCS-->
            <div class="lg:flex mt-40 ml-8 hidden ">
                <div class=" bg-[#1A0245] mr-10 w-96 px-10"> <!--Bloc Happin Score-->
                    <h3 class="text-[#FEC505] text-center font-bold mt-3">Happiness Score per country</h3>
                    <div class="flex item-center mt-10">
                        <div class="w-6/6">
                            <canvas id="myChart2"></canvas>
                        </div>
                    </div>
                </div> <!--Fin du bloc happin Score-->

                
                <!--Bloc Champion of happin.-->
                <div class=" bg-[#1A0245] mr-10 w-96 px-10"> 
                    <div class="flex justify-center"><div class="circle"><i class="fa-solid fa-trophy text-[#FEC505]"></i></div></div>
                    <h3 class="text-[#FEC505] text-center font-bold mt-3">Champion of Happiness</h3>
                    <div class="flex item-center mt-10">
                        <img class="w-24" src="https://countryflagsapi.com/svg/Switzerland">
                        <h2 class="ml-10 mt-10 font-bold">Switzerland</h2>
                    </div>
                    <div class="flex justify-between mt-10">
                        <i class="fa-solid fa-arrow-left text-[#FEC505] text-xs lg:text-lg"></i>
                        <p class="text-[#787878]">2022</p>
                        <i class="fa-solid fa-arrow-right text-[#FEC505] text-xs lg:text-lg"></i>
                    </div>
                </div>
            </div>


            <!--PODIUM-->
            <div class="lg:w-full lg:flex lg:justify-center"><!--Placer le graphique-->
                <div class="bg-[#1A0245] w-full mt-8 ml-2 lg:ml-8 rounded-xl w-full lg:w-9/12"><!--Container podium-->
                    <h3 class="text-center text-xs lg:text-base  text-[#44b562] font-bold">Top 3 Countries per year</h3>
                        <div class=" blocdate flex justify-evenly mt-3"> <!--Bloc Date Podium-->
                                <i class="fa-solid fa-arrow-left text-[#44b562] text-xs lg:text-lg"></i>
                                <p class="text-[#787878] text-xs lg:text-base">2022</p>
                                <i class="fa-solid fa-arrow-right text-[#44b562]  text-xs lg:text-lg"></i>
                        </div>

                        <div class=""><!--Bloc du podium-->
                            <div class="w-full flex justify-evenly lg:h-full"><!--Placer les pays-->
                                <p class="text-xs lg:text-base font-bold">Denmark</p>
                                <p class="text-xs lg:text-xl font-bold xl:mr-5">Finland</p>
                                <p class="text-xs lg:text-sm font-bold">Iceland</p>
                            </div>

                            <div class="w-full flex justify-center mb-8 "><!--Placer le podium 1-->
                                <div class="absolute flex justify-center bg-[#FEC505] w-24 h-10 rounded z-2"><p class="text-2xl lg:text-4xl font-bold">1</p></div>
                            </div>
                           
                            <div class="absolute w-full lg:h-2 lg:ml-10  mb-8 ml-8 md:mb-4 md:ml-32  "><!--Placer podium 2-->
                                <div class=" absolute bg-[#FEC505] md:w-40 xl:h-7 lg:h-5 lg:w-32 md:h-9 rounded  h-7 w-20 z-1"><p class="w-full text-center text-xl lg:text-3xl font-bold">2</p></div>
                            </div>
                            
                            <div class="flex justify-center w-full"><!--Placer le podium 3-->
                                <div class="flex w-9/12 h-7  md:h-9 lg:h-15 xl:w-12/12 md:w-3/5 lg:w-4/5 lg:h-7 bg-[#FEC505] rounded "><p class="text-right w-full text-xs lg:text-2xl mr-8 font-bold">3</p></div>
                            </div>
                           
                        </div>
                </div>
            </div>
            

            


        </section> <!--Fin de Section 2-->

        <!--FOOTER-->
        <footer class="mt-12 mx-5 w-full ">
				<hr class="">
				<p class="text-sm text-[#787878]  mt-5">&copy; 2022 Floriane Simmet - Made with &#9829; </p>
		</footer>

    </main>

    <script type="text/javascript" src="../js/advice.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script type="text/javascript" src="../js/chart.js"></script>
    <script src="../js/chart2.js"></script>
</body>
</html>