<!DOCTYPE html>
<html lang="pt-BR">
	<!--begin::Head-->
	<head>
		<base href="">
		<title>MicroForce Analytics</title>
		<meta name="description" content="Politicar Uma nova maneira de acompanhar a Politica no Brasil" />
		<meta name="keywords" content="politicar" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

		<link href="2024/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="2024/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

	</head>

	<body id="kt_body"  data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200" class="bg-white position-relative">
		
	
		<div class="d-flex flex-column flex-root">
			
		
			<div class="mb-0" id="home">
				
			<div style="width: 100%; background-color: #0a193a;" align="center">
				<img src="{{ url('assets/imagens/nasa-topo.png') }}" style="height: 150px;">
				</div>

				<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg">
					
				
					<div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
				
						<div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
						
							<h1 class="text-white lh-base fw-bolder fs-2x fs-lg-3x mb-15">MicroForce Analytics
							<br />
							<span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
                                TEAM CODECREATORS
							</span></h1>
							<img src="{{ url('assets/imagens/team.png') }}">
						</div>
						
						
					</div>
					<!--end::Landing hero-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Curve bottom-->
				<div class="landing-curve landing-dark-color mb-10 mb-lg-20">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve bottom-->
			</div>
			

			<div class="mb-n10 mb-lg-n20 z-index-2">
				<div class="container">
					<div class="text-center mb-17">
					
						<h3 class="fs-2hx text-dark mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">MicroForce Analytics <br>"Clear Visualization of Complex Data"</h3>
						<div class="fs-5 text-muted fw-bold">
						The "MicroForce Analytics" tool optimizes data usage by providing clear and intuitive visualization of complex information, enhancing researchers' ability to interpret and analyze intricate data sets. 
						The graph will allow researchers to clearly and intuitively visualize the relationship between stimulation frequency and muscle strength. This is crucial for understanding how muscles respond to different frequencies, especially in simulated microgravity conditions.
						
						<canvas id="myChart" width="400" height="200"></canvas>
						<br>
						<input type="range" id="frequencySlider" min="1" max="160" value="1" step="1"><br>
						<label for="frequencySlider">Frequency: <span id="frequencyValue">1 Hz</span></label>

					</div>
				</div>
			</div>
			
			<div class="mt-sm-n10">

				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
				</div>
				
				<div class="pb-15 pt-18 landing-dark-bg">
					<div class="container">
						<div class="text-center mt-15 mb-18" id="achievements" data-kt-scroll-offset="{default: 100, lg: 150}">

							<h3 class="fs-2hx text-white fw-bolder mb-2">Data used to generate graphs</h3>
							
							<h2 class="text-white">https://osdr.nasa.gov/bio/repo/data/studies/OSD-662</h2>
							<br><br>
							<img src="{{ url('assets/imagens/data.png') }}">

						</div>
					</div>
				</div>

				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>

			</div>
			
			<div class="mb-n10 mb-lg-n20 z-index-2">
				<div class="container">
					<div class="text-center mb-17">
				
						<h3 class="fs-2hx text-dark mb-5"  data-kt-scroll-offset="{default: 100, lg: 150}"><br>MicroForce Analytics <br>"Interactive Analysis"</h3>
					
						<div class="fs-5 text-muted fw-bold">
						With the slider functionality, users will be able to interact with the data in real time, adjusting frequencies and immediately observing how this affects muscle strength. This interactivity can facilitate scenario exploration and the formulation of new hypotheses.</div>
						<br><br>

						<canvas id="myBarChart" width="400" height="150"></canvas><br><br>
						<input type="range" id="frequencySliderBar" min="1" max="160" value="1" step="1"><br>
						<label for="frequencySliderBar">Frequency: <span id="frequencyValueBar">1 Hz</span></label><br><br>
						
					</div>
				</div>
			</div>


			<div class="mt-sm-n10">

				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
				</div>
				
				<div class="pb-15 pt-18 landing-dark-bg">
					<div class="container">
						<div class="text-center mt-15 mb-18" id="achievements" data-kt-scroll-offset="{default: 100, lg: 150}">

							<h3 class="fs-2hx text-white fw-bolder mb-2">Challenge</h3>
							<br><br>
							<h2 class="text-white">The graphs will be a valuable tool for optimizing data usage by allowing a clear and intuitive visualization of complex information, such as the relationship between stimulation frequency and muscle strength. The ability to interact with the data in real time, adjusting frequencies through a slider, facilitates dynamic analysis that helps identify patterns and trends. Additionally, comparing experimental groups provides an effective way to assess whether the observed changes are significant, fostering the formulation of new hypotheses. This contributes to more informed decision-making, especially in developing strategies to mitigate muscle atrophy in astronauts.
							</h2>
						</div>
					</div>
				</div>

				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>

			</div>
			
			
			


			<div class="mb-n10 mb-lg-n20 z-index-2">
				<div class="container">
					<div class="text-center mb-17">
				
						<h3 class="fs-2hx text-dark mb-5"  data-kt-scroll-offset="{default: 100, lg: 150}"><br>MicroForce Analytics <br>"Comparison Between Experimental Groups"</h3>
					
						<div class="fs-5 text-muted fw-bold">
						The graphs can help visually compare the responses of different experimental groups. This can clarify whether the observed changes in muscle strength are significant and how they relate to variables such as GSK3β content.

						<div style="width:400 !important;">
						<canvas id="myRadarChart" width="400" height="150"></canvas>
						</div>
						<input type="range" id="frequencySliderRadar" min="1" max="160" value="1" step="1">
						<label for="frequencySliderRadar">Frequency: <span id="frequencyValueRadar">1 Hz</span></label>
						
					</div>
				</div>
			</div>




			<div class="mt-sm-n10">

				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
				</div>

				<div class="pb-15 pt-18 landing-dark-bg">
					<div class="container">
						<div class="text-center mt-15 mb-18" id="achievements" data-kt-scroll-offset="{default: 100, lg: 150}">

							<h3 class="fs-2hx text-white fw-bolder mb-2">Challenge</h3>
							<br><br>
							<h2 class="text-white">The graphs will be a valuable tool for optimizing data usage by allowing a clear and intuitive visualization of complex information, such as the relationship between stimulation frequency and muscle strength. The ability to interact with the data in real time, adjusting frequencies through a slider, facilitates dynamic analysis that helps identify patterns and trends. Additionally, comparing experimental groups provides an effective way to assess whether the observed changes are significant, fostering the formulation of new hypotheses. This contributes to more informed decision-making, especially in developing strategies to mitigate muscle atrophy in astronauts.
							</h2>
						</div>
					</div>
				</div>

				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>

			</div>



			<div class="mb-n10 mb-lg-n20 z-index-2">
				<div class="container">
					<div class="text-center mb-17">
				
						<h3 class="fs-2hx text-dark mb-5"  data-kt-scroll-offset="{default: 100, lg: 150}"><br>MicroForce Analytics <br>"Identification of Patterns and Trends"</h3>
					
						<div class="fs-5 text-muted fw-bold">
						The graph can help identify patterns, such as the relationship between frequency and muscle strength, allowing researchers to better understand the underlying mechanisms behind the changes observed during the experiments.

						<canvas id="myPolarChart" width="150" height="150"></canvas>
						<input type="range" id="frequencySliderPolar" min="1" max="160" value="1" step="1"><br>
						<label for="frequencySliderPolar">Frequency: <span id="frequencyValuePolar">1 Hz</span></label>
						
					</div>
				</div>
			</div>


			<div class="mb-0">
				<!--begin::Curve top-->
				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve top-->
				<!--begin::Wrapper-->
				<div class="landing-dark-bg pt-20">
					<!--begin::Container-->
					<div class="container">
						<!--begin::Row-->
						<div class="row py-10 py-lg-20">
							<!--begin::Col-->
							<div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
								<!--begin::Block-->
								<div class="rounded landing-dark-border p-9 mb-10">
									<!--begin::Title-->
									<h2 class="text-white">Would you need a Custom License?</h2>
									<!--end::Title-->
									<!--begin::Text-->
									<span class="fw-normal fs-4 text-gray-700">Email us to
									<a href="https://keenthemes.com/support" class="text-white opacity-50 text-hover-primary">support@keenthemes.com</a></span>
									<!--end::Text-->
								</div>
								<!--end::Block-->
								<!--begin::Block-->
								<div class="rounded landing-dark-border p-9">
									<!--begin::Title-->
									<h2 class="text-white">How About a Custom Project?</h2>
									<!--end::Title-->
									<!--begin::Text-->
									<span class="fw-normal fs-4 text-gray-700">Use Our Custom Development Service.
									<a href="../../demo2/dist/pages/profile/overview.html" class="text-white opacity-50 text-hover-primary">Click to Get a Quote</a></span>
									<!--end::Text-->
								</div>
								<!--end::Block-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-lg-6 ps-lg-16">
								<!--begin::Navs-->
								<div class="d-flex justify-content-center">
									<!--begin::Links-->
									<div class="d-flex fw-bold flex-column me-20">
										<!--begin::Subtitle-->
										<h4 class="fw-bolder text-gray-400 mb-6">More for Metronic</h4>
										<!--end::Subtitle-->
										<!--begin::Link-->
										<a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">FAQ</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Documentaions</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Video Tuts</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Changelog</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Github</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="text-white opacity-50 text-hover-primary fs-5">Tutorials</a>
										<!--end::Link-->
									</div>
									<!--end::Links-->
									<!--begin::Links-->
									<div class="d-flex fw-bold flex-column ms-lg-20">
										<!--begin::Subtitle-->
										<h4 class="fw-bolder text-gray-400 mb-6">Stay Connected</h4>
										<!--end::Subtitle-->
										<!--begin::Link-->
										<a href="#" class="mb-6">
											<img src="2024/assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
										</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="mb-6">
											<img src="2024/assets/media/svg/brand-logos/github.svg" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Github</span>
										</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="mb-6">
											<img src="2024/assets/media/svg/brand-logos/twitter.svg" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
										</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="mb-6">
											<img src="2024/assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Dribbble</span>
										</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="mb-6">
											<img src="2024/assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
										</a>
										<!--end::Link-->
									</div>
									<!--end::Links-->
								</div>
								<!--end::Navs-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Container-->
					<!--begin::Separator-->
					<div class="landing-dark-separator"></div>
					<!--end::Separator-->
					<!--begin::Container-->
					<div class="container">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
							<!--begin::Copyright-->
							<div class="d-flex align-items-center order-2 order-md-1">
								<!--begin::Logo-->
								<a href="../../demo2/dist/landing.html">
									<img alt="Logo" src="2024/assets/media/logos/logo-landing.svg" class="h-15px h-md-20px" />
								</a>
								<!--end::Logo image-->
								<!--begin::Logo image-->
								<span class="mx-5 fs-6 fw-bold text-gray-600 pt-1" href="https://keenthemes.com">© 2021 Keenthemes Inc.</span>
								<!--end::Logo image-->
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-bold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
								<li class="menu-item">
									<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
								</li>
								<li class="menu-item mx-5">
									<a href="https://keenthemes.com/support" target="_blank" class="menu-link px-2">Support</a>
								</li>
								<li class="menu-item">
									<a href="" target="_blank" class="menu-link px-2">Purchase</a>
								</li>
							</ul>
							<!--end::Menu-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Wrapper-->
			</div>

			<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
				<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
				<span class="svg-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
						<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
					</svg>
				</span>
				<!--end::Svg Icon-->
			</div>
			
			
		</div>
		<!--end::Main-->
		<script>var hostUrl = "2024/assets/";</script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="2024/assets/plugins/global/plugins.bundle.js"></script>
		<script src="2024/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="2024/assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
		<script src="2024/assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="2024/assets/js/custom/landing.js"></script>
		<!--end::Page Custom Javascript-->
		
		<script>

			var ctx = document.getElementById('myChart').getContext('2d');

			// Dados de força para cada frequência
			var forceData = {
				1: { "1 Flox HLS": 26.70566543, "2 Flox HLS": 34.91898714, "3 Flox HLS": 24.73366781, "4 Flox HLS": 21.99369813, "1 KD HLS": 29.30977113, "2 KD HLS": 29.33231417, "3 KD HLS": 28.52771494, "4 KD HLS": 37.29269973 },
				20: { "1 Flox HLS": 78.39693702, "2 Flox HLS": 120.3958201, "3 Flox HLS": 83.86911491, "4 Flox HLS": 86.50075593, "1 KD HLS": 106.1200766, "2 KD HLS": 94.83366532, "3 KD HLS": 100.7793215, "4 KD HLS": 104.0595236 },
				40: { "1 Flox HLS": 125.6637849, "2 Flox HLS": 166.991211, "3 Flox HLS": 143.1648458, "4 Flox HLS": 98.90316731, "1 KD HLS": 154.2218582, "2 KD HLS": 162.4660689, "3 KD HLS": 162.4660689, "4 KD HLS": 165.4766096 },
				80: { "1 Flox HLS": 163.3169219, "2 Flox HLS": 198.2620163, "3 Flox HLS": 179.98043, "4 Flox HLS": 136.4106782, "1 KD HLS": 192.2703644, "2 KD HLS": 208.6004217, "3 KD HLS": 208.6004217, "4 KD HLS": 208.6767806 },
				160: { "1 Flox HLS": 177.6476843, "2 Flox HLS": 207.4591881, "3 Flox HLS": 193.7355135, "4 Flox HLS": 149.5145803, "1 KD HLS": 202.1916925, "2 KD HLS": 221.7241216, "3 KD HLS": 221.7241216, "4 KD HLS": 222.5073075 }
			};

			// Inicializa o gráfico
			var myChart = new Chart(ctx, {
				type: 'line',
				data: {
					labels: Object.keys(forceData[1]), // Nomes das amostras
					datasets: [{
						label: 'Muscle Force',
						data: interpolateAllForces(1), // Dados iniciais com a frequência 1
						borderColor: 'rgba(75, 192, 192, 1)',
						borderWidth: 2,
						fill: false,
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true,
							title: {
								display: true,
								text: 'Force'
							}
						}
					}
				}
			});

			// Função para interpolar valores de força para todas as amostras
			function interpolateAllForces(frequency) {
				var interpolatedValues = {};
				for (const [freq, values] of Object.entries(forceData)) {
					for (const [sample, value] of Object.entries(values)) {
						if (!interpolatedValues[sample]) {
							interpolatedValues[sample] = 0; // Inicializa se não existir
						}
						if (frequency <= 20) {
							// Interpolação linear
							interpolatedValues[sample] = value + ((forceData[20][sample] - value) / (20 - 1)) * (frequency - 1);
						} else if (frequency <= 40) {
							interpolatedValues[sample] = value + ((forceData[40][sample] - value) / (40 - 20)) * (frequency - 20);
						} else if (frequency <= 80) {
							interpolatedValues[sample] = value + ((forceData[80][sample] - value) / (80 - 40)) * (frequency - 40);
						} else if (frequency <= 160) {
							interpolatedValues[sample] = value + ((forceData[160][sample] - value) / (160 - 80)) * (frequency - 80);
						}
					}
				}
				return Object.values(interpolatedValues); // Retorna valores para o gráfico
			}

			// Atualiza o gráfico quando o slider é movido
			document.getElementById('frequencySlider').addEventListener('input', function() {
				var frequency = this.value;
				document.getElementById('frequencyValue').textContent = frequency + ' Hz';
				myChart.data.datasets[0].data = interpolateAllForces(frequency); // Atualiza os dados do gráfico com a nova frequência
				myChart.update(); // Atualiza o gráfico
			});
		</script>







	<script>

        const ctx2 = document.getElementById('myBarChart').getContext('2d');

        // Cores pastéis para as barras
        const pastelColors = [
            'rgba(255, 182, 193, 0.6)', // Light Pink
            'rgba(173, 216, 230, 0.6)', // Light Blue
            'rgba(144, 238, 144, 0.6)', // Light Green
            'rgba(255, 255, 224, 0.6)', // Light Yellow
            'rgba(255, 160, 122, 0.6)', // Light Salmon
            'rgba(221, 160, 221, 0.6)', // Plum
            'rgba(255, 218, 185, 0.6)', // Peach
            'rgba(240, 230, 140, 0.6)'  // Khaki
        ];

        // Inicializa o gráfico de barras
        const barChart = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: Object.keys(forceData[1]), // Nomes das amostras
                datasets: [{
                    label: 'Force (N)',
                    data: interpolateAllForces(1), // Dados iniciais com a frequência 1
                    backgroundColor: pastelColors,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Force (N)'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Samples'
                        }
                    }
                }
            }
        });

        // Função para interpolar valores de força para todas as amostras
        function interpolateAllForces(frequency) {
            const interpolatedValues = [];
            for (const sample of Object.keys(forceData[1])) {
                const lowerFreq = Math.floor(frequency / 20) * 20 || 1; // Frequência inferior
                const upperFreq = lowerFreq + 20; // Frequência superior

                // Verifica se as frequências existem
                if (forceData[lowerFreq] && forceData[upperFreq]) {
                    const lowerValue = forceData[lowerFreq][sample];
                    const upperValue = forceData[upperFreq][sample];
                    
                    // Interpolação linear
                    const interpolatedValue = lowerValue + (upperValue - lowerValue) * ((frequency - lowerFreq) / 20);
                    interpolatedValues.push(interpolatedValue);
                } else {
                    interpolatedValues.push(forceData[frequency][sample] || 0); // Se não existir, coloca 0
                }
            }
            return interpolatedValues; // Retorna valores para o gráfico
        }

        // Atualiza o gráfico quando o slider é movido
        document.getElementById('frequencySliderBar').addEventListener('input', function() {
            const frequency = this.value;
            document.getElementById('frequencyValueBar').textContent = frequency + ' Hz';
            const newData = interpolateAllForces(frequency);
            barChart.data.datasets[0].data = newData; // Atualiza os dados do gráfico com a nova frequência
            barChart.update(); // Atualiza o gráfico
        });

    </script>


	<script>

        const ctx3 = document.getElementById('myRadarChart').getContext('2d');

        // Inicializa o gráfico de radar
        const radarChart = new Chart(ctx3, {
            type: 'radar',
            data: {
                labels: Object.keys(forceData[1]), // Nomes das amostras
                datasets: [{
                    label: 'Muscle Force',
                    data: interpolateAllForces(1), // Dados iniciais com a frequência 1
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    r: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Força (N)'
                        }
                    }
                }
            }
        });

        // Função para interpolar valores de força para todas as amostras
        function interpolateAllForces(frequency) {
            const interpolatedValues = [];
            for (const sample of Object.keys(forceData[1])) {
                const lowerFreq = Math.floor(frequency / 20) * 20 || 1; // Frequência inferior
                const upperFreq = lowerFreq + 20; // Frequência superior

                // Verifica se as frequências existem
                if (forceData[lowerFreq] && forceData[upperFreq]) {
                    const lowerValue = forceData[lowerFreq][sample];
                    const upperValue = forceData[upperFreq][sample];
                    
                    // Interpolação linear
                    const interpolatedValue = lowerValue + (upperValue - lowerValue) * ((frequency - lowerFreq) / 20);
                    interpolatedValues.push(interpolatedValue);
                } else {
                    interpolatedValues.push(forceData[frequency][sample] || 0); // Se não existir, coloca 0
                }
            }
            return interpolatedValues; // Retorna valores para o gráfico
        }

        // Atualiza o gráfico quando o slider é movido
        document.getElementById('frequencySliderRadar').addEventListener('input', function() {
            const frequency = this.value;
            document.getElementById('frequencyValueRadar').textContent = frequency + ' Hz';
            radarChart.data.datasets[0].data = interpolateAllForces(frequency); // Atualiza os dados do gráfico com a nova frequência
            radarChart.update(); // Atualiza o gráfico
        });
    </script>

 	<script>
        const ctx4 = document.getElementById('myPolarChart').getContext('2d');

        // Dados de força para cada frequência
        const forceDataPolar = {
            1: [26.7, 34.9, 24.7, 22.0, 29.3, 29.3, 28.5, 37.3],
            20: [78.4, 120.4, 83.9, 86.5, 106.1, 94.8, 100.8, 104.1],
            40: [125.7, 167.0, 143.2, 98.9, 154.2, 162.5, 162.5, 165.5],
            80: [163.3, 198.3, 180.0, 136.4, 192.3, 208.6, 208.6, 208.7],
            160: [177.6, 207.5, 193.7, 149.5, 202.2, 221.7, 221.7, 222.5]
        };

        // Nomes das amostras
        const sampleLabels = ["1 Flox HLS", "2 Flox HLS", "3 Flox HLS", "4 Flox HLS", "1 KD HLS", "2 KD HLS", "3 KD HLS", "4 KD HLS"];

        // Inicializa o gráfico de área polar
        const polarChart = new Chart(ctx4, {
            type: 'polarArea',
            data: {
                labels: sampleLabels, // Nomes das amostras
                datasets: [{
                    label: 'Force',
                    data: forceDataPolar[1], // Dados iniciais com a frequência 1
                    backgroundColor: [
                        'rgba(255, 182, 193, 0.6)', // Light Pink
                        'rgba(173, 216, 230, 0.6)', // Light Blue
                        'rgba(144, 238, 144, 0.6)', // Light Green
                        'rgba(255, 255, 224, 0.6)', // Light Yellow
                        'rgba(255, 160, 122, 0.6)', // Light Salmon
                        'rgba(221, 160, 221, 0.6)', // Plum
                        'rgba(255, 218, 185, 0.6)', // Peach
                        'rgba(240, 230, 140, 0.6)'  // Khaki
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    r: {
                        pointLabels: {
                            display: true,
                            centerPointLabels: true,
                            font: {
                                size: 18
                            }
                        }
                    }
                }
            }
        });

        // Atualiza o gráfico quando o slider é movido
        document.getElementById('frequencySliderPolar').addEventListener('input', function() {
            const frequency = this.value;
            document.getElementById('frequencyValuePolar').textContent = frequency + ' Hz';
            const newData = forceDataPolar[frequency] || forceDataPolar[1]; // Usar dados correspondentes à frequência
            polarChart.data.datasets[0].data = newData; // Atualiza os dados do gráfico com a nova frequência
            polarChart.update(); // Atualiza o gráfico
        });
    </script>

	</body>
	<!--end::Body-->
</html>