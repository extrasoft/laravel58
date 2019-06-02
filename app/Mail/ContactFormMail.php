<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    // กำหนดตัวแปรเป็น public เพื่อให้ view สารถเรียกใช้ได้ง่าย
    public $data;

    /**  
     * Create a new message instance.
     * php artisan make:mail ContactFormMail --markdown=emails.contact.contact-form
     * จะได้ไฟล์ app/Mail/ContactFormMail.php และ /resources/views/emails/contact/contact-form.blade.php
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact.contact-form');
    }
}
