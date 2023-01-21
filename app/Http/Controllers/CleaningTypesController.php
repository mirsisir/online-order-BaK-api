<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\cleaningType;
use Illuminate\Http\Request;
use Exception;

class CleaningTypesController extends Controller
{


    public function index()
    {
        $cleaningTypes = cleaningType::paginate(25);

        return view('cleaning_types.index', compact('cleaningTypes'));
    }

        public function service_type()
    {

         $cleaningTypes = cleaningType::all();
        return $this->sendResponse($cleaningTypes, 'cleaning Type');

    }




    public function create()
    {


        return view('cleaning_types.create');
    }


    public function store(Request $request)
    {


            $data = $this->getData($request);

            cleaningType::create($data);

            return redirect()->route('cleaning_types.cleaning_type.index')
                ->with('success_message', 'Cleaning Type was successfully added.');

    }


    public function show($id)
    {
        $cleaningType = cleaningType::findOrFail($id);

        return view('cleaning_types.show', compact('cleaningType'));
    }


    public function edit($id)
    {
        $cleaningType = cleaningType::findOrFail($id);


        return view('cleaning_types.edit', compact('cleaningType'));
    }


    public function update($id, Request $request)
    {


            $data = $this->getData($request);

            $cleaningType = cleaningType::findOrFail($id);
            $cleaningType->update($data);

            return redirect()->route('cleaning_types.cleaning_type.index')
                ->with('success_message', 'Cleaning Type was successfully updated.');

    }


    public function destroy($id)
    {
        try {
            $cleaningType = cleaningType::findOrFail($id);
            $cleaningType->delete();

            return redirect()->route('cleaning_types.cleaning_type.index')
                ->with('success_message', 'Cleaning Type was successfully deleted.');
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
            'charge' => 'string|min:1|nullable',
            'category' => 'required|nullable',
            'description' => 'string|min:1|max:1000|nullable',
        ];

        $data = $request->validate($rules);


        return $data;
    }

}
