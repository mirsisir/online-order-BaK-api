<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\FaqCategory;
use Illuminate\Http\Request;
use Exception;

class FaqCategoriesController extends Controller
{

    public function index()
    {
        $faqCategories = FaqCategory::paginate(25);

        return view('faq_categories.index', compact('faqCategories'));
    }

    public function create()
    {


        return view('faq_categories.create');
    }

    public function store(Request $request)
    {


            $data = $this->getData($request);

            FaqCategory::create($data);

            return redirect()->route('faq_categories.faq_category.index')
                ->with('success_message', 'Faq Category was successfully added.');

    }


    public function show($id)
    {
        $faqCategory = FaqCategory::findOrFail($id);

        return view('faq_categories.show', compact('faqCategory'));
    }


    public function edit($id)
    {
        $faqCategory = FaqCategory::findOrFail($id);


        return view('faq_categories.edit', compact('faqCategory'));
    }

    public function update($id, Request $request)
    {


            $data = $this->getData($request);

            $faqCategory = FaqCategory::findOrFail($id);
            $faqCategory->update($data);

            return redirect()->route('faq_categories.faq_category.index')
                ->with('success_message', 'Faq Category was successfully updated.');

    }


    public function destroy($id)
    {
        try {
            $faqCategory = FaqCategory::findOrFail($id);
            $faqCategory->delete();

            return redirect()->route('faq_categories.faq_category.index')
                ->with('success_message', 'Faq Category was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }



    protected function getData(Request $request)
    {
        $rules = [
                'name' => 'required|min:1|max:255|nullable|string',
        ];

        $data = $request->validate($rules);


        return $data;
    }

}
