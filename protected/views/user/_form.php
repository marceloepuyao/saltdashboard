<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'verticalForm',
    'htmlOptions'=>array('class'=>'well'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>



		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>


		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'lastname'); ?>
		
		<?php echo $form->labelEx($model,$model->isNewRecord ? 'password':'newpassword'); ?>
		<?php echo $form->passwordField($model,$model->isNewRecord ? 'password':'newpassword',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,$model->isNewRecord ? 'password':'newpassword'); ?>

		<?php echo $form->labelEx($model,'confirmpassword'); ?>
		<?php echo $form->passwordField($model,'confirmpassword',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'confirmpassword'); ?>

		<?php if(Yii::app()->user->getState('admin')){?>

		<?php echo $form->labelEx($model,'superuser'); ?>
		<?php echo $form->checkBox($model, 'superuser'); ?>
		<?php echo $form->error($model,'superuser'); ?>

		<?php }?>

		</br>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
		    'label'=>'Cancelar',
		    'type'=>'null', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
		    'size'=>'small', // null, 'large', 'small' or 'mini'
			'url'=>array("/site/index"),
		)); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->