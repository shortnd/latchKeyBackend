<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{
  /**
   * Attributes that are mass assignable
   * 
   * @var array
   */
  protected $fillables = [
    'full_name', 'time_in', 'time_out', 'total_time', 'checked_in', 'payed'
  ];

  /**
   * Attributes exclued from the models JSON form.
   */
  protected $hidden = [];
}