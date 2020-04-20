<!DOCTYPE html>
	<html>
		<head>
			<meta name="viewport" content="width=device-width, initial-scale=1" />
			<meta charset="utf-8" />
			<title>Quick Discovery</title>
			<link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
			<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
			<link href="{{ asset('assets/css/style_corretor.css') }}" rel="stylesheet">
			<script src="{{ asset('assets/js/jquery.js') }}"></script>
			<script src="{{ asset('assets/js/controle.js') }}"></script>
			<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
		</head>
		<body>
			
			<section id="sec_modal">
				<div id="preloader">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</section>

			<section class="fundo_menu" id="fundo_box_menu">
				<div class="fechar_menu" id="fechar_menu">
					<i class="fa fa-times" aria-hidden="true"></i>
				</div>

				<div class="box_menu">
					<div class="box_faixa">
						Quick Discovery
					</div>

					<div class="logo_menu">
						<img src="{{ asset('assets/images/logo-azul.png') }}">
					</div>
					<ul>
						<li><a href="{{ route('buscarLocalidade') }}"><i class="fa fa-map-marker" aria-hidden="true"></i> Localidades</a></li>
						<li><a href="{{ route('listarEventos') }}"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Eventos</a></li>
						<li><a href="{{ route('cotacao') }}"><i class="fa fa-pencil" aria-hidden="true"></i> Cotação</a></li>
					</ul>
				</div>
			</section>

			<section id="envelope">
				<div id="nav">
					<div class="logo">
						<img src="{{ asset('assets/images/log-branca.png') }}">
					</div>

					<div class="btn_bar">
						<i class="fa fa-bars" aria-hidden="true"></i>	
					</div>
				</div>