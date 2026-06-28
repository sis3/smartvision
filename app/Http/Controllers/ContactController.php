<?php
// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|max:255",
            "phone" => "required|string|max:20",
            "formation_id" => "required|string|max:255",
            "message" => "required|string|min:10",
        ]);
        // Sauvegarde dans la base de données
        $contact = Contact::create($validated);

        // Optionnel: Envoyer un email de notification
        // Mail::to('admin@votre-site.com')->send(new ContactNotification($contact));

        // Redirection avec message de succès
        return redirect()
            ->back()
            ->with("success", "Votre message a été envoyé avec succès, nous vous recontacterons dans les meilleurs délais !");
    }

    public function index()
    {
        $contacts = Contact::latest()->paginate(10);
        return view("admin.contacts.index", compact("contacts"));
    }

    public function show(Contact $contact)
    {
        return view("admin.contacts.show", compact("contact"));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()
            ->route("contacts.index")
            ->with("success", "Message supprimé avec succès");
    }

    public function formation_submit(Request $request)
    {
        $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|max:255",
            "phone" => "nullable|string|max:20",
            "subject" => "required|string|max:255",
            "message" => "required|string",
        ]);

        Contact::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "subject" => $request->subject,
            "message" => $request->message,
        ]);

        return redirect()
            ->back()
            ->with("success", "Votre message a été envoyé avec succès.");
    }
}
