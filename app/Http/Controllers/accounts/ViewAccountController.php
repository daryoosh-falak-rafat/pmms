<?php

namespace App\Http\Controllers\accounts;

use App\Account;
use App\WorkOrder;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ViewAccountController extends Controller
{
    public function index()
    {
        $account = Account::find(1);
        $workOrders = DB::table('work_order')
            ->join('property', 'property.id', '=', 'work_order.property_id')
            ->join('account', 'account.id', '=', 'property.account_id')
            ->select('work_order.*')
            ->where('account_id', $account->id)
            ->get();
        return view('account.view-account')->with(['account' => $account, 'workOrders' => $workOrders]);
    }
}
