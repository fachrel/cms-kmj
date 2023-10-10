<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboard(){
        
        // dd($data);
        return view("pages.dashboard.dashboard");
    }
}
