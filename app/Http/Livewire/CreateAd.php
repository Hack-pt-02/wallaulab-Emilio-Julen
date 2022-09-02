<?php

namespace App\Http\Livewire;

use App\Models\Ad;
use App\Models\Category;
use App\Models\User;
use Livewire\Component;

use Illuminate\Support\Facades\Auth;


class CreateAd extends Component
{
    public $title;
    public $body;
    public $price;
    public $category;

    protected $rules = [
        'title' => 'required|min:4',
        'body' => 'required|min:8',
        'category' => 'required', 
        'price' => 'required|numeric'
    ];

    protected $messages = [
        'required' => 'El campo :attribute es requerido',
        'min' => 'El campo :attribute tiene una longitud mínima de :min caracteres',
        'numeric' => 'El campo :attribute debe ser un número',
    ];


    public function store()
    {
        $category = Category::find($this->category);
        $ad = $category->ads()->create([
            'title'=>$this->title,
            'body'=>$this->body,
            'price'=>$this->price,
        ]);
        Auth::user()->ads()->save($ad);

        session()->flash('message','Ad created successfully');
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
        $this->category = "";
        $this->price = '';
    }

    public function render()
    {
        return view('livewire.create-ad');
    }
}
