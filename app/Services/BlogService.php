<?php


namespace App\Services;


use App\Repository\BlogRepository;

class BlogService
{
    protected $blogs;

    public function __construct(BlogRepository $blogs)
    {
        $this->blogs = $blogs;

    }

    public function carouselFeaturedBlog()
    {
        return $this->blogs->owlCarouselFeaturedBlogs();
    }

    public function singleFeaturedBlog()
    {
        return $this->blogs->singleBlog();
    }

    public function doubleFeaturedBlog()
    {
        return $this->blogs->doubleBlogs();

    }


}
