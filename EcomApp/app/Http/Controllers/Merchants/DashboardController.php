<?php

namespace App\Http\Controllers\Merchants;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('merchants.dashboard.index');
    }
}
