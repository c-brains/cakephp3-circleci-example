<?php
namespace App\Test\TestCase\Route;

use Cake\Routing\Router;
use Cake\TestSuite\TestCase;

class RouteTest extends TestCase
{
    public function testMyPage()
    {
        $actual = Router::parse('/my');
        $expected = [
            'pass' => [],
            'plugin' => null,
            'controller' => 'MyPage',
            'action' => 'index',
            '_matchedRoute' => '/my',
        ];
        $this->assertEquals($expected, $actual);
    }
}
