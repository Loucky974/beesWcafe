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
            'entreprise' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'code_postal' => 'required',
            'ville' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
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
