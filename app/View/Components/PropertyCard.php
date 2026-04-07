<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PropertyCard extends Component
{
    public $title;
    public $price;
    public $location;
    public $description;
    public $amount;
    public $status;
 

    public function __construct(
        $title,
        $price,
        $location,
        $description = '',
        $amount = '',
        $status = 'Available',
    ) {
        $this->title = $title;
        $this->price = $price;
        $this->location = $location;
        $this->description = $description;
        $this->amount = $amount;
        $this->status = $status;
       
    }

    public function render()
    {
        return view('components.property-card');
    }
}