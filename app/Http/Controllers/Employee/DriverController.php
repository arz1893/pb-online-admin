<?php

namespace App\Http\Controllers\Employee;

use App\Models\Auth\Driver;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DriverController extends Controller
{
    public function index() {
        $drivers = Driver::all();
        return view('employee.driver_list', compact('drivers'));
    }
}
