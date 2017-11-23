<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class toilet extends Model
{
  protected $table = 'toilet';
  protected $primaryKey = 'id';
  protected $fillable = ['id','buka','tutup','nilai','tempat'];  
}
