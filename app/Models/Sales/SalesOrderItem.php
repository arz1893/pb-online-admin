<?php

namespace App\Models\Sales;

use App\Models\Auth\Customer;
use App\Models\Inventory\Item;
use Illuminate\Database\Eloquent\Model;

class SalesOrderItem extends Model
{
    protected $table = 'salesorderitem';
    protected $primaryKey = ['parent', 'item'];
    public $incrementing = false;

    protected $fillable = [
        'parent',
        'item',
        'qty',
        'reqnote',
        'harga_jual',
        'disc'
    ];

    public function getItem() {
        return $this->belongsTo(Item::class, 'item', 'systemid');
    }

    public function getCustomer() {
        return $this->belongsTo(Customer::class, 'cust', 'systemid');
    }
}
