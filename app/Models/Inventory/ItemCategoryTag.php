<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

class ItemCategoryTag extends Model
{
    protected $table = 'itemcategorytag';
    protected $primaryKey = ['id_ctgr', 'id_item'];

    protected $fillable = [
        'id_ctgr', 'id_item'
    ];

    public function getItemCategory() {
        return $this->belongsTo(ItemCategory::class, 'id_ctgr', 'systemid');
    }

    public function getItem() {
        return $this->belongsTo(Item::class, 'id_item', 'systemid');
    }
}
