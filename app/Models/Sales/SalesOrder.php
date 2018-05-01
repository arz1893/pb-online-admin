<?php

namespace App\Models\Sales;

use App\Models\Auth\Customer;
use Illuminate\Database\Eloquent\Model;

class SalesOrder extends Model
{
    protected $table = 'salesorder';
    protected $primaryKey = 'systemid';

    protected $fillable = [
        'systemid',
        'issuedate',
        'cust',
        'status_payment',
        'status_canceled',
        'status_delivery',
        'shipping_line',
        'misc_charge',
        'misc_charge_memo',
        'vat',
        'vat_inclusive',
        'promocode_used',
        'memo',
        'disc',
        'disc_memo'
    ];

    public function getCustomer() {
        return $this->belongsTo(Customer::class);
    }
}
