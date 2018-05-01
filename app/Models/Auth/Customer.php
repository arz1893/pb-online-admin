<?php

namespace App\Models\Auth;

use App\Models\Sales\CartDetail;
use App\Models\Sales\SalesInvoice;
use App\Models\Sales\SalesOrder;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'systemid';
    public $incrementing = false;

    protected $fillable = [
        'systemid',
        'timezone'
    ];

    public function getContact() {
        return $this->belongsTo(Contact::class, 'systemid', 'systemid');
    }

    public function getCartDetails() {
        return $this->hasMany(CartDetail::class);
    }

    public function getSalesInvoices() {
        return $this->hasMany(SalesInvoice::class);
    }

    public function getSalesOrder() {
        return $this->hasMany(SalesOrder::class);
    }
}
