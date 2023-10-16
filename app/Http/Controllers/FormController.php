<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forms = Form::all();
        return view('show', compact('forms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Form();
        $data->name = $request->input('name');

        $data->gender = $request->input('gender');

        $data->country = $request->input('country');

        //Save Checkbox

        $checkbox_data = $request->input('skill');
        $data->skill = implode(' , ', $checkbox_data);


        //Save Image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time(). '.'. $image->getClientOriginalExtension();
            $image->move(public_path('assets/images'), $image_name);
            $data->image = $image_name;
        }

        $data->save();
        return redirect()->back()->with('success', 'Data Saved');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $record = Form::find($id); // Assuming YourModel is the model you want to edit
        if (!$record) {
            return abort(404); // Or handle the situation where the record is not found
        }
        return view('edit', compact('record'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       Form::destroy($id);
       return redirect()->back()->with('success', 'Data Deleted');
    }
}
