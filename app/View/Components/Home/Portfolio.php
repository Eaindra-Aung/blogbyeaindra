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
            ['category' => ['Laravel', 'Tailwind.css', 'Vue3'],
            'title'  => 'Full Stack , Tailwaindcss and Vue3',
            'image' => url('/img/survey.jpg'),
            'github' => 'https://github.com/Eaindra-Aung',
        ],
            [
                'category' => ['Bootstrap', 'Vue3', 'Laravel'],
                'title'  => 'Bootstrap, Vue3', 'Laravel',
                'image' => url('/img/survey1.jpg'),
                'github' => 'https://github.com/Eaindra-Aung',
            ],
            [
                'category' => ['Laravel', 'Tailwind.css', 'Vue3'],
                'title'  => 'Full Stack , Tailwaindcss and Vue3',
                'image' => url('/img/survey2.jpg'),
                'github' => 'https://github.com/Eaindra-Aung',
            ],
            [
                'category' => ['Laravel', 'Tailwind.css', 'Vue3'],
                'title'  => 'Full Stack , Tailwaindcss and Vue3',
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
