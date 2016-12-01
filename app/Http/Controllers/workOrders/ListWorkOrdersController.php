<?php

namespace App\Http\Controllers\workOrders;

use App\Property;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\WorkOrder;
use Illuminate\Support\Facades\DB;

class ListWorkOrdersController extends Controller
{
    public function listForAccount()
    {
        foreach (WorkOrder::all() as $workOrder) {
            $workOrders[] = $workOrder;
        }
        return view('work-order.list-work-orders')->with(['workOrders' => $workOrders, 'property' => 'All Properties']);
    }

    public function listForProperty(Property $property)
    {
        $propertyDisplay = $property->address_line_1 . ', ' . $property->postcode;
        foreach ($property->workOrders as $workOrder) {
            $workOrders[] = $workOrder->id;
        };
        return view('work-order.list-work-orders')->with(['workOrders' => $workOrders, 'property' => $propertyDisplay]);
    }
}
