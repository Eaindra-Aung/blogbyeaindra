<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class VideoTutorials extends Component
{   
    public array $videoTutorials = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        $this->videoTutorials = [
            [
               'videoId' => '',
               'title'   => 'Laravel Project Tutorial for Absolute Beginners',
               'description' => 'project'
            ]
            ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.video-tutorials');
    }
}
