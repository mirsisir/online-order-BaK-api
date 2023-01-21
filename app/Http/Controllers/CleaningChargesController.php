<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\cleaningCharge;
use Illuminate\Http\Request;
use Exception;

class CleaningChargesController extends Controller
{


    public function index()
    {
        $cleaningCharges = cleaningCharge::paginate(25);

        return view('cleaning_charges.index', compact('cleaningCharges'));
    }
    public function service_charge()
    {
        $data = cleaningCharge::all();
        return $this->sendResponse($data, 'Service List');
    }


    public function create()
    {


        return view('cleaning_charges.create');
    }


    public function store(Request $request)
    {

            $data = $this->getData($request);

            cleaningCharge::create($data);

            return redirect()->route('cleaning_charges.cleaning_charge.index')
                ->with('success_message', 'Cleaning Charge was successfully added.');

    }


    public function show($id)
    {
        $cleaningCharge = cleaningCharge::findOrFail($id);

        return view('cleaning_charges.show', compact('cleaningCharge'));
    }


    public function edit($id)
    {
        $cleaningCharge = cleaningCharge::findOrFail($id);


        return view('cleaning_charges.edit', compact('cleaningCharge'));
    }


    public function update($id, Request $request)
    {


            $data = $this->getData($request);

            $cleaningCharge = cleaningCharge::findOrFail($id);
            $cleaningCharge->update($data);

            return redirect()->route('cleaning_charges.cleaning_charge.index')
                ->with('success_message', 'Cleaning Charge was successfully updated.');

    }


    public function destroy($id)
    {
        try {
            $cleaningCharge = cleaningCharge::findOrFail($id);
            $cleaningCharge->delete();

            return redirect()->route('cleaning_charges.cleaning_charge.index')
                ->with('success_message', 'Cleaning Charge was successfully deleted.');
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
            'type' => 'nullable',
            'charge' => 'required|nullable|string|min:1',
            'description' => 'string|min:1|max:1000|nullable',
        ];

        $data = $request->validate($rules);


        return $data;
    }

}
