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
<li><?php  echo "Contato" ?></li>
</ol>



<div class="row">
<div class="content">
<div class ="post">

<h1> Contato Biblioteca</h1>
<p><b>Telefone: (31) 3852-8709 Ramal 2068</b>
<br />E-mail: bibjmv@sisbin.ufop.br
<br />Responsável: Flávia Cristina Miguel Reis

<p><b>Projeto de Inclusão Digital</b>
<br />E-mail: projetopid@gmail.com


</div>
</div>
</div>
<footer class = "footer">

</footer>
</div>
</body>

</htm>