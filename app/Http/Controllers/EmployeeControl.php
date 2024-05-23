<?php

namespace App\Http\Controllers;


use App\Models\Employ;
use Illuminate\Http\Request;

class EmployeeControl extends Controller
{
   public function index()
   {
    $employment = Employ::get();
    return view ('employee.index', compact('employment'));  
   }

   public function create()
   {
     return view('employee.create');
   }

   public function store(Request $request)
   {    
       $request -> validate([

        'firstname' => 'required|max:255|string',
        'middlename' => 'required|max:255|string',
        'lastname' => 'required|max:255|string',
        'address' => 'required|max:255|string',
        'country' => 'required|max:255|string',
        'zip' => 'required|max:255|integer',
        'age' => 'required|max:255|integer',
        'birth' => 'required|max:255|date',
        'DOB' => 'required|max:255|date',
        'dept' => 'required|max:255|string',
        'division' => 'required|max:255|string'
       ]);

       Employ::create([
        'firstname' => $request->firstname,
        'middlename' => $request->middlename,
        'lastname' => $request->lastname,
        'address' => $request->address,
        'country' => $request->country,
        'zip' => $request->zip,
        'age' => $request->age,
        'birth' => $request->birth,
        'DOB' => $request->DOB,
        'dept' => $request->dept,
        'division' => $request->division,
       ]);

       return redirect('employee')->with('status', 'Successfully Created');
   }

   public function edit(int $id)
   {
     $employment = Employ::findOrFail($id);
     //return $employees;
     return view('employee.edit', compact('employment'));
   }

   public function update(Request $request, int $id)
   {
    $request -> validate([

      'firstname' => 'required|max:255|string',
      'middlename' => 'required|max:255|string',
      'lastname' => 'required|max:255|string',
      'address' => 'required|max:255|string',
      'country' => 'required|max:255|string',
      'zip' => 'required|max:255|integer',
      'age' => 'required|max:255|integer',
      'birth' => 'required|max:255|date',
      'DOB' => 'required|max:255|date',
      'dept' => 'required|max:255|string',
      'division' => 'required|max:255|string'
     ]);

     Employ::findOrFail($id)->update([
      'firstname' => $request->firstname,
      'middlename' => $request->middlename,
      'lastname' => $request->lastname,
      'address' => $request->address,
      'country' => $request->country,
      'zip' => $request->zip,
      'age' => $request->age,
      'birth' => $request->birth,
      'DOB' => $request->DOB,
      'dept' => $request->dept,
      'division' => $request->division,
     ]);

     return redirect()->back()->with('status', 'Successfully updated!');

   }
}
