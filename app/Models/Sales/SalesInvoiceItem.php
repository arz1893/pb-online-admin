<?php

namespace App\Models\Sales;

use App\Models\Inventory\Item;
use Illuminate\Database\Eloquent\Model;

class SalesInvoiceItem extends Model
{
    protected $table = 'salesinvoiceitem';
    protected $primaryKey = ['item', 'item'];
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

    public function getSalesInvoice() {
        return $this->belongsTo(SalesInvoice::class, 'parent', 'systemid');
    }
}
