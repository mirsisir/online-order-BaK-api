<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ChecklistCategory;
use Illuminate\Http\Request;
use Exception;

class ChecklistCategoriesController extends Controller
{

    /**
     * Display a listing of the checklist categories.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $checklistCategories = ChecklistCategory::paginate(25);

        return view('checklist_categories.index', compact('checklistCategories'));
    }

    /**
     * Show the form for creating a new checklist category.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        

        return view('checklist_categories.create');
    }

    /**
     * Store a new checklist category in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

            
            $data = $this->getData($request);
            
            ChecklistCategory::create($data);

            return redirect()->route('checklist_categories.checklist_category.index')
                ->with('success_message', 'Checklist Category was successfully added.');

    }

    /**
     * Display the specified checklist category.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $checklistCategory = ChecklistCategory::findOrFail($id);

        return view('checklist_categories.show', compact('checklistCategory'));
    }

    /**
     * Show the form for editing the specified checklist category.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $checklistCategory = ChecklistCategory::findOrFail($id);
        

        return view('checklist_categories.edit', compact('checklistCategory'));
    }

    /**
     * Update the specified checklist category in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {

            
            $data = $this->getData($request);
            
            $checklistCategory = ChecklistCategory::findOrFail($id);
            $checklistCategory->update($data);

            return redirect()->route('checklist_categories.checklist_category.index')
                ->with('success_message', 'Checklist Category was successfully updated.');

    }

    /**
     * Remove the specified checklist category from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $checklistCategory = ChecklistCategory::findOrFail($id);
            $checklistCategory->delete();

            return redirect()->route('checklist_categories.checklist_category.index')
                ->with('success_message', 'Checklist Category was successfully deleted.');
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
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
