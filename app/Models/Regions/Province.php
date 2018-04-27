<?php

namespace App\Models\Regions;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'province';

    protected $primaryKey = 'systemid';

    protected $fillable = [
        'name',
        'country_code'
    ];

    public function getCountry() {
        return $this->belongsTo(Country::class, 'country_code', 'iso_code_s2');
    }
}
