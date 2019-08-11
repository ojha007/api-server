<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Navbar;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class BlogController extends Controller
{

    public $view_path = 'vendor.adminlte.blog.';
    public $base_route = 'admin.blog.';

    public function index()
    {
        return view($this->view_path . 'index');
    }
    public function create()
    {
        return view($this->view_path . 'create');
    }

    public function dataTable()
    {

        $navbars = Navbar::query();
        return DataTables::of($navbars)
            ->addColumn('action', function ($navbar) {
                return '<button rel="tooltip" title="Edit" class="btn btn-primary btn-sm editNavbar" 
                                data-id="' . $navbar->id . '">
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

    public function createOrUpdate(Request $request)
    {

        if ($request->isMethod('post')) {
            $this->create($request);
        } else {
            $this->update($request);
        }
        return redirect()->route($this->base_route . 'index');

    }

    protected function store($request)
    {

        $request->validate([
            'name' => 'required|unique:navbars|min:2',
            'parent_id' => 'required',
            'display_order' => 'required',
        ]);
        Navbar::create([
            'name' => $request->input('name'),
            'slug' => str_slug($request->input('name'), '-'),
            'display_order' => $request->input('display_order'),
            'parent_id' => $request->input('parent_id'),
        ]);
//        return redirect()->route($this->base_route.'index');

    }

    protected function update($request)
    {
        $navbar = Navbar::findOrFail($request->id);
        $request->validate([
            'name' => 'required|unique:navbars,name,' . $navbar->id,
            'parent_id' => 'required',
            'display_order' => 'required',
        ]);

        $navbar->update([
            'name' => $request->name,
//            'parent_id' => $request->parent_id,
            'display_order' => $request->display_order,
            'slug' => str_slug($request->name, '-')
        ]);

    }

    public function detail(Request $request)
    {
        $navbar = Navbar::where('id', $request->id)->first();
        return response()->json($navbar);
    }

    public function delete(Request $request)
    {
        $navbar = Navbar::where('slug', $request->slug);
        $navbar->delete();
        return response()->json([
            'message'=>'Deleted Successfully'
         ],200);
    }

}
