<?php
/**                     *                         @package WordPress
*        *                  .'.  _       *        @subpackage lilly_tradeshow
*                         ."   '' '.              @since 1.0.0
*               *       .*     .. '*.`*._
*                     _/    _.*'._..*''`._'*      *        .'.        *
*   *               ,'8                 _.*'.`_          ."   '' '.
*                _.*8                         `'\ .'.._         .. '*.`*._
*     *       /8'\         .*8  .. '*.         .*8  .. '*.         .*''`._'*
*          .'/8   \_   _.*'._                     .. '*.`*._         `'\ .'..__
*      _.*' .        '*.             .*8  ..                 \_   -------------
*    .*8  .. '*.                         .*8  .. '*.           `*._------------
*_.*'._                            .*8  ..                          `*._-------
*______________________________________________________________________________
*                       Lilly_tradeshow theme by iBec Creative */

$site_title = get_bloginfo('name');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="shortcut icon" type="image/png" href="<?=get_template_directory_uri() ?>/ibex/images/favicon.png">

		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i,800,800i|Roboto+Slab:400,700,900&display=swap" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri() ?>/slick/slick.css"/>
		<!-- // Add the new slick-theme.css if you want the default styling -->
		<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri() ?>/slick/slick-theme.css"/>

		<!-- AOS -->
		<script src="<?=get_template_directory_uri() ?>/node_modules/aos/dist/aos.js"></script>
		<link rel="stylesheet" href="<?=get_template_directory_uri() ?>/node_modules/aos/dist/aos.css" />

		<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="74b216ed-7838-4f61-abc4-0d7cc3d033fc";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
		
		<title><?= wp_title(); ?></title>
		<?php wp_head(); ?>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-192772895-61"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-192772895-61');
		</script>


		<!-- Global site tag (gtag.js) - Google Analytics GA-4-->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-1L7X48L3W9"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-1L7X48L3W9');
		</script>
	</head>

	<?php 
		//check cookies to modify body class/modal
		$hcp = false;
		if (array_key_exists('HCP', $_COOKIE) && $_COOKIE['HCP'] == true) {
			$hcp = true;
		}
	?>	

	<body <?php $hcp ? body_class() : body_class('modalActive'); ?>>

		
		<div class="mobileModal">
			<div class="formModal__close">╳</div>
			<div class="mobileModal__inner">
			<p>Thanks for viewing https://lilly-virtual.com/immunology/us-5/</p><p>Please note: This site is built for and best viewed on desktop browsers excluding Internet Explorer.</p>
				<button class="awYeah">
          			<a href="#0" class="dismiss">View Anyway</a>
        		</button>
			</div>
		</div>

		<div class="adverseModal">
			<div class="adverseModal__inner">
				<div class="adverseModal__close">╳</div>
					<div class="adverseText">If you need to report an <strong>Adverse Event or Product Complaint</strong>, please call <br><a href="tel:18005455979" class="lilly_rx">1-800-LILLYRX</a><br><a href="tel:18005455979" class="toll_free">(1-800-545-5979)</a></div>
			</div>
		</div>

		<div class="formModal">
			<div class="formModal__inner">
				<div class="formModal__close">╳</div>
				<iframe id="JotFormIFrame-211304083125946" title="Lilly Lead Form - ASCO" onload="window.parent.scrollTo(0,0)" allowtransparency="true" allowfullscreen="true" allow="geolocation; microphone; camera" src=https://leadform.lilly-virtual.com/211304083125946 frameborder="0" style=" min-width: 100%; height:539px; border:none;" scrolling="yes" > </iframe> <script type="text/javascript"> var ifr = document.getElementById("JotFormIFrame-211304083125946"); if (ifr) { var src = ifr.src; var iframeParams = []; if (window.location.href && window.location.href.indexOf("?") > -1) { iframeParams = iframeParams.concat(window.location.href.substr(window.location.href.indexOf("?") + 1).split('&')); } if (src && src.indexOf("?") > -1) { iframeParams = iframeParams.concat(src.substr(src.indexOf("?") + 1).split("&")); src = src.substr(0, src.indexOf("?")) } iframeParams.push("isIframeEmbed=1"); ifr.src = src + "?" + iframeParams.join('&'); } window.handleIFrameMessage = function(e) { if (typeof e.data === 'object') { return; } var args = e.data.split(":"); if (args.length > 2) { iframe = document.getElementById("JotFormIFrame-" + args[(args.length - 1)]); } else { iframe = document.getElementById("JotFormIFrame"); } if (!iframe) { return; } switch (args[0]) { case "scrollIntoView": iframe.scrollIntoView(); break; case "setHeight": iframe.style.height = args[1] + "px"; break; case "collapseErrorPage": if (iframe.clientHeight > window.innerHeight) { iframe.style.height = window.innerHeight + "px"; } break; case "reloadPage": window.location.reload(); break; case "loadScript": if( !window.isPermitted(e.origin, ['jotform.com', 'jotform.pro']) ) { break; } var src = args[1]; if (args.length > 3) { src = args[1] + ':' + args[2]; } var script = document.createElement('script'); script.src = src; script.type = 'text/javascript'; document.body.appendChild(script); break; case "exitFullscreen": if (window.document.exitFullscreen) window.document.exitFullscreen(); else if (window.document.mozCancelFullScreen) window.document.mozCancelFullScreen(); else if (window.document.mozCancelFullscreen) window.document.mozCancelFullScreen(); else if (window.document.webkitExitFullscreen) window.document.webkitExitFullscreen(); else if (window.document.msExitFullscreen) window.document.msExitFullscreen(); break; } var isJotForm = (e.origin.indexOf("jotform") > -1) ? true : false; if(isJotForm && "contentWindow" in iframe && "postMessage" in iframe.contentWindow) { var urls = {"docurl":encodeURIComponent(document.URL),"referrer":encodeURIComponent(document.referrer)}; iframe.contentWindow.postMessage(JSON.stringify({"type":"urls","value":urls}), "*"); } }; window.isPermitted = function(originUrl, whitelisted_domains) { var url = document.createElement('a'); url.href = originUrl; var hostname = url.hostname; var result = false; if( typeof hostname !== 'undefined' ) { whitelisted_domains.forEach(function(element) { if( hostname.slice((-1 * element.length - 1)) === '.'.concat(element) || hostname === element ) { result = true; } }); return result; } } if (window.addEventListener) { window.addEventListener("message", handleIFrameMessage, false); } else if (window.attachEvent) { window.attachEvent("onmessage", handleIFrameMessage); } </script>
			</div>
		</div>

		<?php 
			// Show the HCP modal if HCP cookie is not set
			if ( !$hcp ) {
				get_template_part('template-parts/modal/hcp'); 
			}
		?>

		<header id="site-header" class="header" role="">
			<div class="header__container">
				<a href="<?php echo get_bloginfo('url'); ?>" class="logo">
					<div class="container">
						<div class="logo__title">
							<svg viewBox="0 0 631 344" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Lilly</title> <path id="Lilly" d="M435.528098,200.793973 C439.182374,198.191364 443.134091,195.153215 446.820236,192.231919 C475.215236,169.509545 496.917811,144.609478 501.198838,130.831582 C501.358182,130.385421 501.740606,129.121296 501.740606,128.101498 C501.740606,126.67803 501.060741,125.679478 499.754125,125.679478 C486.741077,125.679478 444.886869,167.331852 434.763249,201.048923 L434.763249,201.18702 L435.528098,200.793973 Z M330.648249,196.003047 C370.19729,166.131465 411.732811,122.630707 416.162559,104.77362 C416.311279,104.18936 416.449377,103.615724 416.428131,103.073956 C416.375017,101.905438 415.737643,100.853771 414.250438,100.853771 C401.736667,100.853771 343.767525,154.297559 330.648249,196.003047 Z M87.830101,222.262845 C77.3877946,215.01803 61.2409933,208.686785 46.8257239,208.686785 C32.8353704,208.686785 23.8802694,214.178822 23.8802694,221.104949 C23.8802694,229.082744 34.7474916,232.567054 46.9000842,232.567054 C61.6446633,232.567054 75.0188889,228.583468 87.830101,222.262845 Z M208.984226,128.54766 C237.326111,119.454461 264.223283,100.450101 284.27931,80.606532 C302.826886,62.2395455 317.667071,40.4307407 317.667071,29.6378788 C317.667071,27.173367 315.90367,25.6861616 313.672862,25.6861616 C305.089562,25.6861616 288.79404,37.0951515 266.88963,59.0208081 C249.818636,76.1449158 229.943199,99.4834175 208.984226,128.54766 Z M631,197.086582 C606.662946,221.317407 530.783603,287.91234 510.695707,343.958737 L485.827508,337.553131 C493.954024,314.342104 518.429175,278.245505 545.719394,250.38165 C539.919293,252.580589 533.85362,253.387929 528.998956,253.387929 C521.626667,253.387929 515.890303,251.167744 512.448485,246.982323 C509.962727,243.976044 508.709226,240.045572 508.709226,235.382121 C508.709226,234.372946 508.783586,233.342525 508.921684,232.205875 C484.967054,246.791111 465.686498,253.387929 446.820236,253.387929 C432.139394,253.387929 419.763721,246.982323 414.069848,235.764545 C390.274562,247.55596 367.477828,253.387929 348.399108,253.387929 C330.648249,253.387929 316.349832,246.366195 309.784882,233.54436 C285.734646,247.067306 265.285572,253.387929 249.011296,253.387929 C239.641902,253.387929 232.216498,250.78532 227.436195,245.877542 C223.93064,242.265758 222.071633,237.379226 221.816684,231.749091 C206.392239,241.893956 183.892946,253.387929 160.777525,253.387929 C137.173451,253.387929 121.324091,245.272037 109.033401,237.251751 C89.4235354,248.097727 67.8590572,253.387929 45.0517003,253.387929 C27.8107407,253.387929 0,246.196229 0,221.487374 C0,201.526953 20.8208754,188.025253 48.6634848,188.025253 C72.3525421,188.025253 95.1705219,198.010774 109.490185,208.357475 C123.087492,197.543367 137.35404,182.395118 154.170084,161.011229 C150.473316,161.202441 146.861532,161.30867 143.313485,161.30867 C111.08362,161.30867 84.1758249,151.822424 69.4949832,135.18697 C61.570303,126.210623 57.8204209,115.67271 57.8204209,104.338081 C57.8204209,59.5200842 114.408586,24.7513468 163.921902,19.641734 C167.204377,27.0565152 170.136296,32.771633 173.142576,39.5702862 C124.224141,45.2535354 83.4853367,74.2115488 83.4853367,102.50032 C83.4853367,121.090387 104.401818,139.765438 148.76303,139.765438 C156.358401,139.765438 163.996263,139.043081 171.517273,137.991414 C210.673266,83.9421212 270.703249,0 322.330522,0 C337.616869,0 345.594663,9.28441077 345.594663,21.7238215 C345.594663,47.2825084 323.626515,74.7958081 309.306852,89.1473401 C286.796936,111.763485 246.111246,145.395572 189.257508,156.53899 C167.14064,187.292273 148.964865,207.698855 130.789091,222.432811 C141.815657,228.381633 152.130488,232.014663 164.46367,232.014663 C195.046987,232.014663 224.727357,204.002088 247.917138,180.270539 L248.735101,179.484444 L266.815269,193.612896 L265.976061,194.590202 C255.724966,206.349747 246.281212,218.767912 246.281212,225.715286 C246.281212,231.016111 250.732205,232.057155 254.577694,232.057155 C266.30537,232.057155 284.35367,224.48303 305.610084,211.406246 L305.610084,211.225657 C307.957744,158.695438 379.630421,78.3863468 423.141801,78.3863468 C435.421869,78.3863468 442.486094,84.4945118 442.486094,95.2236364 C442.486094,121.547172 397.05197,178.007862 330.988182,221.200556 L330.988182,221.232424 C334.408754,228.583468 342.28032,232.131515 355.6333,232.131515 C366.064983,232.131515 386.429074,227.478687 410.670522,214.816195 C413.485589,187.600337 428.899411,158.387374 448.445539,137.566498 C468.066027,116.713754 490.055421,103.148316 509.070404,103.148316 C520.787458,103.148316 527.713586,109.61766 527.713586,119.741279 C527.713586,142.697357 501.060741,181.959579 436.845337,223.070185 C439.68165,228.583468 445.205556,232.057155 453.778232,232.057155 C472.899444,232.057155 506.595269,211.639949 532.855067,186.538047 L551.700084,201.18702 C543.647929,210.949461 535.510791,221.699832 535.776364,227.861111 C535.840101,229.858215 537.189209,231.186077 540.354832,231.186077 C559.699125,231.186077 590.165589,205.659259 613.004815,183.117475 L631,197.086582 Z M280.805623,144.407643 C289.346431,144.407643 296.251313,151.355017 296.251313,159.874579 C296.251313,168.42601 289.346431,175.362761 280.805623,175.362761 C272.243569,175.362761 265.317441,168.42601 265.317441,159.874579 C265.317441,151.355017 272.243569,144.407643 280.805623,144.407643 Z"></path></svg>
						</div>
						
					</div>
				</a>
				<nav id="site-navigation" class="nav">
					<!-- <div class="logo__subtitle"></div> -->
					<?php
						wp_nav_menu(array(
							'theme_location'    => 'primary-navigation',
							'menu_id'           => 'primary-navigation',
							'menu_class'        => 'nav-menu'
						));
					?>
				</nav>
				<div class="logoBackground">
					<svg viewBox="0 0 631 344" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Lilly</title> <path id="Lilly" d="M435.528098,200.793973 C439.182374,198.191364 443.134091,195.153215 446.820236,192.231919 C475.215236,169.509545 496.917811,144.609478 501.198838,130.831582 C501.358182,130.385421 501.740606,129.121296 501.740606,128.101498 C501.740606,126.67803 501.060741,125.679478 499.754125,125.679478 C486.741077,125.679478 444.886869,167.331852 434.763249,201.048923 L434.763249,201.18702 L435.528098,200.793973 Z M330.648249,196.003047 C370.19729,166.131465 411.732811,122.630707 416.162559,104.77362 C416.311279,104.18936 416.449377,103.615724 416.428131,103.073956 C416.375017,101.905438 415.737643,100.853771 414.250438,100.853771 C401.736667,100.853771 343.767525,154.297559 330.648249,196.003047 Z M87.830101,222.262845 C77.3877946,215.01803 61.2409933,208.686785 46.8257239,208.686785 C32.8353704,208.686785 23.8802694,214.178822 23.8802694,221.104949 C23.8802694,229.082744 34.7474916,232.567054 46.9000842,232.567054 C61.6446633,232.567054 75.0188889,228.583468 87.830101,222.262845 Z M208.984226,128.54766 C237.326111,119.454461 264.223283,100.450101 284.27931,80.606532 C302.826886,62.2395455 317.667071,40.4307407 317.667071,29.6378788 C317.667071,27.173367 315.90367,25.6861616 313.672862,25.6861616 C305.089562,25.6861616 288.79404,37.0951515 266.88963,59.0208081 C249.818636,76.1449158 229.943199,99.4834175 208.984226,128.54766 Z M631,197.086582 C606.662946,221.317407 530.783603,287.91234 510.695707,343.958737 L485.827508,337.553131 C493.954024,314.342104 518.429175,278.245505 545.719394,250.38165 C539.919293,252.580589 533.85362,253.387929 528.998956,253.387929 C521.626667,253.387929 515.890303,251.167744 512.448485,246.982323 C509.962727,243.976044 508.709226,240.045572 508.709226,235.382121 C508.709226,234.372946 508.783586,233.342525 508.921684,232.205875 C484.967054,246.791111 465.686498,253.387929 446.820236,253.387929 C432.139394,253.387929 419.763721,246.982323 414.069848,235.764545 C390.274562,247.55596 367.477828,253.387929 348.399108,253.387929 C330.648249,253.387929 316.349832,246.366195 309.784882,233.54436 C285.734646,247.067306 265.285572,253.387929 249.011296,253.387929 C239.641902,253.387929 232.216498,250.78532 227.436195,245.877542 C223.93064,242.265758 222.071633,237.379226 221.816684,231.749091 C206.392239,241.893956 183.892946,253.387929 160.777525,253.387929 C137.173451,253.387929 121.324091,245.272037 109.033401,237.251751 C89.4235354,248.097727 67.8590572,253.387929 45.0517003,253.387929 C27.8107407,253.387929 0,246.196229 0,221.487374 C0,201.526953 20.8208754,188.025253 48.6634848,188.025253 C72.3525421,188.025253 95.1705219,198.010774 109.490185,208.357475 C123.087492,197.543367 137.35404,182.395118 154.170084,161.011229 C150.473316,161.202441 146.861532,161.30867 143.313485,161.30867 C111.08362,161.30867 84.1758249,151.822424 69.4949832,135.18697 C61.570303,126.210623 57.8204209,115.67271 57.8204209,104.338081 C57.8204209,59.5200842 114.408586,24.7513468 163.921902,19.641734 C167.204377,27.0565152 170.136296,32.771633 173.142576,39.5702862 C124.224141,45.2535354 83.4853367,74.2115488 83.4853367,102.50032 C83.4853367,121.090387 104.401818,139.765438 148.76303,139.765438 C156.358401,139.765438 163.996263,139.043081 171.517273,137.991414 C210.673266,83.9421212 270.703249,0 322.330522,0 C337.616869,0 345.594663,9.28441077 345.594663,21.7238215 C345.594663,47.2825084 323.626515,74.7958081 309.306852,89.1473401 C286.796936,111.763485 246.111246,145.395572 189.257508,156.53899 C167.14064,187.292273 148.964865,207.698855 130.789091,222.432811 C141.815657,228.381633 152.130488,232.014663 164.46367,232.014663 C195.046987,232.014663 224.727357,204.002088 247.917138,180.270539 L248.735101,179.484444 L266.815269,193.612896 L265.976061,194.590202 C255.724966,206.349747 246.281212,218.767912 246.281212,225.715286 C246.281212,231.016111 250.732205,232.057155 254.577694,232.057155 C266.30537,232.057155 284.35367,224.48303 305.610084,211.406246 L305.610084,211.225657 C307.957744,158.695438 379.630421,78.3863468 423.141801,78.3863468 C435.421869,78.3863468 442.486094,84.4945118 442.486094,95.2236364 C442.486094,121.547172 397.05197,178.007862 330.988182,221.200556 L330.988182,221.232424 C334.408754,228.583468 342.28032,232.131515 355.6333,232.131515 C366.064983,232.131515 386.429074,227.478687 410.670522,214.816195 C413.485589,187.600337 428.899411,158.387374 448.445539,137.566498 C468.066027,116.713754 490.055421,103.148316 509.070404,103.148316 C520.787458,103.148316 527.713586,109.61766 527.713586,119.741279 C527.713586,142.697357 501.060741,181.959579 436.845337,223.070185 C439.68165,228.583468 445.205556,232.057155 453.778232,232.057155 C472.899444,232.057155 506.595269,211.639949 532.855067,186.538047 L551.700084,201.18702 C543.647929,210.949461 535.510791,221.699832 535.776364,227.861111 C535.840101,229.858215 537.189209,231.186077 540.354832,231.186077 C559.699125,231.186077 590.165589,205.659259 613.004815,183.117475 L631,197.086582 Z M280.805623,144.407643 C289.346431,144.407643 296.251313,151.355017 296.251313,159.874579 C296.251313,168.42601 289.346431,175.362761 280.805623,175.362761 C272.243569,175.362761 265.317441,168.42601 265.317441,159.874579 C265.317441,151.355017 272.243569,144.407643 280.805623,144.407643 Z"></path></svg>
				</div>
				<nav id="top-navigation" class="nav">
					<div class="logo__subtitle">Gastroenterology</div>

					<ul id="menu-top-menu" class="nav-menu nav-menu--top">
						<li class="icon icon--calendar menu-item"><a href="<?php echo get_bloginfo('url'); ?>/schedule-a-meeting/"><img height="28" width="30" alt="Calendar icon" src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/svg/schedule-a-meeting.svg"></a></li><li class="hoverBoxContainer"><div class="hoverBox"><img height="28" width="30" alt="Calendar icon" src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/svg/schedule-a-meeting.svg"><p>Click to schedule a meeting with a Medical Science Liason</p><div style="color: #000;" class="pdfModal__close">╳</div></div></li>
						<li class="hoverBoxContainer"><div class="hoverBox"><img height="28" width="30" alt="Calendar icon" src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/svg/schedule-a-meeting.svg"><p>Click to schedule a meeting with a Medical Science Liason</p><div style="color:#000;" class="pdfModal__close">╳</div></div></li>
					</ul>

					
					<a class="btn contactUs" href="#0">Contact Us</a>
					

					<nav class="contactUsMenu">
						<div class="contactUsMenu__header">
							<h6>Ask <svg viewBox="0 0 631 344" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Lilly</title> <path id="Lilly" d="M435.528098,200.793973 C439.182374,198.191364 443.134091,195.153215 446.820236,192.231919 C475.215236,169.509545 496.917811,144.609478 501.198838,130.831582 C501.358182,130.385421 501.740606,129.121296 501.740606,128.101498 C501.740606,126.67803 501.060741,125.679478 499.754125,125.679478 C486.741077,125.679478 444.886869,167.331852 434.763249,201.048923 L434.763249,201.18702 L435.528098,200.793973 Z M330.648249,196.003047 C370.19729,166.131465 411.732811,122.630707 416.162559,104.77362 C416.311279,104.18936 416.449377,103.615724 416.428131,103.073956 C416.375017,101.905438 415.737643,100.853771 414.250438,100.853771 C401.736667,100.853771 343.767525,154.297559 330.648249,196.003047 Z M87.830101,222.262845 C77.3877946,215.01803 61.2409933,208.686785 46.8257239,208.686785 C32.8353704,208.686785 23.8802694,214.178822 23.8802694,221.104949 C23.8802694,229.082744 34.7474916,232.567054 46.9000842,232.567054 C61.6446633,232.567054 75.0188889,228.583468 87.830101,222.262845 Z M208.984226,128.54766 C237.326111,119.454461 264.223283,100.450101 284.27931,80.606532 C302.826886,62.2395455 317.667071,40.4307407 317.667071,29.6378788 C317.667071,27.173367 315.90367,25.6861616 313.672862,25.6861616 C305.089562,25.6861616 288.79404,37.0951515 266.88963,59.0208081 C249.818636,76.1449158 229.943199,99.4834175 208.984226,128.54766 Z M631,197.086582 C606.662946,221.317407 530.783603,287.91234 510.695707,343.958737 L485.827508,337.553131 C493.954024,314.342104 518.429175,278.245505 545.719394,250.38165 C539.919293,252.580589 533.85362,253.387929 528.998956,253.387929 C521.626667,253.387929 515.890303,251.167744 512.448485,246.982323 C509.962727,243.976044 508.709226,240.045572 508.709226,235.382121 C508.709226,234.372946 508.783586,233.342525 508.921684,232.205875 C484.967054,246.791111 465.686498,253.387929 446.820236,253.387929 C432.139394,253.387929 419.763721,246.982323 414.069848,235.764545 C390.274562,247.55596 367.477828,253.387929 348.399108,253.387929 C330.648249,253.387929 316.349832,246.366195 309.784882,233.54436 C285.734646,247.067306 265.285572,253.387929 249.011296,253.387929 C239.641902,253.387929 232.216498,250.78532 227.436195,245.877542 C223.93064,242.265758 222.071633,237.379226 221.816684,231.749091 C206.392239,241.893956 183.892946,253.387929 160.777525,253.387929 C137.173451,253.387929 121.324091,245.272037 109.033401,237.251751 C89.4235354,248.097727 67.8590572,253.387929 45.0517003,253.387929 C27.8107407,253.387929 0,246.196229 0,221.487374 C0,201.526953 20.8208754,188.025253 48.6634848,188.025253 C72.3525421,188.025253 95.1705219,198.010774 109.490185,208.357475 C123.087492,197.543367 137.35404,182.395118 154.170084,161.011229 C150.473316,161.202441 146.861532,161.30867 143.313485,161.30867 C111.08362,161.30867 84.1758249,151.822424 69.4949832,135.18697 C61.570303,126.210623 57.8204209,115.67271 57.8204209,104.338081 C57.8204209,59.5200842 114.408586,24.7513468 163.921902,19.641734 C167.204377,27.0565152 170.136296,32.771633 173.142576,39.5702862 C124.224141,45.2535354 83.4853367,74.2115488 83.4853367,102.50032 C83.4853367,121.090387 104.401818,139.765438 148.76303,139.765438 C156.358401,139.765438 163.996263,139.043081 171.517273,137.991414 C210.673266,83.9421212 270.703249,0 322.330522,0 C337.616869,0 345.594663,9.28441077 345.594663,21.7238215 C345.594663,47.2825084 323.626515,74.7958081 309.306852,89.1473401 C286.796936,111.763485 246.111246,145.395572 189.257508,156.53899 C167.14064,187.292273 148.964865,207.698855 130.789091,222.432811 C141.815657,228.381633 152.130488,232.014663 164.46367,232.014663 C195.046987,232.014663 224.727357,204.002088 247.917138,180.270539 L248.735101,179.484444 L266.815269,193.612896 L265.976061,194.590202 C255.724966,206.349747 246.281212,218.767912 246.281212,225.715286 C246.281212,231.016111 250.732205,232.057155 254.577694,232.057155 C266.30537,232.057155 284.35367,224.48303 305.610084,211.406246 L305.610084,211.225657 C307.957744,158.695438 379.630421,78.3863468 423.141801,78.3863468 C435.421869,78.3863468 442.486094,84.4945118 442.486094,95.2236364 C442.486094,121.547172 397.05197,178.007862 330.988182,221.200556 L330.988182,221.232424 C334.408754,228.583468 342.28032,232.131515 355.6333,232.131515 C366.064983,232.131515 386.429074,227.478687 410.670522,214.816195 C413.485589,187.600337 428.899411,158.387374 448.445539,137.566498 C468.066027,116.713754 490.055421,103.148316 509.070404,103.148316 C520.787458,103.148316 527.713586,109.61766 527.713586,119.741279 C527.713586,142.697357 501.060741,181.959579 436.845337,223.070185 C439.68165,228.583468 445.205556,232.057155 453.778232,232.057155 C472.899444,232.057155 506.595269,211.639949 532.855067,186.538047 L551.700084,201.18702 C543.647929,210.949461 535.510791,221.699832 535.776364,227.861111 C535.840101,229.858215 537.189209,231.186077 540.354832,231.186077 C559.699125,231.186077 590.165589,205.659259 613.004815,183.117475 L631,197.086582 Z M280.805623,144.407643 C289.346431,144.407643 296.251313,151.355017 296.251313,159.874579 C296.251313,168.42601 289.346431,175.362761 280.805623,175.362761 C272.243569,175.362761 265.317441,168.42601 265.317441,159.874579 C265.317441,151.355017 272.243569,144.407643 280.805623,144.407643 Z"></path></svg></h6>
							<p>We're here to help.</p>
							<a href="#0" class="contactUsMenu__close">╳</a>
						</div>
						<ul class="contactUsMenu__links">
							<li class="contactUsMenu__link contactUsMenu__link--call">
								<h6><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/images/call.png">Call:</h6>
								<p style="font-size:12px;color:#707070;">If you need to report an Adverse Event or Product Complaint, please call:</p>
								<a class="desktop">1-800-LillyRx</a>
								<a class="desktop">(1-800-545-5979)</a>
								<a href="tel:18005455979" class="mob">1-800-LillyRx</a>
								<a href="tel:18005455979" class="mob">(1-800-545-5979)</a>
							</li>
							<li class="contactUsMenu__link contactUsMenu__link--schedule">
								<h6><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/svg/schedule-a-meeting.svg" style="width: 18px;">Schedule a Meeting</h6>
								<a href="<?php echo get_page_link(2537); ?>">Medical Science Liaison</a><br>
							</li>
							<li class="contactUsMenu__link contactUsMenu__link--submit">
								<h6><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/images/submit.png">Submit a Request</h6>
								<a target="_blank" href="https://www.lillymedical.com/en-us/submitQuestion">Information Request</a><br>
							</li>
							<li class="contactUsMenu__link contactUsMenu__link--visit">
								<h6><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/images/visit.png">Visit Us @LillyMedical</h6>
								<a target="_blank" href="https://facebook.com/LillyMedical"><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/images/facebook.png" style="display: inline;">Facebook</a><br>
								<a target="_blank" href="https://twitter.com/LillyMedical"><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/images/twitter.png" style="display: inline;">Twitter</a>
							</li>
						</ul>
					</nav>
 
				</nav>
				<div class="trigram">&#9776;</div>
			</div>
			<?php 
			//	get_template_part('template-parts/modal/cart'); 
			?>
		</header><!-- #site-header -->

		<nav id="site-navigation-mobile" class="mobile<?php if(is_user_logged_in()){ echo ' wp-user-margin';} ?>">

			<ul class="mobile-menu">
			<?php 
				wp_nav_menu(array(
					'theme_location'    => 'primary-navigation',
					'menu_id'           => 'primary-navigation',
					//'menu_class'        => 'mobile-menu',
					'items_wrap'        => '%3$s'
				));
				wp_nav_menu(array(
					//'theme_location'    => 'top-menu',
					'menu'              => 'top-menu',
					//'menu_class'        => 'mobile-menu',
					'items_wrap'        => '%3$s'
				));
			?>
			</ul>
		</nav>

		<?php
		  	$alert_option = get_field('display_alert', 'option');
			$alert_message = get_field('alert', 'option');
			$alert_link = get_field('alert_link', 'option');

			if (isset($alert_option[0])) {
				if ($alert_link != '') {
					echo '<a href="' . $alert_link . '" class="alert"><p>' . $alert_message . '</p></a>';
				} else {
					echo '<div class="alert"><p>' . $alert_message . '</p></div>';
				}
			}

		?>
		<?php
