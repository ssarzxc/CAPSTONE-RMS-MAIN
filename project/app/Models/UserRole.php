<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $fillable = [
        'role_name',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'category_id', 'id');
    }

}
