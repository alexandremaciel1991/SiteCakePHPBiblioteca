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
   <div class="col-xs-12 col-sm-6 col-md-8">
    <div class="row">
    

<table class="table table-condensed">

<tr>
    <th>Nome</th>
    <th>Login</th>
    
    <th>Opções</th>
  </tr>

    <?php foreach ($usuario as $e): ?>

<tr>
  <td>
        <?php echo $e['Usuario']['nome']; ?>
      </td>
      <td>
        <?php echo $e['Usuario']['usuarios']; ?>
      </td>
      <td>

        <?php echo $this->Html->image("edit.png", array(
         "alt" => "Editar",
        'url' => array('controller' => 'Usuarios',
          'action' => 'edit', $e['Usuario']['id'])
           ));?>

            <?php echo $this->Html->image(
              "delete.png", array(
              "alt" => "Deletar",
              'url' => array('controller' => 'Usuarios',
          'action' => 'delete', $e['Usuario']['id'])));
         ?>
      </td>


    </tr> 
    <?php endforeach; ?>

</table>

</div>
</div>
</div>
</div>
<footer></footer>
</body>
</html>