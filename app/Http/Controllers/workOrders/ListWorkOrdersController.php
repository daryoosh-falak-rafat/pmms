<?php

namespace App\Http\Controllers\workOrders;

use App\Property;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\WorkOrder;
use Illuminate\Support\Facades\DB;

class ListWorkOrdersController extends Controller
{
    public function index()
    {
        foreach (WorkOrder::all() as $workOrder) {
            $workOrders[] = $workOrder;
        }
        return view('work-order.list-work-orders')->with(['workOrders' => $workOrders, 'property' => 'All Properties']);
    }

    public function listForProperty($id)
    {
        $property = Property::find($id);
        $propertyDisplay = $property->address_line_1 . ', ' . $property->postcode;
        foreach (DB::table('work_order')->get()->where('property_id', $id) as $workOrder) {
            $workOrders[] = $workOrder->id;
        };
        return view('work-order.list-work-orders')->with(['workOrders' => $workOrders, 'property' => $propertyDisplay]);
    }
}
