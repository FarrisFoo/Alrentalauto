<?php

namespace App\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BookingMail extends Mailable
{
    use Queueable, SerializesModels;

    public $bookingDetails;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($bookingDetails)
    {
        $this->bookingDetails = $bookingDetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        $bookingDetails = $this->bookingDetails;
        //reformat pickup Date
        $formatted_pickup_date = Carbon::createFromFormat('Y-m-d', $bookingDetails->pickup_date)->format('d F Y');
        //reformat return Date
        $formatted_return_date = Carbon::createFromFormat('Y-m-d', $bookingDetails->return_date)->format('d F Y');

        $originalPickupTime = $bookingDetails->pickup_time;
        $originalReturnTime = $bookingDetails->return_time;
        
        $changedPickupTime = Carbon::createFromTime($originalPickupTime, 0, 0);
        $changedReturnTime = Carbon::createFromTime($originalReturnTime, 0, 0);

        $formatted_pickup_time = $changedPickupTime->format('h A');
        $formatted_return_time = $changedReturnTime->format('h A');
        

        return $this->subject('AlCarRental - '. $bookingDetails->customer->name .' Booking Details')
            ->view('email-template.admin-booking-details', compact('bookingDetails', 'formatted_pickup_date' , 'formatted_return_date', 'formatted_pickup_time', 'formatted_return_time'));
    }
}
