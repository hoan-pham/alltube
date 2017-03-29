<?php
/**
 * ProxyTest class.
 */

namespace Alltube\Test;

use Alltube\Proxy;

/**
 * Unit tests for the Proxy class.
 */
class ProxyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test the class constructor.
     *
     * @return void
     */
    public function testContructor()
    {
        new Proxy('127.0.0.1', '80', 'http');
    }
}
