<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TahfizController extends Controller
{
    public function index()

{
    $data = Tahfiz::all();
    return view('tahfiz.index', compact('data'));
}

}
