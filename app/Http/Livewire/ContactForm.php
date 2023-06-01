<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;
use App\Models\Contact;

use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ];

    public function submitForm()
    {
        $validatedData = $this->validate();
    
        // Créer une nouvelle instance du modèle Contact
        $contact = new Contact();
    
        // Affecter les valeurs du formulaire aux propriétés du modèle
        $contact->name = $validatedData['name'];
        $contact->email = $validatedData['email'];
        $contact->subject = $validatedData['subject'];
        $contact->message = $validatedData['message'];
    
        // Enregistrer le modèle dans la base de données
        $contact->save();
    
        $validatedData = $this->validate();

    // Envoyer l'e-mail
    Mail::to('lemnissirnezha123@gmail.com')->send(new ContactMessage($validatedData));

        // Réinitialiser le formulaire
        $this->resetForm();
    
        session()->flash('success', 'Votre message a été envoyé avec succès.');
    }
    
    

    private function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->subject = '';
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
