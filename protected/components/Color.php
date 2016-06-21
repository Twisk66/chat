<?php
class Color extends CComponent
{
	protected static $_color = array(
		array('id' => '000000', 'name' => 'Черный'),
		array('id' => 'FF0000', 'name' => 'Красный'),
		array('id' => '00FF00', 'name' => 'Зеленый'),
		);

	public static function getNames()
	{
		$arr = array();
		foreach (self::$_color as $key => $value) {
			$arr[$key] = $value['name'];
		}
		return $arr;
	}

	public  static function getId()
	{
		$arr = array();
		foreach (self::$_color as $key => $value) {
			$arr[$key] = $value['id'];
		}
		return $arr;
	}

}