<?php

namespace App\Service;

use App\Jobs\SendingMailJobs;
use App\Models\cleaningCharge;
use App\Models\cleaningType;
use App\Models\ServiceOrder;

class ServiceOrderCalculate
{


    public function Calculate($data,$_data)
    {

        $order = ServiceOrder::create($data);
        $bathroomsCharge = cleaningCharge::find($_data->numberOfBathrooms)->charge ?? 0;

        $bedroomsCharge = cleaningCharge::find($_data->numberOfBedrooms)->charge ?? 0;

        $serviceType = cleaningType::find($_data->cleanType)->charge ?? 1;

        $per =( ($bathroomsCharge + $bedroomsCharge) /100) *$serviceType;

        $order->total = $bathroomsCharge + $bedroomsCharge +$per;


        $order->save();


        dispatch(new SendingMailJobs($order));

        return $order;
    }


}
