<?php

namespace App\Http\Controllers\accounts;

use App\Account;
use App\Repositories\PropertyRepository;
use App\Repositories\WorkOrderRepository;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ViewAccountController extends Controller
{
    public function __construct(WorkOrderRepository $workOrderRepository, PropertyRepository $propertyRepository)
    {
        $this->workOrderRepository = $workOrderRepository;
        $this->propertyRepository = $propertyRepository;
    }
    public function index()
    {
        $account = Account::find(1);
        $openWorkOrders = $this->workOrderRepository->getOpenWorkOrdersForAccount($account);
        $completeWorkOrders = $this->workOrderRepository->getCompletedWorkOrdersForAccount($account);

        return view('account.view-account')->with([
            'account' => $account,
            'openWorkOrders' => $openWorkOrders,
            'openWorkOrdersCount' => $this->workOrderRepository->countOpenWorkOrdersForAccount($account, true),
            'completeWorkOrders' => $completeWorkOrders,
            'completedWorkOrdersCount' => $this->workOrderRepository->countCompletedWorkOrdersForAccount($account),
            'propertyCount' => $this->propertyRepository->countForAccount($account),
        ]);
    }
}
