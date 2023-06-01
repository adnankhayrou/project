<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CompanyInformation;

class CompanyInformationForm extends Component
{
    public $twitter;
    public $facebook;
    public $instagram;
    public $website;
    public $openingHours;
    public $description;
    public $phoneNumber;
    public $address;
    public $email;

    public function render()
    {
        return view('livewire.company-information-form');
    }

    public function save()
    {
        $this->validate([
            'twitter' => 'nullable|string',
            'facebook' => 'nullable|string',
            'instagram' => 'nullable|string',
            'website' => 'nullable|string',
            'openingHours' => 'nullable|string',
            'description' => 'nullable|string',
            'phoneNumber' => 'nullable|string',
            'address' => 'nullable|string',
            'email' => 'nullable|email',
        ]);

        $companyInformation = CompanyInformation::firstOrNew();
        $companyInformation->twitter = $this->twitter;
        $companyInformation->facebook = $this->facebook;
        $companyInformation->instagram = $this->instagram;
        $companyInformation->website = $this->website;
        $companyInformation->opening_hours = $this->openingHours;
        $companyInformation->description = $this->description;
        $companyInformation->phone_number = $this->phoneNumber;
        $companyInformation->address = $this->address;
        $companyInformation->email = $this->email;
        $companyInformation->save();

        session()->flash('message', 'Les informations de l\'entreprise ont été enregistrées avec succès.');

        // Réinitialise les propriétés du formulaire après la sauvegarde
        $this->reset();
    }
}
