<?php

namespace App\Http\Controllers;

use App\Models\Alluser;
use App\Models\category;
use App\Models\subcategory;
use App\Models\sublistcategory;
use App\Models\product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AlluserController extends Controller
{

    public function index()
    {
        $p = new product();
        $products = $p->orderBy('id', 'DESC')->limit(4)->get();

        return view('welcome')->with('products', $products);
    }

    public function login()
    {
        return view('adminlogin');
    }

    public function logout(){
        session()->flush();
        return redirect('/');
    }

    public function adminlogin(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        $events = new Alluser();
        foreach($events->all() as $d);{
            if($d['username'] == $username && $d['password'] == $password){
                session()->flash('msg', 'welcome to e-commerce');
                $request->session()->put('username', $d['username']);
                return redirect('dashbord');
            }else{
                session()->flash('msg', 'Username or Password worrg');
                return redirect('login');
            }
        }
        return redirect('dashbord');
    }


    public function dashbord(Request $request){
        if($request->session()->get('username') == ''){
            return redirect('/');
        }
        return view('dashbord');
    }

    public function category(Request $request){
        if($request->session()->get('username') == ''){
            return redirect('/');
        }
        return view('category');
    }


    public function subcategory(Request $request){
        if($request->session()->get('username') == ''){
            return redirect('/');
        }
        $categorys = category::all();
        return view('subcategory')->with('categorys', $categorys);
    }

    public function sublistcategory(Request $request){
        if($request->session()->get('username') == ''){
            return redirect('/');
        }
        $categorys = category::all();
        $subcategory = subcategory::all();
        return view('sublistcategory')->with('categorys' , $categorys)->with('subcategory',$subcategory);
    }

    public function product(Request $request){
        if($request->session()->get('username') == ''){
            return redirect('/');
        }
        $categorys = category::all();
        $subcategory = subcategory::all();
        $sublistcategory = sublistcategory::all();
        $products = product::all();
        return view('product')->with('categorys' , $categorys)->with('subcategory',$subcategory)->with('sublistcategory', $sublistcategory)->with('products', $products);
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
     * Display the specified resource.
     *
     * @param  \App\Models\Alluser  $alluser
     * @return \Illuminate\Http\Response
     */
    public function show(Alluser $alluser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alluser  $alluser
     * @return \Illuminate\Http\Response
     */
    public function edit(Alluser $alluser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alluser  $alluser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alluser $alluser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alluser  $alluser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alluser $alluser)
    {
        //
    }
}
