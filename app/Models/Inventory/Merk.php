<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    protected $table = 'merk';
    protected $primaryKey = 'systemid';

    protected $fillable = [
        'systemid',
        'name',
        'manufacturer',
        'memo',
        'image'
    ];

    public function getAllItem() {
        return $this->hasMany(Item::class);
    }
}
