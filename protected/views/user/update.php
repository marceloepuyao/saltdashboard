<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Editar Usuario',
);

?>

<h1>Editar Usuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>