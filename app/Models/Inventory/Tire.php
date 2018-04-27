<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

class Tire extends Item
{
    protected $table = 'tire';
    protected $primaryKey = 'systemid';

    protected $fillable = [
        'systemid',
        'id_model',
        'series',
        'id_construction',
        'size',
        'speed_idx',
        'rims_std',
        'rims_ext',
        'ply_rating',
        'tire_diameter',
        'rim_diameter',
        'tire_surface_width',
        'max_load_kgf',
        'max_load_lbs',
        'aspect_ratio',
        'max_pressure_kpa',
        'max_pressure_psi',
        'feat_highlight1',
        'feat_highlight2',
        'tire_type',
        'load_idx',
        'load_capacity',
        'load_range',
        'rim_size_meas',
        'valve_type',
        'max_speed',
        'inflated_size_dia',
        'total_width',
        'tread_width',
        'inflated_pressure',
        'cold_air_pressure',
        'groove_depth',
        'section_width',
        'car_type1',
        'car_type2',
        'car_type3'
    ];

    public function getConstruction() {
        return $this->belongsTo(Construction::class, 'id_construction', 'systemid');
    }
}
