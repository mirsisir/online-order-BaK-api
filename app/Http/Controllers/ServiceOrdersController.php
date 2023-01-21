<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Jobs\SendingMailJobs;
use App\Models\cleaningCharge;
use App\Models\cleaningType;
use App\Models\ServiceOrder;
use App\Service\ServiceOrderCalculate;
use Illuminate\Http\Request;
use Exception;

class ServiceOrdersController extends Controller
{


    public function index()
    {
        $serviceOrders = ServiceOrder::all();

        return view('service_orders.index', compact('serviceOrders'));
    }

    public function calender()
    {
        $serviceOrders = ServiceOrder::all();

        return view('calender', compact('serviceOrders'));
    }


    public function create()
    {


        return view('service_orders.create');
    }

    public function booking(Request $request , ServiceOrderCalculate $calculate)
    {


        $data = $this->getData($request);

        $_data = $request;
        $order = $calculate->Calculate($data,$_data);

        return $this->sendResponse($order, 'successes');
    }


    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {


        $data = $this->getData($request);

        ServiceOrder::create($data);

        return redirect()->route('service_orders.service_order.index')
            ->with('success_message', 'Service Order was successfully added.');

    }


    public function show($id)
    {
        $serviceOrder = ServiceOrder::findOrFail($id);

        return view('service_orders.show', compact('serviceOrder'));
    }


    public function edit($id)
    {
        $serviceOrder = ServiceOrder::findOrFail($id);



        return view('service_orders.edit', compact('serviceOrder'));
    }


    public function update($id, Request $request): \Illuminate\Http\RedirectResponse
    {


        $data = $this->getData($request);

        $serviceOrder = ServiceOrder::findOrFail($id);
        $serviceOrder->update($data);

        return redirect()->route('service_orders.service_order.index')
            ->with('success_message', 'Service Order was successfully updated.');

    }


    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        try {
            $serviceOrder = ServiceOrder::findOrFail($id);
            $serviceOrder->delete();

            return redirect()->route('service_orders.service_order.index')
                ->with('success_message', 'Service Order was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }



    protected function getData(Request $request): array
    {
        $rules = [
            'location' => 'required|nullable|string|min:1',
            'numberOfBathrooms' => 'required',
            'numberOfBedrooms' => 'required',
            'cleanType' => 'required',
            'recurring' => 'string',
            'date' => 'required',
            'time' => 'required',
            'address' => 'string|min:1|nullable',
            'apt' => 'string|min:1|nullable',
            'zipCode' => 'required|nullable|string|min:1',
            'wayIn' => 'string|min:1|nullable',
            'addOne' => 'string|min:1|nullable',
            'havePets' => 'string|min:1|nullable',
            'note' => 'string|min:1|max:1000|nullable',
            'isPaid' => 'string|min:1|nullable|boolean',
            'status' => 'string|min:1|nullable',
            'full_name' => 'string|min:1|nullable',
            'email' => 'required|nullable',
            'phone' => 'required|nullable|string|min:1',
            'contactOption' => 'string|min:1|nullable',
            'option1' => 'string|min:1|nullable',
            'option2' => 'string|min:1|nullable',
        ];

        $data = $request->validate($rules);


        return $data;
    }

}
