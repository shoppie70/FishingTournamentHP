<?php

namespace Modules\Front\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Modules\Front\Http\Requests\ContactRequest;

class DonationMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public ContactRequest $request;

    public function __construct(ContactRequest $request)
    {
        $this->request = $request;
    }

    public function build(): self
    {
        return $this->markdown('front::mail.donation.user')
            ->subject('お問い合わせありがとうございます。')
            ->with(['request' => $this->request]);
    }
}
