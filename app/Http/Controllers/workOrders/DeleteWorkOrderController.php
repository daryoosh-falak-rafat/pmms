<?php

namespace App\Http\Controllers\workOrders;

use App\WorkOrder;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DeleteWorkOrderController extends Controller
{
    public function index(WorkOrder $workOrder)
    {
        $workOrder->delete();
        return back();
    }
}
