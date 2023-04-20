<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationsController extends Controller
{
    public function list()
    {
        return view('educations.list', [
            'educations' => Education::all()
        ]);
    }

    public function addForm()
    {
        return view('educations.add');
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'degree' => 'required',
            'institution' => 'required',
            
        ]);

        $education = new Education();
        $education->degree = $attributes['degree'];
        $education->institution = $attributes['institution'];
        $education->save();

        return redirect('/console/educations/list')
            ->with('message', 'Education has been added!');
    }

    public function editForm(Education $education)
    {

        return view('educations.edit', [
            'education' => $education,
        ]);

    }

    public function edit(Education $education)
    {

        $attributes = request()->validate([
            'degree' => 'required',
            'institution' => 'required',
        ]);

        $education->degree = $attributes['degree'];
        $education->institution = $attributes['institution'];

        $education->save();

        return redirect('/console/educations/list')
            ->with('message', 'Education has been edited!');

    }


    public function delete(Education $education)
    {
        
        $education->delete();
        
        return redirect('/console/educations/list')
            ->with('message', 'Education has been deleted!');        
    }
}
