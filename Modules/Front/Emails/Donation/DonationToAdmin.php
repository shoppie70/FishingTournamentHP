<?php

namespace Modules\Front\Emails\Donation;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Modules\Front\Http\Requests\ContactRequest;

class DonationToAdmin extends Mailable
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
        return $this->markdown('front::mail.donation.admin')
            ->subject('寄付・協賛に関するお問い合わせがありました。')
            ->with(['request' => $this->request]);
    }
}
