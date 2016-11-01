<?php

namespace App\Http\Controllers\workOrders;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RequestWorkOrderController extends Controller
{
    public function index()
    {
        return view('work-order.work-order-request');
    }
}
