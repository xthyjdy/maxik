<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
        'phone',
        'alt_phone',
        'city_id',
        'region_id',
        'role_id',
        'is_active',
        'lang_id',
        'last_visit'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /**
    * Получить все задачи пользователя.
    */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
