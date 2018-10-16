<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class TimelineController extends Controller
{
    public function getTimeline(){
        $data['posts'] = Post::all();
        return $data;
    }
}
