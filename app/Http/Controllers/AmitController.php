<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Amit;
class AmitController extends Controller
{
  public function abc() {
    return view('login.index');
  }
    public function index(){
      $data['posts']=Amit::all();
      return view('amit.index',$data);
    }
public function store(Request $request){
  $request->validate([
    'name' => 'required',
    ]);
  if($request->id)
    $post=Amit::find($request->id);
  else
  $post=New Amit;
  $post->name=$request->name;
  $file=$request->file('image');
  $path='/image/';
  if($file && $file->isvalid()){
    $filename=$file->getClientOriginalName();
    $file->move(public_path().$path,$filename);
    $post->image=$path.$filename;
  }
  $post->save();
  return redirect('/amit');
}
public function delete($id){
  $post=Amit::find($id);
  $post->delete($id);
  return redirect('/amit');
}
public function edit($id){
  $data['post'] =Amit::find($id);
  $data['posts'] = Amit::all();
  return view('amit.index',$data);
}

}
