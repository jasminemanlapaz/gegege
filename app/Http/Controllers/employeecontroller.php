<?php

namespace App\Http\Controllers;
use Illuminate\Support\Fascades\DB;
use Response;
use Illuminate\Http\Request;
use App\Models\employee;

class employeecontroller extends Controller
{
    public function index()
    {   

        return view ('employee.index');
    }

    public function create()
    {
        return view ('employee.create');
    }


    public function store(Request $request)
    {
    $request->validate([
        'fname' => 'required|max:255|',
        'lname' => 'required|max:255|',
        'midname' => 'required|max:255|',
        'age' => 'required|',
        'address' => 'required|max:255|',
        'zip' => 'required|',
        
    ]);

    ::create($request->all());
    return view ('employee.create');
    }

    public function edit( int $id)
    {
        $employees = ::find($id);
        return view ('employee.edit');
    }

    public function update(Request $request, int $id) {
        {
            $request->validate([
                'fname' => 'required|max:255|',
                'lname' => 'required|max:255|',
                'midname' => 'required|max:255|',
                'age' => 'required|',
                'address' => 'required|max:255|',
                'zip' => 'required|',
                
            ]);
        
            ::findOrFail($id)->($request->all());
            return redirect ()->back()->with('status','Employee Updated Successfully!');
            }
    }

    public function desroy(int $id){
        $employees = employee::findOrFail($id);
        $employees->deete();
        return redirect ()->back()->with('status','Employee Deleted');
    }
}
