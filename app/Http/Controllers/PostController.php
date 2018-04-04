<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function index(){
      $data['posts']=Post::all();
      return view('post.index',$data);
    }
  public function add(Request $request){
  if($request->id){
    $post=Post::find($request->id);
  }
    else{
      $request->validate([
      'name' => 'required',
      'city' => 'required',
      'image' => 'required|mimes:jpeg,bmp,png',
      ]);
   $post=New Post;
   $name = Request::old('name');
 }
   $post->name=$request->name;
   $post->city=$request->city;
   $file=$request->file('image');
   if($file && $file->isvalid()){
   $filename=$file->getClientOriginalName();
   $file->move(public_path().'/images/',$filename);
   $post->image ='/images/'.$filename;
   }
    $post->save();
    return redirect('/post');
  }
  public function delete($id){
  $delete=Post::find($id);
  $delete->delete($id);
  return redirect('/post');
      }
  public function edit($id){
    $data['edit']=Post::find($id);
    $data['posts']=Post::all();
    return view('post.index',$data);
      }

}
