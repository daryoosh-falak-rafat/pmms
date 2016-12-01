<?php

namespace App\Http\Controllers\properties;

use App\Property;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ViewPropertyController extends Controller
{
    public function index(Property $property)
    {
        return view('property.view-property')->with(['property' => $property]);
    }
}
