<?php


namespace App\Composers;

use Illuminate\View\View;

class MainComposer
{
    public function compose(View $view){

       $view->with('navbars' ,2333);
    }

}
