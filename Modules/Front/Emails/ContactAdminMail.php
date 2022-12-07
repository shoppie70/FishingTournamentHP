<?php

namespace Modules\Front\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactAdminMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function build(): self
    {
        return $this->view('front::mail.contactAdmin')
            ->subject('お問い合わせがありました。')
            ->with(['request' => $this->request]);
    }
}
