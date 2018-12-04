<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use App\Models\User;

class ToDonorMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->data = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        $donor_id = $this->data->donor_id;
        $donor = User::find($donor_id);
        $toemail = $donor->email;
        //$toemail = 'rumman142228@gmail.com';
        $name = $this->data->name;
        $subject = $this->data->subject;
        $message = $this->data->message;

        return $this->view('mails.mailtodonorview',['name'=>$name,'subject'=>$subject,'messagebody'=>$message])->to($toemail);
    }
}
