<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Blog;
use Hash;

class BlogController extends Controller
{
    public function all(){
        $blogs = Blog::orderBy('created_at', 'DESC')->get();
        //return response()
        //    ->view('all', $blogs);
        return view('all', ['blogs' => $blogs]);
    }
    
    public function add(Request $request){
        if ($request->method('post')){
            Blog::create($request->all());
            return redirect()->intended('/');
        }
        
    }
    public function getBlog($id){
        $blog = Blog::find($id);
        return view('show', ['blog' => $blog]);
    }
    
    public function getForUpdate($id){
        $blog = Blog::find($id);
        return view('update', ['blog' => $blog]);
    }
    
    public function update(Request $request){
        if ($request->method('put')){
            $blog = Blog::find($request->id);
            $blog->title = $request->title;
            $blog->text  = $request->text;
            $blog->save();
            
            return redirect()->intended('/');
        }    
        
    }
}
