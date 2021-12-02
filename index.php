<!DOCTYPE HTML>
<html>

<head>

	<?php
	include 'assets/config.php';

	$tituloPagina = '' . $empresa;
	$descricaoCompartilhamento = '';

	$urlPagina = $url;
	$imagemCompartilhamento = $images . 'compartilhamento.jpg';
	$sessao = 'home';
	?>
	<title><? echo $tituloPagina ?></title>
	<?php include 'assets/head.php'; ?>

	<meta property="og:title" content="<? echo $tituloPagina ?>" />
	<meta name="description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO SEO GOOGLE -->
	<meta property="og:description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO FACEBOOK -->

</head>

<body class="Home">
	<header class="DesktopItem">
		<div class="gradient-border"></div>
		<article>
			<div class="box-links">
				<a href="#menu-abas">Megaexperiência</a>
				<a href="#icones">Informações</a>
			</div>
			<div class="box-social">
				<a class="botaotopo" href="#ingressos">Comprar</a>
				<?php include 'assets/social.php'; ?>
			</div>
		</article>
	</header>

	<section id="principal">
		<img class="bg" src="<? echo $images ?>bg.jpg">
		<article>
			<h1><strong>ALIENS EXPERIENCE</strong> VENHA SER ABDUZIDO NESTA EXPERIÊNCIA DE OUTRO PLANETA, COM MUITA ARTE, TECNOLOGIA E GASTRONOMIA.
			</h1>
		</article>

		<h3 id="ancora-abas">
			Uma viagem cheia de sabor e aventura dentro de um disco-voador.<br> <br>
			Você vai se sentir parte de uma superprodução cinematográfica e se surpreender com as diferentes raças alienígenas e suas peculiaridades.<br> <br>
			Venha ser abduzido nesta experiência de outro planeta, com muita arte, tecnologia e gastronomia.<br><br>
			Aliens experience. Um contato imediato com a diversão.
		</h3>
		<!-- <a class="Btn-primary" href="#ingressos">Comprar</a> -->
		<button>
			<a class="button" href="#ingressos">Comprar</a>
		</button>
	</section>

	<section id="menu-abas">

		<p id="megashow">
			Toda a aventura começa quando os simpáticos e atrapalhados habitantes da Constelação de Andrômeda chegam à Terra para pedir ajuda aos humanos em uma missão importantíssima. A Pedra Mágica de Andrômeda foi roubada pelos Delphinus e sem ela a harmonia de todo o Universo está comprometida. Por isso, os presentes serão transportados pelo espaço e ajudarão estes seres alienígenas a recuperarem o artefato que está em posse dos vilões.<br><br>

			Na jornada, o público se divertirá em uma trama cheia de humor, ação e aventura. O figurino, encabeçado pelo famoso figurinista Bruno Oliveira, é um show à parte e traz costumes iluminados com led e neon. Para completar a caracterização, máscaras, próteses e lentes de contato foram produzidas especialmente para o evento – tudo isso para aumentar o realismo dos personagens extraterrestes presentes na experiência. <br><br>

			Para que o público se sinta ainda mais dentro de um filme de ficção científica, a cenografia remonta uma nave espacial gigante e recursos tecnológicos são utilizados para aumentar a sensação de imersão. Os aventureiros presentes participarão de uma experiência cheia de projeções em 360º, batalhas com recursos de lasers, led, além de números de ilusionismo e telepatia. Alguns personagens também utilizarão um modulador de voz, o que deixará o evento ainda mais real e divertido. <br><br>

			Recheada de tecnologia, lasers e neons, ilusionismo, efeitos especiais e visuais, além de muita atuação e ação, Aliens Experience Diner Adventure ainda oferece ao público a possibilidade de se deliciarem com uma experiência gastronômica cósmica temática elaborada especialmente para o evento. 
		</p>

		<video class="DesktopItem" id='videolol' src="<? echo $images ?>ALIENS XP SP 16x9.mov" preload="auto" type="video/mp4" controls poster="<? echo $images ?>aliens-desktop-thumb.jpg"></video>
		<video class="MobileItem" id='videolol' src="<? echo $images ?>ALIENS XP SP 9x16.mov" preload="auto" type="video/mp4" controls poster="<? echo $images ?>aliens-mobile-thumb.jpg"></video>

	</section>

	<section id="icones">
		<h1 class="">ALIENS EXPERIENCE</h1>

		<div class="menu-locais-links">
			<a class="active" local="sp">SÃO PAULO</a>						
		</div>

		<div class="local sp active">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<!-- <img src="<? echo $images ?>icon02.png"> -->
						<i class="fas fa-map-marker-alt"></i>
					</div>
					<h2>Rua Tagipuru, 317<br>Barra Funda</h2>
				</div>
				<div class="card">
					<div class="img-wrapper">
						<i class="fas fa-clock"></i>
					</div>
					<h2>DURAÇÃO - 75min</h2>
				</div>
			</div>
		</div>
	</section>


	<section id="valores">
		<div class="local sp active">
			<h1>HORÁRIOS E VALORES - SP</h1>

			<h2>Quinta e Sexta - 18h, 20h e 22h <br>Sáb e Dom - 10h30, 13h, 15, 17h, 19h e 21h</h2>
			<table>
				<tr>
					<td class="first"></td>
					<td class="first">QUI-SEX</td>
					<td class="first">SÁB-DOM</td>
				</tr>

				<tr>
					<td class="first">Couvert</td>
					<td>A partir R$ 50,00</td>
					<td>A partir R$ 60,00</td>
				</tr>

				<tr>
					<td class="first">Couvert + Consumação</td>
					<td>A partir R$ 80,00<br> (R$ 35 Couvert + R$ 45 consumação)</td>
					<td>A partir R$ 90,00<br> (R$ 45 couvert + R$ 45 consumação)</td>
				</tr>
			</table>
			<h2>Quinta e Sexta - 18h, 20h e 22h (verificar programação, sujeito a mudança)</h2><br>

		</div>
	</section>

	<section id="ingressos">
		<h1 class="">INGRESSOS</h1>
		
		<p class="aviso">
			Atendendo aos decretos municipais n°60.488 (São Paulo) , o evento ALIENS EXPERIENCE, solicitará ao público que irá assistir e viver a experiência , o comprovante de vacinação do cidadão contra a COVID-19 para o acesso aos eventos. O público poderá apresentar o comprovante físico de vacinação (carteirinha de vacinação), ou de forma digital disponível nas plataformas ConectSUS, que podem ser baixados na loja de aplicativos do seu smartphone.
		</p>
		
		<div class="wrapper-card">

			<div class="card">
				<a onclick="gtag_report_conversion('<? echo $siteVendasSP ?>')" class="Btn" href="<? echo $siteVendasSP ?>">
					<h2>SÃO PAULO</h2>
				</a>
			</div>

		</div>

		<!-- <div class="ingressostxt">
			<p>

			</p>
		</div> -->

		<div class="box-social">
			<?php include 'assets/social.php'; ?>
		</div>

		<img class="logofooter" src="<? echo $images ?>logo.png">

	</section>


	<?php include 'assets/footer.php'; ?>

	<a href="https://api.whatsapp.com/send?phone=5511994087679&text=Oi,%20vim%20atrav%C3%A9s%20do%20website%20Aliens%20Experience" target="_blank" id="Whatsapp"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>

</body>

</html>