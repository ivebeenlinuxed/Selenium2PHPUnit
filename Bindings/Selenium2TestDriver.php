<?php
class Selenium2TestDriver extends WebDriver {
	protected $testID;
	
	public function setTestId($testId) {
		$this->testID = $testId;
	}
	
	/**
	 * @param  boolean $flag
	 * @throws InvalidArgumentException
	 */
	public function setCollectCodeCoverageInformation($flag)
	{
		if (!is_bool($flag)) {
			throw PHPUnit_Util_InvalidArgumentHelper::factory(1, 'boolean');
		}
	
		$this->collectCodeCoverageInformation = $flag;
	}
	
	public function get($url) {
		if ($this->collectCodeCoverageInformation) {
			$this->deleteCookie('PHPUNIT_SELENIUM_TEST_ID');
		
			$this->setCookie('PHPUNIT_SELENIUM_TEST_ID',$this->testId);
		}
		parent::get($url);
	}
}