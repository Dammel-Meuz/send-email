<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class ContactListPaginate extends Component
{
    use WithPagination;
   // protected $pagiantiontheme='bootstrap';

    public function render()
    {

        $admine = DB::table('contacts')
        ->join('roles', 'contacts.id', '=', 'roles.contact_id')
        ->where('type', '=', 'admine')
        ->select('contacts.*', 'roles.*')
        ->get();

        $stagiaire = DB::table('contacts')
        ->join('roles', 'contacts.id', '=', 'roles.contact_id')
        ->where('type', '=', 'stagiaire')
        ->select('contacts.*', 'roles.*')
        ->get();

        $membre = DB::table('contacts')
        ->join('roles', 'contacts.id', '=', 'roles.contact_id')
        ->where('type', '=', 'membre')
        ->select('contacts.*', 'roles.*')
        ->get();

        return view('livewire.contact-list-paginate',[
            'contact'=>Contact::paginate(10),
            'admine'=>count($admine),
            'stagiaire'=>count($stagiaire),
            'membre'=>count($membre),
        ]);
    }
}