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

    <div class= "breadcrumb">
     <ol class="breadcrumb">
            <li> <?php echo $this->Html->link("Inicio",array('controller' => 'pages','action' => 'home')); ?></li>
            <li><?php  echo $this->Html->link("Area do Administrador",array('controller' => 'Usuarios','action' => 'index_controller')); ?></li>
        </ol>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-8">
       
        <h1> Editar Usuarios</h1>

<?php

	echo $this->Form->create('Usuario', array('url' => 'edit'));

    echo $this->Form->input('nome', array('class' => 'form-control'));
    echo $this->Form->input('usuarios', array('class' => 'form-control'));
    echo $this->Form->input('senha', array('class' => 'form-control'));
	   echo $this->Form->input('tipo',array('options'=>array('1' => 'ADMGeral','2' => 'Editor')));
	   
    echo $this->Form->end('SALVAR', array('class'=> 'form-control', 'type' => 'button'));?>
   

</div>
</div>
</div>
<footer></footer>
</body>
</html>