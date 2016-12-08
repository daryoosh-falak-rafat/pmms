<?php
namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class PriorityRepository {

    public function getAllPriorities()
    {
        return DB::table('priority')
            ->select('priority.*')
            ->orderBy('id', 'asc')
            ->get();
    }
}