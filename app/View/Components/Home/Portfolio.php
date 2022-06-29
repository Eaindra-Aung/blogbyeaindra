<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;
use Illuminate\Support\Arr;
class Portfolio extends Component
{    
    public array $items = [];
    public array $tabs  = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        $this->items = [
            ['category' => ['Laravel', 'Bootstrap', 'Git'],
            'title'  => 'Full Stack development with Laravel framework',
            'image' => url('/img/survey.jpg'),
            'github' => 'https://github.com/Eaindra-Aung/Blog',
        ],
            [
                'category' => ['Tailwindcss', 'Laravel', 'JavaScript'],
                'title'  => 'Portfolio Developemnt',
                'image' => url('/img/survey1.jpg'),
                'github' => 'https://github.com/Eaindra-Aung/Blog-01',
            ],
            [
                'category' => ['Tailwind.css', 'Vue3'],
                'title'  => 'Project development using Vue3',
                'image' => url('/img/survey2.jpg'),
                'github' => 'https://github.com/Eaindra-Aung',
            ],
            [
                'category' => ['Laravel', 'Tailwind.css', 'Vue3'],
                'title'  => 'My Active Status On Git',
                'image' => url('/img/survey3.jpg'),
                'github' => 'https://github.com/Eaindra-Aung',
            ]
        ];
        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
        }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
