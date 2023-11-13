<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Skills;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSkillRequest;
use Illuminate\Support\Facades\Storage;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skills::all() ;

        return view('skills.index',compact('skills'));
    }


    public function create()
    { 
        return view('skills.create') ;
    }


    public function store(StoreSkillRequest $request) 
    { 
        if($request->hasFile('image')) {
            $image = $request->file('image')->store('skills');


            Skills::create([
                'name'=> $request->name,
                'image'=> $image 
            ]);

            return to_route('skills.index')->with('success','Skill created.');



        }

        return back();
   
    }

    
public function edit(Skills $skill)
{

    return view('skills.edit',compact('skill'));

}

public function update(Request $request,Skills $skill)
{
    $request->validate([
        'name'=> ['required','min:3'],
        'image' => ['nullable','image']
    ]);

    $image = $skill->image;
    if($request->hasFile('image')) {
        Storage::delete($skill->image);
        $image = $request->file('image')->store('skills');
    }


    $skill->update([
        'name'=> $request->name,
        'image'=> $image 


    ]);

    return to_route('skills.index')->with('success','Skill updated.');


}


public function destroy(Skills $skill)
{
    Storage::delete($skill->image);
    $skill->delete();

    return back()->with('danger','Skill deleted.');
    

}

}
