<?php

namespace App\Http\Controllers;

use App\Models\sublistcategory;
use Illuminate\Http\Request;

class SublistcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $req = new sublistcategory;
        $req->cetegory_name = $request->input('cetegory_name');
        $req->sub_cetegory_name = $request->input('sub_cetegory_name');
        $req->sublist_category_name = $request->input('sublist_category_name');
        $req->save();
        return redirect('dashbord/sublistcategory');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sublistcategory  $sublistcategory
     * @return \Illuminate\Http\Response
     */
    public function show(sublistcategory $sublistcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sublistcategory  $sublistcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(sublistcategory $sublistcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sublistcategory  $sublistcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sublistcategory $sublistcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sublistcategory  $sublistcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(sublistcategory $sublistcategory)
    {
        //
    }
}
