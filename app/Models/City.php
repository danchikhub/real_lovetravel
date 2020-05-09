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
    protected $primaryKey = 'id_city';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'name_city','opis_city','img_city',
    ];
    // protected $primaryKey = 'id_city';
    // protected $city='name_city';
}

