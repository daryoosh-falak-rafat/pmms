<?php

namespace App\Http\Controllers\workOrders;

use App\Repositories\PriorityRepository;
use App\WorkOrder;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EditWorkOrderController extends Controller
{
    public function index(WorkOrder $workOrder, PriorityRepository $priorityRepository)
    {
        foreach ($priorityRepository->getAllPriorities() as $priority) {
            $priorities[$priority->id] = $priority->name;
        }
        return view('work-order.edit-work-order')->with([
            'workOrder' => $workOrder,
            'priorities' => $priorities
        ]);
    }

    public function update(WorkOrder $workOrder)
    {
        $workOrder->update(request()->all());
        return redirect('/view-work-order/' . $workOrder->id);
    }
}
