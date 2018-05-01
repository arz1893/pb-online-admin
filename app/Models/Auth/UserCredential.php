<?php

namespace App\Models\Auth;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserCredential extends Authenticatable
{
    use Notifiable;
    protected $table = 'usercredential';
    protected $primaryKey = 'systemid';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'group_id',
        'username',
        'pwd',
        'isenable',
        'expireddate',
        'notes',
        'sys_created',
        'sys_create_ip',
        'sys_last_login',
        'socialmedia_type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'pwd', 'remember_token',
    ];

    public function getUserGroup() {
        return $this->belongsTo(UserGroup::class, 'groupid', 'systemid');
    }

    public function getFacebookLogin() {
        return $this->hasMany(FacebookLogin::class);
    }

    public function getGoogleLogin() {
        return $this->hasMany(GoogleLogin::class);
    }

    public function getContact() {
        return $this->hasMany(Contact::class);
    }
}
