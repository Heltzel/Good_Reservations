<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DetailCardReservations extends Component
{
    public $firstName;
    public $lastName;
    public $phone;
    public $email;
    public $resDate;
    public $tableNum;
    public $groupSize;
    public $editRoute;
    public $indexRoute;
    /**
     * Create a new component instance.
     */
    public function __construct($firstName, $lastName, $phone, $email, $resDate, $tableNum, $groupSize, $editRoute, $indexRoute)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phone = $phone;
        $this->email = $email;
        $this->resDate = $resDate;
        $this->tableNum = $tableNum;
        $this->groupSize = $groupSize;
        $this->editRoute = $editRoute;
        $this->indexRoute = $indexRoute;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.detail-card-reservations');
    }
}
