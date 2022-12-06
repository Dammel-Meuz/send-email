<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class EmailSearch extends Component
{

    public string $query='meuz';
    public $search='hello';
    public $email;


    // public function mount(){
    //     $this->query =  'meuz';
    //     $this->email = [];

    // }

    public function updatedQuery(){
        $this->email=Contact::where('email','like','%'.$this->query.'%')->get()->toArray();
    }

    public function render()
    {
        return view('livewire.email-search');

    }
}
