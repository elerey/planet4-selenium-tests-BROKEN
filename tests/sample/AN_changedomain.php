<?php
class P3_AN_Test extends PHPUnit_Framework_TestCase {

    /**
     * @var \RemoteWebDriver
     */
    protected $webDriver;

	public function setUp()
    {
        $capabilities = array(\WebDriverCapabilityType::BROWSER_NAME => 'firefox');
        $this->webDriver = RemoteWebDriver::create('http://localhost:4444/wd/hub', $capabilities);
    }

    protected $url = 'http://www.greenpeace.org/international/en/about/jobs/';

    /*public function testHomepage()
    {
        $this->webDriver->get($this->url);
        // checking that page title contains word 'GitHub'
        $this->assertContains('Detox', $this->webDriver->getTitle());
    } */


    public function testchangeDomain()
    {
        $this->webDriver->get($this->url);
        // find search field by its id
        $search = $this->webDriver->findElement(WebDriverBy::xpath('/html/body/form/div[3]/div[2]/div[1]/div[1]/fieldset/div/a'));
        $search->click();

        $domains = $this->webDriver->findElement(
            // some CSS selectors can be very long:
            WebDriverBy::xpath('/html/body/div[4]/ul/li[11]/a')
        );

        $domains->click();

         $this->assertEquals('http://www.greenpeace.org/belgium/nl/', $this->webDriver->getCurrentURL());

    } 
    
    protected function assertElementNotFound($by)
    {
        $els = $this->webDriver->findElements($by);
        if (count($els)) {
            $this->fail("Unexpectedly element was found");
        }
        // increment assertion counter
        $this->assertTrue(true);
        
    }

    public function tearDown()
    {
        $this->webDriver->close();
    }

}
?>
