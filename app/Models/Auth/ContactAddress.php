<?php

namespace App\Models\Auth;

use App\Models\Regions\Regency;
use Illuminate\Database\Eloquent\Model;

class ContactAddress extends Model
{
    protected $table = 'contactaddress';
    protected $primaryKey = 'systemid';

    protected $fillable = [
        'systemid',
        'owner',
        'regency_id'
    ];

    public function getContact() {
        return $this->belongsTo(Contact::class, 'owner', 'systemid');
    }

    public function getRegency() {
        return $this->belongsTo(Regency::class, 'regency_id', 'systemid');
    }
}
