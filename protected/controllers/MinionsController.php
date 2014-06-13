<?php

class MinionsController extends Controller
{
	public function actionIndex()
	{
		//@TODO: Obtengo todos los minions
		
		$minions = array();
		$minions[] = array("id"=>1,"host"=>"minion1", "ip"=>"17.123.456.78", "description"=>"8U/7854 RAM", "os"=> "CentOS-6.5" );
		$minions[] = array("id"=>2,"host"=>"minion2", "ip"=>"17.123.456.01", "description"=>"2U/256 RAM", "os"=> "CentOS-6.3" );
		
		$dataProvider=new CArrayDataProvider($minions, array(
				'id'=>'minions',
				'sort'=>array(
						'attributes'=>array(
								'host', 'ip', 'description', 'os',
						),
				),
				'pagination'=>array(
						'pageSize'=>10,
				),
		));
		
		
		$this->render('index',array(
				'minions'=>$dataProvider,
		));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}