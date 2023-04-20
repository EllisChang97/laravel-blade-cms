<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function list()
    {
        return view('skills.list', [
            'skills' => Skill::all()
        ]);
    }

    public function editForm(Skill $skill)
    {

        return view('skills.edit', [
            'skill' => $skill,
        ]);

    }

    public function edit(Skill $skill)
    {

        $attributes = request()->validate([
            'name' => 'required',
            'image_url' => 'required',
        ]);

        $skill->name = $attributes['name'];
        $skill->image_url = $attributes['image_url'];

        $skill->save();

        return redirect('/console/skills/list')
            ->with('message', 'Skill has been edited!');

    }


    public function delete(Skill $skill)
    {
        
        $skill->delete();
        
        return redirect('/console/skills/list')
            ->with('message', 'Skill has been deleted!');        
    }


    public function addForm()
    {
        return view('skills.add');
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'name' => 'required',
            'image_url' => 'required',
        ]);

        $skill = new Skill();
        $skill->name = $attributes['name'];
        $skill->image_url = $attributes['image_url'];
        $skill->save();

        return redirect('/console/skills/list')
            ->with('message', 'Skill has been added!');
    }


}



// to make a new controller
//run: php artisan make:controller <controller_name_in_plural>Controller     
