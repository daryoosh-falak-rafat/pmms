<?php
namespace App\Repositories;

use App\Account;
use App\Property;
use Illuminate\Support\Facades\DB;

class PropertyRepository {

    public function countForAccount(Account $account, $complete = false)
    {
        return DB::table('property')->where('account_id', $account->id )->count();
    }
}