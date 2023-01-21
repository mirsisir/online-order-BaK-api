<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\employee;
use Illuminate\Http\Request;
use Exception;

class EmployeesController extends Controller
{


    public function index()
    {
        $employees = employee::paginate(25);

        return view('employees.index', compact('employees'));
    }


    public function create()
    {
        

        return view('employees.create');
    }


    public function store(Request $request)
    {

            
            $data = $this->getData($request);
            
            employee::create($data);

            return redirect()->route('employees.employee.index')
                ->with('success_message', 'Employee was successfully added.');

    }


    public function show($id)
    {
        $employee = employee::findOrFail($id);

        return view('employees.show', compact('employee'));
    }


    public function edit($id)
    {
        $employee = employee::findOrFail($id);
        

        return view('employees.edit', compact('employee'));
    }


    public function update($id, Request $request)
    {

            
            $data = $this->getData($request);
            
            $employee = employee::findOrFail($id);
            $employee->update($data);

            return redirect()->route('employees.employee.index')
                ->with('success_message', 'Employee was successfully updated.');

    }


    public function destroy($id)
    {
        try {
            $employee = employee::findOrFail($id);
            $employee->delete();

            return redirect()->route('employees.employee.index')
                ->with('success_message', 'Employee was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
                'name' => 'required|nullable|string|min:1|max:255',
            'email' => 'required|nullable',
            'phone' => 'required|nullable|string|min:1',
            'zipCode' => 'required|nullable|string|min:1',
            'JobPosition' => 'nullable|string|min:0',
            'TimeOFWorking' => 'nullable|string|min:0',
            'Smartphone' => 'nullable|string|min:0',
            'languages' => 'nullable|numeric',
            'allergies' => 'nullable|string|min:0',
            'IsExperienceCleaning' => 'nullable|string|min:0', 
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
