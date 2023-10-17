<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forms = Form::orderBy('created_at', 'desc')->get();
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
        // Validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'gender' => 'required|in:Male,Female',
            'country' => 'required|string|max:255',
            'skill' => 'required|array|min:1', // At least one skill is required
            'skill.*' => 'in:java,python,c++', // Each skill must be one of these values
            'image' => 'required|image|mimes:jpeg,png,jpg|max:1024', // 1 MB maximum for jpeg, png, jpg files
        ];
        // Validate the request data
        $validator = Validator::make($request->all(), $rules);
        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = new Form();
        $data->name = $request->input('name');

        $data->gender = $request->input('gender');

        $data->country = $request->input('country');

        //Save Checkbox

        $checkbox_data = $request->input('skill');
        $data->skill = implode(',', $checkbox_data);


        //Save Image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images'), $image_name);
            $data->image = $image_name;
        }

        $data->save();
        return redirect('/')->with('success', 'User Added Successfully');
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
    
        $data = Form::find($id);

        $data->name = $request->input('name');

        $data->gender = $request->input('gender');

        $data->country = $request->input('country');

        //Save Checkbox

        $checkbox_data = $request->input('skill');
        $data->skill = implode(',', $checkbox_data);


        //Save Image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images'), $image_name);
            $data->image = $image_name;
        }

        $data->save();
        // Update the updated_at timestamp
        $data->touch();
        return redirect('/')->with('success', 'User Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Form::destroy($id);
        return redirect('/')->with('success', 'User Deleted Successfully');
    }
}
