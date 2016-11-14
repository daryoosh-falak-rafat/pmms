<?php

namespace App\Http\Controllers\workOrders;

use App\WorkOrderComment;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EditCommentController extends Controller
{
    public function index(WorkOrderComment $comment)
    {
        return view('work-order.edit-comment')->with(['comment' => $comment]);
    }

    public function update(WorkOrderComment $comment)
    {
        $comment->update(request()->all());
        return redirect('/view-work-order/' . $comment->work_order_id);
    }
}
