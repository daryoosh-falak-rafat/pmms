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
    public function getExpectedCompletedDate($workOrder)
    {
        $date = $workOrder->created_at;
        $date->addDays($workOrder->priority->days_to_complete);
        $date->addHours($workOrder->priority->hours_to_complete);
        return $date;
    }
}