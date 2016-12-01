<?php
namespace App\Repositories;

use App\Account;
use App\WorkOrder;
use Illuminate\Support\Facades\DB;

class WorkOrderRepository {
    /**
     * This function will get all the work orders for an account, the default param gives the option to get all
     * the complete work orders or the incomplete ones
     *
     * @param Account $account
     * @param bool $complete
     * @return mixed
     */
    public function forAccount(Account $account, $complete = false)
    {
        $workOrders = DB::table('work_order')
            ->join('property', 'property.id', '=', 'work_order.property_id')
            ->join('account', 'account.id', '=', 'property.account_id')
            ->select('work_order.*')
            ->where('account_id', $account->id)
            ->orderBy('priority', 'desc')
            ->limit(5);

        if ($complete === true) {
            return DB::table('work_order')
                ->whereNotNull('completed_date')
                ->union($workOrders)
                ->get();
        }

        if ($complete === false) {
            return DB::table('work_order')
                ->whereNull('completed_date')
                ->union($workOrders)
                ->get();
        }
    }

    public function countForAccount(Account $account, $complete = false)
    {
        return DB::table('work_order')
            ->join('property', 'property.id', '=', 'work_order.property_id')
            ->join('account', 'account.id', '=', 'property.account_id')
            ->select('work_order.*')
            ->where('account_id', $account->id)
            ->orderBy('priority', 'desc')
            ->count();
    }
}