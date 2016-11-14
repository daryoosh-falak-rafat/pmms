<?php

namespace App\Http\Controllers\workOrders;

use App\WorkOrder;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EditWorkOrderController extends Controller
{
    public function index(WorkOrder $workOrder)
    {
        return view('work-order.edit-work-order')->with(['workOrder' => $workOrder]);
    }

    public function update(WorkOrder $workOrder)
    {
        $workOrder->update(request()->all());
        return redirect('/view-work-order/' . $workOrder->id);
    }
}
