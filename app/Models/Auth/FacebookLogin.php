<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;

class FacebookLogin extends Model
{
    protected $table = 'facebooklogin';
    protected $primaryKey = 'facebookid';
    public $incrementing = false;

    protected $fillable = [
        'facebookid',
        'avatar',
        'usercred'
    ];

    public function getUser() {
        return $this->belongsTo(UserCredential::class, 'usercred', 'systemid');
    }
}
