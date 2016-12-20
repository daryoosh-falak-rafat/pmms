<?php
namespace App\Http\Controllers\WorkOrders;

use App\Http\Controllers\Controller;
use App\WorkOrder;

class CompleteWorkOrderController extends Controller {

    public function index(WorkOrder $workOrder)
    {
        $workOrder->update(request()->all());
        //var_dump(request()->all());exit;
        return redirect('/view-work-order/' . $workOrder->id);
    }
}