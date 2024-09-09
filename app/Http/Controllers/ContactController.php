<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendContact(Request $request)
    {
        // Validation des champs
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'contact_message' => 'required|string',
        ]);

        // Récupérer les données
        $data = $request->only(['first_name', 'last_name', 'email', 'contact_message']);
        
        // Envoi de l'email avec la vue et les données
        Mail::send('emails.contact', $data, function($mailMessage) use ($data) {
            $mailMessage->to('nourhanebndj@gmail.com')
                        ->subject('Contact from '.$data['first_name'].' '.$data['last_name']);
        });

        return back()->with('success', 'Your message has been sent successfully!');
    }
}