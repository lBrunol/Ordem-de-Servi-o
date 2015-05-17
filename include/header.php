<!doctype html>

<?php include ('funcoes.php'); ?>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Equipe de Desenvolvimento | Foster</title>
	<meta name="description" content="Aqui é uma área restrita de Desenvolvedores da Foster e também para quem quiser compartilhar conhecimentos.">

	<meta name="viewport" content="width=device-width">
	<?php
		$protocolo    = (strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === false) ? 'http' : 'https';
		$host         = $_SERVER['HTTP_HOST'];
		$uri 		  = $_SERVER['REQUEST_URI'];
		$UrlAtual     = $protocolo . '://' . $host . $uri;

		$UrlPagina	  = 'http://html.foster.srv.br/members/brendo_marinho.php';

		if ($UrlAtual == $UrlPagina)
			echo '<link rel="stylesheet" href="/members/brendo_marinho/brendo-marinho/css/style.css">';
		else
			echo '<link rel="stylesheet" href="/css/style.css">';
	?>
	
	<script src="<?php echo BASE_URL ?>/js/libs/modernizr-2.5.3.min.js"></script>
</head>

<body>

	<!--[if lt IE 7]><p class=chromeframe>O seu navegador é <em>antigo!</em> <a href="http://browsehappy.com/">Atualize para um navegador mais recente</a> ou então <a href="http://www.google.com/chromeframe/?redirect=true">instale o Google Chrome Frame</a> para melhorar a sua experiência nesse site.</p><![endif]-->
	
	<!--[if gte IE 9]><style type="text/css">nav > ul > li > a:hover, nav .active, #sidebar li a:hover { filter: none; }</style><![endif]-->
  
	<!-- INICIO HEADER -->
	
	<header>
		<h1><a href="<?php echo BASE_URL ?>" title="Foster Development"><span>Foster</span> Development</a></h1>
	</header>
  
	<!-- INICIO NAVEGACAO -->
	<div class="background_nav">
		<nav id="access">
			<ul>
				<li><a href="#" title="WebDesign" class="slide">WebDesign<p>Conteúdo para Designers</p></a>
					<ul class="submenu">
						<li><a href="<?php echo BASE_URL ?>/articles/webdesign.php" title="Brushes">Brushes</a></li>
						<li><a href="<?php echo BASE_URL ?>/articles/webdesign.php" title="Efects">Efects</a></li>
						<li><a href="<?php echo BASE_URL ?>/articles/webdesign.php" title="Fonts">Fonts</a></li>
						<li><a href="<?php echo BASE_URL ?>/articles/webdesign.php" title="Geral">Geral</a></li>
						<li><a href="<?php echo BASE_URL ?>/articles/webdesign.php" title="Texture">Texture</a></li>
					</ul>
				</li>
				<li><a href="#" title="Front-End" class="slide">Front-End<p>Conteúdo para Desenvolvedores</p></a>
					<ul class="submenu">
						<li><a href="<?php echo BASE_URL ?>/articles/front-end.php" title="E-mail Marketing">E-mail Marketing</a></li>
						<li><a href="<?php echo BASE_URL ?>/articles/front-end.php" title="HTML">HTML</a></li>
						<li><a href="<?php echo BASE_URL ?>/articles/front-end.php" title="HTML5">HTML5</a></li>
						<li><a href="<?php echo BASE_URL ?>/articles/front-end.php" title="CSS">CSS</a></li>
						<li><a href="<?php echo BASE_URL ?>/articles/front-end.php" title="CSS3">CSS3</a></li>
						<li><a href="<?php echo BASE_URL ?>/articles/front-end.php" title="XML">XML</a></li>
						<li><a href="<?php echo BASE_URL ?>/articles/front-end.php" title="Javascript">Javascript</a></li>
						<li><a href="<?php echo BASE_URL ?>/articles/front-end.php" title="jQuery">jQuery</a></li>
					</ul>
				</li>
				<li><a href="#" title="Back-End" class="slide">Back-End<p>Desenvolver lógica de programação e linguagens</p></a>
					<ul class="submenu">
						<li><a href="<?php echo BASE_URL ?>/articles/back-end.php" title="Lógica de Programação">Lógica de Programação</a></li>
						<li><a href="<?php echo BASE_URL ?>/articles/back-end.php" title="PHP">PHP</a></li>
						<li><a href="<?php echo BASE_URL ?>/articles/back-end.php" title="ASP.NET">ASP.NET</a></li>
						<li><a href="<?php echo BASE_URL ?>/articles/back-end.php" title="Ruby">Ruby</a></li>
						<li><a href="<?php echo BASE_URL ?>/articles/back-end.php" title="Java">Java</a></li>
						<li><a href="<?php echo BASE_URL ?>/articles/back-end.php" title="C#">C#</a></li>
						<li><a href="<?php echo BASE_URL ?>/articles/back-end.php" title="ActionScript">ActionScript</a></li>
						<li><a href="<?php echo BASE_URL ?>/articles/back-end.php" title="Delphi">Delphi</a></li>
						<li><a href="<?php echo BASE_URL ?>/articles/back-end.php" title="Flex">Flex</a></li>
						<li><a href="<?php echo BASE_URL ?>/articles/back-end.php" title="Visual Basic.NET">Visual Basic.NET</a></li>
						<li><a href="<?php echo BASE_URL ?>/articles/back-end.php" title="VBA">VBA</a></li>
						<li><a href="<?php echo BASE_URL ?>/articles/back-end.php" title="Cobol">Cobol</a></li>
						<li><a href="<?php echo BASE_URL ?>/articles/back-end.php" title="C">C</a></li>
						<li><a href="<?php echo BASE_URL ?>/articles/back-end.php" title="C++">C++</a></li>
					</ul>
				</li>
				<li><a href="#" title="Database" class="slide">Database<p>Para aprender a manipular DBs</p></a>
					<ul class="submenu">
						<li><a href="<?php echo BASE_URL ?>/articles/database.php" title="MySQL">MySQL</a></li>
						<li><a href="<?php echo BASE_URL ?>/articles/database.php" title="Oracle DB">Oracle DB</a></li>
						<li><a href="<?php echo BASE_URL ?>/articles/database.php" title="SQLServer">SQLServer</a></li>
						<li><a href="<?php echo BASE_URL ?>/articles/database.php" title="Acess">Access</a></li>
					</ul>
				</li>
				<li><a href="<?php echo BASE_URL ?>/articles/seo.php" title="SEO">SEO<p>Use técnicas de otimização de sites</p></a></li>
				<li><a href="#" title="Plugins JS" class="slide">Plugins JS<p>Scripts prontos extremamente úteis</p></a>
					<ul class="submenu">
						<li><a href="http://sorgalla.com/jcarousel/" title="Jcarousel" target="_blank">Jcarousel</a></li>
						<li><a href="http://workshop.rs/projects/coin-slider/" title="Coin Slider" target="_blank">Coin Slider</a></li>
						<li><a href="http://modernizr.com/" title="Modernizr" target="_blank">Modernizr</a></li>
						<li><a href="http://css3pie.com/" title="CSS3 Pie" target="_blank">CSS3 Pie</a></li>
						<li><a href="http://selectivizr.com/" title="Selectivizr" target="_blank">Selectivizr</a></li>
						<li><a href="http://premiumsoftware.net/cleditor/" title="Cleditor" target="_blank">Cleditor</a></li>
						<li><a href="http://blueimp.github.com/jQuery-File-Upload/" title="jQuery File Uploader" target="_blank">jQuery File Uploader</a></li>
						<li><a href="http://steamdev.com/snippet/" title="Steandev" target="_blank">Steandev</a></li>
						<li><a href="http://playground.mobily.pl/jquery/mobily-map.html" title="Mobily Map" target="_blank">Mobily Map</a></li>
						<li><a href="http://www.bitstorm.org/jquery/shadow-animation/" title="Shadow Animation" target="_blank">Shadow Animation</a></li>
						<li><a href="http://www.professorcloud.com/mainsite/cloud-zoom.htm" title="Cloud Zoom" target="_blank">Cloud Zoom</a></li>
						<li><a href="http://dev.herr-schuessler.de/jquery/popeye/" title="Popeye" target="_blank">Popeye</a></li>
						<li><a href="https://github.com/gravityonmars/Balloons.IO" title="Ballons" target="_blank">Ballons</a></li>
						<li><a href="http://curtain.victorcoulon.fr/#intro" title="Curtain" target="_blank">Curtain</a></li>
						<li><a href="https://github.com/Kicksend/mailcheck" title="MailCheck" target="_blank">MailCheck</a></li>
						<li><a href="http://timeline.verite.co/" title="Verite Timeline" target="_blank">Verite Timeline</a></li>
						<li><a href="http://www.turnjs.com/" title="Turn JS" target="_blank">Turn JS</a></li>
						<li><a href="http://www.sequencejs.com/" title="Sequence JS" target="_blank">Sequence JS</a></li>
						<li><a href="http://glisse.victorcoulon.fr/" title="Glisse JS" target="_blank">Glisse JS</a></li>
						<li><a href="http://joelb.me/scrollpath/" title="Scrollpath" target="_blank">Scrollpath</a></li>
						<li><a href="http://socialitejs.com/" title="Socialite JS" target="_blank">Socialite JS</a></li>
						<li><a href="http://nodejs.org/" title="Node JS" target="_blank">Node JS</a></li>
					</ul>
				</li>
				<li><a href="<?php echo BASE_URL ?>/articles/tutoriais.php" title="Tutoriais">Tutoriais<p>Tutoriais para iniciantes na foster</p></a></li>
			</ul>
		</nav>
	</div>