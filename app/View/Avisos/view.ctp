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
            <li><?php  echo $this->Html->link("Avisos",array('controller' => 'Avisos','action' => 'index')); ?></li>
        </ol>



        <div class="row">
            <div class="content">
                <div class ="post">
                   <?php foreach ($aviso as $e): ?>
    
      
        
         <h1> <?php echo $e['Aviso']['titulo']; ?></h1>
          <p>Postado em: <?php $data = strtotime($e['Aviso']['data']);
                          echo date('d-m-Y', $data);?></p>
      
            
          <p> <?php echo $e['Aviso']['post']; ?></P>

        <?php endforeach; ?> 
                             </div>
                         </div>
                     </div>
                    <footer class = "footer">
                       
                    </footer>
                </div>






            </body>

        </htm>
