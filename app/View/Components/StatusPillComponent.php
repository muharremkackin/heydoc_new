<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StatusPillComponent extends Component
{
    public $type;
    public $content;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $content)
    {
        $this->type = $type;
        $this->content = $content;
    }

    public function getStatusColor(): string
    {
        switch ($this->type) {
            case config('enumeration.status.email_not_verified'):
            case config('enumeration.status.inactive'):
                return 'red';
            case config('enumeration.status.not_approved'):
                return 'yellow';
            case config('enumeration.status.deleted'):
                return 'gray';
            default:
                return 'green';

        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.status-pill-component');
    }
}
