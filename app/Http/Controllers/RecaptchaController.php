<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecaptchaController extends Controller
{
    public function verify(Request $request)
    {
        try {
            $token = $request->input('token', '');
            $secret = env('RECAPTCHA_SECRET_KEY');
            $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
            
            $response = Http::asForm()->post($verifyUrl, [
                'secret' => $secret,
                'response' => $token,
            ]);

            if($response->status() !== 200) 
                throw new \Exception('An error occurred while verifying the reCAPTCHA token.');
            
            $data = $response->json();
            return response()->json($data);
            
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'error' => 'An error occurred while verifying the reCAPTCHA token.'
                ],
                500
            );
        }
    }
}
