<?php

namespace App\Http\Controllers\properties;

use App\Property;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ViewPropertyController extends Controller
{
    public function index($id)
    {
        $property = Property::find($id);
        return view('property.view-property')->with(['property' => $property]);
    }
}
