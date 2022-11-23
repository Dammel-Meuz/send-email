<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    protected $fillable=[
        'firstName',
            'lastName',
            'email',
            'phone'

    ];
    public function role(){
        return $this->hasMany(Role::class);
    }
}
