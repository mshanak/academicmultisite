<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{ /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $result= \App\Page::all();
        dd($result);
        return view("pages.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        /*
        $user = \App\User::create(['name'=>"Sumit", 'email' => "demo@email.com"]); // Create User node
        $page = new \App\Page(['title'=>"Sumit", 'email' => "demo@email.com"]); // Create Phone node
        $relation = $user->pages()->save($page); // Creating relationship
        */
        
        $item=new \App\Page();
        $item->title="page2";
        $item->body="this is body2";
        $item->save();
       //$item=$item->toArray();
      //dd($item);
        $user = new \App\User();
        $user->name="user1";
        $user->email="user1@ggg.com";
        
        $user->save();
                echo "userid:".$user->rid; 

        $relation = $item->created_by()->save($user); // Creating relationship*/
       // $query="create edge CreatedBy from ".$item->rid." to ".$user->rid."";
       // echo $query;
       //\Illuminate\Support\Facades\DB::statement($query);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


}
