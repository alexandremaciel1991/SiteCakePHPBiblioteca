<?php
class UsuariosController extends AppController {

  public $helpers = array('Form');
  public $components = array('Flash');

 public function index_login() {

  }


 public function index_prof() {

  }

  
public function validar(){

$usuario = $this->Usuario->findAllByUsuariosAndSenha($this->data['Usuario']['usuarios'], $this->data['Usuario']['senha']);

if(!empty($usuario)){
  return $usuario;
}else{
  return false;}

}

  public function addu(){

      if ($this->Usuario->save($this->request->data)) {
            $this->Flash->set('Usuario Inserido com Sucesso!');
            $this->redirect(array('action' => 'index_login'));
  }
}

public function editu($id = null){

  $this->Usuario->id = $id;
  
  
                if ($this->request->is('get')) {
                    $this->request->data = $this->Usuario->findById($id);
                } else {
                    if ($this->Usuario->save($this->request->data)) {
                        $this->Flash->success('Usuario editado.');
                        $this->redirect(array('action' => 'index_controller'));
                    }
                }


}


public function delete($id){

                $this->Usuario->delete($id);
                $this->Flash->set('Usuario Excluido com Sucesso!');
                $this->redirect(array('action' => 'usuario_adm'));
}


public function usuario_adm(){
                  

                 $this->set('usuario', $this->Usuario->find('all'));


                /*  $this->set('noticias', $this->Noticia->find('all',
            array('order' => array('Noticia.data' => 'desc'))));*/
        }

  public function login(){

if(!empty($this->data['Usuario']['usuarios'])){
  
  $usuario = $this->validar();


  if($usuario != false){
    
    $this->Flash->set('Acesso realizado com sucesso!');
    $this->Session->write('Usuario', $usuario);
    $this->redirect(array('action'=>'index_controller'));
    exit();

  }else {
    $this->Flash->set('Usuario e/ou senha invalidos!');
    $this->redirect(array('action'=>'index_login'));
    exit();
  }
}
}

public function index_controller(){

  
}

  public function logout() {

    $this->Session->destroy();
    $this->Flash->set('Atividades encerradas com sucesso!');

    $this->redirect(array('action' => 'index_login'));
    exit();

  }

}


?>