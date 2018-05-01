<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

class Metric extends Model
{
    protected $table = 'metrics';
    protected $primaryKey = 'name_s50';
    public $incrementing = false;

    protected $fillable = [
        'name_s50',
        'units',
        'memo',
        'metric_rinci'
    ];
}
