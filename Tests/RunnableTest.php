<?php
class RunnableTest extends Selenium2TestCase {
	protected static $coverageScriptUrl = __DIR__."/../logs/";
	public function test_RunnableTest() {
		$this->assertEquals(true, true);
	}
}