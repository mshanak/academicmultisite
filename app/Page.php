<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends \Orientdb 
{
    protected $table = 'Page';
    protected $fillable = [
        'title', 'body', 'status',
    ];
  //  public $incrementing = false;
    //protected $primaryKey = 'rid';
    public function created_by()
    {
        return $this->hasOne('\App\User', '\App\CreatedBy');
     }
}
