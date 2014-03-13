<?php require($_SERVER['DOCUMENT_ROOT'] . '/src/bootstrap.inc.php'); ?><!DOCTYPE html>
<html>
<head class="no-skrollr"><?php echo _base(); ?>
<meta charset="utf-8">
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
<title>Bernina Express</title>
<link href="css/default.css" rel="stylesheet" type="text/css" />
<link href="css/royalslider.css" rel="stylesheet">
<link href="css/magnific-popup.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/3c55e305-a261-489d-a99d-067a6c08bd33.css"/>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
</head>
<body>
<div id="skrollr-body" class="notransition"></div>

<!-- Main Content  --------------------------------------------------------------------------------------------- -->
<div id="container">

	<div id="content-skroll">

		<!-- -------------------  content-scene-0 Intro ------------------- -->
		<?php echo _tag("scene",array("name"=>"scene-0","data"=>array("0"=>"top:0%;","300"=>"top:-100%"))); ?>
			<div class="content-grid intro">
				<div class="intro-route-icons"><img src="img/layout/intro_title_icons.png"></div>
				<h1>Bernina Express</h1>
				<div class="scroll-arrow">Scrollen<div class="scroll-arrow-ani"></div><div class="scroll-arrow-ani second"></div></div>
			</div>
		</div><!-- /mst:scene scene-0 [Intro] -->

		<!-- ------------------- content-scene-1 --- Route 1 ------------------- -->
		<?php echo _tag("scene",array("name"=>"scene-1","class"=>"svg-content vertical","data"=>array("50"=>"top:100%;opacity:1;","400"=>"top:0%;opacity:1;","7220"=>"opacity:1;","7400"=>"opacity:0;"))); ?>
			<div class="content-grid svg_route_1">
				<div id="wrap_svg" 
					data-<?php echo _tag("position",array("offset"=>"1400")); ?>="width: 234px; height: 235px; right: 103px; top: 273px;" 
					data-<?php echo _tag("position",array("offset"=>"1980")); ?>="width: 583px; height: 600px; right: 183px;	top: 0px"
				>

				<div id="box" data-<?php echo _tag("position",array()); ?>="display: none" 
					data-<?php echo _tag("position",array("offset"=>"2000")); ?>="display: block; left[pathx]:0%;top[pathy]:0%;" 
					data-<?php echo _tag("position",array("offset"=>"7000")); ?>="left[pathx]:100%;top[pathy]: 100%; display: none" 
				></div>

					<div id="route_labels">
						<!-- rote route -->
						<div class="chur_rot" 		data-<?php echo _tag("position",array("offset"=>"649")); ?>="display: none" 	data-<?php echo _tag("position",array("offset"=>"650")); ?>="display: block" data-<?php echo _tag("position",array("offset"=>"1400")); ?>="display: block" data-<?php echo _tag("position",array("offset"=>"1401")); ?>="display: none"><img src="img/route/rot_kl.png" alt=""><span>Chur</span></div>
						<div class="lugano_rot"		data-<?php echo _tag("position",array("offset"=>"1300")); ?>="display: none" data-<?php echo _tag("position",array("offset"=>"1301")); ?>="display: block" data-<?php echo _tag("position",array("offset"=>"1400")); ?>="display: block" data-<?php echo _tag("position",array("offset"=>"1401")); ?>="display: none"><span>Lugano</span><img src="img/route/rot_kl.png" alt=""></div>

						<!-- weisse route -->
						<div class="chur" 			
							data-<?php echo _tag("position",array("offset"=>"2000")); ?>="opacity: 0" data-<?php echo _tag("position",array("offset"=>"2021")); ?>="opacity: 1;"><img data-_fall_start--1="opacity:1" data-_fall_start="opacity:0" src="img/route/weiss_gr.png" alt="" class="point-big route-hl-point"><span>Chur</span></div>
						<div class="reichenau"	
							data-<?php echo _tag("position",array("offset"=>"2180")); ?>="opacity: 0" data-<?php echo _tag("position",array("offset"=>"2201")); ?>="opacity: 1"><span>Reichenau</span><img data-_fall_start--1="opacity:1" data-_fall_start="opacity:0" src="img/route/weiss_kl.png" alt="" class="route-hl-point"></div>
						<div class="domleschg"	
							data-<?php echo _tag("position",array("offset"=>"2416")); ?>="opacity: 0" data-<?php echo _tag("position",array("offset"=>"2437")); ?>="opacity: 1"><span>Domleschg</span><img data-_fall_start--1="opacity:1" data-_fall_start="opacity:0" src="img/route/weiss_kl.png" alt="" class="route-hl-point"></div>
						<div class="unesco"			
							data-<?php echo _tag("position",array("offset"=>"2995")); ?>="opacity: 0" data-<?php echo _tag("position",array("offset"=>"3016")); ?>="opacity: 1"><img data-_fall_start--1="opacity:1" data-_fall_start="opacity:0" src="img/route/weiss_gr.png" alt="" class="route-hl-point"><span>UNESCO Strecke</span></div>
						<div class="monte"			
							data-<?php echo _tag("position",array("offset"=>"3700")); ?>="opacity: 0" data-<?php echo _tag("position",array("offset"=>"3721")); ?>="opacity: 1"><img data-_fall_start--1="opacity:1" data-_fall_start="opacity:0" src="img/route/weiss_kl.png" alt="" class="route-hl-point"><span>Monte Bello</span></div>
						<div class="ospizio"		
							data-<?php echo _tag("position",array("offset"=>"4200")); ?>="opacity: 0" data-<?php echo _tag("position",array("offset"=>"4221")); ?>="opacity: 1"><img data-_fall_start--1="opacity:1" data-_fall_start="opacity:0" src="img/route/weiss_kl.png" alt="" class="route-hl-point"><span>Ospizio Bernina</span></div>
						<div class="alp"				
							data-<?php echo _tag("position",array("offset"=>"4300")); ?>="opacity: 0" data-<?php echo _tag("position",array("offset"=>"4321")); ?>="opacity: 1"><img data-_fall_start--1="opacity:1" data-_fall_start="opacity:0" src="img/route/weiss_kl.png" alt="" class="route-hl-point"><span>Alp Grüm</span></div>
						<div class="brusio"			
							data-<?php echo _tag("position",array("offset"=>"4535")); ?>="opacity: 0" data-<?php echo _tag("position",array("offset"=>"4556")); ?>="opacity: 1"><img data-_fall_start--1="opacity:1" data-_fall_start="opacity:0" src="img/route/weiss_kl.png" alt="" class="route-hl-point"><span>Brusio</span></div>
						<div class="tirano"			
							data-<?php echo _tag("position",array("offset"=>"4640")); ?>="opacity: 0" data-<?php echo _tag("position",array("offset"=>"4661")); ?>="opacity: 1"><img data-_fall_start--1="opacity:1" data-_fall_start="opacity:0" src="img/route/weiss_kl.png" alt="" class="route-hl-point"><span>Tirano</span></div>
						<div class="lugano"		
							data-<?php echo _tag("position",array("offset"=>"6998")); ?>="opacity: 0" data-<?php echo _tag("position",array("offset"=>"7019")); ?>="opacity: 1"><span>Lugano</span><img data-_fall_start--1="opacity:1" data-_fall_start="opacity:0" src="img/route/weiss_gr.png" alt="" class="route-hl-point"></div>

						<img class="illu_img illu_chur" 			data-<?php echo _tag("position",array("offset"=>"2000")); ?>="opacity: 0" data-<?php echo _tag("position",array("offset"=>"2020")); ?>="opacity: 1" src="img/route/illu_chur.png" alt="" />
						<img class="illu_img illu_unesco" 		data-<?php echo _tag("position",array("offset"=>"2995")); ?>="opacity: 0" data-<?php echo _tag("position",array("offset"=>"3015")); ?>="opacity: 1" src="img/route/illu_unesco.png" alt="" />
						<img class="illu_img illu_montebello" data-<?php echo _tag("position",array("offset"=>"3700")); ?>="opacity: 0" data-<?php echo _tag("position",array("offset"=>"3720")); ?>="opacity: 1" src="img/route/illu_montebello.png" alt="" />
						<img class="illu_img illu_brusio" 		data-<?php echo _tag("position",array("offset"=>"4535")); ?>="opacity: 0" data-<?php echo _tag("position",array("offset"=>"4555")); ?>="opacity: 1" src="img/route/illu_brusio.png" alt="" />
						<img class="illu_img illu_lugano" 		data-<?php echo _tag("position",array("offset"=>"6998")); ?>="opacity: 0" data-<?php echo _tag("position",array("offset"=>"7020")); ?>="opacity: 1" src="img/route/illu_lugano.png" alt="" />
					</div>

					<svg 
						xmlns="http://www.w3.org/2000/svg" version="1.1" id="svgPath" viewBox="0 0 478 495"
					>
						<path
							id="route1"
							style="fill:none;stroke: #da202c;stroke-width:5px;stroke-linecap:round;stroke-linejoin:miter;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:1225;stroke-dashoffset:0;"
							data-<?php echo _tag("position",array("offset"=>"650")); ?>="stroke-dashoffset:1255;" 
							data-<?php echo _tag("position",array("offset"=>"1300")); ?>="stroke-dashoffset:0;" 
							data-<?php echo _tag("position",array("offset"=>"1400")); ?>="stroke-width: 5px; stroke: rgb(218,32,44); opacity: 1;" 
							data-<?php echo _tag("position",array("offset"=>"1401")); ?>="stroke-width: 5px; stroke: rgb(255,255,255); opacity: 0.6"
							data-<?php echo _tag("position",array("offset"=>"1980")); ?>="stroke-width: 2px; stroke: rgb(255,255,255)"
							d="M216.101,0c0,0-5.047,1.532-4.791,1.469c0.256-0.064-2.299,2.299-3.194,2.49c-0.894,0.192-4.024,0.447-4.024,0.447l-12.392,4.597c0,0-3.833,3.32-4.471,3.64c-0.639,0.319-2.619,0.447-3.13,0.447c-0.511,0-4.471,1.532-4.983,1.596s-2.3,0.575-2.81,0.639c-0.511,0.064-1.533,0.83-1.917,1.341c-0.384,0.511-1.405,1.469-1.405,1.469s-4.727-0.319-5.302-0.319s-1.134,0.101-1.789,0.511c-0.391,0.245-0.74,0.345-1.661,0.319c-0.827-0.024-1.725-0.213-1.885,0.5c-0.085,0.379,0.352,1.032,0.926,1.16c0.575,0.128,1.07,0.088,1.333,0.722c0.264,0.635,0.196,2.092,0.643,2.729c0.447,0.638,2.004,1.6,2.004,1.6s1.11,0.607,1.13,1.461c0.017,0.728-0.14,4.066-0.128,4.789s0.609,0.877,1.086,1.788c0.368,0.703,0.498,1.099,0.596,1.448c0.121,0.431,0.378,1.075,0.378,1.075s0.24,0.487,0.368,1.117c0.128,0.631-0.039,1.505,0.204,2.099c0.26,0.636,1.18,0.895,1.478,3.052c0.136,0.981,0.874,1.758,2.622,2.899c0.785,0.512,1.445,2.111,1.345,4.234c-0.1,2.123,0.201,2.78,1.018,4.254c0.812,1.464,3.165,7.913,3.505,8.533c0.341,0.62,2.006,2.855,1.176,5.92c-0.831,3.065-1.768,4.47-1.341,6.13c0.425,1.66,3.929,4.022,4.322,5.278c0.192,0.612-0.336,0.878-0.363,1.49c-0.046,1.052,0.511,2.363,1.001,4.001c0.489,1.639,0.005,3.145,0.277,4.257c0.142,0.579,0.937,1.235,1.554,1.384c0.617,0.149,1.533,0.171,2.129-0.149c0.596-0.319,1.297-1.459,1.704-1.958c0.804-0.989,2.14-1.873,3.151-2.256c0.378-0.143,1.716-0.63,2.145-0.591c0.527,0.048,0.623,0.463,0.601,0.952c-0.021,0.489,0.008,0.904,0.149,1.171c0.314,0.591,2.598,2.809,6.495,2.895c3.897,0.086,3.087,0.511,5.238,2.107c2.15,1.596,2.278,1.341,3.811,1.553c1.533,0.213,4.525,2.724,6.153,3.672c1.212,0.705,4.343,0.386,5.595,0.782c1.06,0.335,1.608,1.005,1.985,1.633c0.373,0.62,0.496,1.214,1.15,1.426c0.441,0.144,0.996-0.128,1.325,0.224c0.505,0.538,0.468,0.708,0.895,1.261c0.425,0.553,0.527,0.735,1.07,0.793c0.421,0.046,0.783,0.011,1.012,0.319c0.361,0.486,0.377,0.775,0.83,0.979c0.368,0.165,0.681,0.306,1.224-0.192c0.511-0.468,0.639-0.839,1.282-0.676c0.569,0.144,0.83,0.34,0.985,0.697c0.141,0.325,0.379,0.757,1.145,1.107c0.734,0.335,2.257,0.815,3.141,0.831c0.468,0.009,0.82-0.16,1.48,0.011c0.66,0.171,0.872,0.491,1.693,0.681c0.852,0.197,2.641,0.112,3.109,0.091c0.468-0.021,1.72-0.335,1.974-0.697c0.256-0.361,0.62-1.261,0.846-1.703c0.245-0.479,0.436-0.814,1.245-0.772c0.809,0.042,1.054,0.274,1.672,0.128c0.655-0.155,1.271-0.949,2.086-0.925c0.916,0.027,2.497,1.74,4.286,1.505s2.214-2.533,4.429-2.661c2.214-0.128,2.938-0.66,3.492-0.873c0.553-0.213,0.893-0.25,1.219-0.229c0.336,0.021,0.793,0.272,1.442-0.623c0.752-1.035,0.937-1.298,1.682-1.724c0.745-0.425,1.256-0.144,2.044-0.952s0.915-0.981,1.597-1.521c0.719-0.569,1.551-1.179,2.305-1.021c0.788,0.165,1.018,0.991,0.569,2.852c-0.213,0.884,1.13,1.116,2.102,0.42c0.953-0.681,2.332-0.869,3.007-0.457c0.569,0.345,0.672,0.412,1.503,1.017c0.831,0.604,1.132,1.643,1.132,1.643c0.203,0.82,0.346,1.597,0.772,2.618c0.671,1.607,1.739,2.236,2.017,2.437c0.516,0.372,3.842,2.431,5.797,3.097c1.172,0.399,1.645,0.836,1.837,1.181c0.212,0.382,0.489,1.639,0.745,2.192c0.256,0.553,1.012,1.265,1.64,1.469c0.884,0.288,2.251,0.536,2.975,1.799c0.33,0.575,0.387,1.5,0.384,2.044c-0.005,0.984,0.352,1.341,0.617,1.575c0.172,0.152,4.024,3.051,5.243,4.252c0.352,0.345,0.895,0.745,0.932,1.729c0.004,0.107-0.096,1.708-0.107,1.958c-0.008,0.176-0.169,0.629,0.298,1.235c0.685,0.889,2.229,0.915,2.229,0.915s1.186,0.281,1.694,1.25c0.507,0.969-0.389,2.293-0.527,2.597c-0.073,0.16-1.544,4.198-1.565,4.284c-0.021,0.085-0.732,1.807-1.171,1.926c-0.665,0.181-1.145,0.197-1.464-0.272c-0.32-0.468,0.021-1.24,0.553-1.304s0.852,0.123,0.974,0.671c0.065,0.29,0.022,1.341,0.468,1.681c0.473,0.361,0.965,0.618,1.182,0.804c0.288,0.245,0.857,0.761,1.16,1.219c0.127,0.192,0.633,1.077,0.788,1.363c0.24,0.441,0.453,1.049,0.98,1.384c1.087,0.69,2.157,0.486,2.746,0.575c1.384,0.208,6.771,3.736,7.186,3.975c0.415,0.24,21.14,12.077,22.177,12.584c1.097,0.537,3.548,2.114,6.196,2.384c0.575,0.059,1.184,0.088,1.789,0.213c0.852,0.176,1.949,1.366,2.853,1.511c1.156,0.186,5.444-0.24,6.175,0.447c0.447,0.42-0.171,1.575-0.831,2.788c-0.66,1.213-4.401,5.972-4.898,7.407c-0.409,1.187-0.293,1.974,0,2.895c0.39,1.226,1.735,5.293,1.874,5.789c0.181,0.644,2.467,6.487,2.768,7.066c0.336,0.644,1.958,3.299,2.022,3.426c0.064,0.128,1.389,2.347,1.704,2.788s1.066,1.494,1.363,1.916c0.24,0.34,0.521,0.751,0.532,1.469c0.004,0.256-0.043,1.149,0.277,1.128c0.32-0.021,0.605-0.871,1.006-0.989c0.575-0.171,1.159,0.489,1.597,0.868c0.655,0.564,2.222,1.652,4.062,3.464c1.102,1.085,3.819,3.696,3.977,5.061c0.123,1.064-0.101,1.453,0.112,2.283c0.213,0.83,0.928,1.391,1.352,1.921c0.724,0.904,1.192,1.857,2.054,3.209c0.703,1.102,1.261,2.012,1.709,2.777c0.447,0.767,0.862,1.288,1.682,0.941c0.38-0.16,0.809-0.564,0.697-1.548c-0.186-1.638-0.422-2.609,0.192-2.788c0.655-0.192,1.366,1.092,1.645,1.724c0.357,0.809,1.219,0.952,2.204,1.336c1.493,0.581,5.217,2.317,5.627,3.198c0.176,0.377,0.021,0.894,0.404,1.128c0.384,0.235,2.129,0.894,2.449,0.979c0.32,0.085,1.362,0.505,2.236,0.511c0.783,0.005,1.288-0.192,2.129,0.367c1.078,0.716,1.64,1.272,2.108,1.953c0.468,0.681,0.976,1.446,1.172,1.687c0.878,1.085,1.251,2.554,0.873,3.528c-0.073,0.189-0.315,1.208-0.298,1.724c0.015,0.476,0.144,0.868,0.825,0.783c0.681-0.085,0.676-0.399,1.426-0.021c0.881,0.443,0.857,0.984,0.751,1.516c-0.107,0.532-0.209,0.535,0.937,0.735c1.2,0.209,1.151,0.217,1.421,0.319c0.889,0.335,1.267,0.5,1.389,1.352c0.131,0.909,0.194,1.137,1.443,0.957c0.628-0.091,0.814-0.299,1.24-0.213c0.939,0.188,0.542,1.126,0.415,1.996c-0.064,0.436-0.398,1.226,0.623,1.958c1.092,0.783,1.702,1.34,2.113,1.772c0.644,0.676,2.716,1.802,3.407,4.597c0.234,0.947,0.181,1.564,0.021,2.299c-0.16,0.735-0.483,3.778-0.511,3.937c-0.304,1.756-0.444,2.09-0.948,2.921c-0.123,0.202-0.297,0.988-0.381,1.866l0.231,1.736c0.372,1.522,1.224,1.48,1.672,1.5s2.207-1.159,2.33-1.404l1.194-0.948c0.532-0.256,0.703,0.267,0.687,0.703c-0.025,0.672-0.123,1.863-0.165,2.437c-0.043,0.575-0.457,2.149,0.452,3.086c0.731,0.753,1.789,0.868,1.953,1.98c0.06,0.402-0.804,1.181-0.846,3.188c-0.018,0.851,0.681,2.751,0.384,3.937c-0.209,0.831-0.771,1.908-0.9,2.092c-0.341,0.484-0.614,1.206-0.245,2.51l4.78,10.146c0.112,0.222,0.942,1.828,2.091,3.089c0.072,0.079,0.938,1.342,1.726,2.379s2.848,4.039,3.482,5.449c0.281,0.625,0.441,1.575,1.197,2.65c0.655,0.932,1.591,1.539,1.517,2.841c-0.176,3.102,2.954,6.417,3.103,6.588c0.149,0.171,1.677,1.901,2.22,2.453c0.601,0.612,1.251,1.357,2.784,1.74c0.558,0.14,2.549,0.395,3.258,0.489c0.804,0.107,1.831,0.537,2.257,1.043c0.225,0.267,2.29,3.124,3.061,3.8c0.346,0.303,0.702,0.799,1.56,0.947c0.399,0.069,1.936,0.441,2.561,1.261c0.256,0.335,0.708,1.564-0.283,2.028c-1.509,0.706-2.23,0.085-2.635-0.596c-0.404-0.681-0.171-1.676,0.596-1.942c0.791-0.275,1.434,0.096,1.81,0.553c0.245,0.298,0.473,0.957,0.357,2.272c-0.063,0.703,0.071,1.681,0.171,2.171c0.118,0.582,0.504,1.846,0.916,2.661c0.293,0.58,3.041,4.004,3.146,5.433c0.032,0.436,0.128,1.543,0.671,2.149c0.347,0.387,1.89,2.677,2.017,2.825c0.128,0.149,2.321,3.108,2.513,3.277c0.192,0.171,1.443,1.871,2.044,2.341c0.857,0.671,3.141,0.176,3.173,0.915c0.047,1.095-5.601,3.485-5.771,3.554c-0.081,0.033-1.43,0.782-2.129,1.357c-0.783,0.644-3.763,5.071-4.089,5.582c-0.325,0.511-2.406,3.257-2.491,3.363c-0.085,0.107-1.4,1.932-1.704,2.405c-0.304,0.473-3.55,4.741-3.918,5.214s-1.426,1.697-1.682,1.937c-0.139,0.13-8.231,8.224-9.273,8.594c-0.932,0.329-4.184,1.048-5.717,1.197c-1.533,0.149-9.759,1.112-10.769,1.171c-1.293,0.075-4.354,0.123-6.712-0.256c-0.16-0.026-6.842-1.471-7.836-1.724c-2.673-0.681-6.111-0.878-7.996-0.473c-0.172,0.037-3.522,0.748-3.971,0.857c-0.147,0.036-1.512,0.633-2.705,0.404c-1.96-0.376-3.322,0.213-3.726,0.404c-0.404,0.192-1.426,0.957-2.321,0.617c-0.454-0.173-6.664-3.15-6.728-3.172c-0.064-0.021-2.902-1.048-3.258-1.192c-1.017-0.409-2.849-1.223-4.919-0.957c-0.665,0.085-2.47,0.612-3.662,0.766c-0.529,0.069-2.577,0.34-3.577,0.171c-1.001-0.171-3.875-0.575-4.706-0.468c-0.83,0.107-3.426,1.65-4.024,1.841c-0.884,0.283-3.482,0.585-4.556,0.011c-0.589-0.314-1.192-0.596-2.214-0.297c-1.022,0.297-3.616,1.614-4.152,1.98c-0.617,0.42-1.768,1.32-3.343,1.532c-1.576,0.213-7.273,0.66-7.473,0.681c-0.463,0.048-7.24-0.021-8.453,0.277c-0.208,0.051-5.621,1.213-6.047,1.341c-0.425,0.128-4.581,1.093-5.004,1.149c-1.985,0.266-5.898-0.617-6.132-0.681c-0.234-0.064-4.365-0.633-5.068-0.703c-1.92-0.189-9.236-0.399-9.794-0.425c-0.451-0.021-20.164-1.32-22.262-0.431c-1.131,0.479-11.158,3.496-11.807,5.134c-0.649,1.639-1.8,4.108-2.619,5.002c-0.819,0.894-11.924,4.917-11.924,4.917s-4.295,1.884-5.174,1.83c-0.878-0.053-1.384-0.831-2.236-0.809c-0.852,0.021-3.577,0.383-4.216,0.724c-0.639,0.34-1.129,1.448-2.364,1.532c-1.235,0.085-12.068-0.441-13.201-0.617c-1.134-0.176-7.091-0.868-8.218-1.085c-1.129-0.219-7.75-0.149-7.75-0.149s-15.991,0.388-17.418-0.383c-1.044-0.565-3.545-1.255-4.163-1.448c-1.57-0.489-3.582-0.633-4.286-0.973c0,0-2.18-0.975-3.093-1.059c-1.98-0.181-21.181,9.179-22.038,10.44c-0.857,1.261-2.193,4.933-3.066,5.364c-0.648,0.319-5.921,3.099-6.26,3.32c-1.682,1.101-3.45,3.831-3.705,4.853c-0.256,1.021-3.838,16.405-3.785,18.039c0.054,1.656,3.529,8.779,2.635,10.823c-0.894,2.044-7.756,11.706-8.501,14.559c-0.413,1.582-1.814,8.422-1.592,9.578c0.24,1.245,3.558,6.962,2.299,8.557c-1.176,1.49-24.226,3.325-27.617,3.528c-3.517,0.21-27.127-3.597-28.341-4.039c-0.718-0.262-10.221-6.769-11.115-7.918c-0.895-1.149-0.229-5.858-1.251-7.774c-1.022-1.916-2.582-4.869-5.392-3.848c-2.81,1.021-8.901,6.269-10.476,6.513c-1.575,0.245-13.415-0.639-15.97-0.511c-2.555,0.128-10.603,5.364-15.203,5.746C17.375,479.545,0,485.675,0,485.675"/>
					</svg>
				</div>

				<div id="svg_bg" data-<?php echo _tag("position",array("offset"=>"1400")); ?>="top:0%; opacity:1;" data-<?php echo _tag("position",array("offset"=>"1700")); ?>="top:-100%; opacity:0;"></div>
			</div>	
		</div><!-- /mst:scene scene-1 [Intro Route] -->

		<!-- ------------------- content-scene-2 Chur Intro ------------------- -->
		<?php echo _tag("scene",array("name"=>"scene-2","data"=>array("150"=>"left:100%; opacity:0;","300"=>"left:0%; opacity:1;","1300"=>"left:0%; opacity:1;","1450"=>"left:-100%; opacity:0;"))); ?>
			<div class="content-grid">
				<h1><?php echo _lang('scene-2-title'); ?></h1>
				<h2><?php echo _lang('scene-2-subtitle'); ?></h2>
				<p class="lead" data-<?php echo _tag("position",array("offset"=>"500")); ?>="left:0%; opacity:1;" data-<?php echo _tag("position",array("offset"=>"650")); ?>="left:-100%; opacity:0;"><?php echo _lang('scene-2-text'); ?></p>
				
				<?php echo _tag("hotspot",array("style"=>"top:40%;","data"=>array("pos1"=>"left:145%; opacity:0","pos2"=>"left:60%; opacity:1","pos3"=>"_scene2-1500","pos4"=>"left:0%; opacity:0"))); ?>
					<a href="#" data-mfp-src="#pop-chur-panos" class="pop-custom-iframe"><span class="icon panorama"></span>
					<span class="label"><?php echo _lang('scene-2-hotspot1'); ?></span></a>
				</div><!-- /mst:hotspot -->
				<?php echo _tag("hotspot",array("style"=>"top:60%;","data"=>array("pos1"=>"left:120%; opacity:0","pos2"=>"left:20%; opacity:1","pos3"=>"left:18%; opacity:1","pos4"=>"left:-50%; opacity:0"))); ?>
					<a href="#" data-mfp-src="#pop-video-chur" class="pop-custom-iframe"><span class="icon video"></span>
					<span class="label"><?php echo _lang('scene-2-hotspot2'); ?></span></a>
				</div><!-- /mst:hotspot -->
			</div>
		</div><!-- /mst:scene scene-2 [Chur Intro] -->

		<!-- ------------------- content-scene-3 Brambrüesch------------------- -->
		<?php echo _tag("scene",array("name"=>"scene-3","data"=>array("150"=>"left:100%; opacity:0;","300"=>"left:0%; opacity:1;","1100"=>"left:0%; opacity:1;","1250"=>"left:-100%; opacity:0;"))); ?>
			<div class="content-grid">
				<h1>Brambrüesch.</h1>
				<h2>Der Churer Hausberg.</h2>
				
				<?php echo _tag("hotspot",array("style"=>"top:30%;","data"=>array("pos1"=>"left:130%; opacity:0","pos2"=>"left:30%; opacity:1","pos3"=>"left:28%; opacity:1","pos4"=>"left:-30%; opacity:0"))); ?>
					<a href="#" data-mfp-src="#pop-custom1" class="pop-custom-inline"><span class="icon camera"></span>
					<span class="label">Ausflugstipp: Alpenbikepark Brambrüesch</span></a>
				</div><!-- /mst:hotspot -->
				<?php echo _tag("hotspot",array("style"=>"top:50%;","data"=>array("pos1"=>"left:120%; opacity:0","pos2"=>"left:10%; opacity:1","pos3"=>"left:8%; opacity:1","pos4"=>"left:-50%; opacity:0"))); ?>
					<a href="#" data-mfp-src="#gallery-1" class="pop-gallery"><span class="icon camera"></span>
					<span class="label">Ausflugstipp: Dreibündenstein Panoramaweg</span></a>
				</div><!-- /mst:hotspot -->
				<?php echo _tag("hotspot",array("style"=>"top:70%;","data"=>array("pos1"=>"left:150%; opacity:0","pos2"=>"left:75%; opacity:1","pos3"=>"left:73%; opacity:1","pos4"=>"left:20%; opacity:0"))); ?>
					<a href="#" data-mfp-src="#pop-custom4" class="pop-custom-iframe"><span class="icon video"></span>
					<span class="label">Webcam Brambrüesch</span></a>
				</div><!-- /mst:hotspot -->
			</div>
		</div><!-- /mst:scene scene-3 [Brambrüesch] -->

		<!-- ------------------- content-scene-4 Heidiland------------------- -->
		<?php echo _tag("scene",array("name"=>"scene-4","data"=>array("150"=>"left:100%; opacity:0;","300"=>"left:0%; opacity:1;","1100"=>"left:0%; opacity:1;","1250"=>"left:-100%; opacity:0;"))); ?>
			<div class="content-grid">
				<h1>Heidiland.</h1>
				<h2>Heimat der bekannten Schweizer Romanfigur. </h2>
               
              <?php echo _tag("hotspot",array("style"=>"top:35%;","data"=>array("pos1"=>"left:150%; opacity:0","pos2"=>"left:70%; opacity:1","pos3"=>"left:68%; opacity:1","pos4"=>"left:20%; opacity:0"))); ?>
			  		<a href="#" data-mfp-src="#pop-custom1" class="pop-custom-inline"><span class="icon camera"></span>
					<span class="label">Ausflugstipp: <br>Tamina-Schlucht</span></a>
				</div><!-- /mst:hotspot -->
				<?php echo _tag("hotspot",array("style"=>"top:44%;","data"=>array("pos1"=>"left:120%; opacity:0","pos2"=>"left:2%; opacity:1","pos3"=>"left:0%; opacity:1","pos4"=>"left:-60%; opacity:0"))); ?>
					<a href="#" data-mfp-src="#pop-custom1" class="pop-custom-inline"><span class="icon camera"></span>
					<span class="label">Wellness-Resort Bad Ragaz</span></a>
				</div><!-- /mst:hotspot -->
				<?php echo _tag("hotspot",array("style"=>"top:75%;","data"=>array("pos1"=>"left:140%; opacity:0","pos2"=>"left:50%; opacity:1","pos3"=>"left:48%; opacity:1","pos4"=>"left:0%; opacity:0"))); ?>
					<a href="#" data-mfp-src="#pop-video-chur" class="pop-custom-iframe"><span class="icon video"></span>
					<span class="label">Impressionen Heidiland</span></a>
				</div><!-- /mst:hotspot -->
			</div>
		</div><!-- /mst:scene scene-3 [Heidiland] -->

        <!-- ------------------- content-scene-5 Chur Nacht------------------- -->
        <?php echo _tag("scene",array("name"=>"scene-5","data"=>array("150"=>"left:100%; opacity:0;","300"=>"left:0%; opacity:1;","1100"=>"left:0%; opacity:1;","1250"=>"left:-100%; opacity:0;"))); ?>
			<div class="content-grid">
				<h1>Unterkünfte<br>Chur und Umgebung.</h1>
				<h2>Hier schlafen Sie gut.</h2>
               
                <?php echo _tag("hotspot",array("style"=>"top:45%;","data"=>array("pos1"=>"left:135%; opacity:0","pos2"=>"left:40%; opacity:1","pos3"=>"left:38%; opacity:1","pos4"=>"left:-15%; opacity:0"))); ?>
					<a href="#" data-mfp-src="#pop-hotel" class="pop-custom-inline"><span class="icon hotel"></span>
					<span class="label visible">Romantikhotel Stern,<br />Chur</span></a>
				</div><!-- /mst:hotspot -->
				<?php echo _tag("hotspot",array("style"=>"top:60%;","data"=>array("pos1"=>"left:150%; opacity:0","pos2"=>"left:60%; opacity:1","pos3"=>"left:58%; opacity:1","pos4"=>"left:10%; opacity:0"))); ?>
					<a href="#" data-mfp-src="#pop-hotel" class="pop-custom-inline"><span class="icon hotel"></span>
					<span class="label visible">Grand Hotel Quellenhof & Spa Suites, Bad Ragaz</span></a>
				</div><!-- /mst:hotspot -->
				 <?php echo _tag("hotspot",array("style"=>"top:80%;","data"=>array("pos1"=>"left:120%; opacity:0","pos2"=>"left:15%; opacity:1","pos3"=>"left:13%; opacity:1","pos4"=>"left:-50%; opacity:0"))); ?>
					<a href="#" data-mfp-src="#pop-hotel" class="pop-custom-inline"><span class="icon hotel"></span>
					<span class="label visible">Sorell Hotel Tamina, Bad Ragaz</span></a>
				</div><!-- /mst:hotspot -->
			</div>
		</div><!-- /mst:scene scene-3 [Chur Nacht] -->




		<!-- ------------------- content-scene-6 Route 2------------------- -->
		<?php echo _tag("scene",array("name"=>"scene-6","class"=>"vertical","data"=>array("0"=>"top:100%; opacity:0;","150"=>"top:0%; opacity:0;","500"=>"top:0%; opacity:1;","100%"=>"top:0%; opacity:0;","101%"=>"","101.5%"=>"top:-100%; opacity:0;"))); ?>
			<div class="content-grid" >
				<div id="wrap_svg2" style="width: 583px; height: 600px; right: 183px;	top: 0px">
					<div id="box2" data-<?php echo _tag("position",array()); ?>="display: none" 
						data-<?php echo _tag("position",array("offset"=>"1000")); ?>="display: block; left[path_zwischen_x]:0%;top[path_zwischen_y]:0%;" 
						data-<?php echo _tag("position",array("offset"=>"10000")); ?>="left[path_zwischen_x]:100%;top[path_zwischen_y]: 100%; display: none" >
					</div>
					<div class="route_labels zwischenroute">
						<!-- weisse route -->
						<div class="chur" 		 ><img src="img/route/weiss_gr.png" alt="" class="point-big"><span>Chur</span></div>
						<div class="reichenau" ><span>Reichenau</span><img src="img/route/weiss_kl.png" alt=""></div>
						<div class="domleschg" ><span>Domleschg</span><img src="img/route/weiss_kl.png" alt=""></div>
						<div class="unesco"		 ><img src="img/route/weiss_gr.png" alt=""><span>UNESCO Strecke</span></div>
						<div class="monte"		 ><img src="img/route/weiss_kl.png" alt=""><span>Monte Bello</span></div>
						<div class="ospizio"	 ><img src="img/route/weiss_kl.png" alt=""><span>Ospizio Bernina</span></div>
						<div class="alp"			 ><img src="img/route/weiss_kl.png" alt=""><span>Alp Grüm</span></div>
						<div class="brusio"		 ><img src="img/route/weiss_kl.png" alt=""><span>Brusio</span></div>
						<div class="tirano"		 ><img src="img/route/weiss_kl.png" alt=""><span>Tirano</span></div>
						<div class="lugano"	 	 ><span>Lugano</span><img src="img/route/weiss_gr.png" alt=""></div>
					</div>
					<svg 
						xmlns="http://www.w3.org/2000/svg" version="1.1" id="svgPath" viewBox="0 0 478 495"
					>
						<path
							id="route2"
							style="fill:none;stroke: #da202c;stroke-width:5px;stroke-linecap:round;stroke-linejoin:miter;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:6000;stroke-dashoffset:0;stroke-width: 2px; stroke: rgb(255,255,255); opacity: 0.6"
							d="M216.101,0c0,0-5.047,1.532-4.791,1.469c0.256-0.064-2.299,2.299-3.194,2.49c-0.894,0.192-4.024,0.447-4.024,0.447l-12.392,4.597c0,0-3.833,3.32-4.471,3.64c-0.639,0.319-2.619,0.447-3.13,0.447c-0.511,0-4.471,1.532-4.983,1.596s-2.3,0.575-2.81,0.639c-0.511,0.064-1.533,0.83-1.917,1.341c-0.384,0.511-1.405,1.469-1.405,1.469s-4.727-0.319-5.302-0.319s-1.134,0.101-1.789,0.511c-0.391,0.245-0.74,0.345-1.661,0.319c-0.827-0.024-1.725-0.213-1.885,0.5c-0.085,0.379,0.352,1.032,0.926,1.16c0.575,0.128,1.07,0.088,1.333,0.722c0.264,0.635,0.196,2.092,0.643,2.729c0.447,0.638,2.004,1.6,2.004,1.6s1.11,0.607,1.13,1.461c0.017,0.728-0.14,4.066-0.128,4.789s0.609,0.877,1.086,1.788c0.368,0.703,0.498,1.099,0.596,1.448c0.121,0.431,0.378,1.075,0.378,1.075s0.24,0.487,0.368,1.117c0.128,0.631-0.039,1.505,0.204,2.099c0.26,0.636,1.18,0.895,1.478,3.052c0.136,0.981,0.874,1.758,2.622,2.899c0.785,0.512,1.445,2.111,1.345,4.234c-0.1,2.123,0.201,2.78,1.018,4.254c0.812,1.464,3.165,7.913,3.505,8.533c0.341,0.62,2.006,2.855,1.176,5.92c-0.831,3.065-1.768,4.47-1.341,6.13c0.425,1.66,3.929,4.022,4.322,5.278c0.192,0.612-0.336,0.878-0.363,1.49c-0.046,1.052,0.511,2.363,1.001,4.001c0.489,1.639,0.005,3.145,0.277,4.257c0.142,0.579,0.937,1.235,1.554,1.384c0.617,0.149,1.533,0.171,2.129-0.149c0.596-0.319,1.297-1.459,1.704-1.958c0.804-0.989,2.14-1.873,3.151-2.256c0.378-0.143,1.716-0.63,2.145-0.591c0.527,0.048,0.623,0.463,0.601,0.952c-0.021,0.489,0.008,0.904,0.149,1.171c0.314,0.591,2.598,2.809,6.495,2.895c3.897,0.086,3.087,0.511,5.238,2.107c2.15,1.596,2.278,1.341,3.811,1.553c1.533,0.213,4.525,2.724,6.153,3.672c1.212,0.705,4.343,0.386,5.595,0.782c1.06,0.335,1.608,1.005,1.985,1.633c0.373,0.62,0.496,1.214,1.15,1.426c0.441,0.144,0.996-0.128,1.325,0.224c0.505,0.538,0.468,0.708,0.895,1.261c0.425,0.553,0.527,0.735,1.07,0.793c0.421,0.046,0.783,0.011,1.012,0.319c0.361,0.486,0.377,0.775,0.83,0.979c0.368,0.165,0.681,0.306,1.224-0.192c0.511-0.468,0.639-0.839,1.282-0.676c0.569,0.144,0.83,0.34,0.985,0.697c0.141,0.325,0.379,0.757,1.145,1.107c0.734,0.335,2.257,0.815,3.141,0.831c0.468,0.009,0.82-0.16,1.48,0.011c0.66,0.171,0.872,0.491,1.693,0.681c0.852,0.197,2.641,0.112,3.109,0.091c0.468-0.021,1.72-0.335,1.974-0.697c0.256-0.361,0.62-1.261,0.846-1.703c0.245-0.479,0.436-0.814,1.245-0.772c0.809,0.042,1.054,0.274,1.672,0.128c0.655-0.155,1.271-0.949,2.086-0.925c0.916,0.027,2.497,1.74,4.286,1.505s2.214-2.533,4.429-2.661c2.214-0.128,2.938-0.66,3.492-0.873c0.553-0.213,0.893-0.25,1.219-0.229c0.336,0.021,0.793,0.272,1.442-0.623c0.752-1.035,0.937-1.298,1.682-1.724c0.745-0.425,1.256-0.144,2.044-0.952s0.915-0.981,1.597-1.521c0.719-0.569,1.551-1.179,2.305-1.021c0.788,0.165,1.018,0.991,0.569,2.852c-0.213,0.884,1.13,1.116,2.102,0.42c0.953-0.681,2.332-0.869,3.007-0.457c0.569,0.345,0.672,0.412,1.503,1.017c0.831,0.604,1.132,1.643,1.132,1.643c0.203,0.82,0.346,1.597,0.772,2.618c0.671,1.607,1.739,2.236,2.017,2.437c0.516,0.372,3.842,2.431,5.797,3.097c1.172,0.399,1.645,0.836,1.837,1.181c0.212,0.382,0.489,1.639,0.745,2.192c0.256,0.553,1.012,1.265,1.64,1.469c0.884,0.288,2.251,0.536,2.975,1.799c0.33,0.575,0.387,1.5,0.384,2.044c-0.005,0.984,0.352,1.341,0.617,1.575c0.172,0.152,4.024,3.051,5.243,4.252c0.352,0.345,0.895,0.745,0.932,1.729c0.004,0.107-0.096,1.708-0.107,1.958c-0.008,0.176-0.169,0.629,0.298,1.235c0.685,0.889,2.229,0.915,2.229,0.915s1.186,0.281,1.694,1.25c0.507,0.969-0.389,2.293-0.527,2.597c-0.073,0.16-1.544,4.198-1.565,4.284c-0.021,0.085-0.732,1.807-1.171,1.926c-0.665,0.181-1.145,0.197-1.464-0.272c-0.32-0.468,0.021-1.24,0.553-1.304s0.852,0.123,0.974,0.671c0.065,0.29,0.022,1.341,0.468,1.681c0.473,0.361,0.965,0.618,1.182,0.804c0.288,0.245,0.857,0.761,1.16,1.219c0.127,0.192,0.633,1.077,0.788,1.363c0.24,0.441,0.453,1.049,0.98,1.384c1.087,0.69,2.157,0.486,2.746,0.575c1.384,0.208,6.771,3.736,7.186,3.975c0.415,0.24,21.14,12.077,22.177,12.584c1.097,0.537,3.548,2.114,6.196,2.384c0.575,0.059,1.184,0.088,1.789,0.213c0.852,0.176,1.949,1.366,2.853,1.511c1.156,0.186,5.444-0.24,6.175,0.447c0.447,0.42-0.171,1.575-0.831,2.788c-0.66,1.213-4.401,5.972-4.898,7.407c-0.409,1.187-0.293,1.974,0,2.895c0.39,1.226,1.735,5.293,1.874,5.789c0.181,0.644,2.467,6.487,2.768,7.066c0.336,0.644,1.958,3.299,2.022,3.426c0.064,0.128,1.389,2.347,1.704,2.788s1.066,1.494,1.363,1.916c0.24,0.34,0.521,0.751,0.532,1.469c0.004,0.256-0.043,1.149,0.277,1.128c0.32-0.021,0.605-0.871,1.006-0.989c0.575-0.171,1.159,0.489,1.597,0.868c0.655,0.564,2.222,1.652,4.062,3.464c1.102,1.085,3.819,3.696,3.977,5.061c0.123,1.064-0.101,1.453,0.112,2.283c0.213,0.83,0.928,1.391,1.352,1.921c0.724,0.904,1.192,1.857,2.054,3.209c0.703,1.102,1.261,2.012,1.709,2.777c0.447,0.767,0.862,1.288,1.682,0.941c0.38-0.16,0.809-0.564,0.697-1.548c-0.186-1.638-0.422-2.609,0.192-2.788c0.655-0.192,1.366,1.092,1.645,1.724c0.357,0.809,1.219,0.952,2.204,1.336c1.493,0.581,5.217,2.317,5.627,3.198c0.176,0.377,0.021,0.894,0.404,1.128c0.384,0.235,2.129,0.894,2.449,0.979c0.32,0.085,1.362,0.505,2.236,0.511c0.783,0.005,1.288-0.192,2.129,0.367c1.078,0.716,1.64,1.272,2.108,1.953c0.468,0.681,0.976,1.446,1.172,1.687c0.878,1.085,1.251,2.554,0.873,3.528c-0.073,0.189-0.315,1.208-0.298,1.724c0.015,0.476,0.144,0.868,0.825,0.783c0.681-0.085,0.676-0.399,1.426-0.021c0.881,0.443,0.857,0.984,0.751,1.516c-0.107,0.532-0.209,0.535,0.937,0.735c1.2,0.209,1.151,0.217,1.421,0.319c0.889,0.335,1.267,0.5,1.389,1.352c0.131,0.909,0.194,1.137,1.443,0.957c0.628-0.091,0.814-0.299,1.24-0.213c0.939,0.188,0.542,1.126,0.415,1.996c-0.064,0.436-0.398,1.226,0.623,1.958c1.092,0.783,1.702,1.34,2.113,1.772c0.644,0.676,2.716,1.802,3.407,4.597c0.234,0.947,0.181,1.564,0.021,2.299c-0.16,0.735-0.483,3.778-0.511,3.937c-0.304,1.756-0.444,2.09-0.948,2.921c-0.123,0.202-0.297,0.988-0.381,1.866l0.231,1.736c0.372,1.522,1.224,1.48,1.672,1.5s2.207-1.159,2.33-1.404l1.194-0.948c0.532-0.256,0.703,0.267,0.687,0.703c-0.025,0.672-0.123,1.863-0.165,2.437c-0.043,0.575-0.457,2.149,0.452,3.086c0.731,0.753,1.789,0.868,1.953,1.98c0.06,0.402-0.804,1.181-0.846,3.188c-0.018,0.851,0.681,2.751,0.384,3.937c-0.209,0.831-0.771,1.908-0.9,2.092c-0.341,0.484-0.614,1.206-0.245,2.51l4.78,10.146c0.112,0.222,0.942,1.828,2.091,3.089c0.072,0.079,0.938,1.342,1.726,2.379s2.848,4.039,3.482,5.449c0.281,0.625,0.441,1.575,1.197,2.65c0.655,0.932,1.591,1.539,1.517,2.841c-0.176,3.102,2.954,6.417,3.103,6.588c0.149,0.171,1.677,1.901,2.22,2.453c0.601,0.612,1.251,1.357,2.784,1.74c0.558,0.14,2.549,0.395,3.258,0.489c0.804,0.107,1.831,0.537,2.257,1.043c0.225,0.267,2.29,3.124,3.061,3.8c0.346,0.303,0.702,0.799,1.56,0.947c0.399,0.069,1.936,0.441,2.561,1.261c0.256,0.335,0.708,1.564-0.283,2.028c-1.509,0.706-2.23,0.085-2.635-0.596c-0.404-0.681-0.171-1.676,0.596-1.942c0.791-0.275,1.434,0.096,1.81,0.553c0.245,0.298,0.473,0.957,0.357,2.272c-0.063,0.703,0.071,1.681,0.171,2.171c0.118,0.582,0.504,1.846,0.916,2.661c0.293,0.58,3.041,4.004,3.146,5.433c0.032,0.436,0.128,1.543,0.671,2.149c0.347,0.387,1.89,2.677,2.017,2.825c0.128,0.149,2.321,3.108,2.513,3.277c0.192,0.171,1.443,1.871,2.044,2.341c0.857,0.671,3.141,0.176,3.173,0.915c0.047,1.095-5.601,3.485-5.771,3.554c-0.081,0.033-1.43,0.782-2.129,1.357c-0.783,0.644-3.763,5.071-4.089,5.582c-0.325,0.511-2.406,3.257-2.491,3.363c-0.085,0.107-1.4,1.932-1.704,2.405c-0.304,0.473-3.55,4.741-3.918,5.214s-1.426,1.697-1.682,1.937c-0.139,0.13-8.231,8.224-9.273,8.594c-0.932,0.329-4.184,1.048-5.717,1.197c-1.533,0.149-9.759,1.112-10.769,1.171c-1.293,0.075-4.354,0.123-6.712-0.256c-0.16-0.026-6.842-1.471-7.836-1.724c-2.673-0.681-6.111-0.878-7.996-0.473c-0.172,0.037-3.522,0.748-3.971,0.857c-0.147,0.036-1.512,0.633-2.705,0.404c-1.96-0.376-3.322,0.213-3.726,0.404c-0.404,0.192-1.426,0.957-2.321,0.617c-0.454-0.173-6.664-3.15-6.728-3.172c-0.064-0.021-2.902-1.048-3.258-1.192c-1.017-0.409-2.849-1.223-4.919-0.957c-0.665,0.085-2.47,0.612-3.662,0.766c-0.529,0.069-2.577,0.34-3.577,0.171c-1.001-0.171-3.875-0.575-4.706-0.468c-0.83,0.107-3.426,1.65-4.024,1.841c-0.884,0.283-3.482,0.585-4.556,0.011c-0.589-0.314-1.192-0.596-2.214-0.297c-1.022,0.297-3.616,1.614-4.152,1.98c-0.617,0.42-1.768,1.32-3.343,1.532c-1.576,0.213-7.273,0.66-7.473,0.681c-0.463,0.048-7.24-0.021-8.453,0.277c-0.208,0.051-5.621,1.213-6.047,1.341c-0.425,0.128-4.581,1.093-5.004,1.149c-1.985,0.266-5.898-0.617-6.132-0.681c-0.234-0.064-4.365-0.633-5.068-0.703c-1.92-0.189-9.236-0.399-9.794-0.425c-0.451-0.021-20.164-1.32-22.262-0.431c-1.131,0.479-11.158,3.496-11.807,5.134c-0.649,1.639-1.8,4.108-2.619,5.002c-0.819,0.894-11.924,4.917-11.924,4.917s-4.295,1.884-5.174,1.83c-0.878-0.053-1.384-0.831-2.236-0.809c-0.852,0.021-3.577,0.383-4.216,0.724c-0.639,0.34-1.129,1.448-2.364,1.532c-1.235,0.085-12.068-0.441-13.201-0.617c-1.134-0.176-7.091-0.868-8.218-1.085c-1.129-0.219-7.75-0.149-7.75-0.149s-15.991,0.388-17.418-0.383c-1.044-0.565-3.545-1.255-4.163-1.448c-1.57-0.489-3.582-0.633-4.286-0.973c0,0-2.18-0.975-3.093-1.059c-1.98-0.181-21.181,9.179-22.038,10.44c-0.857,1.261-2.193,4.933-3.066,5.364c-0.648,0.319-5.921,3.099-6.26,3.32c-1.682,1.101-3.45,3.831-3.705,4.853c-0.256,1.021-3.838,16.405-3.785,18.039c0.054,1.656,3.529,8.779,2.635,10.823c-0.894,2.044-7.756,11.706-8.501,14.559c-0.413,1.582-1.814,8.422-1.592,9.578c0.24,1.245,3.558,6.962,2.299,8.557c-1.176,1.49-24.226,3.325-27.617,3.528c-3.517,0.21-27.127-3.597-28.341-4.039c-0.718-0.262-10.221-6.769-11.115-7.918c-0.895-1.149-0.229-5.858-1.251-7.774c-1.022-1.916-2.582-4.869-5.392-3.848c-2.81,1.021-8.901,6.269-10.476,6.513c-1.575,0.245-13.415-0.639-15.97-0.511c-2.555,0.128-10.603,5.364-15.203,5.746C17.375,479.545,0,485.675,0,485.675"
						/>
					</svg>
				</div>
				<!-- ------------------- Route Beschreibung ------------------- -->
				<div class="route-content" data-<?php echo _tag("position",array("offset"=>"1200")); ?>="top:200%;left:0%; opacity: 0" data-<?php echo _tag("position",array("offset"=>"2280")); ?>="top:27%;left:0%; opacity: 1" data-<?php echo _tag("position",array("offset"=>"3325")); ?>="top:24%;left:0%;opacity: 1" data-<?php echo _tag("position",array("offset"=>"3825")); ?>="top:-200%;left:0%;opacity: 0">
					<div class="route-img"><img src="img/reichenau.png" alt="Rheinschlucht – Ruinaulta"></div>
					<div class="route-text">
						<h3>Rheinschlucht – Ruinaulta</h3>
						<p>Ganz in der Nähe von Bonaduz befindet sich die faszinierende Rheinschluchtwelt der Ruinaulta. Sie zählt zu den grossartigsten und vielfältigsten Landschaften der Alpen.</p>
						<a href="http://www.myswitzerland.com/de-ch/rheinschlucht-ruinaulta.html" target="_blank" class="extern">Mehr über die Rheinschlucht</a>
						<div class="hotspot">
							<a href="#" data-mfp-src="#pop-custom1" class="pop-custom-inline"><span class="icon camera"></span>
							<span class="label">Ausflugstipp:<br />
								Rheinschlucht</span></a>
						</div>
					</div>
				</div>
				<div class="route-content"  data-<?php echo _tag("position",array("offset"=>"3700")); ?>="top:200%;left:0%" data-<?php echo _tag("position",array("offset"=>"4200")); ?>="top:27%;left:0%; opacity: 1" data-<?php echo _tag("position",array("offset"=>"5245")); ?>="top:24%;left:0%;opacity: 1" data-<?php echo _tag("position",array("offset"=>"5560")); ?>="top:-200%;left:0%">
					<div class="route-img"><img src="img/domleschg.png" alt="Burgenland Domleschg"></div>
					<div class="route-text">
						<h3>Burgenland Domleschg</h3>
						<p>Das fruchtbare Domleschg erstreckt sich über 10 km von Rothenbrunnen nach Sils. In keinem anderen Gebiet der Schweiz befinden sich auf so kleinem Raum so viele Burgen und Schlösser.</p>
						<a href="" class="extern">Mehr über die Region Domleschg</a>
						<!-- <div class="hotspot">
							<a href=""><span class="icon camera"></span>
							<span class="label">Bildergalerie<br />
								Tamina Schlucht</span></a>
						</div> -->
					</div>
				</div>
			</div>
		</div><!-- /mst:scene scene-6 [Route 2] -->

	</div>
	<!-- end of content-skroll -->

	<!-- Main Background Animation  --------------------------------------------------------------------------------------------- -->
	<div id="bg-skroll">

		<!-- ------------------- bg-scene-0 --- Intro ------------------- -->
		<?php echo _tag("background",array("name"=>"scene-0")); ?>
	 		<div id="keyvis-bg" data-<?php echo _tag("position",array()); ?>="transform:scale(1);"  data-<?php echo _tag("position",array("offset"=>"800")); ?>="transform:scale(1.3);">
            	<img src="img/keyvisual/keyvis_bg.jpg" class="img-full"></div>
         
         	<div id="keyvis-berg" data-<?php echo _tag("position",array()); ?>="transform:scale(1)"  data-<?php echo _tag("position",array("offset"=>"800")); ?>="transform:scale(1.2);">
            	<img src="img/keyvisual/keyvis_berg.png" class="img-full"></div>
                
			<div id="keyvis-zug" data-<?php echo _tag("position",array()); ?>="transform:scale(1);"  data-<?php echo _tag("position",array("offset"=>"800")); ?>="transform:scale(1.4);">
            	<img src="img/keyvisual/keyvis_zug.png" class="img-full"></div>
                                
			<div id="keyvis-clouds" data-<?php echo _tag("position",array()); ?>="transform:translateX(0%) translateY(0%) scale(1);"  data-<?php echo _tag("position",array("offset"=>"800")); ?>="transform:translateX(1%) translateY(-0%) scale(1.2);">
            	<img src="img/keyvisual/keyvis_wolken.png" class="img-full"></div>
                			
         	<div id="keyvis-blum" data-<?php echo _tag("position",array()); ?>="transform:scale(1);"  data-<?php echo _tag("position",array("offset"=>"800")); ?>="transform:scale(3);">
            	<img src="img/keyvisual/keyvis_blumen.png" class="img-full"></div>
                
			<div id="keyvis-flash" data-<?php echo _tag("position",array("offset"=>"100")); ?>="opacity:0;"  data-<?php echo _tag("position",array("offset"=>"110")); ?>="opacity:1;" data-<?php echo _tag("position",array("offset"=>"115")); ?>="opacity:0;" >
            	<img src="img/keyvisual/keyvis_flashbig.png" class="img-full"></div>
                
			<div id="keyvis-flashzwei" data-<?php echo _tag("position",array("offset"=>"140")); ?>="opacity:0;"  data-<?php echo _tag("position",array("offset"=>"150")); ?>="opacity:1;" data-<?php echo _tag("position",array("offset"=>"160")); ?>="opacity:0;" >
            	<img src="img/keyvisual/keyvis_flashsmall.png" class="img-full"></div>
			
           <div id="keyvis-flashdrei" data-<?php echo _tag("position",array("offset"=>"105")); ?>="opacity:0;"  data-<?php echo _tag("position",array("offset"=>"110")); ?>="opacity:1;" data-<?php echo _tag("position",array("offset"=>"120")); ?>="opacity:0;" >
            	<img src="img/keyvisual/keyvis_flashsmall.png" class="img-full"></div> 
                
			<div id="keyvis-flashvier" data-<?php echo _tag("position",array("offset"=>"300")); ?>="opacity:0;"  data-<?php echo _tag("position",array("offset"=>"310")); ?>="opacity:0.6;" data-<?php echo _tag("position",array("offset"=>"320")); ?>="opacity:0;" >
            	<img src="img/keyvisual/keyvis_flashbig.png" class="img-full"></div> 
			 <div id="keyvis-lensbot" data-<?php echo _tag("position",array("offset"=>"150")); ?>="transform:translateY(0%)translateX(0%);opacity:0;" data-<?php echo _tag("position",array("offset"=>"350")); ?>="transform:translateY(5%)translateX(10%);opacity:0.8;" data-<?php echo _tag("position",array("offset"=>"550")); ?>="transform:translateY(10%)translateX(20%);opacity:0;" >
            	<img src="img/luganostadt/luganostadt_lensbottom.png" class="img-full"></div>
                
        	<div id="keyvis-lenstop" data-<?php echo _tag("position",array("offset"=>"150")); ?>="transform:translateY(10%)translateX(20%);opacity:0;" data-<?php echo _tag("position",array("offset"=>"350")); ?>="transform:translateY(5%)translateX(10%);opacity:1;" data-<?php echo _tag("position",array("offset"=>"550")); ?>="transform:translateY(0%)translateX(0%);opacity:0;" >
            	<img src="img/luganostadt/luganostadt_lenstop.png" class="img-full"></div> 
				
			<div id="keyvis-reflex" data-<?php echo _tag("position",array()); ?>="transform:translateX(0%) translateY(0%);opacity=0.8;" data-<?php echo _tag("position",array("offset"=>"800")); ?>="transform:translateX(35%) translateY(90%);opacity=0.8;" >
            	<img src="img/keyvisual/keyvis_reflex.png" class="img-full"></div>   
		</div><!-- /mst:background scene-0 [Intro] -->

		<!-- ------------------- bg-scene-1 --- Route 1 ------------------- -->
		<?php echo _tag("background",array("name"=>"scene-1","class"=>"fade-in","data"=>array("0"=>"opacity:0;top:0%;","150"=>"opacity:1;","100%"=>"","102%"=>"top:-100%;"))); ?>
			<img src="img/keyvisual/keyvis_bg_blur.jpg" class="img-full">
		</div><!-- /mst:background scene-1 [Route Intro] -->

		<!-- ------------------- bg-scene-2 --- Chur Intro ------------------- -->
		<?php echo _tag("background",array("name"=>"scene-2","class"=>"vertical","data"=>array("0"=>"top:100%;","150"=>"top:0%;"))); ?>
			<!-- Parallax Background -->
			<div class="overlay-half" data-<?php echo _tag("position",array("offset"=>"450")); ?>="opacity:1" data-<?php echo _tag("position",array("offset"=>"600")); ?>="opacity:0"></div>
			 <div id="churstadt-bg" data-<?php echo _tag("position",array("offset"=>"400")); ?>="transform:scale(1);"  data-<?php echo _tag("position",array("offset"=>"3000")); ?>="transform:scale(1.12);">
            	<img src="img/churstadt/churstadt_bg.jpg" class="img-full"></div>
                        
			<div id="churstadt-rebe1" data-<?php echo _tag("position",array("offset"=>"400")); ?>="transform:scale(1);"  data-<?php echo _tag("position",array("offset"=>"3000")); ?>="transform:scale(1.8);">
            	<img src="img/churstadt/churstadt_rebe1.png" class="img-full"></div>
 
 			<div id="churstadt-rebe2" data-<?php echo _tag("position",array("offset"=>"400")); ?>="transform:scale(1);"  data-<?php echo _tag("position",array("offset"=>"3000")); ?>="transform:scale(3.5);">
            	<img src="img/churstadt/churstadt_rebe2.png" class="img-full"></div>
                                               
			<div id="churstadt-cloud1" data-<?php echo _tag("position",array("offset"=>"400")); ?>="transform:scale(1);"  data-<?php echo _tag("position",array("offset"=>"3000")); ?>="transform:scale(1.1);" >
            	<img src="img/churstadt/churstadt_cloud1.png" class="img-full"></div>
                
        	<div id="churstadt-cloud2" data-<?php echo _tag("position",array("offset"=>"400")); ?>="transform:scale(1.3);"  data-<?php echo _tag("position",array("offset"=>"3000")); ?>="transform:scale(1.4);" >
            	<img src="img/churstadt/churstadt_cloud2.png" class="img-full"></div>
 			
			<div id="churstadt-dust1" data-<?php echo _tag("position",array("offset"=>"400")); ?>="transform:scale(1); opacity:0.4;"  data-<?php echo _tag("position",array("offset"=>"3000")); ?>="transform:scale(5); opacity:0.1;">
            	<img src="img/churstadt/churstadt_dust_01.png" class="img-full"></div>
                
      		<div id="churstadt-dust2" data-<?php echo _tag("position",array("offset"=>"400")); ?>="transform:scale(1); opacity:0.3;"  data-<?php echo _tag("position",array("offset"=>"3000")); ?>="transform:scale(4); opacity:0.1;">
            	<img src="img/churstadt/churstadt_dust_03.png" class="img-full"></div> 
				
		</div>

		<!-- ------------------- bg-scene-3 --- Brambrüesch ---------------- -->
		<?php echo _tag("background",array("name"=>"scene-3","class"=>"fade-in","data"=>array("0"=>"opacity:0;","150"=>"opacity:1;","101%"=>"","102%"=>"opacity:0;"))); ?>
        	<div id="brambruesch-bg" data-<?php echo _tag("position",array()); ?>="transform:scale(1);"  data-<?php echo _tag("position",array("offset"=>"1600")); ?>="transform:scale(1.05);">
            	<img src="img/brambruesch/bram_bg.jpg" class="img-full"></div>
                
			<div id="brambruesch-kabel" data-<?php echo _tag("position",array()); ?>="transform:scale(1) translateY(0%);"  data-<?php echo _tag("position",array("offset"=>"1600")); ?>="transform:scale(1.05) translateY(-4%);">
            	<img src="img/brambruesch/bram_kabel.png" class="img-full"></div>
                        
			<div id="brambruesch-gondel" data-<?php echo _tag("position",array()); ?>="transform:scale(1) translateY(0%);"  data-<?php echo _tag("position",array("offset"=>"1600")); ?>="transform:scale(1.2)translateY(-2.5%);">
            	<img src="img/brambruesch/bram_gondel.png" class="img-full"></div>
				
			<div id="brambruesch-baum" data-<?php echo _tag("position",array()); ?>="transform:scale(1.2);"  data-<?php echo _tag("position",array("offset"=>"1600")); ?>="transform:scale(3.5);">
            	<img src="img/brambruesch/bram_baum.png" class="img-full"></div>
                                               
	 		<div id="brambruesch-cloud" data-<?php echo _tag("position",array()); ?>="transform:scale(1);"  data-<?php echo _tag("position",array("offset"=>"1600")); ?>="transform:scale(1.1);" >
            	<img src="img/brambruesch/bram_wolke.png" class="img-full"></div>
                
			<div id="brambruesch-diffwolken" data-<?php echo _tag("position",array()); ?>="transform:scale(1); opacity:0.4;"  data-<?php echo _tag("position",array("offset"=>"1600")); ?>="transform:scale(1.4); opacity:0.1;">
            	<img src="img/brambruesch/bram_diffwolken.png" class="img-full"></div>
	      
		</div><!-- /mst:background scene-3 [Brambrüesch] -->

		<!-- ------------------- bg-scene-4 --- Heidiland ---------------- -->
		<?php echo _tag("background",array("name"=>"scene-4","class"=>"fade-in","data"=>array("0"=>"opacity:0;","150"=>"opacity:1;","101%"=>"","102%"=>"opacity:0;"))); ?>
			 <div id="heidi-bg" data-<?php echo _tag("position",array()); ?>="transform:scale(1);"  data-<?php echo _tag("position",array("offset"=>"1600")); ?>="transform:scale(1.2);">
            	<img src="img/heidiland/heidi_bg.jpg" class="img-full"></div>
         
         	<div id="heidi-hill" data-<?php echo _tag("position",array()); ?>="transform:scale(1)"  data-<?php echo _tag("position",array("offset"=>"1600")); ?>="transform:scale(1.2);">
            	<img src="img/heidiland/heidi_hill_02.png" class="img-full"></div>
                
			<div id="heidi-stein" data-<?php echo _tag("position",array()); ?>="transform:scale(1);"  data-<?php echo _tag("position",array("offset"=>"1600")); ?>="transform:scale(2.5);">
            	<img src="img/heidiland/heidi_stein.png" class="img-full"></div>
                                
			<div id="heidi-ray" data-<?php echo _tag("position",array()); ?>="transform:scale(1);"  data-<?php echo _tag("position",array("offset"=>"1600")); ?>="transform:scale(1);">
            	<img src="img/heidiland/heidi_ray.png" class="img-full"></div>
                			
         	<div id="heidi-cloud" data-<?php echo _tag("position",array()); ?>="transform:translateX(0%) translateY(0%) scale(1);"  data-<?php echo _tag("position",array("offset"=>"1600")); ?>="transform:translateX(5%) translateY(-70%) scale(1.2);" >
            	<img src="img/heidiland/heidi_cloud.png" class="img-full"></div>
			<div id="heidi-diff" data-<?php echo _tag("position",array()); ?>="transform:scale(1); opacity:0.4;"  data-<?php echo _tag("position",array("offset"=>"1600")); ?>="transform:scale(2); opacity:0.2;">
            	<img src="img/heidiland/heidi_diff.png" class="img-full"></div>   
   
         	<div id="heidi-bird1" data-<?php echo _tag("position",array("offset"=>"400")); ?>="transform:translateX(0%) translateY(0%) scale(0.3);"  data-<?php echo _tag("position",array("offset"=>"1600")); ?>="transform:translateX(40%) translateY(-50%) scale(0.26);" >
            	<img src="img/heidiland/heidi_birds1.png" class="img-full"></div>        	
 
         	<div id="heidi-bird2" data-<?php echo _tag("position",array("offset"=>"400")); ?>="transform:translateX(0%) translateY(0%) scale(0.3);"  data-<?php echo _tag("position",array("offset"=>"1600")); ?>="transform:translateX(41%) translateY(-52%) scale(0.26);" >
            	<img src="img/heidiland/heidi_birds2.png" class="img-full"></div>        			

      		<div id="heidi-staub1" data-<?php echo _tag("position",array()); ?>="transform:scale(1); opacity:0.8;"  data-<?php echo _tag("position",array("offset"=>"1600")); ?>="transform:scale(6); opacity:0;">
            	<img src="img/heidiland/heidi_dust_05.png" class="img-full"></div>   
                
      		<div id="heidi-staub2" data-<?php echo _tag("position",array()); ?>="transform:scale(1); opacity:0.8;"  data-<?php echo _tag("position",array("offset"=>"1600")); ?>="transform:scale(2); opacity:0;">
            	<img src="img/heidiland/heidi_dust_04.png" class="img-full"></div> 
                
		</div><!-- /mst:background scene-4 [Heidiland] -->

		<!-- ------------------- bg-scene-5 --- Chur Nacht---------------- -->
		<?php echo _tag("background",array("name"=>"scene-5","class"=>"fade-in","data"=>array("0"=>"opacity:0;","150"=>"opacity:1;","100%"=>"top:0%","101%"=>"top:-100%;"))); ?>
			 <div id="churnacht-bg">
            	<img src="img/churnacht/churnacht_bg.jpg" class="img-full"></div>
         
         	<div id="churnacht-front" data-<?php echo _tag("position",array()); ?>="transform:scale(1) translateY(0%);" data-<?php echo _tag("position",array("offset"=>"1600")); ?>="transform:scale(1.1) translateY(5%);">
            	<img src="img/churnacht/churnacht_front.png" class="img-full"></div>
                
			<div id="churnacht-laterne" data-<?php echo _tag("position",array()); ?>="transform:scale(1) translateY(0%);"  data-<?php echo _tag("position",array("offset"=>"1600")); ?>="transform:scale(4) translateY(25%);">
            	<img src="img/churnacht/churnacht_laterne.png" class="img-full"></div>
                                
			<div id="churnacht-stern" data-<?php echo _tag("position",array("offset"=>"899")); ?>="transform:translateX(0%) translateY(0%); opacity:0;" data-<?php echo _tag("position",array("offset"=>"900")); ?>="transform:translateX(0%) translateY(0%); opacity:1;" data-<?php echo _tag("position",array("offset"=>"1150")); ?>="transform:translateX(-900%) translateY(700%); opacity:0;">
            	<img src="img/churnacht/churnacht_stern.png" class="img-full"></div>
                			
         	<div id="churnacht-wolken" data-<?php echo _tag("position",array()); ?>="transform:translateX(0%);"  data-<?php echo _tag("position",array("offset"=>"1600")); ?>="transform:translateX(10%);" >
            	<img src="img/churnacht/churnacht_wolken.png" class="img-full"></div>
                
         	<div id="churnacht-fenster" data-<?php echo _tag("position",array()); ?>="transform:scale(1) translateY(0%); opacity:0;" data-<?php echo _tag("position",array("offset"=>"800")); ?>="transform:scale(1.05) translateY(2.5%); opacity:0;" data-<?php echo _tag("position",array("offset"=>"1200")); ?>_scene5-1200="transform:scale(1.075) translateY(3.75%); opacity:1;" data-<?php echo _tag("position",array("offset"=>"1600")); ?>="transform:scale(1.1) translateY(5%); opacity:1;">
            	<img src="img/churnacht/churnacht_fenster2.png" class="img-full"></div>

       		<div id="churnacht-diff" data-<?php echo _tag("position",array()); ?>="transform:scale(1);"  data-<?php echo _tag("position",array("offset"=>"1600")); ?>="transform:scale(6);">
            	<img src="img/churnacht/churnacht_diff.png" class="img-full"></div>

		</div><!-- /mst:background scene-5 [Chur Nacht] -->




		<!-- ------------------- bg-scene-6 --- Route 2---------------- -->
		<?php echo _tag("background",array("name"=>"scene-6","class"=>"vertical","data"=>array("0"=>"top:100%;","150"=>"top:0%;","100%"=>"top:0%;","101%"=>"top:-100%;"))); ?>
			<div data-<?php echo _tag("position",array()); ?>="opacity:0" data-<?php echo _tag("position",array("offset"=>"800")); ?>="opacity:1"><img src="img/routenbild_chur_unesco/rb1_bg_blur.jpg" class="img-full"></div>
            <div><img src="img/routenbild_chur_unesco/rb1_bg.jpg" class="img-full"></div>
		</div><!-- /mst:background scene-6 [Route 2] -->


	</div>
	<!-- end of bg-skroll -->

</div>
<!-- end of container -->

<?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/scripts.inc.html'); ?>

</body>
</html><?php require($_SERVER['DOCUMENT_ROOT'] . '/src/render.inc.php'); ?>