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
    public $image;
    public function __construct(
        $title,
        $price,
        $location,
        $description = '',
        $amount = '',
        $status = 'Available',
        $image = 'https://www.houseplans.pro/assets/plans/788/6-plex-town-house-plan-narrow-16-ft-wide-units-rear-garage-front-render-S-747.jpg'
    ) {
        $this->title = $title;
        $this->price = $price;
        $this->location = $location;
        $this->description = $description;
        $this->amount = $amount;
        $this->status = $status;
        $this->image = $image;
    }

    public function render()
    {
        return view('components.property-card');
    }
}