<?php


namespace App\Services;


use App\Repository\NavbarRepository;

class NavbarService
{


    protected $navbarRepository;

    public function __construct(NavbarRepository $navbarRepository)
    {
        $this->navbarRepository = $navbarRepository;

    }

    public function navbarRootMenu()
    {
        return $this->navbarRepository->all();
    }
}
