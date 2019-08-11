<?php


namespace App\Composers;

use App\Services\NavbarService;
use Illuminate\View\View;

class MainComposer
{
    protected $navbars;

    public function __construct(NavbarService $navbarService)
    {
        $this->navbars = $navbarService;
    }

    public function compose(View $view)
    {
        $view->with('navbars', $this->navbars->navbarRootMenu());
    }

}
