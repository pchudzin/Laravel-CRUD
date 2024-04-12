<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

use App\Models\Student;
use File;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $students = Student::all();
        return view ('students.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'birthdate' => 'required',
            'pesel' => 'required|digits:11',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $student = new Student;

        if($request->hasFile('image')){
            $reqImage = $request->file('image');
            $imgName = time().uniqid() . '.' . $request->image->extension();
            $destinationPath = public_path('public/images/');
            $reqImage->move($destinationPath, $imgName); 
        }
        $student->image = $imgName;

        $student->name = $request->input('name');
        $student->address = trim($request->input('address'));
        $student->mobile = trim($request->input('mobile'));
        $student->birthdate = $request->input('birthdate');
        $student->pesel = $request->input('pesel');
        
        $student->save();

        return redirect('student')->with('student_added', 'Dodano studenta.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $student = Student::find($id);
        return view('students.show')->with('students', $student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id ): View
    {
        $student = Student::find($id);
        return view('students.edit')->with('students', $student);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $student = Student::find($id);
        $validated = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'birthdate' => 'required',
            'pesel' => 'required|digits:11',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('image')){
            $image_path = public_path('public/images/'.$student->image);
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            $reqImage = $request->file('image');
            $imgName = time().uniqid() . '.' . $request->image->extension();
            $destinationPath = public_path('public/images/');
            $reqImage->move($destinationPath, $imgName); 
        }else{
            $imgName = $student->image;
        }
        $student->image = $imgName;

        $student->name = $request->input('name');
        $student->address = trim($request->input('address'));
        $student->mobile = trim($request->input('mobile'));
        $student->birthdate = $request->input('birthdate');
        $student->pesel = $request->input('pesel');
        
        $student->save();

        return redirect('student')->with('student_updated', 'Dane studenta zostały zaktualizowane.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {

        $student = Student::find($id);

        $image_path = public_path('public/images/'.$student->image);
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        Student::destroy($id);
        return redirect('student')->with('student_deleted', 'Student został usunięty.'); 
    }
}
