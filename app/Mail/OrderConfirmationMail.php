<?php

namespace App\Mail;

use App\Models\ServiceOrder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $order;


    public function __construct(ServiceOrder $order)
    {
        $this->order = $order;
    }


    public function build()
    {
        return $this->markdown('mail.order-confirmation-mail'.['order' =>$this->order]);
    }
}
