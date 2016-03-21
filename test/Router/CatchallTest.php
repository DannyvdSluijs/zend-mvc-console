<?php
/**
 * @link      http://github.com/zendframework/zend-mvc-console for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendTest\Mvc\Console\Router;

use PHPUnit_Framework_TestCase as TestCase;
use Zend\Mvc\Console\Router\Catchall;

class CatchallTest extends TestCase
{
    public function provideFactoryOptions()
    {
        return [
            [[]],
            [['defaults' => []]]
        ];
    }

    /**
     * @dataProvider provideFactoryOptions
     */
    public function testFactoryReturnsInstanceForAnyOptionsArray($options)
    {
        $this->assertInstanceOf(Catchall::class, Catchall::factory($options));
    }
}
