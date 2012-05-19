<?php
class DummyTest extends PHPUnit_Framework_TestCase {
	public function test_UnrunnableTest() {
		$this->assertEquals(true, true);
		$this->assertEquals(true, true);
	}
}