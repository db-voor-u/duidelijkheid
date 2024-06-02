<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class WelkomController extends Controller
{

    public function __invoke(Request $request)
    {

        $featuredPosts = Cache::remember('featuredPosts', Carbon::now()->addDay(), function () {
            return Post::published()->featured()->with('categories')->latest('published_at')->take(3)->get();
        });

        $latestPosts = Cache::remember('latestPosts', Carbon::now()->addDay(), function () {
            return Post::published()->with('categories')->latest('published_at')->take(3)->get();
        });

        // Cache when new post is created
        Cache::forget('featuredPosts');
        Cache::forget('latestPosts');

        return view('welkom', [
            'featuredPosts' => $featuredPosts,
            'latestPosts' => $latestPosts,
        ]);
    }
}
