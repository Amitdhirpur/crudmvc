<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return view('home');
    }
    public function insert()
    {
        $data['products'] = DB::table('products')->where('user_id',  Auth::user()->id)->get();
          //  $data['products'] = Product::where('user_id',  Auth::user()->id)->get();

      return view('table', $data);
    }


    public function store(Request $request){
      if($request->id){
        $post=Product::find($request->id);
      }
      else{
      $post=New Product;
    }
      $id = Auth::user()->id;
      $post->user_id = $id;
      $post->productname = $request->productname;
      $post->price = $request->price;
      $post->quantity = $request->quantity;
      $post->model = $request->model;
      $post->save();
      return redirect('/insert');

    }
    public function delete($id)
    {
     $del  = Product::find($id);
     if(!$del) return back();
     $del->delete();
     return back();
    }
    public function edit($id=null)
    {
        $data['update'] = Product::find($id);
        return view('home',$data);

   }
  
}
