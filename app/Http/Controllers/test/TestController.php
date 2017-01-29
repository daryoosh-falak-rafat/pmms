<?php
namespace App\Http\Controllers\test;
use App\Http\Controllers\Controller;

/**
 * Created by PhpStorm.
 * User: daryo
 * Date: 15/01/2017
 * Time: 20:32
 */
class TestController extends Controller {
    public function test($test, $test7)
    {
        var_dump($test7);
        $testArray = [
            'test1' => 4,
            'test2' => 5,
            'test3' => 9,
        ];
        return json_encode($testArray[$test]);
    }
}