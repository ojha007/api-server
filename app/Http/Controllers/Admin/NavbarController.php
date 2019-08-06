<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Navbar;
use Yajra\DataTables\DataTables;

class NavbarController extends Controller
{

    public $view_path = 'vendor.adminlte.navbar.';
    public $base_route = 'admin.navbar.';

    public function index()
    {
        return view($this->view_path . 'index');
    }

    public function dataTable()
    {

        $navbars = Navbar::query();
        return DataTables::of($navbars)
            ->addColumn('action', function ($navbar) {
                return '<button rel="tooltip" title="Edit" class="btn btn-primary btn-sm editNavbar" 
                                data-title="' . $navbar->slug . '">
                           <i class="fa fa-edit"></i></button>
                           <button class="btn btn-danger btn-sm deleteNavbar" 
                           rel="tooltip" title="Delete" data-title="' . $navbar->slug . '">
                           <i class="fa fa-trash"></i></button>';
            })
            ->make(true);
    }

    public function is_parent()
    {
        $navbars = Navbar::all();
        return response()->json($navbars);
    }
    public  function createOrUpdate(){

    }

}
