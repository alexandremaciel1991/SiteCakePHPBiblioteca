<?php


class AvisosController extends AppController
{

public function index(){
		$options = array(
      'order' => array('Aviso.created' => 'DESC'),
      'limit' => 4
    );
    $this->paginate = $options;
    // Roda a consulta, já trazendo os resultados paginados
    $noticias = $this->paginate('Aviso');
    // Envia os dados pra view
    $this->set('aviso', $noticias);
  

				  //$this->set('aviso', $this->Aviso->find('all'));
		}
 public function add()
    {
    			if($this->request->isPOST()){
    				
				   if ($this->Aviso->save($this->request->data)) {
				              $this->Flash->set('Postado com Sucesso!');
				              $this->redirect(array('action' => 'index'));
				  }
				  else{ $this->Flash->set('Preencha os Campos corretamente');}
				 }
    }

    public function view($id = null) {

		 	$this->Aviso->id = $id;
		    $this->set('aviso', $this->Aviso->findAllById($id));	    

}

public function edit($id){



                 $this->Aviso->id = $id;

                 
                if ($this->request->is('get')) {
                    $this->request->data = $this->Aviso->findById($id);
                } else {
                    if ($this->Aviso->save($this->request->data)) {
                        $this->Flash->success('Aviso Editado.');
                        $this->redirect(array('url' => 'index'));
                    }
                }
              
}

public function avi_adm(){
                  

                $cliente = $this->Session->read('Usuario');
                  $cliente = $cliente['0']['Usuario']['id'];
                 $this->set('aviso', $this->Aviso->find('all'));


                /*  $this->set('noticias', $this->Noticia->find('all',
            array('order' => array('Noticia.data' => 'desc'))));*/
        }

        public function delete($id) {
                $this->Aviso->delete($id);
                $this->Flash->set('Post Excluido com Sucesso!');
                $this->redirect(array('action' => 'avi_adm'));
            }


}

?>