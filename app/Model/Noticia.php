<?php
class Noticia extends AppModel{
	public $name = 'Noticia';

    var $validate = array(
	'titulo' => array(
		array(
 			'rule' => array('minLength' , 5),
			'message' => 'Este campo deve ter no mínimo 5 caracteres.'
		)
	),
	'post' => array(
		array(
			'rule' => 'notBlank',
			'message' => 'Este campo não pode ficar vazio.'
		)
	)
 );


	      public $belongsTo = array(
          'Usuario' => array(
              'className' => 'Usuario',
              'foreignKey' => 'usuario_id',
          ));
	




}
?>


