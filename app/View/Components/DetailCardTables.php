<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DetailCardTables extends Component
{

    public $name;
    public $guestNumber;
    public $status;
    public $location;
    public $editRoute;
    public $indexRoute;
    /**
     * Create a new component instance.
     */
    public function __construct($name, $guestNumber, $status, $location, $editRoute, $indexRoute)
    {
        $this->name = $name;
        $this->guestNumber = $guestNumber;
        $this->status = $status;
        $this->location = $location;
        $this->editRoute = $editRoute;
        $this->indexRoute = $indexRoute;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.detail-card-tables');
    }
}
