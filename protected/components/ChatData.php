<?php
class ChatData
{
	protected $data;

	protected $countRows = 20;

	protected $count;

	function __construct()
	{
		
	}

	public function getData()
	{
		$this->data = array('hello', 'world');
		return $this->data;
	}
}