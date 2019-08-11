<?php


namespace App\Repository;


use App\Models\Navbar;
use App\NavbarInterface;

class NavbarRepository implements NavbarInterface
{
    protected $navbars;

    public function __construct(Navbar $navbars)
    {
        $this->navbars = $navbars;
    }

    public function all()
    {
        return $this->navbars->tree();
    }


}
