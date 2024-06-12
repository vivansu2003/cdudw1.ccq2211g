<?php

namespace App\View\Components;

use App\Models\Banner;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Slider extends Component
{
    public $list_banner;

    public function __construct()
    {
        $this->list_banner = Banner::where([['position', '=', 'showlive'], ['status', '=', 1]])
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function render(): View|Closure|string
    {
        return view('components.slider', ['list_banner' => $this->list_banner]);
    }
}
