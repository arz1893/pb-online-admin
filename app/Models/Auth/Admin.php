<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'systemid';
    public $incrementing = false;

    protected $fillable = [
        'systemid'
    ];

    public function getContact() {
        return $this->belongsTo(Contact::class, 'systemid', 'systemid');
    }
}
