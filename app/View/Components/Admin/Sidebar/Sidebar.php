<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     */


    public function __construct(
        public $menus = [
            [
                'title' => 'Dashboard',
                'url' => '/dashboard',
            ],
            [
                'title' => 'Kemahasiswaan',
                'url' => '/admin/kemahasiswaan',
            ],
            [
                'title' => 'Master Data',
                'url' => '/admin/master-data',
            ],
            [
                'title' => 'Pengguna',
                'url' => '/admin/users',
            ],
        ],
        public $title = 'Ini testttt'
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.sidebar.index');
    }
}
