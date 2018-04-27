<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;

class GoogleLogin extends Model
{
    protected $table = 'googlelogin';
    protected $primaryKey = 'googleid';
    public $incrementing = false;

    protected $fillable = [
        'googleid',
        'avatar',
        'usercred'
    ];

    public function getUser() {
        return $this->belongsTo(UserCredential::class, 'usercred', 'systemid');
    }
}
