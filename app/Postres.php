<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postres extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'postres';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'precio', 'stock', 'imagen'];


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
}
