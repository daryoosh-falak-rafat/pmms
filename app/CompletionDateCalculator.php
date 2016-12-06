<?php
namespace App;
use Carbon\Carbon;

/**
 * Created by PhpStorm.
 * User: daryo
 * Date: 06/12/2016
 * Time: 21:25
 */

class CompletionDateCalculator {
    public function test(Carbon $date, $priority)
    {
        return $date->addDays($priority);
    }
}