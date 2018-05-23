<?php

namespace App\Http\Controllers\Sales\SalesOrder;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SalesOrderController extends Controller
{
    public function index() {
        return view('sales.sales_order.sales_order_index');
    }
}
