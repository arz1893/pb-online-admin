<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'systemid';
    public $timestamps = false;

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

    public function getUserCredential() {
        return $this->belongsTo(UserCredential::class, 'usercred_id', 'systemid');
    }

    public function getCustomers() {
        return $this->hasMany(Customer::class);
    }

    public function getAdmins() {
        return $this->hasMany(Admin::class);
    }

    public function getDrivers() {
        return $this->hasMany(Driver::class);
    }
}
