<?php

namespace App\Http\Controllers\properties;

use App\Property;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddPropertyController extends Controller
{
    public function index()
    {
        return view('property.add-property');
    }

    public function add(Property $property)
    {
        $property->address_line_1 = request()->address_line_1;
        $property->address_line_2 = request()->address_line_2;
        $property->postcode = request()->postcode;
        $property->town = request()->town;
        $property->save();
    }
}
