<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Post extends Model
{
     use Notifiable;
     public $table="post";
     protected $primaryKey = 'id_post';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'zag_post','opis_post','ejo','img_post','id_city','longitude', 'latitude', 'map_scale'
    ];

}
