<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostMake;
use Illuminate\Support\Str;

class PostMakeController extends Controller
{
    public function index()
    {
        $postMakes = PostMake::all();

        return view('makes.build', ['postMakes' => $postMakes]);
    }

    public function show(PostMake $postMake)
    {

        $postMakes = PostMake::simplePaginate(1);

        return view('makes.show',[
            'postMake' => $postMake
        ]
        );
    }

}
