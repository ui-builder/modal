<?php
namespace UiBuilder\Modal\Views\Buttons;

use Illuminate\View\Component;

class Basic extends Component
{
    public string $background;

    public function __construct(string $background)
    {
        $this->background = $background;
    }
    public function render()
    {
        return view('modal::buttons.basic');
    }
}