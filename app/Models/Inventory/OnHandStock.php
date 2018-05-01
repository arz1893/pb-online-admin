<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

class OnHandStock extends Model
{
    protected $table = 'onhandstock';
    protected $primaryKey = 'id_product';
    public $incrementing = false;

    protected $fillable = [
        'id_product',
        'qty',
        'str_expiry_date',
        'serialno',
        'batchno',
    ];

    public function getProduct() {
        return $this->belongsTo(Product::class, 'id_product', 'systemid');
    }
}
