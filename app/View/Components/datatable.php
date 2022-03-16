<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Datatable extends Component
{

    // public $header;
    // public $routeName;
    // public $data;

    public $params;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($params=[])
    {
        // $this->header = $header;
        // $this->routeName = $routeName;
        // $this->data = $data;

        $this->params = $params;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.datatable');
    }
}
