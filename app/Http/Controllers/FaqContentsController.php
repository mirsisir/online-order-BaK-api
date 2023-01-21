<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\FaqCategory;
use App\Models\FaqContent;
use Illuminate\Http\Request;
use Exception;

class FaqContentsController extends Controller
{

    public function index()
    {
        $faqContents = FaqContent::with('faqcategory')->paginate(25);

        return view('faq_contents.index', compact('faqContents'));
    }
    public function faq_list()
    {
        $data =  FaqContent::all();
        return $this->sendResponse($data, 'All Faq');
    }


    public function create()
    {
        $faqCategories = FaqCategory::pluck('name','id')->all();

        return view('faq_contents.create', compact('faqCategories'));
    }

    /**
     * Store a new faq content in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {


            $data = $this->getData($request);

            FaqContent::create($data);

            return redirect()->route('faq_contents.faq_content.index')
                ->with('success_message', 'Faq Content was successfully added.');

    }

    /**
     * Display the specified faq content.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $faqContent = FaqContent::with('faqcategory')->findOrFail($id);

        return view('faq_contents.show', compact('faqContent'));
    }

    /**
     * Show the form for editing the specified faq content.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $faqContent = FaqContent::findOrFail($id);
        $faqCategories = FaqCategory::pluck('name','id')->all();

        return view('faq_contents.edit', compact('faqContent','faqCategories'));
    }

    /**
     * Update the specified faq content in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {


            $data = $this->getData($request);

            $faqContent = FaqContent::findOrFail($id);
            $faqContent->update($data);

            return redirect()->route('faq_contents.faq_content.index')
                ->with('success_message', 'Faq Content was successfully updated.');

    }

    /**
     * Remove the specified faq content from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $faqContent = FaqContent::findOrFail($id);
            $faqContent->delete();

            return redirect()->route('faq_contents.faq_content.index')
                ->with('success_message', 'Faq Content was successfully deleted.');
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
                'questions' => 'required|nullable|string|min:1',
            'answer' => 'required|nullable|string|min:1',
            'FaqCategory_id' => 'required|nullable',
        ];

        $data = $request->validate($rules);


        return $data;
    }

}
