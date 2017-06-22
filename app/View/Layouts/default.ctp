<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Biblioteca ICEA');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>

	<div class="navbar-top">
		<div class = "container">
			<div class = "row">
				<div  class="col-xs-12 col-sm-6 col-md-8">
					<div id = "menu1" class="menu-top-1">
						<ul class ="menu-top1">

							<li class="menu-item">
								<?php echo $this->Html->link('UFOP', 'http://www.ufop.br/', array('target'=> '_blank')); ?>
							</li>
							<li class="menu-item">
								<?php echo $this->Html->link('ICEA', 'http://www.icea.ufop.br/site/', array('target'=> '_blank')); ?>
							</li>
							<li class="menu-item">
								<?php echo $this->Html->link('SISBIN', 'http://www.sisbin.ufop.br/novoportal/', array('target'=> '_blank')); ?>
							</li>
							<li class="menu-item">
								<?php echo $this->Html->link('PERIÓDICOS CAPES', 'http://www.periodicos.capes.gov.br/', array('target'=> '_blank')); ?>
							</li>
							<li class="menu-item">
								<?php echo $this->Html->link('MORE', 'http://www.more.ufsc.br/', array('target'=> '_blank')); ?>
							</li>



						</ul>
						</div>
				</div>


				<div id="widget-item" class="col-xs-6 col-md-4">

					<div  class = "widget">
						
						<?php echo $this->Html->Image('contato.png', array('target' => '_blank','url' => array('action' => 'contato'))); ?>
						
						<?php echo $this->Html->Image('facebook.png', array('target' => '_blank', 'url' => 'https://www.facebook.com/BIBLIOTECA.ICEA.UFOP.JM/')); ?>
						<?php echo $this->Html->Image('pid.png', array('target' => '_blank', 'url' => 'https://www.facebook.com/pidicea2016/')); ?>
						<?php 
						if($this->Session->read('Usuario')){
							$cliente = $this->Session->read('Usuario');?>
							<div class="texttop">
							<?php 
							echo 'Bem vindo: '  ;
							

							echo $cliente['0']['Usuario']['nome'];?>
							</div>
							<?php
							echo $this->Html->Image('settings.png', array('url' => array('controller'=> 'Usuarios', 'action'=>'index_controller'), 'alt'=> 'Painel de Controle'));
							echo $this->Html->Image('logout.png', array('url' => array('controller'=> 'Usuarios', 'action'=>'logout')));
							
						}else{

							echo $this->Html->Image('login.png', array('alt'=> 'Login', 'url' => array('controller'=> 'Usuarios', 'action'=> 'index_login')));
						}?>
					</div>
				</div>
			</div>
		</div>
	</div>

<div  id = "cabecario" class="container">
		
		<div class= "row">
			<div class="col-xs-6 col-md-4"><?php echo $this->Html->Image('Logo.png', array('class' => 'logo', 'url' => 'home')); ?></div>
			<div class="col-xs-12 col-sm-6 col-md-8">
				<div class="MenuSuperior">

					<?php echo $this->Html->Image('carteira.png', array('class' => 'imagem', 'target' => '_blank', 'url' => 'http://www.sisbin.ufop.br/bibichs/drupal/node/9')); ?>
					<?php echo $this->Html->Image('catalogo.png', array('class' => 'imagem', 'target' => '_blank', 'url' => 'http://200.239.128.190/pergamum/biblioteca/index.php')); ?>
					<?php echo $this->Html->Image('catalografica.png', array('class' => 'imagem', 'target' => '_blank', 'url' => 'http://www.sisbin.ufop.br/novoportal/?page_id=700')); ?>

				</div>

