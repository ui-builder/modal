<?php
namespace UiBuilder\Modal\Views\Buttons;

use Illuminate\View\Component;

class Basic extends Component
{
    public ?string $background = null;

    public function __construct(?string $background = null)
    {
        $this->background = $background;
    }
    public function render()
    {
        return view('modal::buttons.basic');
    }
}