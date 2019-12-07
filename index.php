<?php 
	global $tituloPagina;
	$tituloPagina = "Home";
	include('partes/cabecalho.php'); 

?>
		<header class="cabecalho-home">
			<h2 class="cabecalho-home__titulo">Texto grande aqui!</h2>
			<p class="cabecalho-home__subtitulo">texto menor aqui</p>
			<a class="cabecalho-home__role" href="#servicos">role para ver mais</a><!-- id da seção serviços-->
		</header>
		<section id="servicos" class="servicos">
			<!-- Seção serviços -->
			<div class="container">
				<h2 class="home__titulo">O que fazemos</h2>
				<section class="servicos__item">
					<img src="todas-as-img/img/icone-desenvolvimento-web.png" alt="globe" width="100" height="100">
					<h3>Desenvolvimento web</h3>
					<p class="servicos__texto">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae qui
						dicta dignissimos? Perspiciatis veritatis, consectetur nulla ea dolor cumque facere inventore
						omnis optio illo, eos earum molestias culpa modi quis!</p>
				</section>
				<section class="servicos__item">
					<img src="todas-as-img/img/icone-carrinho-compras.png" alt="compras" width="100" height="100">
					<h3>E-commerce</h3>
					<p class="servicos__texto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem
						voluptates atque dolorem illum nulla odio amet necessitatibus quo iusto reprehenderit..</p>
				</section>
				<section class="servicos__item">
					<img src="todas-as-img/img/icone-cafe.png" alt="xícara de café" width="100" height="100">
					<h3>Café</h3>
					<p class="servicos__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, consequatur
						eveniet at molestias mollitia numquam quod voluptatibus blanditiis praesentium, eos commodi
						corporis sunt quas quam veniam facere a vitae placeat!</p>
				</section>
			</div>
		</section><!-- Fim Seção serviços -->

		<section class="depoimentos">
			<!-- Seção depoimentos -->
			<div class="container">
				<h2 class="home__titulo home__titulo--branco">O que falam de nós</h2>
				<div class="depoimentos__caixa">
					<section class="depoimentos__item">
						<img class="depoimentos__img" src="todas-as-img/img/depoimentos/pessoa-1.jpg" alt="caramboas"
							width="100" height="100">
						<p class="depoimentos__texto"> depoimento 1 amet consectetur adipisicing elit. Sequi,
							consectetur? Dolore ipsum est blanditiis quaerat quae reiciendis maxime corrupti veritatis
							totam
							consectetur consequuntur, veniam eos temporibus? Tenetur, exercitationem? Consequuntur,
							laboriosam.</p>
						<p class="depoimentos__pessoa">Nome da Pessoa - Cargo</p>
					</section>
					<section class="depoimentos__item">
						<img class="depoimentos__img" src="todas-as-img/img/depoimentos/pessoa-1.jpg" alt="caramboas"
							width="100" height="100">
						<p class="depoimentos__texto"> Depoimento 2 sit amet consectetur adipisicing elit. Sequi,
							consectetur? Dolore ipsum est blanditiis quaerat quae reiciendis maxime corrupti veritatis
							totam
							consectetur consequuntur, veniam eos temporibus? Tenetur, exercitationem? Consequuntur,
							laboriosam.</p>
						<p class="depoimentos__pessoa">Nome da Pessoa - Cargo</p>
					</section>
					<section class="depoimentos__item">
						<img class="depoimentos__img" src="todas-as-img/img/depoimentos/pessoa-1.jpg" alt="caramboas"
							width="100" height="100">
						<p class="depoimentos__texto"> Depoimento 3 sit amet consectetur adipisicing elit. Sequi,
							consectetur? Dolore ipsum est blanditiis quaerat quae reiciendis maxime corrupti veritatis
							totam
							consectetur consequuntur, veniam eos temporibus? Tenetur, exercitationem? Consequuntur,
							laboriosam.</p>
						<p class="depoimentos__pessoa">Nome da Pessoa - Cargo</p>
					</section>
				</div>
			</div>
		</section><!-- Fim seção depoimentos -->
<?php include('partes/rodape.php') ?>