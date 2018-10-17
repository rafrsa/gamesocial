<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\TimelineController;

class AppController extends Controller
{
    public function index(Request $request)
    {
        $objTimeline = new TimelineController();
        $data['timeline'] = $objTimeline->getTimeline();
        //dd($data);

        return view('app', $data);
    }
}
