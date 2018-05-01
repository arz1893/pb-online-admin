<?php

namespace App\Models\Inventory;

use App\Models\Sales\SalesInvoiceItem;
use App\Models\Sales\SalesOrderItem;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';
    protected $primaryKey = 'systemid';

    protected $fillable = [
        'systemid',
        'name_s50_inv',
        'id_merk', //Foreign Key
        'code_item_s50',
        'min_stock',
        'sku',
        'memo',
        'imagebytes'
    ];

    public function getMerk() {
        return $this->belongsTo(Merk::class, 'id_merk', 'systemid');
    }

    public function getItemCategoryTags() {
        return $this->hasMany(ItemCategoryTag::class);
    }

    public function getSalesInvoiceItems() {
        return $this->hasMany(SalesInvoiceItem::class);
    }

    public function getSalesOrderItems() {
        return $this->hasMany(SalesOrderItem::class);
    }
}
