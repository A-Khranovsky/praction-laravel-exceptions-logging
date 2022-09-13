<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function index($id)
    {
        $next = $id + 1;
        $prev = $id - 1;
        if (isset($_GET['edit'])) {
            return view('edit', [
                'post' => Post::find($_GET['edit'])]);
        }
        return view('post', [
            'post' => Post::find($id),
            'next' => $next,
            'prev' => $prev
        ]);

    }

    public function home()
    {
        return view('home', ['posts' => Post::all()]);
    }
}
