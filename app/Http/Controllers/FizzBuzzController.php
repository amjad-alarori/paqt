<?php

namespace App\Http\Controllers;

use App\Models\User;

class FizzBuzzController extends Controller
{
    public function index()
    {
        $result = [];
        for ($i = 1; $i <= 100; $i++) {
            $output = ($i % 3 == 0 ? 'Fizz' : '') . ($i % 5 == 0 ? 'Buzz' : '');
            $result[] = $output ?: $i;
        }
        return view('fizzbuzz', ['result' => $result]);
    }
}
