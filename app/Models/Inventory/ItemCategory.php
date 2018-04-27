<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

class ItemCategory extends Model
{
    protected $table = 'itemcategory';
    protected $primaryKey = 'systemid';

    protected $fillable = [
        'systemid',
        'code_category',
        'name',
        'memo'
    ];
}
