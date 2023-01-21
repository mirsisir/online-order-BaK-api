<?php

namespace App\Jobs;

use App\Mail\OrderConfirmationMail;
use App\Models\ServiceOrder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendingMailJobs implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $order;


    public function __construct(ServiceOrder $order)
    {
        $this->order = $order;
    }


    public function handle()
    {
        Mail::to('test@gmail.com')->send(new OrderConfirmationMail($this->order));
    }
}
