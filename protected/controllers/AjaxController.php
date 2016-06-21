<?php
class AjaxController extends Controller
{
	public function filters()
	{
		return array(
			'AjaxOnly + data'
			);
	}

	/**
	 * Вывод сообщений
	 */
	public function actionData()
	{
		$color_arr = Color::getId();

		$messages = Yii::app()->db->createCommand()
			->select('messages.text, messages.datetime, user_conf.color, IFNULL(username, "Неизвестный") as username')
			->from('messages')
			->leftjoin('user', 'messages.user_id=user.id')
			->leftjoin('user_conf', 'user_conf.conf_id=user.id')
			->limit(20)
			->order('messages.datetime DESC')
			->queryAll();

		foreach ($messages as $key => $value) {
			$messages[$key]['color'] = $color_arr[$value['color']];
			list($messages[$key]['date'], $messages[$key]['time']) = split(' ',$messages[$key]['datetime']);
		}

		header("Content-type: application/json");
		echo CJSON::encode($messages);
	}

	/**
	 * Добавление сообщений
	 */
	public function actionAddmessage()
	{
		if(Yii::app()->user->isGuest)
			Yii::app()->end();
		$model = new Messages;
		if(isset($_POST['message']) && $_POST['message'])
		{
			$text = trim(htmlspecialchars($_POST['message']));
			if(isset(Yii::app()->session['text']))
			{
				if(Yii::app()->session['text']===$text)
				{
					$error = 'Такое сообщение уже было!';
					echo($error);
					Yii::app()->end();
				}
			}
			Yii::app()->session['text'] = $text;
			$model->text = $text;
			if($model->validate())
			{
				$model->save();	
			}
			else
			{
				$error = 'Сообщение не может быть длинее 200 символов!';
				echo($error);
			}
		}
		Yii::app()->end();
	}
}