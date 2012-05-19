Selenium2PHPUnit
=================

Selenium 2 integration with PHPUnit is appauling at the moment - Really hated not being able to test in multiple browsers, so decided to use the old Selenium PHPUnit code, mixed in with a new Selenium 2 driver.

This implementation of PHPUnit allows you to specify your browsers at the top of the file, and have the test run for each of them. (This is an improvement of looping through browsers within the case, as when a browser
failed the test stopped and you could not see which browsers had passed.)

How to Run
----------

phpunit --bootstrap Bindings/bootstrap.php Tests/RunnableTest.php

### Client code Code Coverage

I've included the client side drivers:
1. Add Bindings/includes/prepend.php to the beginning of file (or to the php.ini directive)
2. Add Bindings/includes/append.php to the end of your file (or to the php.ini directive)
3. Set your $coverageScriptUrl to the URI of the Bindings/phpunit_coverage
4. Set your $coverageDomain to the home page of your site (this will be opened first on all tests to set the cookies needed to track the code)

See Tests/RunnableTest.php for the example of unit test, and Tests/htdocs/index.php for example of your client facing web page

### Sample code

Please see Tests/RunnableTest.php for example

Extras to Driver (originally seleniumphpunit)
---------------------------------------------

* Added $this->dragAndDrop(WebElement $start, Webelement $target) to allow drag and drop functionality in PHP (Watch the Opera driver - it's iffy when it comes to mouse events...)