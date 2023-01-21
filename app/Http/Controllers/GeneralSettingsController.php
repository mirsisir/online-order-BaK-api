<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GeneralSettings;
use Illuminate\Http\Request;
use Exception;

class GeneralSettingsController extends Controller
{


    public function index()
    {
        $generalSettingsObjects = GeneralSettings::paginate(25);

        return view('general_settings.index', compact('generalSettingsObjects'));
    }


    public function create()
    {
        

        return view('general_settings.create');
    }


    public function store(Request $request)
    {

            
            $data = $this->getData($request);
            
            GeneralSettings::create($data);

            return redirect()->route('general_settings.general_settings.index')
                ->with('success_message', 'General Settings was successfully added.');

    }


    public function show($id)
    {
        $generalSettings = GeneralSettings::findOrFail($id);

        return view('general_settings.show', compact('generalSettings'));
    }


    public function edit($id)
    {
        $generalSettings = GeneralSettings::findOrFail($id);
        

        return view('general_settings.edit', compact('generalSettings'));
    }


    public function update($id, Request $request)
    {

            
            $data = $this->getData($request);
            
            $generalSettings = GeneralSettings::findOrFail($id);
            $generalSettings->update($data);

            return redirect()->route('general_settings.general_settings.index')
                ->with('success_message', 'General Settings was successfully updated.');

    }


    public function destroy($id)
    {
        try {
            $generalSettings = GeneralSettings::findOrFail($id);
            $generalSettings->delete();

            return redirect()->route('general_settings.general_settings.index')
                ->with('success_message', 'General Settings was successfully deleted.');
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
            'value' => 'required|nullable|string|min:1',
            'description' => 'nullable|string|min:0', 
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
