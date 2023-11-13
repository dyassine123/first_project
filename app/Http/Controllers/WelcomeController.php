<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Skills;
use Illuminate\View\View;

class WelcomeController extends Controller
{
    public function __invoke()
    {
       $skills=Skills::all();
       $projects=project::all();

       return view('welcome', compact('skills','projects')); 

    }
}
