<?php

namespace App\Models\Regions;

use Illuminate\Database\Eloquent\Model;

class Regency extends Model
{
    protected $table = 'regency';

    protected $primaryKey = 'systemid';

    protected $fillable = [
        'systemid',
        'name',
        'prov_id'
    ];

    public function getProvince() {
        return $this->belongsTo(Province::class, 'prov_id', 'systemid');
    }
}
