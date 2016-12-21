<?php

namespace App\Http\Controllers\workOrders;

use App\CompletionDateCalculator;
use App\Property;
use App\WorkOrder;
use App\WorkOrderComment;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ViewWorkOrderController extends Controller
{
    public function index(WorkOrder $workOrder, CompletionDateCalculator $dateCalculator, WorkOrderComment $comment)
    {
        $property = Property::find($workOrder->property_id);
        return view('work-order.view-work-order')->with([
            'workOrder' => $workOrder,
            'property' => $property,
            'completionDate' => $dateCalculator->getExpectedCompletedDate($workOrder)->format('d/m/Y h:i:s A'),
            'timeLeft' => $dateCalculator->getTimeLeftToComplete($workOrder),
            'comment' => $comment,
            'loggedIn' => Auth::id(),
        ]);
    }
}
