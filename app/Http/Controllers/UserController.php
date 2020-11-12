<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\addAdultCat;

class UserController extends Controller
{
    /**
     * SHOW ALL CATS IN DATABASE
     *
     * @return \Illuminate\Http\Response
     */
    public function showAdultCats()
    {
        //

        $cats = AddAdultCat::all();

        return view('users.adultCats', compact('cats'));


    }

    /**
     * SHOW SELECTED CAT
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $cats=AddAdultCat::find($id);

        return view('users.adult', compact('cats'));
       
    }


   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }



    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
