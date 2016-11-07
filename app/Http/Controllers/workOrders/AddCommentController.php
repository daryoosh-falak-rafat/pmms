<?php

namespace App\Http\Controllers\workOrders;

use App\WorkOrderComment;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddCommentController extends Controller
{
    public function add($id, WorkOrderComment $comment)
    {
        $comment->comment = request()->comment;
        $comment->work_order_id = $id;
        $comment->save();
        return redirect('/view-work-order/' . $id);
    }
}
