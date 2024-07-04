<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DataTable extends Component
{
    public $headers;
    public $rows;
    public $tableTitle;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($headers, $rows, $tableTitle)
    {

        $this->headers = $headers;
        $this->rows = $rows;
        $this->tableTitle = $tableTitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.data-table');
    }
}
