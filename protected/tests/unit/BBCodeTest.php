<?php
class BBCodeTest extends WebTestCase
{
	private function proccess($bbCode)
	{
		$bb = new EBBCode();
		return $bb->proccess($bbCode);
	}

	function testSingleTags()
	{
		$this->assertEquals('<strong>test</strong>', $this->proccess('[b]test[/b]'));
		$this->assertEquals('<em>test</em>', $this->proccess('[i]test[/i]'));
		$this->assertEquals('<a href="http://yiiframework.com/">http://yiiframework.com/</a>', $this->proccess('[url]http://yiiframework.com/[/url]'));
		$this->assertEquals('<a href="http://yiiframework.com/">http://yiiframework.com/</a>', $this->proccess('[url=http://yiiframework.com/]http://yiiframework.com/[/b]'));
	}

	function testMultipleTags()
	{
		$this->assertEquals('<strong>test1</strong><strong>test2</strong>', $this->proccess('[b]test1[/b][b]test2[/b]'));
		$this->assertEquals('<strong><em>test</em></strong>', $this->proccess('[b][i]test[/i][/b]'));
	}
}