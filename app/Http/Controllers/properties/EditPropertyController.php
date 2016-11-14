<?php

namespace App\Http\Controllers\properties;

use App\Property;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EditPropertyController extends Controller
{
    public function index(Property $property)
    {
        return view('property.edit-property')->with(['property' => $property]);
    }

    public function update(Property $property)
    {
        $property->update(request()->all());
        return redirect('/view-property/' . $property->id);
    }
}
