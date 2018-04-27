<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    protected $table = 'usergroup';
    protected $primaryKey = 'systemid';

    protected $fillable = [
        'systemid'
    ];
}
