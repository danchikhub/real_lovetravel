<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
class City extends Model
{
    use Notifiable;
    public $table="city";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_city','name_city','opis_city','img_city',
    ];
    // protected $primaryKey = 'id_city';
    // protected $city='name_city';
}

