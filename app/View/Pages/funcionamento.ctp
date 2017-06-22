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
			<li><?php  echo "Funcionamento" ?></li>
		</ol>



		<div class="row">
			<div class="content">
				<div class ="post">
					<h1>Horário de funcionamento</h1>

					<p>A Biblioteca funciona de 08h00min as 22h00min, de segunda a sexta-feira.</p>

					<p><b>Endereço:</b> Campus Avançado João Monlevade

						<p> Rua 37, n°115, Prédio UFOP – Loanda</p>

						<p> CEP 35931-006, João Monlevade – MG

							<p> Tel. (31) 3852-8709 Ramal 2068
								<p>E-mail: bibjmv@sisbin.ufop.br

				</div>
			</div>
		</div>
						<footer class = "footer">
							
						</footer>
					</div>
	</body>

</htm>
