<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Principal</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style type="text/css">
		.carousel img{
			width: 100%;
		}
		#head{
			background-color: #ededed;
		}
		.navbar	{
			background-color: white;
		}
		navbar-header{
			width: 100%;
		}
		.navbar-default .navbar-collapse, .navbar-default {
			border-left: none;
			border-right: none;
		}
		.blue{
			color: #02527e;
			font-weight: bold;
			font-size: 24px;
		}
		#orcamento{
			background-color: #ededed;
			margin-top: 30px;
			margin-bottom: 30px;
			padding: 25px;
		}
		.clique{
			color: white;
			background-color: #02527e;
			border-radius: 25px;

		}
		.clique:hover{
			cursor: pointer;
		}
		img[src="img/logo.svg"]{
			margin-top: 20px;
		}
		
		
		#service{
			font-family: 'Myriad Pro Condensed'
		}
		.col-sm-4>ul:first-child{
			margin-top: 20px;
		}
		#menu ul li a:hover{
			background-color:#02527e ;
			color: white; 
		}

		.list-unstyled li{
			display: inline;
			padding-left: 60px;
		}
		a{
			text-decoration: none;
			color: black;
		}
		a:hover{
			text-decoration: none;
			color: gray;
		}
		.list-galery{
			display: inline;
			
		}
		
		.well .thumbnail{
			border:none;
		}

		#orcamento{
			
		}
		p,ul,h1,h2,h3,h4,h5,h6{
			color: #02527e;
		}
		.clique h1{
			color: white;
		}

		h1[title~='vart']{
			background-color: red;
		}
		

	/*
	#ededed - cinza claro
	#02527e -  azul escuro

	*/
</style>
</head>
<body data-spy='scroll' data-target='.navbar'>
	<?php include 'components/modal.php' ?>
	<div class="row hidden-xs" id="head">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<img src="img/logo.svg" alt="" class="center-block">
				</div> <!-- logomarca -->
				<div class="col-lg-6">
					<div class="row" id="service">
						<div class="col-sm-4">
							<p class="h3"><strong>REGISTRE SEU DOMÍNIO</strong></p>
							<p>E HOSPEDE SEU WEBSITE</p>
						</div>
						<div class="col-sm-4">
							<p class="h4 text-center">Planos de Hospedagem</p>
							<ul>
								<li>2 GIGA de espaço em disco</li>
								<li>25 GB de tráfego mensal</li>
								<li>illimitadas contas de email</li>
							</ul>

						</div>
						<div class="col-sm-4">
							<ul>
								<li>Scripts Perl/CGI</li>
								<li>Monitoramento 24 Hrs</li>
								<li>Painel de controle(português)</li>
							</ul>
						</div>
					</div>
				</div> <!--  -->
			</div>
		</div>
	</div> <!-- topo -->
	<?php include 'components/menu.php' ?>

	<?php include 'components/carousel.php' ?> <!-- slide -->
	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="col-sm-4">
					<p class="text-center blue">Manutenção e Administração de Redes</p>
					<img src="img/img1.jpg" alt="" class="center-block">
				</div>
				<div class="col-sm-4">
					<p class="text-center blue">Desenvolvimento de software de acordo com suas necessidades</p>
					<img src="img/img2.jpg" alt="" class="center-block">
				</div>
				<div class="col-sm-4">
					<p class="text-center blue">Criação manutenção e administração de sites</p>
					<img src="img/img3.jpg" alt="" class="center-block">
				</div>
			</div>
		</div> <!-- fim conteudo 3 colunas -->
		<div class="row" id="orcamento" >
			<div class="container">
				<div class="col-lg-8">
					<h1 class="text-center" title='vart ari'>FAÇA AGORA MESMO SEU ORÇAMENTO</h1>
				</div>
				<div class="col-lg-4 clique" data-toggle='modal' data-target='#meuModal' >
					<h1 class="text-center" >CLIQUE AQUI</h1>
				</div>
			</div>
		</div> <!-- orcamento -->
		<?php include 'components/empresa.php' ?>

		<div class="row">
			
			<ul class="nav nav-pills">
				<li><a data-toggle='tab' href="#tab1">item 1</a></li>
				<li><a data-toggle='tab' href="#tab2">item 2</a></li>
				<li><a data-toggle='tab' href="#tab3">item 3</a></li>
				<li><a data-toggle='tab' href="#tab4">item 4</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="tab1">
					<h1>titulo 1</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id nemo eveniet quaerat, accusantium consectetur amet itaque optio quas, quos, aspernatur deserunt autem dignissimos rerum tempora laborum libero quod perspiciatis magnam!</p>
				</div>

				<div class="tab-pane " id="tab2">
					<h1>titulo 2</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id nemo eveniet quaerat, accusantium consectetur amet itaque optio quas, quos, aspernatur deserunt autem dignissimos rerum tempora laborum libero quod perspiciatis magnam!</p>
				</div>

				<div class="tab-pane " id="tab3">
					<h1>titulo 3</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id nemo eveniet quaerat, accusantium consectetur amet itaque optio quas, quos, aspernatur deserunt autem dignissimos rerum tempora laborum libero quod perspiciatis magnam!</p>
				</div>

				<div class="tab-pane " id="tab4">
					<h1>titulo 4</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id nemo eveniet quaerat, accusantium consectetur amet itaque optio quas, quos, aspernatur deserunt autem dignissimos rerum tempora laborum libero quod perspiciatis magnam!</p>

				</div>
			</div>
		</div>
		<!-- mais serviços -->
		<?php include 'components/rodape.php' ?>
		
	</div>
	<div id="formularios">
		<form action="">
			<input type="text" name="">	
		</form>
		<form action=""><input type="mail"></form>

	</div>



	<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script >
		$(function () {
			$('[data-toggle="tooltip"]').tooltip();
 		});
		$(document).scroll( function (argument) {
			if ($('#menu').hasClass('affix')) {
				$('[data-spy="affix"]').addClass('navbar-fixed-top');
			}

		});
		$(document).scroll( function (argument) {
			if ($('#menu').hasClass('affix-top')) {
				$('[data-spy="affix"]').removeClass('navbar-fixed-top');
			}

		});
		$(document).scroll( function (argument) {
			if ($('#menu').hasClass('affix')) {
				$('.navbar-brand').addClass('visible-lg');$('.navbar-brand').addClass('visible-md');$('.navbar-brand').addClass('visible-sm'); /* adicionando visibilidade na logo quando fica no topo*/
			}

		});


		$(document).scroll( function (argument) {
			if ($('#menu').hasClass('affix-top') ) {
				$('.navbar-brand').removeClass('visible-lg');$('.navbar-brand').removeClass('visible-md');$('.navbar-brand').removeClass('visible-sm'); 
				$
				/* removendo visibilidade da logo quando o menu volta pra posição*/
			}

		});







		
	</script>
</body>
</html>