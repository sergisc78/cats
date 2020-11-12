<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\addAdultCat;

class AdminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }



    /**
     * SHOW ALL CATS IN DATABASE
     */

    public function showCats()
    {

        $cats = AddAdultCat::all();

        return view('admin.ConsultAdultcats', compact('cats'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addCat()
    {
        //
        return view('admin.addAdult');
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // PUJAR FOTO A LA BBDD


        $input = $request->all();

        $file = $request->file('image');

        if ($file) {

            $filename = $file->getClientOriginalName(); // NOM DE LA FOTO

            $file->move('images', $filename);

            $input['image'] = $filename;
        }


        addAdultCat::create($input);
    }


    /**
     * SHOW SELECTED CAT.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $cats = AddAdultCat::find($id);

        return view('admin.adult', compact('cats'));
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
