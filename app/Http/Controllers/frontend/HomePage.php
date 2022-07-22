<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\MagazineHighlight;
use Illuminate\Http\Request;
use App\Models\pages\Home;
use App\Models\Posts;
use Illuminate\Support\Facades\Response;

class HomePage extends Controller
{
  public  function index(){
        $page = Home::where('id', 1)->get();
        $posts = Posts::all();
        $data = compact('posts');
        return view('frontend.home', ['page'=> $page,'posts'=>$posts,'highlights'=>MagazineHighlight::where('status','active')->limit(6)->get()]);
    }

    
  public  function getSinglePost($id){
        $post = Posts::find($id);
        $data = compact('post');
        return view('frontend.view-post', ['post'=>$post]);
    }


    public function downloadMediaPack(){
      $file= public_path(). "/front/media/Media-Pack.pdf";
      $headers = array(
        'Content-Type: application/pdf',
      );
      return response()->download($file, 'Media-Pack.pdf', $headers);
    }

}
