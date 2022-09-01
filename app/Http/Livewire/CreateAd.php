<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ad;

class CreateAd extends Component
{
    public $title;
    public $body;
    public $price;

    protected $rules = [
        'title' => 'required|min:4',
        'body' => 'required|min:8',
        'price' => 'required|numeric',
    ];

    protected $messages = [
        'required' => 'El campo :attribute es requerido',
        'min' => 'El campo :attribute tiene una longitud mínima de :min caracteres',
        'numeric' => 'El campo :attribute debe ser un número',
    ];

    public function store()
    {
        Ad::create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
        ]);

        session()->flash('message','Anuncio Creado con éxito');

        $this->cleanForm();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    
    public function cleanForm()
    {
        $this->title = '';
        $this->body = '';
        $this->price = '';
    }

    public function render()
    {
        return view('livewire.create-ad');
    }
}
