<?php
/**
 * Author: Jayin Taung <tonjayin@gmail.com>
 */

namespace Tests;

use Jayin\Package\Main;
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    function test_main(){
        $this->assertTrue('Main' == Main::getClassName());
    }
}