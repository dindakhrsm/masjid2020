<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;
use Carbon\Carbon;


class BlogController extends Controller
{
    //$
    protected $limit = 3;

    public function index()
    {
      //  \DB::enableQueryLog();
      //  mengurutkan dari yang terbaru
       // $posts = Post::with('author')->latestFirst()->get();

       $categories = Category::with('posts')->orderBy('title', 'asc')->get();
       // $categories = Category::all();
      $posts = Post::with('author')
          ->orderBy('created_at', 'desc')
          ->where("published_at", "<=", Carbon::now());
         /* ->paginate(3);*/

      //check if any term entered
      if($term = request('term'))
      {
          $posts->where('title', 'LIKE', "%$term%");
          $posts->orWhere('excerpt', 'LIKE', "%$term%");
      }
     $posts = $posts->paginate($this->limit);
        return view("blog.index", compact('posts', 'categories'));
        //view('blog.index', compact('posts'))->render();
       // dd(\DB::getQueryLog());

    }


    public function category($id)
    {
       $categories = Category::with('posts')->orderBy('title', 'asc')->get();
        $posts = Post::with('author')
            ->orderBy('created_at', 'desc')
            ->where('category_id', $id)
            ->paginate(3);
        return view("blog.index", compact('posts', 'categories'));
    }

    public function show($id)
    {
        $categories = Category::with('posts')->orderBy('title', 'asc')->get();
        $post = Post::where("published_at", "<=", Carbon::now())->findOrFail($id);
        return view('blog.show', compact('post', 'categories'));
    }

    public function profil()
    {
        $categories = Category::with('posts')->orderBy('title', 'asc')->get();
        $posts = Post::with('author')
            ->orderBy('created_at', 'desc')
            ->where("published_at", "<=", Carbon::now())
            ->paginate(3);
        return view('blog.profil', compact('posts','categories'));
    }

    public function gallery()
    {
        return view('blog.gallery');
    }

    public function video()
    {
        return view('blog.video');
    }

}
