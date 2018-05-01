<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

class ModelMerk extends Model
{
    protected $table = 'model';
    protected $primaryKey = 'systemid';
    public $incrementing = false;

    protected $fillable = [
        'systemid',
        'id_merk',
        'name',
        'memo'
    ];

    public function getMerk() {
        return $this->belongsTo(Merk::class, 'id_merk', 'systemid');
    }
}
