<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    function project(){
        $projects = Project::all();
        return view('back.pages.addproject', compact('projects'));
    }
    function addproject(Request $request){
        Project::insert([
            'title' => $request-> title,
            'dis' => $request-> dis,
            'link' => $request-> link,
            'category' => $request-> category,
        ]);
        return back();
    }
}
