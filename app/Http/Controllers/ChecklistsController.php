<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Checklist;
use App\Models\ChecklistCategory;
use Illuminate\Http\Request;
use Exception;

class ChecklistsController extends Controller
{


    public function index()
    {
        $checklists = Checklist::with('checklistcategory')->paginate(25);

        return view('checklists.index', compact('checklists'));
    }

    public function checklists50()
    {
         $checklists = Checklist::where('is_In50_Checklist', 1)->with('checklistcategory')->get();

        return $this->sendResponse($checklists, 'is_In40_Checklist');
    }

    public function checklists40()
    {
        $data  = Checklist::where('is_In40_Checklist', 1)->with('checklistcategory')->get();

        return $this->sendResponse($data, 'is_In40_Checklist');
    }


    public function create()
    {
        $checklistCategories = ChecklistCategory::pluck('name', 'id')->all();

        return view('checklists.create', compact('checklistCategories'));
    }


    public function store(Request $request)
    {


        $data = $this->getData($request);

        Checklist::create($data);

        return redirect()->route('checklists.checklist.index')
            ->with('success_message', 'Checklist was successfully added.');

    }


    public function show($id)
    {
        $checklist = Checklist::with('checklistcategory')->findOrFail($id);

        return view('checklists.show', compact('checklist'));
    }


    public function edit($id)
    {
        $checklist = Checklist::findOrFail($id);
        $checklistCategories = ChecklistCategory::pluck('name', 'id')->all();

        return view('checklists.edit', compact('checklist', 'checklistCategories'));
    }


    public function update($id, Request $request)
    {


        $data = $this->getData($request);

        $checklist = Checklist::findOrFail($id);
        $checklist->update($data);

        return redirect()->route('checklists.checklist.index')
            ->with('success_message', 'Checklist was successfully updated.');

    }


    public function destroy($id)
    {
        try {
            $checklist = Checklist::findOrFail($id);
            $checklist->delete();

            return redirect()->route('checklists.checklist.index')
                ->with('success_message', 'Checklist was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }


    protected function getData(Request $request)
    {
        $rules = [
            'name' => 'required|nullable|string|min:1|max:255',
            'checklist_category_id' => 'nullable',
            'is_In40_Checklist' => 'boolean|nullable',
            'is_In50_Checklist' => 'boolean|nullable',
        ];

        $data = $request->validate($rules);

        $data['is_In40_Checklist'] = $request->has('is_In40_Checklist');
        $data['is_In50_Checklist'] = $request->has('is_In50_Checklist');

        return $data;
    }

}
