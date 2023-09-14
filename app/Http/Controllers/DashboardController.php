<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock\Requisition;

class DashboardController extends Controller
{
    /*
    * admin dashboard
    */
    public function superadminDashboard(){
        return view('dashboard.superadmin');
    }
}
