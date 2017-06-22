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
            <li><?php  echo "Avisos"?></li>
        </ol>

    <div class="row">
        <div class ="post">



<table class="table table-condensed">

<tr>
    <th>Titulo</th>
    <th>Aviso</th>
    <th>Data</th>
    <th>Autor</th>
    <th>Opções</th>
  </tr>

    <?php foreach ($aviso as $e): ?>

<tr>
  <td>
        <?php echo $e['Aviso']['titulo']; ?>
      </td>
      <td>
        <?php echo $e['Aviso']['post']; ?>
      </td>
      <td>
        <?php echo $e['Aviso']['data']; ?>
      </td>
      <td>
      <?php echo $e['Usuario']['nome']; ?>
      </td>
     
      <td>

        <?php echo $this->Html->image("edit.png", array(
         "alt" => "Editar",
        'url' => array('controller' => 'Avisos',
          'action' => 'edit', $e['Aviso']['id'])
           ));?>

            <?php echo $this->Html->image(
              "delete.png", array(
              "alt" => "Deletar",
              'url' => array('controller' => 'Avisos',
          'action' => 'delete', $e['Aviso']['id'])));
         ?>
      </td>


    </tr> 
    <?php endforeach; ?>

</table>


      


    </div>

</div>
</div>
</body>
</html>