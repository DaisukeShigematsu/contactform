<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $items = DB::select('select * from customer');
        return view('index', ['items' => $items]);
    }
}
