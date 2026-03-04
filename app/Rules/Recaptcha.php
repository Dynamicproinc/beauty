<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;

class Recaptcha implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $response = Http::asForm()->post(
            'https://www.google.com/recaptcha/api/siteverify',
            [
                'secret'   => config('services.recaptcha.secret_key'),
                'response' => $value,
                'remoteip' => request()->ip(),
            ]
        );

        if (! $response->successful()) {
            $fail('Captcha verification failed. Please try again.');
            return;
        }

        $result = $response->json();

        // For reCAPTCHA v2
        if (! $result['success']) {
            $fail('Captcha verification failed.');
        }

        // If using reCAPTCHA v3 (score check)
        if (isset($result['score']) && $result['score'] < 0.5) {
            $fail('Suspicious activity detected.');
        }
    }
}
