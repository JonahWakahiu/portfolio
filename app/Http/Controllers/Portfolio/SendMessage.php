<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Mail\NewMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMessage extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'nullable|string',
            'email' => 'required|string|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        try {
            Mail::to('jonah.wakahiumaina@gmail.com')->send(new NewMessage(
                $request->firstName,
                $request->lastName,
                $request->email,
                $request->subject,
                $request->message
            ));

            return response()->json(['success' => true], 200);

        } catch (\Throwable $th) {
            return response()->json(['success' => false, 'message' => $th->getMessage()], 500);
        }
    }
}
