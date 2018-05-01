<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $table = 'series';
    protected $primaryKey = ['id_model', 'series'];
    public $incrementing = false;

    protected $fillable = [
        'id_model',
        'series'
    ];

    public function getModel() {
        return $this->belongsTo(ModelMerk::class, 'id_model', 'systemid');
    }
}
