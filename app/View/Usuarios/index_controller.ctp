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

		<div class= "breadcrumb">
			<ol class="breadcrumb">
            <li> <?php echo $this->Html->link("Inicio",array('controller' => 'pages','action' => 'home')); ?></li>
            <li><?php  echo "Area do Administrador" ?></li>
        </ol>
		</div>

	


					<div class="row">
 		 <div class="col-xs-6 col-md-3">
    		<?php echo $this->Html->Image('adduser.png', array('class' => 'thumbnail', 'target' => '_blank', 'url' => 'addu')); ?>
    		<div class="caption">
        <h4>Adicionar Usuarios</h4>
  </div>
</div>
 <div class="col-xs-6 col-md-3">
    		<?php echo $this->Html->Image('EditUser.png', array('class' => 'thumbnail', 'target' => '_blank', 'url' => 'usuario_adm')); ?>
    		<div class="caption">
        <h4>Administrar Usuarios</h4>
  </div>
</div>
 <div class="col-xs-6 col-md-3">
    		<?php echo $this->Html->Image('addnew.png', array('class' => 'thumbnail', 'target' => '_blank', 'url' => '../avisos/add')); ?>
    		<div class="caption">
        <h4>Adicionar Avisos</h4>
  </div>
</div>
 <div class="col-xs-6 col-md-3">
    		<?php echo $this->Html->Image('editnew.png', array('class' => 'thumbnail', 'target' => '_blank', 'url' => '../avisos/avi_adm')); ?>
    		<div class="caption">
        <h4>Administrar Avisos</h4>
  </div>
</div>

<div class="col-xs-6 col-md-3">
    		<?php echo $this->Html->Image('addnew.png', array('class' => 'thumbnail', 'target' => '_blank', 'url' => '../noticias/add')); ?>
    		<div class="caption">
        <h4>Adicionar Noticias</h4>
  </div>
</div>
 <div class="col-xs-6 col-md-3">
    		<?php echo $this->Html->Image('editnew.png', array('class' => 'thumbnail', 'target' => '_blank', 'url' => '../noticias/not_adm')); ?>
    		<div class="caption">
        <h4>Administrar Noticias</h4>
  </div>
</div>

</div>
					

							
				<footer class = "footer">

				</footer>
			</div>






		</body>

	</htm>
