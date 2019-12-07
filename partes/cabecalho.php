<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php
		$titulo = "Design Responsivo";
		global $tituloPagina;
		if($tituloPagina != ''){
			$titulo .= ' | ' . $tituloPagina;
		}	
	?>
	<title> <?php echo $titulo ?> </title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<header class="cabecalho">
		<div class="container">
			<a href="index.php" class="logo">Design Responsivo</a>
			<nav class="menu-principal menu-principal--fechado">
				<button class="menu-principal__btn menu-principal__btn--fechar">Abrir/Fechar menu</button>
				<ul class="menu-principal__lista">
					<li><a class="menu-principal__item <?php echo $tituloPagina == 'Home' ? 'menu-principal__item--atual' : '' ?>" href="index.php">Home</a></li>
					<li><a class="menu-principal__item <?php echo $tituloPagina == 'Sobre Nós' ? 'menu-principal__item--atual' : '' ?>" href="sobre.php">Sobre nós</a></li>
					<li><a class="menu-principal__item <?php echo $tituloPagina == 'Portifolio' ? 'menu-principal__item--atual' : '' ?>" href="portifolio.php">Portifolio</a></li>
					<li><a class="menu-principal__item <?php echo $tituloPagina == 'Contato' ? 'menu-principal__item--atual' : '' ?>" href="contato.php">Contato</a></li>
				</ul>
			</nav>
		</div>
		<!--Fim container-->
	</header>
	<main>