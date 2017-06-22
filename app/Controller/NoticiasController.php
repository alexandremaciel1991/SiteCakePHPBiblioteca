<?php


class NoticiasController extends AppController
{

public function index(){
		$options = array(
      'order' => array('Noticia.created' => 'DESC'),
      'limit' => 4
    );
    $this->paginate = $options;
    // Roda a consulta, já trazendo os resultados paginados
    $noticias = $this->paginate('Noticia');
    // Envia os dados pra view
    $this->set('noticia', $noticias);
  

				  //$this->set('aviso', $this->Aviso->find('all'));
		}
 public function add()
    {
    			if($this->request->isPOST()){
    				
				   if ($this->Noticia->save($this->request->data)) {
				              $this->Flash->set('Postado com Sucesso!');
				              $this->redirect(array('action' => 'index'));
				  }
				  else{ $this->Flash->set('Preencha os Campos corretamente');}
				 }
    }

    public function view($id = null) {

		 	$this->Noticia->id = $id;
		    $this->set('noticia', $this->Noticia->findAllById($id));	    

}

public function edit($id){



                 $this->Noticia->id = $id;

                 
                if ($this->request->is('get')) {
                    $this->request->data = $this->Noticia->findById($id);
                } else {
                    if ($this->Noticia->save($this->request->data)) {
                        $this->Flash->success('Noticia Editado.');
                        $this->redirect(array('url' => 'index'));
                    }
                }
              
}

public function not_adm(){
                  

                $cliente = $this->Session->read('Usuario');
                  $cliente = $cliente['0']['Usuario']['id'];
                 $this->set('noticia', $this->Noticia->find('all'));


                /*  $this->set('noticias', $this->Noticia->find('all',
            array('order' => array('Noticia.data' => 'desc'))));*/
        }

        public function delete($id) {
                $this->Noticia->delete($id);
                $this->Flash->set('Post Excluido com Sucesso!');
                $this->redirect(array('action' => 'not_adm'));
            }


}

?>