<?php
class AdminController extends Controller
{
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
	public function actionIndex()
	{
		// En el index mostraremos como se utiliza el crawler
		$this->render('index');
	}
	public function actionInstallDB(){
		
		try {
			Yii::app()->db->createCommand("CREATE TABLE IF NOT EXISTS `users` (
		`id` int(100) NOT NULL AUTO_INCREMENT,
		`email` varchar(50) NOT NULL,
		`name` varchar(50),
		`lastname` varchar(50),
		`password` varchar(50),
		`firstaccess` datetime NOT NULL,
		`lastaccess` datetime NOT NULL,
		`lang` varchar(50),
		`superuser` tinyint(1) NOT NULL DEFAULT 0,
		`modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
		PRIMARY KEY (`id`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
		")->execute();
			
		Yii::app()->db->createCommand("INSERT INTO `users` (`id`, `email`, `name`, `lastname`, `password`, `firstaccess` , `lastaccess`, `lang`, `superuser`, `modified`) VALUES
		(NULL, 'admin', 'Admin', '', '".crypt('pepito.P0')."', '".time()."', '".time()."' , 'es', 1, '".time()."'  )
		")->execute();;
			
		} catch (Exception $e) {
			die($e);
		}
		$this->redirect(array('/site/index'));
		
	}
	public function actionReInstallDB(){
	
		try {
			Yii::app()->db->createCommand("Drop Table users ;")->execute();
			$this->actionInstallDB();
		} catch (Exception $e) {
			die($e);
		}
		$this->redirect(array('index'));
	
	}
	
	
}