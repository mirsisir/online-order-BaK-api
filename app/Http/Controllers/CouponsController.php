<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Exception;
use Validator;

class CouponsController extends Controller
{


    public function index()
    {
        $coupons = Coupon::paginate(25);

        return view('coupons.index', compact('coupons'));
    }

    public function valid_coupons(Request $request)
    {

        $coupon = Coupon::query()->where('CouponName', $request->coupon_name)->first();

        if ($coupon){
            if ($coupon->UseType == "multiple") {
                return $this->sendResponse($coupon, 'Valid Coupon');
            }
            else {
                if ($coupon->isUsed == 1) {
                    return $this->sendError('404.', ['error' => 'Coupon Not valid']);
                } else {
                    return $this->sendResponse($coupon, 'Valid Coupon');
                }
            }
        }

        return $this->sendError('404.', ['error' => 'Coupon Not valid']);


    }


    public function create()
    {


        return view('coupons.create');
    }


    public function store(Request $request)
    {


        $data = $this->getData($request);

        Coupon::create($data);

        return redirect()->route('coupons.coupon.index')
            ->with('success_message', 'Coupon was successfully added.');

    }


    public function show($id)
    {
        $coupon = Coupon::findOrFail($id);

        return view('coupons.show', compact('coupon'));
    }


    public function edit($id)
    {
        $coupon = Coupon::findOrFail($id);


        return view('coupons.edit', compact('coupon'));
    }


    public function update($id, Request $request)
    {


        $data = $this->getData($request);

        $coupon = Coupon::findOrFail($id);
        $coupon->update($data);

        return redirect()->route('coupons.coupon.index')
            ->with('success_message', 'Coupon was successfully updated.');

    }


    public function destroy($id)
    {
        try {
            $coupon = Coupon::findOrFail($id);
            $coupon->delete();

            return redirect()->route('coupons.coupon.index')
                ->with('success_message', 'Coupon was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }



    protected function getData(Request $request)
    {
        $rules = [
            'CouponName' => 'required',
            'discountType' => 'required',
            'amount' => 'required',
            'expDate' => 'required',
            'isUsed' => '',
            'UseType' => '',
        ];



        $data = $request->validate($rules);


        return $data;
    }

}
