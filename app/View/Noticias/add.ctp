<?php echo $this->Html->css('bootstrap.css');?>
  <?php
    echo $this->Html->script('ckeditor/ckeditor.js');
    echo $this->Html->script('ckfinder/ckfinder.js');
    ?>

<html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<body>

<header></header>

	<div id= "conteudo" class="container">
		<div class= "separador">
		</div>

		<ol class="breadcrumb">
            <li> <?php echo $this->Html->link("Inicio",array('controller' => 'pages','action' => 'home')); ?></li>
            <li><?php  echo $this->Html->link("Area do Administrador",array('controller' => 'Usuarios','action' => 'index_controller')); ?></li>
            <li><?php  echo "Notícias"?></li>
        </ol>

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-8">
				<div class ="post">
					<h1>Adicionar Noticia</h1>

					  <?php  echo $this->Html->link("Logout", array('controller' => 'Usuarios','action' => 'logout')); ?>

					<?php
					echo $this->Form->create('Noticia');
					
					echo $this->Form->input('titulo', array('rows' => '1', 'class' => 'form-horizontal'));
					echo $this->Form->input('post', array('rows' => '3', 'class' => 'form-horizontal', 'id'=>'post'));
					

					$data = date('Y-m-d H:i:s');
					echo $this->Form->hidden('data', array('value'=>$data));

					$cliente = $this->Session->read('Usuario');
					$id = $cliente['0']['Usuario']['id'];	
					echo $id;
					echo $this->Form->hidden('usuario_id',array('value'=>$id));
//echo $this->Form->select('disciplina_id', $disciplina, array('empty' => 'Selecione:'));
					echo $this->Form->end('Salvar');

					?> 


				   <script type="text/javascript">
    var ckEditor = CKEDITOR.replace( 'post' );
    </script>


				</div>
			</div>


		</div>
		<footer class = "footer">

		</footer>
	</div>




</body>
</html>