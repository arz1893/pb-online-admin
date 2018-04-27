<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

class Construction extends Model
{
    protected $table = 'construction';
    protected $primaryKey = 'systemid';

    protected $fillable = [
        'systemid',
        'name',
        'memo'
    ];
}
