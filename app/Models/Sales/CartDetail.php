<?php

namespace App\Models\Sales;

use App\Models\Auth\Customer;
use App\Models\Inventory\Item;
use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    protected $table = 'cartdetail';
    protected $primaryKey = ['cust', 'item'];
    public $incrementing = false;

    protected $fillable = [
        'cust',
        'item',
        'qty',
        'reqnote'
    ];

    public function getCustomer() {
        return $this->belongsTo(Customer::class, 'cust', 'systemid');
    }

    public function getItem() {
        return $this->belongsTo(Item::class, 'item', 'systmeid');
    }
}
