<?php

namespace Modules\Front\UseCases\ContactForm;

use App\Enums\FormType;
use App\Models\ContactForm;
use App\Models\ContactFormDetail;
use Modules\Front\Http\Requests\ContactRequest;
use RuntimeException;

class SaveContactFormAction
{
    protected array $form_content_names = [
        'contents',
        'company_name',
        'postal_code',
        'address',
        'name',
        'email',
        'tel',
        'note'
    ];

    public function __invoke(ContactRequest $request): void
    {
        if(!FormType::hasValue((int)$request->get('form_type_id'))) {
            throw new RuntimeException('フォームで不正な値が送信されました。');
        }

        $form = ContactForm::query()->create([
            'form_type_id' => $request->get('form_type_id')
        ]);

        foreach($this->form_content_names as $form_content_name) {
            if($value = $request->get($form_content_name)) {
                ContactFormDetail::query()->create([
                    'form_id' => $form->getKey(),
                    'title' => $request->attributes()[$form_content_name],
                    'slug' => $form_content_name,
                    'value' => $value
                ]);
            }
        }
    }
}
