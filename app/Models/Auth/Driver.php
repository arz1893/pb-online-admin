<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table = 'driver';
    protected $primaryKey = 'systemid';
    public $incrementing = false;

    protected $fillable = [
        'systemid'
    ];

    public function getContact() {
        return $this->belongsTo(Contact::class, 'systemid', 'systemid');
    }
}
