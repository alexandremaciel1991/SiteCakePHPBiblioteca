  <!-- File: src/Template/Articles/index.ctp -->
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
        <li><?php  echo "Notícias" ?></li>
      </ol>



      <div class="row">
        <div class="content">
          <div class ="post">
        
  <table>
     

      <!-- Aqui é onde iremos iterar nosso objeto de solicitação $articles, exibindo informações de artigos -->

  <?php foreach ($noticia as $e): ?>
  
    <tr>
      <div class="panel panel-primary"> 
        <div class="panel-body">
          <b><?php echo  $this->Html->link($e['Noticia']['titulo'], array('controller'=>'Noticias', 'action'=>'view', $e['Noticia']['id'])); ?></b>

          <br>Postado em: <?php $data = strtotime($e['Noticia']['data']);
                          echo date('d-m-Y', $data);?>
        </div>
        <div class="panel-footer">       
           <t> <?php echo $e['Noticia']['post']; ?>


        </div>
      </div>
    </tr> 
    
        <?php endforeach; ?>

        <?php
echo $this->Paginator->prev('« Anterior ', null, null, array('class' => 'desabilitado'));
echo $this->Paginator->numbers();
echo $this->Paginator->next(' Próxima »', null, null, array('class' => 'desabilitado'));?>
  </table>
                </div>
              </div>


            </div>
            <footer class = "footer">
              
            </footer>
          </div>

  </body>
  </html>