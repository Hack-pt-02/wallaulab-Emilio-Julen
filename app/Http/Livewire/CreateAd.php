<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ad;

class CreateAd extends Component
{

    public $title;
    public $body;
    public $price;
    
    public function store()
    {
        Ad::create([
            'title'=>$this->title,
            'body'=>$this->body,
            'price'=>$this->price,
        ]);
        $this->cleanForm();
    }

    public function cleanForm()
    {
        $this->title = "";
        $this->body = "";
        $this->price = "";
    }

    public function render()
    {
        return view('livewire.create-ad');
    }
}
