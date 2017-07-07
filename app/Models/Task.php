<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
    * Массово присваиваемые атрибуты.
    *
    * @var array
    */
    protected $fillable = ['name'];
    
    /**
    * Получить пользователя - владельца данной задачи
    */
    public function test()
    {
        return 'sss';
    }
}
