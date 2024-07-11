<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CrudButton extends Component
{
    public $action;
    public $route;
    public $class;
    public $confirm;

    public function __construct(
        $action = 'create',
        $route = '#',
        $class = '',
        $confirm = false
    ) {
        $this->action = $action;
        $this->route = $route;
        $this->class = $class;
        $this->confirm = $confirm;
    }

    public function render()
    {
        return view('components.crud-button');
    }
}
