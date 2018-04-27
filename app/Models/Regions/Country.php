<?php

namespace App\Models\Regions;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'country';

    protected $primaryKey = 'iso_code_s2';

    public $incrementing = false;

    protected $fillable = [
        'iso_code_s2',
        'name'
    ];

    public function getProvinces() {
        return $this->hasMany(Province::class);
    }
}
