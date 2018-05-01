<?php

namespace App\Models\Logs;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'log';
    protected $primaryKey = ['obj_type', 'obj_id', 'happened_time'];
    public $incrementing = false;

    protected $fillable = [
        'obj_type',
        'obj_id',
        'happened_time',
        'obj_value',
        'conducted_by',
        'ip_source',
        'front_end',
        'memo'
    ];
}
