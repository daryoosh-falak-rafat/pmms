<?php
namespace App\Repositories;

use App\Account;
use App\WorkOrder;
use Illuminate\Support\Facades\DB;

class WorkOrderRepository {

    private function getBaseAccountQuery(Account $account)
    {
        return DB::table('work_order')
            ->join('property', 'property.id', '=', 'work_order.property_id')
            ->join('account', 'account.id', '=', 'property.account_id')
            ->select('work_order.*')
            ->where('account_id', $account->id)
            ->orderBy('priority', 'desc');
    }

    public function getOpenWorkOrdersForAccount(Account $account)
    {
        $query = $this->getBaseAccountQuery($account);
        return $query->whereNull('completed_date')->limit(5)->get();
    }

    public function getCompletedWorkOrdersForAccount(Account $account)
    {
        $query = $this->getBaseAccountQuery($account);
        return $query->whereNotNull('completed_date')->limit(5)->get();
    }

    public function countOpenWorkOrdersForAccount(Account $account)
    {
        $query = $this->getBaseAccountQuery($account);
        return $query->whereNull('completed_date')->count();
    }

    public function countCompletedWorkOrdersForAccount(Account $account)
    {
        $query = $this->getBaseAccountQuery($account);
        return $query->whereNotNull('completed_date')->count();
    }
}