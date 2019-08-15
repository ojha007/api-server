<?php


namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\BlogService;
use App\Services\HomeService;

class HomeController extends Controller
{
    protected $home;
    protected $blog;
    protected $route = 'frontend.blog.';
    protected $view_path = 'frontend.blog.';
    protected $base_view = 'frontend.app';

    public function __construct(HomeService $home, BlogService $blog)
    {
        $this->home = $home;
        $this->blog = $blog;

    }

    public function index()
    {
        $carouselFeaturedBlogs = $this->blog->carouselFeaturedBlog();
        $singleFeaturedBlog = $this->blog->singleFeaturedBlog();
        $doubleFeaturedBlogs = $this->blog->doubleFeaturedBlog();
        return view($this->base_view, compact('carouselFeaturedBlogs', 'singleFeaturedBlog', 'doubleFeaturedBlogs'));

    }

}
