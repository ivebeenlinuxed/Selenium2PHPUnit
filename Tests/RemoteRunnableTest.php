<?php
class RemoteRunnableTest extends Selenium2TestCase {
	public static $browsers = array(
      array(
        'name'    => 'Firefox',
        'browser' => 'firefox',
        'host'    => 'server2.bcslichfield.com',
        'port'    => 4444,
        'timeout' => 30000
      ),array(
        'name'    => 'Chrome',
        'browser' => 'chrome',
        'host'    => 'server2.bcslichfield.com',
        'port'    => 4444,
        'timeout' => 30000
      ));
	
	protected $coverageScriptUrl = "http://s2.ipv6.bcslichfield.com/phpunit.php";
	protected $coverageDomain = "http://s2.ipv6.bcslichfield.com/";
	
	
	public function test_RunnableTest() {
		//require_once "htdocs/index.php";
		//unused();
		$this->assertEquals(true, true);
		$this->get("http://s2.ipv6.bcslichfield.com/index2.php");
		sleep(10);
	}
}