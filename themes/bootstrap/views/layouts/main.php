<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
	'type'=>'inverse',
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Dashboard', 'url'=>array('/site/dashboard'), 'visible'=>!Yii::app()->user->isGuest),
            	array('label'=>'Minions', 'url'=>array('/minions/index'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about'), 'visible'=>!Yii::app()->user->isGuest),
            ),
        ),
    	
    	array(
    			'class'=>'bootstrap.widgets.TbMenu',
    			'htmlOptions'=>array('class'=>'pull-right'),
    			'items'=>array(
    					
    					array('label'=>'Bienvenido '.Yii::app()->user->name, 'url'=>'#' ,'visible'=>!Yii::app()->user->isGuest, 'items'=>array(
    							array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
    							array('label'=>'Administrar Usuarios' , 'url'=>array('/user/index'), 'visible'=>Yii::app()->user->getState('admin')),  // Yii::app()->user->getState('admin')
    							array('label'=>'Editar Cuenta' , 'url'=>array('/user/index'), 'visible'=>!Yii::app()->user->getState('admin')),
    							'---',
    							array('label'=>'Logout ', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
    					)),
    			),
    	),
    ),
)); ?>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer" style="text-align:center">
		Copyright &copy; <?php echo date('Y'); ?> by CloudLab.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
