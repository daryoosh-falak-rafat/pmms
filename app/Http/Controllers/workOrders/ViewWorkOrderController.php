<?php

namespace App\Http\Controllers\workOrders;

use App\CompletionDateCalculator;
use App\Property;
use App\WorkOrder;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ViewWorkOrderController extends Controller
{
    public function index(WorkOrder $workOrder, CompletionDateCalculator $dateCalculator)
    {
        $property = Property::find($workOrder->property_id);
        return view('work-order.view-work-order')->with([
            'workOrder' => $workOrder,
            'property' => $property,
            'completionDate' => $dateCalculator->getExpectedCompletedDate($workOrder)->format('d/m/Y h:i:s A')
        ]);
    }
}
