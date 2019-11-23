<?php 
	/**
	 * 
	 */

	namespace app\controllers\admin;
	use yii\web\Controller;

	class AdminController extends Controller
	{
		
		function actionAdmin($id = null)
		{
			$login = 'admin';
			$password = '123';
			if ($login == 'login' && $password == 'password') {
				echo "Вы являетесь администратором этого сайта!";
			}else{
				echo "Вы не являетесь администратором этоо  сайта!";
			}

			return $this->render('admin', compact('id', 'login', 'password'));
		}
	}
 ?>