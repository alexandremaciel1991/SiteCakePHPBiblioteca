<?php echo $this->Html->css('bootstrap.css');?>

	<html>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


		<body>

			<header>
			</header>

			<div id= "conteudo" class="container">
				<div class= "separador">
				</div>

				
				<ol class="breadcrumb">
					<li> <?php echo $this->Html->link("Inicio",array('controller' => 'pages','action' => 'home')); ?></li>
					<li><?php  echo "Doações" ?></li>
				</ol>



				<div class="row">
					<div class="content">
						<div class ="post">
							<h1>Doações</h1>

							<p>A biblioteca resguarda-se ao direito de analisar as doações recebidas, avaliando sua pertinência de integrá-las ou não ao seu acervo, utilizando critérios tais como: </p>
								<ul>
									<li>adequação ou não da obra ao publico alvo da biblioteca;</li>
									<li>limitação do espaço físico;</li>
									<li>condições físicas da obra, entre outros.</li>
								</ul>

								<p>No ato da doação é imprescindível que o doador assine o termo de doação.</p>

								<p>Para mais informações, entre em contato por meio do fale conosco ou telefone.</p>
						</div>
					</div>


										</div>
										<footer class = "footer">
										</footer>
									</div>
		</body>

	</html>
