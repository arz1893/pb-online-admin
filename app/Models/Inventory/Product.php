<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'systemid';

    protected $fillable = [
        'systemid',
        'name',
        'memo',
        'active',
        'last_sync'
    ];
}
