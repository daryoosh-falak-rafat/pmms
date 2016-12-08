<?php

namespace App\Http\Controllers\workOrders;

use App\Property;
use App\Repositories\PriorityRepository;
use App\WorkOrder;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddWorkOrderController extends Controller
{
    public function index(Property $property, PriorityRepository $priorityRepository)
    {
        return view('work-order.add-work-order')->with([
            'property' => $property,
            'priorities' => $priorityRepository->getAllPriorities(),
        ]);
    }

    public function store(Property $property, WorkOrder $workOrder)
    {
        $workOrder->description = request()->description;
        $workOrder->property_id = $property->id;
        $workOrder->priority_id = request()->priority;
        $workOrder->save();
        return redirect('/view-property/' . $property->id);
    }
}
