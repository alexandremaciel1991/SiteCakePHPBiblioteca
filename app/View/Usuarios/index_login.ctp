<?php echo $this->Html->css('bootstrap.css');?>

	
<html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<header></header>
<body>
	<div id="conteudo" class="container">
	<div class= "row">
	<div class="col-xs-6 col-md-4">
	<h2>Acesso ao Sistema</h2>
	</div>
</div>
	<div class="form-horizontal">

<?php
		if($this->Session->read('Usuario')){
			$cliente = $this->Session->read('Usuario');
				echo	 $cliente['0']['Usuario']['nome'];	
			 
		  echo $this->Html->link("Logout", array('controller' => 'Usuarios','action' => 'logout')); 

		}
		else{ ?>
		
	    <div class="form-group">
	     <div class="col-sm-10">

		<?php 
		echo $this->Form->create('Usuario',array('controller' => 'Usuarios', 'url'=>'login'));

	    echo $this->Form->input('usuarios', array('class' => 'form-control'));?>
	
	    <label for="UsuarioSenha" >Password: </label>
	     
	    <?php
	    echo $this->Form->password('senha', array('class' => 'form-control'));
	   ?></div></div><?php
	    echo $this->Form->end('Acessar');
	}
	    
?>
</div>
	</div> 
	</body>
	</html>