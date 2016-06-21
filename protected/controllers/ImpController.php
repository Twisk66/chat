<?php
class ImpController extends MyController
{
	public function actionShow($id = null)
	{
		$impModel = new ImpModel;
		$data = $impModel->getData();

		if($id!=null) {
			$keys = str_split($id);
		}
		else {
			$keys = null;
		}

		$this->render('show', array('keys' => $keys, 'data' => $data));
	}
}