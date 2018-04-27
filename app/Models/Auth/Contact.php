<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'systemid';

    protected $fillable = [
        'systemid',
        'usercred_id',
        'firstname',
        'lastname',
        'email',
        'phone',
        'birthdate',
        'citizenid',
        'taxid',
        'notes',
        'citizenid_type'
    ];

    public function getUser() {
        return $this->belongsTo(UserCredential::class, 'usercred_id', 'systemid');
    }
}
