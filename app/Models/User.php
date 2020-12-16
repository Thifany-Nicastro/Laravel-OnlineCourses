<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'email', 'password', 'role_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
    	return $this->belongsTo(Role::class);
    }

    public function address()
    {
        return $this->morphOne(Address::class, 'addressable');
    }

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function setPasswordAttribute($value) 
    {
        (preg_match('/^\$2y\$/', $value))
            ? $this->attributes['password'] = $value
            : $this->attributes['password'] = Hash::make($value);
    }

    public function isAdmin()
    {
        return $this->role_id == 1;
    }

    public function hasPermission($permission)
    {
        return $this->role->permissions->contains('nome', $permission);
    }
}