<!--<ul class = "nav navbar-nav">-->
						

			</div>
			<div class="col-xs-12 col-sm-6 col-md-8">
			
				
						<ul class="topnav" id="myTopnav">
						<li><div class="btn-group"><?php echo $this->Html->link( "Início", array('controller' => 'pages',
						'action' => 'home'), array('class'=> 'btn btn-primary', 'type' => 'button'))?></div></li>
						
						<li><div class="btn-group">
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Institucional <span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li><?php echo $this->Html->link('Sobre a Biblioteca', array('controller' => 'pages',
									'action' => 'sobre_nos')); ?></li>
								<li><?php echo $this->Html->link( "Funcionamento", array('controller' => 'pages',
									'action' => 'funcionamento'))?></li>
								</ul>
							</div></li>


							<li><div class="btn-group">
								<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Serviços <span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><?php echo $this->Html->link( "Serviços Oferecidos", array('controller' => 'pages',
										'action' => 'servicos'))?></li>
									<li><?php echo $this->Html->link( "Regulamento", array('controller' => 'pages',
										'action' => 'regulamentos'))?></li>
									</ul>
								</div>


							<li>	<div class="btn-group">
									<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Consultas <span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><?php echo $this->Html->link('Catálogo Online', 'http://200.239.128.190/pergamum/biblioteca/index.php', array('target'=> '_blank')); ?></li>
										<li><?php echo $this->Html->link( "Saiba Como Pesquisar", array('controller' => 'pages',
											'action' => 'saiba_pesquisar'))?></li>
										</ul>
									</div>

								<li>	<div class="btn-group"> <?php echo $this->Html->link( "Renovação", array('controller' => 'pages',
									'action' => 'renovacao'), array('class'=> 'btn btn-primary', 'type' => 'button'))?></div>

								<li>	<div class="btn-group"><?php echo $this->Html->link( "Doação", array('controller' => 'pages',
									'action' => 'doacoes'), array('class'=> 'btn btn-primary', 'type' => 'button'))?></div>	</li>

								<li>	<div class="btn-group">
										<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Aquisições <span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><?php echo $this->Html->link( "Sugestão de Aquisição", array('controller' => 'pages',
												'action' => 'sugestao_aquisicao'))?></li>
											<li><?php echo $this->Html->link('Últimas Aquisições',array('controller' => 'pages',
												'action' => 'ultimas_aquisicoes')); ?></li>

											</ul>
										</div></li>


										<li><div class="btn-group"><?php echo $this->Html->link( "Avisos", array('controller' => 'avisos',
										'action' => 'index'), array('class'=> 'btn btn-primary', 'type' => 'button'))?></div></li>

										 <li class="icon">
    									<a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
  						</li>

									</ul>
									
							</div>

						</div>
						</div>
	
</head>
<body>
	<div id="container">
		
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<div id= "conteudo" class="container">

						<footer class = "footer">
					<div class= "separador">
					</div>

					<div class = "col-xs-6 col-sm-4">
						<div class="panel panel-default">
							<div class="panel-body">
								<h1>
									ENDEREÇO
								</h1>
							</div>
							<div class="panel-footer">
								<p>
									Campus Avançado João Monlevade
								</p>
								<p>
									Rua 37, n°115
									Prédio UFOP – Loanda
								</p>
								<p>
									CEP 35931-006

									João Monlevade – MG
								</p>			
							</div>	
						</div>
					</div>

					<div class = "col-xs-6 col-sm-4">
						<div class="panel panel-default">
							<div class="panel-body">
								<h1>
									FUNCIONAMENTO
								</h1>
							</div>
							<div class="panel-footer">
								<p>
									De Segunda a Sexta
								</p>
								<p>
									Das 08h00min as 22h00min
								</p>
								
							</div>			
						</div>
					</div>

					<div class = "col-xs-6 col-sm-4">
						<div class="panel panel-default">
							<div class="panel-body">
								<h1>
									CONTATO
								</h1>
							</div>
							<div class="panel-footer">
								<p>
									Telefone: (31) 3852-8709 Ramal 2068
								</p>
								<p>
									E-mail: bibjmv@sisbin.ufop.br
								</p>
								<p>
									Responsável: Flávia Cristina Miguel Reis
								</p>
							</div>
						</div>
					</div>
				</footer>
			</div>
			</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
