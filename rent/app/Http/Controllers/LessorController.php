<?php

namespace App\Http\Controllers;
use App\Models\Lessor;
use Illuminate\Http\Request;

class LessorController extends Controller
{


public function index(Lessor $lessor)
{
    return view('lessor.index', compact('lessor'));
}

}
