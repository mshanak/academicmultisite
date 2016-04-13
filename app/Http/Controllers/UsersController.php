<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    
    
    
    public function store(){
        
        $u = new \App\User();
        $u->name="ibrahim";
        $u->email="ibrahim@ggg.com";
        
        
        $u->save();dd($u);
        
        
    }
    
    
}
