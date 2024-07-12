<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DetailCardCategory extends Component
{

    public $image;
    public $name;
    public $description;
    public $editRoute;
    public $indexRoute;

    public function __construct($image, $name, $description, $editRoute, $indexRoute)
    {
        $this->image = $image;
        $this->name = $name;
        $this->description = $description;
        $this->editRoute = $editRoute;
        $this->indexRoute = $indexRoute;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.detail-card-category');
    }
}
