<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendContactRequest;
use App\Mail\ContactShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function shipped(SendContactRequest $request)
    {
        try {
            Mail::to('dante.e.cortes@gmail.com')->send(new ContactShipped($request->validated()));
            return response()->json(['message' => 'Contacto enviado correctamente'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Error al enviar el contacto: '.$th->getMessage()], 500);
        }
    }
}
