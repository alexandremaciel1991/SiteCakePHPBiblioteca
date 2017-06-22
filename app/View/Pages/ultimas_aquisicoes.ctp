<?php echo $this->Html->css('bootstrap.css');?>

<html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<header></header>
<body>

	
	<div id= "conteudo" class="container">
		<div class= "separador">
		</div>

		
		<ol class="breadcrumb">
			<li> <?php echo $this->Html->link("Inicio",array('controller' => 'pages','action' => 'home')); ?></li>
			<li><?php  echo "Ultimas Aquisições" ?></li>
		</ol>



		<div class="row">
			<div class="content">
				<div class ="post">
					<h1>Últimas Aquisições</h1>

					<p>A aquisição de recursos para as bibliotecas é feita com verba da UFOP.</p>

<p>A expansão e atualização do acervo se dar por meio do recurso do orçamento anual e do Reuni disponibilizada pelo Governo Federal.</p>

<p><b>Ultimas aquisições</b></p>

<?php echo $this->Html->link('Aquisições 2013', 'http://www.sisbin.ufop.br/bibicea/files/Aquisicoes2013.xlsx');?><br>
<?php echo $this->Html->link('Aquisições 2014', 'http://www.sisbin.ufop.br/bibicea/files/Aquisicoes2014.xlsx');?></br>


							</div>
						</div>


					</div>
					<footer class = "footer">
			
					</footer>
				</div>






			</body>

		</htm>
