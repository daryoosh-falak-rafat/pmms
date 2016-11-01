<?php

namespace App\Http\Controllers\properties;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Property;


class ListPropertiesController extends Controller
{
    public function index()
    {
        foreach (Property::all() as $property) {
            $properties[] = $property;
        }

        return view('property.list-properties')->with(['properties' => $properties]);
    }
}
