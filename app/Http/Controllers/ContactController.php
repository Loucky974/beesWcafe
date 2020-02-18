<?php

namespace App\Http\Controllers;

use App\Contact;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        $this->validate($request,[
            'entreprise' => 'bail| required',
            'nom' => 'bail|required|alpha',
            'prenom' => 'bail|required|alpha ',
            'adresse' => 'bail|required',
            'code_postal' => 'bail|required|digits:5',
            'ville' => 'bail|required',
            'telephone' => 'bail|required|digits:10',
            'email' => 'bail|required|email',
            'subject' => 'bail|required',
            'message' => 'bail|required|alpha_num',
        ]);

        $contact = new Contact();
        $contact->entreprise = $request->entreprise;
        $contact->nom = $request->nom;
        $contact->prenom = $request->prenom;
        $contact->adresse = $request->adresse;
        $contact->code_postal = $request->code_postal;
        $contact->ville = $request->ville;
        $contact->telephone = $request->telephone;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        Toastr::success('Your message successfully send.','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
