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

    public function getTimeLeftToComplete($workOrder)
    {
        $expectedCompletionDate = $workOrder->created_at;
        $expectedCompletionDate->addDays($workOrder->priority->days_to_complete);
        $expectedCompletionDate->addHours($workOrder->priority->hours_to_complete);
        $difference = $expectedCompletionDate->diff(Carbon::now());
        $days = $difference->d;
        $hours = $difference->h;
        $beforeOrAfter = (Carbon::now())->gte($expectedCompletionDate) ? 'overdue' : 'left';
        return $days . 'days ' . $hours . 'hours ' . $beforeOrAfter;
    }
}