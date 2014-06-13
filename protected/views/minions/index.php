<?php
/* @var $this MinionsController */

$this->breadcrumbs=array(
	'Minions',
);
?>
<h1>Lista de Minions</h1>

<?php echo CHtml::dropDownList('Action', null, 
              array('1' => 'Action 1', '2' => 'Action 2', '3' => 'Action 3'));
?>

<?php echo CHtml::textField('Text'); ?>

<?php echo CHtml::dropDownList('más acciones', null, 
              array('1' => 'Action 1', '2' => 'Action 2', '3' => 'Action 3'));
?>

<?php $this->widget('bootstrap.widgets.TbButton', array(
    'buttonType'=>'button',
    'type'=>'primary',
    'label'=>'Enter',
    'loadingText'=>'loading...',
    'htmlOptions'=>array('id'=>'buttonStateful'),
)); ?>


<div class="tabla">
<?php $this->widget('bootstrap.widgets.TbGridView', array(
			'id'=>'positions-grid',
	        'dataProvider' => $minions,
	        'columns' => array(
				 array('class'=>'CCheckBoxColumn','selectableRows'=>2),
		        'host',
				'ip',
				'description',
				'os',
			 ),
	    ));
	?>
	</div>