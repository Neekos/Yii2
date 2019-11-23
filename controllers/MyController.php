<?php 
/**
  Мой контроллер
  */
namespace app\controllers;
 use Yii;
 use yii\web\Controller;

 class MyController extends Controller
 {
 	
 	function actionIndex($id = null)
 	{
 		$hi = 'hello world';
 		$names = ['ivanov', 'petrov', 'sidorov'];

 		if (!$id) {
 			$id = 'id пуст';
 		}

 		// return $this->render('index', ['hello'=> $hi, 'names'=>$names]);
 		// еще один способ передачи данных.
 		return $this->render('index', compact('hi','names', 'id'));		
 	}
 } 

 ?>