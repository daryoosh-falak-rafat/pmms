<?php

namespace App\Http\Controllers\workOrders;

use App\Property;
use App\WorkOrder;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ViewWorkOrderController extends Controller
{
    public function index($id)
    {
        $workOrder = WorkOrder::find($id);
        $property = Property::find($workOrder->property_id);
        return view('work-order.view-work-order')->with(['workOrder' => $workOrder, 'property' => $property]);
    }
}
