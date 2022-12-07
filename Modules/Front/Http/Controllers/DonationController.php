<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Modules\Front\Emails\ContactAdminMail;
use Modules\Front\Emails\ContactMail;
use Modules\Front\Emails\DonationMail;
use Modules\Front\Emails\DonationMailToAdmin;
use Modules\Front\Http\Requests\ContactRequest;
use Modules\Front\UseCases\ContactForm\SaveContactFormAction;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(): Renderable
    {
        $title = '寄付・協賛について';
        $sub_title = 'DONATION';
        $hero_image_path = '';

        return view('front::pages.donation.index', compact(
            'title',
            'sub_title',
            'hero_image_path'
        ));
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function form(): Renderable
    {
        $title = '寄付・協賛のお問い合わせ';
        $sub_title = 'DONATION';
        $hero_image_path = '';

        $endpoint = route('donation.form.post');
        $method = 'POST';

        $form_contents = [
            '寄付についてのお問い合わせ',
            '協賛についてのお問い合わせ',
            '打ち合わせがしたい',
            'その他'
        ];

        return view('front::pages.donation.form', compact(
            'title',
            'sub_title',
            'hero_image_path',
            'endpoint',
            'method',
            'form_contents'
        ));
    }

    public function post(ContactRequest $request): \Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        DB::beginTransaction();

        try {
            (new SaveContactFormAction())($request);

            DB::commit();
        }

        catch (\Exception $e) {
            report($e);

            DB::rollBack();

            return redirect(route('donation.form'))->withErrors($e->getMessage());
        }

        try {
            Mail::to($request->get('email'))->send(new DonationMail($request));
            Mail::to(config('about_us.admin_email'))->send(new DonationMailToAdmin($request));
        }
        catch (\Exception $e) {
            report($e);

            return redirect(route('donation.form'))->withErrors($e->getMessage());
        }

        return redirect(route('donation.form.complete'));
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function complete(): Renderable
    {
        $title = 'お問い合わせありがとうございました。';
        $subtitle = 'DONATION';

        return view('front::pages.donation.complete', compact(
            'title',
            'subtitle',
        ));
    }
}
