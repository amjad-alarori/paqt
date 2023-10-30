<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionDivisionController extends Controller
{
    public function index()
    {
        $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $divisor = 3;
        $result = array_chunk($numbers, $divisor);

        return view('division', ['result' => $result]);
    }
}
