<?php echo $this->Html->css('bootstrap.css');?>

<html>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



	<header>
	
					</header>

<body>
						<div id= "conteudo" class="container">
							<div class= "separador">
							</div>

							<div class= "breadcrumb">
								<?php echo "Home";?>
							</div>

							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-8">
									<div class ="post">
									<div id="myCarousel" class="carousel slide" data-ride="carousel">
										<!-- Indicators -->
										<ol class="carousel-indicators">
											<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
											<li data-target="#myCarousel" data-slide-to="1"></li>
											<li data-target="#myCarousel" data-slide-to="2"></li>
											
										</ol>

										<!-- Wrapper for slides -->
										<div class="carousel-inner" role="listbox">
											<div class="item active">
												<?php echo $this->Html->Image('BibliotecaDigital.jpg', array('target' => '_blank', 'url' => 'http://monografias.ufop.br/')); ?>
											</div>

											<div class="item">
												<?php echo $this->Html->Image('BibliotecaTeses.jpg', array('target' => '_blank', 'url' => 'http://www.tede.ufop.br/index.php')); ?>
											</div>

											<div class="item">
												<?php echo $this->Html->Image('GuiaNormalizacao.jpg', array('target' => '_blank', 'url' => 'http://www.sisbin.ufop.br/download/guia.pdf')); ?>
											</div>

											
										</div>

										<!-- Left and right controls -->
										<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
											<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
											<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>




									</div>


									<div class="panel-body">
										<h3>Últimas Noticias</h3>
										<?php $i = 0 ?>
										<?php foreach ($noticias as $e): 
										if ($i == 4) break; ?>
										<table class = "table">

											<tr>
												<td>
													<?php	echo $this->Html->link($e['Noticia']['titulo'], array('controller'=>'Noticias', 'action'=>'view', $e['Noticia']['id']));?>
												</td>
												<td>
													<?php
													$data = strtotime($e['Noticia']['data']);
													echo date('d-m-Y', $data);?>
												</td>
											</tr>
										</table>
									<?php endforeach; ?>
									<?php echo $this->Html->link('Mais Noticias', array('controller' => 'Noticias', 'action' => 'index'));?>
								</div>



							</div>
						</div>

						<div class="col-xs-6 col-md-4">
							<div class = "post">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<h3>Últimos Avisos</h3>
									</div>
									<div class="panel-body">

										<?php $i = 0 ?>
										<?php foreach ($avisos as $e): 
										if ($i == 4) break; ?>
										<table class = "table">

											<tr>
												<td>
													<?php	echo $this->Html->link($e['Aviso']['titulo'], array('controller'=>'Avisos', 'action'=>'view', $e['Aviso']['id']));?>
												</td>
												<td>
													<?php
													$data = strtotime($e['Aviso']['data']);
													echo date('d-m-Y', $data);?>
												</td>
											</tr>
										</table>
									<?php endforeach; ?>
								<?php echo $this->Html->link('Mais Avisos', array('controller' => 'Avisos', 'action' => 'index'));?>
								</div>
							</div>
						</div>


					</div>

				</div>
		
			</div>

<script>
	function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "nav navbar-nav") {
        x.className += " responsive";
    } else {
        x.className = "nav navbar-nav";
    }
}
</script>


		</body>

	</htm>
