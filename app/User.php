<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \Orientdb
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
        protected $table = 'User';
  //  public $incrementing = false;
  //protected $primaryKey = 'rid';
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
        public function pages()
    {
        return $this->hasOne('\App\Page', '\App\CreatedBy');
     }
    
}
