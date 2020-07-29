<!doctype html>
<html lang="zxx">
	


<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		
		<title>Agent</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,700,700i,800,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,600,700,800,900" rel="stylesheet">
		<link href="fonts/font-awesome.min.css" rel="stylesheet"/>
		<link href="fonts/etline.css" rel="stylesheet"/>
		<link href="fonts/themify-icons.css" rel="stylesheet"/>
		<link href="css/plugins.css" rel="stylesheet"/>
		<link href="css/lightbox.min.css" rel="stylesheet"/>
		<link href="css/responsive.css" rel="stylesheet"/>
		<link href="css/style.css" rel="stylesheet"/>
		
		<style>
		#myProgress {
			width: 100%;
			background-color: grey;
			}

			#myBar {
			width: 1%;
			height: 30px;
			background-color: green;
				}
		</style>

	</head>
	
	<body data-spy="scroll" data-target=".navbar" data-offset="70">

		<!-- START PRELOADER -->
			<div class="preloader">
				<div class="spinner">
					<div class="double-bounce1"></div>
					<div class="double-bounce2"></div>
				</div>
			</div>
		<!-- END PRELOADER -->
				
		
		<!-- START BANNER-SHOW -->
			<section id="home" class="main_banner v5 banner_bg">
				<div class="display_table">
					<div class="display_table_cell">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<div class="banner_content text-left mt-30">
										<span class="sm_title has-before">Automated Intelligent Agent</span>
										<h1 class="cd-headline clip">
											<span class="fw_300">Loading </span>
											<span class="cd-words-wrapper c-cyan">
												<b class="is-visible fw_800">Threat Detection</b>
												<b class="fw_800">Threat Detection</b>
												<b class="fw_800">Threat Detection</b>
											</span>
										</h1>
										<p class="head-p">

											<div id="myProgress">
												<div id="myBar"></div>
											  </div>
										</p>
										
									</div>
								</div>
							</div> <!--- END ROW -->
						</div> <!--- END CONTAINER -->
					</div>
				</div>
				<div class="mouse_scroll">
					<a href="#about" class="smoothScroll">
						<div class="mouse">
							<i class="ti-angle-double-down"></i>
						</div>
					</a>
				</div>
			</section>
		<!-- END BANNER-SHOW -->


	
		
		


		<script type="text/javascript">
		var i = 0;
				
				if (i == 0) {
					i = 1;
					var elem = document.getElementById("myBar");
					var width = 1;
					var id = setInterval(frame, 10);
					function frame() {
					if (width >= 100) {
						clearInterval(id);
						i = 0;
						window.location.assign("index.php");
					} else {
						width++;
						elem.style.width = width + "%";
					}
					}
				}
				
		</script>
			
		
		
	
		
		<!-- Latest jQuery -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/modernizr-2.8.3.min.js"></script>
		<script src="js/jquery.inview.min.js"></script>
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/animated-headline.js"></script>
		<script src="js/lightbox.min.js"></script>
		<script src="js/SmoothScroll.js"></script>
		<script src="js/form-contact.js"></script>
		<script src="js/jquery.hoverdir.js"></script>
		<script src="js/scrolltopcontrol.js"></script>
		<script src="js/wow.min.js"></script>
		
		<script src="js/main.js"></script>
	</body>



</html>		