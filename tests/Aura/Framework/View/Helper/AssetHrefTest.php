<?php
namespace Aura\Framework\View\Helper;

/**
 * Test class for AssetHref.
 * Generated by PHPUnit on 2011-10-06 at 15:19:08.
 */
class AssetHrefTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AssetHref
     */
    protected $helper;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    public function setUp()
    {
        parent::setUp();
        $this->helper = new AssetHref;
    }

    /**
     * @todo Implement testSetBase().
     */
    public function testSetBaseAndInvoke()
    {
        $this->helper->setBase('http://assets.example.com');
        $actual = $this->helper->__invoke('Vendor.Package/images/logo.png');
        $expect = 'http://assets.example.com/Vendor.Package/images/logo.png';
        $this->assertSame($expect, $actual);
    }
}
