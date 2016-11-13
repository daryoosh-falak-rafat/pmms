<?php

namespace App\Http\Controllers\workOrders;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddWorkOrderController extends Controller
{
    public function index($property)
    {
        return view('work-order.add-work-order');
    }
}
