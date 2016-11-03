<?php

/**
 * Created by PhpStorm.
 * User: beechen
 * Date: 16/11/3
 * Time: 16:47
 */
namespace BeeChen\hover_tools\tests;

use BeeChen\hover_tools\src\util\System;

class Test extends \PHPUnit_Framework_TestCase
{
    public function testBitArrayToTen(){
        echo System::bitArrayToTen([1,1,1,1,1,1,1]);
    }


}