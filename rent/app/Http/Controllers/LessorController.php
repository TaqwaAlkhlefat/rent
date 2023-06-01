<?php

namespace App\Http\Controllers;
use App\Models\Lessor;
use Illuminate\Http\Request;

class LessorController extends Controller
{


public function index(Lessor $lessor)
{
    $lessor = Lessor::first(); // Retrieve the first record from the lessors table
    $properties = $lessor->products;

    return view('lessor.index', compact('lessor','properties'));
}

}
